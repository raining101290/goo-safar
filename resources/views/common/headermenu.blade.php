<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <a class="logo handlee-regular text-success flex items-center" href="/">
            <img src="assets/images/logo.svg"/>
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        
        <ul class="buy-button list-inline mb-0">
            @auth
                <!-- This will show only if the user is logged in -->
                <li class="list-inline-item mb-0">
                    <a href="{{ route('dashboard') }}">
                        <div class="btn btn-primary btn-sm"> Dashboard </div>
                    </a>
                </li>
            @endauth
            {{-- @guest
            <li class="list-inline-item mb-0">
                <a href="/login">
                    <div class="btn btn-primary btn-sm"> Login </div>
                </a>
            </li>
    
            <li class="list-inline-item ps-1 mb-0">
                <a href="/register">
                    <div class="btn btn-light btn-sm"> Sign Up </div>
                </a>
            </li>
            @endguest --}}
        </ul>
        <div id="navigation">
            <ul class="navigation-menu {{ request()->is('contact') ? '' : 'nav-light' }}">
                <li class="active"><a href="/" class="parent-menu-item active">Home</a></li>
                <li><a href="/about" class="parent-menu-item">About</a></li>
                <li><a href="/contact" class="parent-menu-item">Contact</a></li>
            </ul>
        </div>
    </div>
</header>