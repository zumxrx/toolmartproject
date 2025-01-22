@php
    use App\Models\Cart;
    use Illuminate\Support\Facades\Auth;
@endphp

<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="images/toolmart.png" alt="ToolMart Logo" class="main-logo"/>
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            
            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('products')}}">
                            <i class="fa fa-tools"></i> Products
                        </a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('faq') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('faq')}}">
                            <i class="fa fa-question-circle"></i> FAQ
                        </a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('contact')}}">
                            <i class="fa fa-envelope"></i> Contact
                        </a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('show_cart') ? 'active' : '' }}">
                        <a class="nav-link cart-link" href="{{url('show_cart')}}">
                            <i class="fa fa-shopping-cart"></i> Cart
                            @php
                                $cart_count = \App\Models\Cart::where('user_id', Auth::id())->count();
                            @endphp
                            <span class="cart-badge">{{ $cart_count }}</span>
                        </a>
                    </li>
                    
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item user-profile">
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                        @else
                            <li class="nav-item auth-buttons">
                                <a class="btn btn-login" href="{{ route('login') }}">
                                    <i class="fa fa-sign-in-alt"></i> Login
                                </a>
                                <a class="btn btn-register" href="{{ route('register') }}">
                                    <i class="fa fa-user-plus"></i> Register
                                </a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    
    <style>
        .header_section {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            min-height: 60px;
        }

        .navbar {
            padding: 8px 0;
        }

        .main-logo {
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .main-logo:hover {
            transform: scale(1.05);
        }

        .navbar-toggler {
            border: none;
            padding: 0;
        }

        .navbar-toggler-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2c3e50;
        }

        .navbar-nav {
            align-items: center;
        }

        .nav-item {
            margin: 0 5px;
        }

        .nav-link {
            color: #2c3e50;
            font-weight: 500;
            padding: 6px 12px;
            border-radius: 25px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .nav-link i {
            font-size: 16px;
        }

        .nav-item.active .nav-link,
        .nav-link:hover {
            color: #f7444e;
            background: #f8d7da;
        }

        .cart-link {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #f7444e;
            color: white;
            border-radius: 50%;
            padding: 1px 5px;
            font-size: 11px;
            font-weight: 600;
            min-width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-login,
        .btn-register {
            padding: 6px 15px;
            border-radius: 25px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .btn-login {
            background: #f8d7da;
            color: #f7444e;
            border: 1px solid #f7444e;
        }

        .btn-login:hover {
            background: #f7444e;
            color: white;
        }

        .btn-register {
            background: #f7444e;
            color: white;
            border: 1px solid #f7444e;
        }

        .btn-register:hover {
            background: #e12d35;
            transform: translateY(-2px);
        }

        .user-profile {
            margin-left: 15px;
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                margin-top: 15px;
            }

            .nav-item {
                margin: 5px 0;
            }

            .auth-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn-login,
            .btn-register {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .main-logo {
                width: 100px;
            }
        }
    </style>
</header>
l