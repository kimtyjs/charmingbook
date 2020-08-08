@if(auth()->user())
    <ul>
        <li>
            <i class="fa fa-user"></i> {{  auth()->user()->name }}
        </li>
        <li>
            <a href="{{route('user.profile', ['id' => auth()->user()->id, 'name' => auth()->user()->name])}}" class="badge badge-info">Profile</a>
        </li>
    </ul>
@endif
