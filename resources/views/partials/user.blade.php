@if(auth()->user())
    <ul>
        <li>
            <i class="fa fa-user"></i> {{  auth()->user()->name }}
        </li>
        <li>
            <a href="{{route('user.profile', ['id' => auth()->user()->identifying_id, 'name' => auth()->user()->name])}}">Profile</a>
        </li>
    </ul>
@endif
