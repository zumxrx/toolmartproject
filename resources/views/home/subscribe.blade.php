<section class="features_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Why Choose <span>ToolMart</span></h2>
            <p class="section_subtitle">Your trusted partner in professional tool rentals</p>
        </div>

        <div class="features_grid">
            <!-- Feature Card 1 -->
            <div class="feature_card">
                <div class="icon_box">
                    <i class="fa fa-tools"></i>
                </div>
                <h3>Professional Grade Tools</h3>
                <p>Access to high-quality, well-maintained equipment suitable for both DIY and professional projects.</p>
            </div>

            <!-- Feature Card 2 -->
            <div class="feature_card">
                <div class="icon_box">
                    <i class="fa fa-dollar-sign"></i>
                </div>
                <h3>Cost-Effective</h3>
                <p>Save money by renting instead of buying expensive tools you may only need occasionally.</p>
            </div>

            <!-- Feature Card 3 -->
            <div class="feature_card">
                <div class="icon_box">
                    <i class="fa fa-clock"></i>
                </div>
                <h3>Flexible Rental Periods</h3>
                <p>Daily, weekly, and monthly rental options to suit your project timeline and budget.</p>
            </div>

            <!-- Feature Card 4 -->
            <div class="feature_card">
                <div class="icon_box">
                    
                </div>
                <h3>Delivery Available</h3>
                <p>Convenient delivery and pickup services for larger equipment to your project site.</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="cta_container">
            <h3>Ready to Start Your Project?</h3>
            <p>Browse our extensive collection of professional tools and equipment</p>
            <a href="/products" class="cta_button">Explore Tools</a>
        </div>
    </div>

    <style>
        .features_section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .heading_container {
            text-align: center;
            margin-bottom: 50px;
        }

        .heading_container h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .heading_container span {
            color: #f7444e;
        }

        .section_subtitle {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .features_grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .feature_card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature_card:hover {
            transform: translateY(-5px);
        }

        .icon_box {
            width: 70px;
            height: 70px;
            background: #f7444e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 28px;
        }

        .feature_card h3 {
            color: #2c3e50;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .feature_card p {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        .cta_container {
            text-align: center;
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), 
                        url('images/tools-pattern.jpg');
            background-size: cover;
            background-position: center;
            padding: 60px 30px;
            border-radius: 15px;
            color: white;
            margin-top: 40px;
        }

        .cta_container h3 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .cta_container p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta_button {
            display: inline-block;
            padding: 15px 40px;
            background: #f7444e;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .cta_button:hover {
            background: #e12d35;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .features_section {
                padding: 60px 0;
            }

            .heading_container h2 {
                font-size: 2rem;
            }

            .features_grid {
                gap: 20px;
            }

            .cta_container {
                padding: 40px 20px;
            }

            .cta_container h3 {
                font-size: 1.8rem;
            }
        }
    </style>
</section>