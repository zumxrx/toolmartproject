<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool Mart - Professional Tools for Rent</title>
    <link rel="shortcut icon" href="images/toolmart.png" type="image/x-icon">
    <link rel="stylesheet" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />
    
    <style>
        .product_section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('images/tools-banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .search-box {
            position: relative;
            margin-bottom: 20px;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            padding-right: 50px;
            border-radius: 30px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: #f7444e;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-button:hover {
            background: #e12d35;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            position: relative;
            padding-top: 75%;
            overflow: hidden;
        }

        .product-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
        }

        .action-btn {
            background: white;
            color: #333;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            text-align: center;
        }

        .action-btn:hover {
            background: #f7444e;
            color: white;
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            height: 2.4em;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .product-price {
            font-size: 1.3rem;
            color: #f7444e;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .price-period {
            font-size: 0.9rem;
            color: #666;
            font-weight: normal;
        }

        .rent-form {
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .quantity-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .rent-btn {
            width: 100%;
            background: #f7444e;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .rent-btn:hover {
            background: #e12d35;
            transform: translateY(-2px);
        }

        /* Pagination */
        .pagination-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .pagination {
            gap: 5px;
        }

        .page-link {
            padding: 12px 20px;
            border-radius: 8px;
            color: #f7444e;
            border: none;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .page-item.active .page-link {
            background: #f7444e;
            color: white;
        }

        .page-link:hover {
            background: #f8d7da;
            color: #f7444e;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    @include('home.header')

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="hero-title">Professional Tools for Every Project</h1>
            <p class="hero-subtitle">Discover our wide range of high-quality tools available for rent at competitive prices</p>
        </div>
    </div>

    <section class="product_section">
        <div class="container">
            <!-- Search and Filter Bar -->
            <div class="search-filter-bar mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ url('search_product') }}" method="GET" class="search-box">
                            <input type="text" name="search" class="form-control" placeholder="Search tools...">
                            <button type="submit" class="search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid">
                @foreach($tools as $tool)
                <div class="product-card">
                    <div class="product-image">
                        <img src="/storage/{{ $tool->image }}" alt="{{ $tool->title }}">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <a href="{{ url('product_details', $tool->id) }}" class="action-btn">
                                    <i class="fa fa-eye"></i> View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">{{ $tool->title }}</h3>
                        <div class="product-price">
                            ${{ $tool->rental_price }} <span class="price-period">/ day</span>
                        </div>
                    </div>

                    <div class="rent-form">
                        <form action="{{ url('add_cart', $tool->id) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" value="1" min="1" 
                                   class="quantity-input" placeholder="Quantity">
                            <button type="submit" class="rent-btn">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                {!! $tools->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </section>

    @include('home.footer')

    <!-- Scripts -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/custom.js"></script>
</body>
</html>
