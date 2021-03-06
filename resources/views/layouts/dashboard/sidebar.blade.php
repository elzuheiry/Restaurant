

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Pages</li>

        <li class="nav-item">
            <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#types"
                aria-expanded="false"
                aria-controls="types"
            >
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">The Types</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="types">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('type.create') }}"
                        >Publish new type</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('type.index') }}"
                        >All Types</a
                        >
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#foods"
                aria-expanded="false"
                aria-controls="foods"
            >
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">The Foods</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="foods">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.create') }}"
                        >Publish new food</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.foods') }}"
                        >All foods</a
                        >
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#orders"
                aria-expanded="false"
                aria-controls="orders"
            >
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">The Orders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="orders">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order.index') }}"
                        >All Orders</a
                        >
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#carts"
                aria-expanded="false"
                aria-controls="carts"
            >
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">The Carts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="carts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.cart.index') }}"
                        >All Carts</a
                        >
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#setting"
                aria-expanded="false"
                aria-controls="setting"
            >
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">The Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('setting.index') }}"
                        >The Settings</a
                        >
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>