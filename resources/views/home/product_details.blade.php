<!DOCTYPE html>
<html>
   <head>
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="keywords" content="Tool rental, construction tools, equipment rental" />
      <meta name="description" content="Professional tool and equipment rental service" />
      <title>Tool Mart - {{ $tool->title }}</title>
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- Font Awesome -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- Responsive styles -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      
      <style>
         .product-details-section {
            padding: 60px 0;
            background: #f8f9fa;
         }
         
         .tool-image {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-height: 400px;
            object-fit: cover;
            width: 100%;
         }
         
         .tool-info {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
         }
         
         .tool-title {
            font-size: 2.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
         }
         
         .tool-price {
            font-size: 1.8rem;
            color: #e74c3c;
            font-weight: 600;
            margin-bottom: 20px;
         }
         
         .tool-details {
            margin: 20px 0;
         }
         
         .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 6px;
         }
         
         .detail-label {
            font-weight: 600;
            width: 120px;
            color: #34495e;
         }
         
         .detail-value {
            color: #7f8c8d;
         }
         
         .availability-badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
         }
         
         .available {
            background: #dff6dd;
            color: #2ecc71;
         }
         
         .unavailable {
            background: #fde8e8;
            color: #e74c3c;
         }
         
         .rental-form {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
         }
         
         .quantity-input {
            max-width: 150px;
            margin-right: 15px;
         }
         
         .rent-button {
            background: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
         }
         
         .rent-button:hover {
            background: #2980b9;
            transform: translateY(-2px);
         }
         
         .description-section {
            margin-top: 40px;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
         }
         
         .reviews-section {
            padding: 60px 0;
            background: #f8f9fa;
         }
         
         .review-form-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 40px;
         }
         
         .review-form-card h3 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-weight: 600;
         }
         
         .rating-select {
            display: flex;
            align-items: center;
            gap: 15px;
         }
         
         .rating-stars {
            display: flex;
            flex-direction: row-reverse;
            gap: 5px;
         }
         
         .rating-stars input {
            display: none;
         }
         
         .rating-stars label {
            cursor: pointer;
            color: #ddd;
            font-size: 24px;
            margin: 0;
         }
         
         .rating-stars input:checked ~ label,
         .rating-stars label:hover,
         .rating-stars label:hover ~ label {
            color: #f7444e;
         }
         
         .submit-review-btn {
            background: #f7444e;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
         }
         
         .submit-review-btn:hover {
            background: #e12d35;
            transform: translateY(-2px);
         }
         
         .reviews-list {
            margin-top: 40px;
         }
         
         .reviews-list h3 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-weight: 600;
         }
         
         .review-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
         }
         
         .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
         }
         
         .reviewer-info {
            display: flex;
            align-items: center;
            gap: 15px;
         }
         
         .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
         }
         
         .reviewer-info h5 {
            margin: 0;
            color: #2c3e50;
            font-weight: 600;
         }
         
         .review-date {
            color: #95a5a6;
            font-size: 0.9rem;
         }
         
         .review-rating {
            color: #f7444e;
         }
         
         .review-rating .fa-star.rated {
            color: #f7444e;
         }
         
         .review-rating .fa-star:not(.rated) {
            color: #ddd;
         }
         
         .review-content {
            color: #666;
            line-height: 1.6;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- Header section -->
         @include('home.header')
         
         <!-- Product Details Section -->
         <section class="product-details-section">
            <div class="container">
               <div class="row">
                  <!-- Tool Image -->
                  <div class="col-lg-6 mb-4">
                     <img src="/storage/{{ $tool->image }}" alt="{{ $tool->title }}" class="tool-image">
                  </div>
                  
                  <!-- Tool Information -->
                  <div class="col-lg-6">
                     <div class="tool-info">
                        <h1 class="tool-title">{{ $tool->title }}</h1>
                        
                        <span class="availability-badge {{ $tool->availability == 'Available' ? 'available' : 'unavailable' }}">
                           {{ $tool->availability }}
                        </span>
                        
                        <div class="tool-price">
                           ${{ number_format($tool->rental_price, 2) }} / day
                        </div>
                        
                        <div class="tool-details">
                           <div class="detail-item">
                              <span class="detail-label">Category:</span>
                              <span class="detail-value">{{ $tool->category }}</span>
                           </div>
                           
                           <div class="detail-item">
                              <span class="detail-label">Condition:</span>
                              <span class="detail-value">{{ $tool->condition }}</span>
                           </div>
                           
                           <div class="detail-item">
                              <span class="detail-label">Stock:</span>
                              <span class="detail-value">{{ $tool->quantity }} units available</span>
                           </div>
                        </div>
                        
                        <!-- Rental Form -->
                        <form action="{{ url('add_cart', $tool->id) }}" method="POST" class="rental-form">
                           @csrf
                           <div class="d-flex align-items-center">
                              <input type="number" name="quantity" value="1" min="1" max="{{ $tool->quantity }}" 
                                     class="form-control quantity-input" required>
                              <button type="submit" class="rent-button">
                                 <i class="fa fa-shopping-cart mr-2"></i> Add to Cart
                              </button>
                           </div>
                        </form>
                     </div>
                     
                     <!-- Description Section -->
                     <div class="description-section">
                        <h3 class="mb-4">Description</h3>
                        <p>{{ $tool->description }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <!-- Reviews and Rating Section -->
         <section class="reviews-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- Add Review Form -->
                        <div class="review-form-card">
                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h3>Leave a Review</h3>
                            <form action="{{ route('add_review', $tool->id) }}" method="POST" class="review-form">
                                @csrf
                                <div class="rating-select mb-4">
                                    <label>Your Rating:</label>
                                    <div class="rating-stars">
                                        <input type="radio" id="star5" name="rating" value="5" required/>
                                        <label for="star5"><i class="fa fa-star"></i></label>
                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label for="star4"><i class="fa fa-star"></i></label>
                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label for="star3"><i class="fa fa-star"></i></label>
                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label for="star2"><i class="fa fa-star"></i></label>
                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label for="star1"><i class="fa fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="review">Your Review:</label>
                                    <textarea class="form-control" id="review" name="review_text" rows="4" 
                                              placeholder="Share your experience with this tool..." required></textarea>
                                </div>
                                <button type="submit" class="submit-review-btn">
                                    Submit Review
                                </button>
                            </form>
                        </div>

                        <!-- Actual Reviews List -->
                        <div class="reviews-list">
                            <h3>Customer Reviews</h3>
                            @forelse($reviews as $review)
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="reviewer-info">
                                            <img src="{{ $review->user->profile_photo_url ?? 'images/default-avatar.png' }}" 
                                                 alt="{{ $review->user->name }}" 
                                                 class="reviewer-avatar">
                                            <div>
                                                <h5>{{ $review->user->name }}</h5>
                                                <span class="review-date">{{ $review->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                        <div class="review-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $review->rating ? 'rated' : '' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>{{ $review->review_text }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-info">
                                    No reviews yet. Be the first to review this tool!
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
         </section>
         
         <!-- Footer Section -->
         @include('home.footer')
      </div>

      <!-- Scripts -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <script src="home/js/popper.min.js"></script>
      <script src="home/js/bootstrap.js"></script>
      <script src="home/js/custom.js"></script>
   </body>
</html>


