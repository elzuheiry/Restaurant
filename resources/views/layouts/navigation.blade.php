
<div class="topBar indxTp">
    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" />
    <button class="openbtn" onclick="openNav()">☰</button>
</div>


<br />


<div id="mySidepanel" class="sidepanel">
    <br /><br />
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{ route('menu') }}"><i class="fas fa-user"></i>{{ __('messages.menu') }}</a>
    <a href="#"><i class="fas fa-headset"></i>{{ __('messages.contact-us') }}</a>
    
    @guest
    <a href="{{ route('register') }}"><i class="fas fa-sign-out-alt"></i>{{ __('messages.register') }}</a>
    <a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i>{{ __('messages.login') }}</a>
    @endguest

    @auth
        @if (Auth::user()->hasRole('admin'))
            <a href="{{ route('admin.index') }}"><i class="fas fa-globe"></i>{{ __("messages.dashboard") }}</a>
        @endif
        <a href=""><i class="fas fa-check-circle"></i>{{ __('messages.orders') }}</a>
        <a href=""><i class="fas fa-check-circle"></i>{{ __("messages.delivered") }}</a>
        <a href=""><i class="fas fa-undo"></i>{{ __('messages.bounce') }}</a>
        <a href=""><i class="fas fa-headset"></i>{{ __('messages.contact-us') }}</a>
        <a href=""><i class="fas fa-star-half-alt"></i>{{ __('messages.rating') }}</a>
        <a href="{{ route('users.profile') }}"><i class="fas fa-user"></i>{{ Auth::user()->username }}</a>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    @endauth
</div>