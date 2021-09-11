<nav>
    <ul class="navbar">
        @if(Request::is('/', 'discounted', 'low-price'))
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="http://127.0.0.1:8000">HOME</a></li>
            <li class="{{ Request::is('discounted') ? 'active' : '' }}"><a href="http://127.0.0.1:8000/discounted">DISCOUNTED TRIPS</a></li>
            <li class="{{ Request::is('low-price') ? 'active' : '' }}"><a href="http://127.0.0.1:8000/low-price">ECONOMIC TRIPS</a></li>
        @else
            <li><a href="http://127.0.0.1:8000">HOME</a></li>
            <li class="{{ $trip->discount > 0 ? 'active' : '' }}"><a href="http://127.0.0.1:8000/discounted">DISCOUNTED TRIPS</a></li>
            <li class="{{ $trip->price < 400 ? 'active' : '' }}"><a href="http://127.0.0.1:8000/low-price">ECONOMIC TRIPS</a></li>
        @endif
    </ul>
</nav>