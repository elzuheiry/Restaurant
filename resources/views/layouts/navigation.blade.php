
<div class="topBar indxTp">
    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" />
    <button class="openbtn" onclick="openNav()">☰</button>
</div>


<br />


<div id="mySidepanel" class="sidepanel">
    <br /><br />
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="menu.html"><i class="fas fa-user"></i>menu</a>
    <a href="#"><i class="fas fa-headset"></i>contact us</a>
    
    @guest
    <a href="{{ route('register') }}"><i class="fas fa-sign-out-alt"></i>register</a>
    <a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i>login</a>
    @endguest

    @auth
        @if (Auth::user()->hasRole('admin'))
            <a href="{{ route('admin.index') }}"><i class="fas fa-globe"></i>لوحة التحكم</a>
        @endif
        <a href=""><i class="fas fa-check-circle"></i>الطالبات</a>
        <a href=""><i class="fas fa-check-circle"></i>تم التسليم</a>
        <a href=""><i class="fas fa-undo"></i>مرتجع</a>
        <a href=""><i class="fas fa-headset"></i>اتصل بنا</a>
        <a href=""><i class="fas fa-star-half-alt"></i>التقييم</a>
        <a href=""><i class="fas fa-globe"></i>تغيير اللغة</a>

        <a href=""><i class="fas fa-user"></i>{{ Auth::user()->username }}</a>
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