<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="category">Shop Category</a></li>
                                <li class="nav-item"><a class="nav-link" href="checkout">Product Checkout</a></li>
                                <li class="nav-item"><a class="nav-link" href="cart">Shopping Cart</a></li>
                                <li class="nav-item"><a class="nav-link" href="confirmation">Confirmation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                        @endguest
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        @endauth
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
                        @endauth
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
