<div class="header__top__right__language">
    <img src="img/language.png" alt="">
    <div>English</div>
    <span class="arrow_carrot-down"></span>
    <ul>
        <li><a href="#">Spanish</a></li>
        <li><a href="#">English</a></li>
    </ul>
</div>
<div class="header__top__right__auth header__top__right__language">
    <i class="fas fa-sign-in"></i>
    <div></div>
    <div> Account </div>
    <span class="arrow_carrot-down"></span>
    <ul>
        @guest('web')
            @if(Route::has('register'))
                <li><a href="{{route('register')}}">Sign Up</a></li>
            @endif
            <li><a href="{{route('login')}}">Sign In</a></li>
        @else
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</div>
