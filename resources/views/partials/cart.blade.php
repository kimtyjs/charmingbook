<ul>
    <li><a href="#">
            <i class="fa fa-shopping-bag"></i>
            <span>
                @if(Cart::instance('default')->count() > 0)
                    {{ Cart::instance('default')->count() }}
                    @else
                    0
                @endif
            </span>
        </a>
    </li>
</ul>
<div class="header__cart__price">item: <span>$150.00</span></div>
