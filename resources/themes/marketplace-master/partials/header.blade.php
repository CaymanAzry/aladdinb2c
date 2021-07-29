<!-- Off-Canvas Mobile Menu-->
<div class="offcanvas-container" id="mobile-menu">
    @auth
    <a class="account-link" href="{{ url('profile') }}">
        <div class="user-ava">
            <img src="{{ user()->picture_thumb }}" alt="{{ user()->name }}">
        </div>
        <div class="user-info">
            <h6 class="user-name">{{ user()->name }}</h6>
            <span class="text-sm text-white opacity-60">
                    @lang('corals-marketplace-master::labels.partial.member_since')
                <br/>
                {{ format_date(user()->created_at) }}
                </span>
        </div>
    </a>
    @endauth
    <nav class="offcanvas-menu">
        <ul class="menu">

            @include('partials.menu.mobile_menu_item', ['menus' => Menus::getMenu('frontend_top','active')])

            <li class="has-children">
                <span><a href="#"><span> @lang('corals-marketplace-master::labels.partial.account')</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    @auth
                    <li>
                        <a href="{{ url('dashboard') }}">@lang('corals-marketplace-master::labels.partial.dashboard')</a>
                    </li>
                    <li>
                        <a href="{{ url('profile') }}">@lang('corals-marketplace-master::labels.partial.my_profile')</a>
                    </li>
                    <li class="sub-menu-separator"></li>
                    <li><a href="{{ route('logout') }}"
                           data-action="logout">@lang('corals-marketplace-master::labels.partial.logout')</a>
                    </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="fa fa-sign-in fa-fw"></i>
                                @lang('corals-marketplace-master::labels.partial.login')
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">
                                <i class="fa fa-user fa-fw"></i>
                                @lang('corals-marketplace-master::labels.partial.register')
                            </a>
                        </li>
                        @endauth
                </ul>
            </li>
        </ul>
    </nav>
</div>

<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky"  style="background-color: #086E38; font-family:poppins; color:white; margin: -15px 0px 0px 0px; padding-bottom: -10px;">
    <!-- Search-->
    <form class="site-search" method="get" action="{{ url('shop') }}">
        <input type="text" name="search" value="{{ request()->get('search') }}"  class="auto-complete" autocomplete="off"  data-url="{{ url('shop/autocomeplete') }}"  placeholder="Type to search..."/>

        <div class="search-tools"><span
                    class="clear-search"> @lang('corals-marketplace-master::labels.partial.clear')</span>
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#mobile-menu)-->
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo-->
            <a class="site-logo" href="{{ url('/') }}">
                <img style="margin-bottom: 20px;" src="{{asset('uploads/settings/logo.png') }}" alt="{{ \Settings::get('site_name', 'Aladdin') }}">
            </a>
        </div>
    </div>
    <!-- Main Navigation-->
  <!--   <nav class="site-menu">
        <ul>
            @include('partials.menu.menu_item', ['menus' => Menus::getMenu('frontend_top','active')])
        </ul>
    </nav> -->
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search" style="color:white"></i></div>
                @auth
                <a class="waves-effect waves-dark"
                   href="{{ url('notifications') }}"
                   aria-expanded="false">
                    <div class="notifications">

                        <i class="icon-bell" style="color:white"></i>
                        <div id="notifications_count" style="background-color: #D4AC0D">
                            @if($unreadNotifications = user()->unreadNotifications()->count())
                                {{ $unreadNotifications }}
                            @endif
                        </div>

                    </div>
                </a>

                @endauth
                <div class="account">
                    <a href="#"></a><i style="color:white" class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        @auth
                        <li class="sub-menu-user">
                            <div class="user-ava">
                                <img src="{{ user()->picture_thumb }}"
                                     alt="{{ user()->name }}">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">{{ user()->name }}</h6>
                                <span class="text-xs text-muted">
                                       @lang('corals-marketplace-master::labels.partial.member_since')
                                    <br/>
                                    {{ format_date(user()->created_at) }}

                                    </span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('dashboard') }}">@lang('corals-marketplace-master::labels.partial.dashboard')</a>
                        </li>
                        <li>
                            <a href="{{ url('profile') }}">@lang('corals-marketplace-master::labels.partial.my_profile')</a>
                        </li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="{{ route('logout') }}" data-action="logout">
                                @lang('corals-marketplace-master::labels.partial.logout') <i
                                        class="fa fa-sign-out fa-fw"></i></a>
                        </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="fa fa-sign-in fa-fw"></i>
                                    @lang('corals-marketplace-master::labels.partial.login')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <i class="fa fa-user fa-fw"></i>
                                    @lang('corals-marketplace-master::labels.partial.register')
                                </a>
                            </li>
                            @endauth
                    </ul>
                </div>
                <div class="cart" id="cart_list"><a href="{{ url('cart') }}"></a>
                    <i style="color:white" class="fa fa-shopping-cart fa-fw"></i>
                    <span style="color:white" class="count" id="cart-header-count">{{ \ShoppingCart::countAllInstances() }}</span>
                    <span style="color:white" class="subtotal" id="cart-header-total">
                        {{ \ShoppingCart::totalAllInstances() }}
                    </span>
                    <div class="toolbar-dropdown">
                        <div class="cart_summary">
                            @include('partials.cart_summary')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>