<header class="dash-toolbar">
    <a href="#!" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
    <a href="#!" class="searchbox-toggle">
        <i class="fas fa-search"></i>
    </a>
    <form class="searchbox" action="#!">
        <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
        <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
        <input type="text" class="searchbox-input" placeholder="type to search">
    </form>
    <div class="tools">
        <a href="#" target="_blank" class="tools-item">
            @if(Auth::check())
                {{ Auth::user()->name }}
            @endif
        </a>
        <a href="#!" class="tools-item">
            <i class="fas fa-bell"></i>
            <i class="tools-item-count">4</i>
        </a>
        <div class="dropdown tools-item">
            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                @guest('admin')
                    <a class="dropdown-item" href="{{ route('admin.register') }}">Register</a>
                    <a class="dropdown-item" href="{{ route('admin.login') }}">Login</a>

                @else

                    <a class="dropdown-item" href="{{ route('admin.auth.logout') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-forms').submit();">
                        Logout
                    </a>
                    <form id="logout-forms" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</header>
