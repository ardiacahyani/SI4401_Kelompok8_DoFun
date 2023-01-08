<nav class="navbar navbar-default">
    <div class="navbar-header page-scroll">
        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
        <ul class="list-unstyled nav1 cl-effect-10">
            <li><a data-hover="Home" href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}"><span>Home</span></a></li>
            <li><a data-hover="Tentang Kami"  href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}"><span>Tentang Kami</span></a></li>
            <li><a data-hover="Wahana"  href="{{ route('wahana') }}" class="{{ Request::is('wahana') ? 'active' : '' }}"><span>Wahana</span></a></li>
            <li><a data-hover="Promo"  href="{{ route('promo') }}" class="{{ Request::is('promo') ? 'active' : '' }}"><span>Promo</span></a></li>
            <li><a data-hover="Booking"  href="{{ route('booking') }}" class="{{ Request::is('booking') ? 'active' : '' }}"><span>Booking</span></a></li>
            <li><a data-hover="Kontak Kami" href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}"><span>Kontak Kami</span></a></li>
        </ul>

    </div>
</nav>