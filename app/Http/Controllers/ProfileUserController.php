<?php

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileUserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function profilePage() {

        //flash message for success message popping up
        if(session('success')) {
            Alert::success('Success!', session('success'));
        }

        //error message flashing
        if(session('error')) {
            Alert::error('Error!', session('error'));
        }

        //getting data from authenticated user
        $user =  auth()->user();

        //getting all the order of the authenticated user
        $orders = $user->orders;
        //dd($orders);

        return view('pages.profileUser')->with(['user' => $user]);
    }

    public function updateAvatarImg(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'avatar' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
        ]);

        //validator error
        if($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();

        }
        if($request->hasFile('avatar')) {   //false if user do not upload img
            //eliminate the old img from folder
            $imagePath = User::select('avatar')->where('id', $id)->first();
            $filePath = public_path('img/user_profile'). "/" .$imagePath->avatar;
            if(file_exists($filePath)) {
                @unlink($filePath); //delete
            }

            //storing the very new image
            $avatar = $request->file('avatar'); //get the new image from inputting form
            $updated_at = new DateTime;

            $avatarName = md5($avatar->getClientOriginalName() . time()) . "." . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('img/user_profile'), $avatarName);

            //updating data in database, the same as $product->save();
            DB::table('users')->where('id', $id)->update([
                'avatar' => $avatarName,
                'updated_at' => $updated_at
            ]);
        }

        return redirect()
            ->route('user.profile', ['id' => auth()->user()->identifying_id, 'name' => auth()->user()->name])
            ->withSuccess('profile Image has been updated.');

    }

    public function updateUserInfo(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'name' => ['sometimes', 'min:5', 'string', Rule::unique('users')->ignore($id), 'alpha', 'max:20'],
            'email' => ['sometimes', 'min:15', 'email', 'string', Rule::unique('users')->ignore($id)],
            'social_media_link' => ['sometimes', 'min:5', 'string', 'url'],
            'career' => ['sometimes', 'string', 'min:5', 'alpha'],
            'bio' => ['sometimes', 'string', 'max:5000']
        ]);

        if($validator->fails()) {
            return back()->withError($validator->messages()->all())->withInput();
        }

        //getting input from user typing
        $name = $request->input('name');
        $email = $request->input('email');
        $socialMediaLink = $request->input('social_media_link');
        $career = $request->input('career');
        $bio = $request->input('bio');
        $updated_at = new DateTime;

        //updating user's record in db
        DB::table('users')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'social_media_link' => $socialMediaLink,
            'career' => $career,
            'bio' => strip_tags($bio),
            'updated_at' => $updated_at //noticed when updated data info

        ]);

        return redirect('/user/my_profile/'.auth()->user()->identifying_id.'/'.auth()->user()->name)
            ->with('success', 'Profile Info has been updated');

    }

    public function updateUserPassword(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'password' => ['required', 'min:8', 'string', 'max:255', function($attribute, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    $fail($attribute.' is invalid.');
                }
            }],
            'new_password' => ['required', 'different:password', 'min:8', 'string'],
            'confirm_password' => ['required', 'same:new_password', 'min:8', 'required_with:new_password'],
        ]);

        if($validator->fails()) {   //validation error including the password field
            return back()->withError($validator->messages()->all())->withInput();
        }

        //getting the old password of the authenticated user
        $oldPassword = $request->input('password'); //user need to input

        //new password
        $newPassword = $request->input('new_password');

        $updated_at = new DateTime;

        if(Hash::check($oldPassword, DB::table('users')->where('id', $id)->value('password'))) {
            DB::table('users')->where('id', $id)->update([
                'password' => Hash::make($newPassword),
                'updated_at' => $updated_at
            ]);
        }
        return redirect()->back()->withSuccess('Password has been updated');
    }
}
