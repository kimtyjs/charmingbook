<ul>
    <li>
        @if(Auth::check())
            <i class="fa fa-user"></i> {{  Auth::user()->name }}
            @else
        @endif
    </li>
    <li>Free Shipping for all Order of $99</li>
</ul>
