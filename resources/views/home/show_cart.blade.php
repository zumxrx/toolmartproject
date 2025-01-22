<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tool Mart - Your Cart</title>
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />
    
    <style>
        .cart-section {
            padding: 60px 0;
            background: #f8f9fa;
            min-height: 80vh;
        }
        
        .cart-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .cart-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        
        .cart-table th {
            background: #2c3e50;
            color: white;
            padding: 15px;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
        }
        
        .cart-table td {
            padding: 15px;
            vertical-align: middle;
            background: #f8f9fa;
        }
        
        .cart-table tr td:first-child {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        
        .cart-table tr td:last-child {
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        
        .product-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .product-title {
            font-weight: 600;
            color: #2c3e50;
            font-size: 16px;
        }
        
        .quantity-badge {
            background: #3498db;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .price-text {
            font-weight: 600;
            color: #e74c3c;
            font-size: 18px;
        }
        
        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .remove-btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        
        .cart-summary {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        .summary-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .total-amount {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
            margin: 20px 0;
        }
        
        .checkout-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .cash-delivery {
            background: #2ecc71;
            color: white;
        }
        
        .card-payment {
            background: #3498db;
            color: white;
        }
        
        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .empty-cart {
            text-align: center;
            padding: 40px;
        }
        
        .empty-cart i {
            font-size: 48px;
            color: #95a5a6;
            margin-bottom: 20px;
        }
        
        .alert {
            border-radius: 8px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')
        
        <section class="cart-section">
            <div class="container">
                @if(session()->has('messege'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('messege') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                
                @if(count($cart) > 0)
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-container">
                                <table class="cart-table">
                                    <thead>
                                        <tr>
                                            <th>Tool</th>
                                            <th>Details</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalprice = 0; ?>
                                        @foreach($cart as $item)
                                            <tr>
                                                <td>
                                                    <img src="/storage/{{ $item->image }}" class="product-img" alt="{{ $item->product_title }}">
                                                </td>
                                                <td>
                                                    <div class="product-title">{{ $item->product_title }}</div>
                                                </td>
                                                <td>
                                                    <span class="quantity-badge">{{ $item->quantity }}</span>
                                                </td>
                                                <td>
                                                    <span class="price-text">${{ $item->price }}</span>
                                                </td>
                                                <td>
                                                    <a href="{{ url('remove_cart', $item->id) }}" 
                                                       class="remove-btn"
                                                       onclick="return confirm('Are you sure you want to remove this item?')">
                                                        <i class="fa fa-trash"></i> Remove
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $totalprice = $totalprice + $item->price ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="cart-summary">
                                <h2 class="summary-title">Cart Summary</h2>
                                <div class="total-amount">${{ $totalprice }}</div>
                                <a href="{{ url('cash_order') }}" class="checkout-btn cash-delivery">
                                    <i class="fa fa-money mr-2"></i> Cash On Delivery
                                </a>
                                <a href="{{ url('stripe', $totalprice) }}" class="checkout-btn card-payment">
                                    <i class="fa fa-credit-card mr-2"></i> Pay with Card
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="cart-container empty-cart">
                        <i class="fa fa-shopping-cart"></i>
                        <h3>Your cart is empty</h3>
                        <p>Looks like you haven't added any tools to your cart yet.</p>
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">
                            <i class="fa fa-arrow-left mr-2"></i> Continue Shopping
                        </a>
                    </div>
                @endif
            </div>
        </section>
        
        @include('home.footer')
    </div>

    <script src="home/js/jquery-3.4.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/custom.js"></script>
</body>
</html>