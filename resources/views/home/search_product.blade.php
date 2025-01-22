<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Search Results - ToolMart</title>
    <link rel="shortcut icon" href="images/toolmart.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style>
        .search-results-section {
            padding: 60px 0;
            background: #f8f9fa;
            min-height: 80vh;
        }

        .search-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .search-term {
            color: #f7444e;
        }

        .search-box {
            position: relative;
            margin-bottom: 30px;
        }

        .search-box input {
            padding: 15px 20px;
            padding-right: 50px;
            border-radius: 30px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
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

        .no-results {
            text-align: center;
            padding: 40px;
        }

        .no-results i {
            font-size: 48px;
            color: #95a5a6;
            margin-bottom: 20px;
        }

        .back-to-products {
            display: inline-block;
            padding: 10px 25px;
            background: #f7444e;
            color: white;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .back-to-products:hover {
            background: #e12d35;
            transform: translateY(-2px);
            color: white;
        }

        .product_section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .tool-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .tool-card:hover {
            transform: translateY(-5px);
        }

        .tool-image {
            position: relative;
            padding-top: 75%;
            overflow: hidden;
        }

        .tool-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .tool-overlay {
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

        .tool-card:hover .tool-overlay {
            opacity: 1;
        }

        .tool-actions {
            text-align: center;
        }

        .details-btn {
            background: white;
            color: #333;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .details-btn:hover {
            background: #f7444e;
            color: white;
            transform: scale(1.05);
        }

        .tool-info {
            padding: 20px;
        }

        .tool-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            height: 2.4em;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .tool-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .tool-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: #f7444e;
        }

        .tool-availability {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .available {
            background: #d4edda;
            color: #155724;
        }

        .unavailable {
            background: #f8d7da;
            color: #721c24;
        }

        .rental-form {
            margin-top: 15px;
        }

        .quantity-input {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-color: #ddd;
        }

        .rent-btn {
            background: #f7444e;
            color: white;
            border: none;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .rent-btn:hover {
            background: #e12d35;
            color: white;
        }

        .pagination-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .pagination {
            gap: 5px;
        }

        .page-link {
            border-radius: 8px;
            color: #f7444e;
            border: none;
            padding: 10px 15px;
        }

        .page-item.active .page-link {
            background-color: #f7444e;
            border-color: #f7444e;
        }

        .page-link:hover {
            background-color: #f8d7da;
            color: #f7444e;
        }

        @media (max-width: 768px) {
            .col-sm-6 {
                padding: 0 10px;
            }
            
            .tool-title {
                font-size: 1rem;
            }
            
            .tool-price {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    @include('home.header')

    <section class="search-results-section">
        <div class="container">
            <div class="search-header">
                <h2>Search Results for "<span class="search-term">{{ $search_text }}</span>"</h2>
            </div>

            <!-- Search Bar -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('search_product') }}" method="GET" class="search-box">
                        <input type="text" name="search" class="form-control" 
                               placeholder="Search tools..." value="{{ $search_text }}">
                        <button type="submit" class="search-button">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            @if(count($tool) > 0)
                <div class="row">
                    @foreach($tool as $tools)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="tool-card">
                            <div class="tool-image">
                                <img src="/storage/{{ $tools->image }}" alt="{{ $tools->title }}" class="img-fluid">
                                <div class="tool-overlay">
                                    <div class="tool-actions">
                                        <a href="{{ url('product_details', $tools->id) }}" class="details-btn">
                                            <i class="fa fa-eye"></i>
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tool-info">
                                <h3 class="tool-title">{{ $tools->title }}</h3>
                                <div class="tool-meta">
                                    <span class="tool-price">${{ $tools->rental_price }}/day</span>
                                    <span class="tool-availability {{ $tools->availability == 'Available' ? 'available' : 'unavailable' }}">
                                        {{ $tools->availability }}
                                    </span>
                                </div>
                                
                                <form action="{{ url('add_cart', $tools->id) }}" method="POST" class="rental-form">
                                    @csrf
                                    <div class="input-group">
                                        <input type="number" name="quantity" value="1" min="1" 
                                               class="form-control quantity-input" 
                                               aria-label="Quantity">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn rent-btn">
                                                <i class="fa fa-shopping-cart"></i> Rent Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pagination-container">
                    {!! $tool->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            @else
                <div class="no-results">
                    <i class="fa fa-search"></i>
                    <h3>No Results Found</h3>
                    <p>We couldn't find any tools matching your search.</p>
                    <a href="{{ url('/products') }}" class="back-to-products">
                        <i class="fa fa-arrow-left"></i> Back to Products
                    </a>
                </div>
            @endif
        </div>
    </section>

    @include('home.footer')

    <script src="home/js/jquery-3.4.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/custom.js"></script>
</body>
</html>
