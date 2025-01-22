<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ToolMart</title>
    <link rel="shortcut icon" href="images/toolmart.png" type="image/x-icon">
    <link rel="stylesheet" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        /* Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), 
                        url('images/contact-banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
            margin-bottom: 60px;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact Section */
        .contact-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 40px;
        }

        /* Info Card */
        .contact-info-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .info-item:hover {
            transform: translateY(-5px);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: #f7444e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 20px;
        }

        .info-content h3 {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .info-content p {
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        /* Form Card */
        .contact-form-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .form-title {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #f7444e;
            box-shadow: 0 0 0 3px rgba(247, 68, 78, 0.1);
            outline: none;
        }

        textarea.form-control {
            height: 150px;
            resize: none;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: #f7444e;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: #e12d35;
            transform: translateY(-2px);
        }

        /* Social Links */
        .social-links {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2c3e50;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #f7444e;
            color: white;
            transform: translateY(-3px);
        }

        /* Map Section */
        .map-section {
            height: 400px;
            margin-top: 60px;
        }

        .map-container {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .contact-hero {
                padding: 60px 0;
            }

            .hero-title {
                font-size: 2rem;
            }

            .contact-info-card,
            .contact-form-card {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    @include('home.header')

    <!-- Hero Section -->
    <div class="contact-hero">
        <div class="container">
            <h1 class="hero-title">Get in Touch with Us</h1>
            <p class="hero-subtitle">We're here to help and answer any question you might have</p>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info-card">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="info-content">
                            <h3>Our Location</h3>
                            <p>123 ToolMart Street, Industrial Zone<br>CityName, Country</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Contact Numbers</h3>
                            <p>+123 456 7890<br>+098 765 4321</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email Address</h3>
                            <p>support@toolmart.com<br>info@toolmart.com</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="info-content">
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-card">
                    <h2 class="form-title">Send us a Message</h2>
                    <form class="contact-form">
                        <div class="form-group">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Enter message subject">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fa fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="map-section">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4435562319444!2d103.84612661475415!3d1.3801066989889176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16e96db0a1ab%3A0x3d0be54fbbd6e1cd!2sSingapore%20Institute%20of%20Technology%20(SIT%40NYP)!5e0!3m2!1sen!2ssg!4v1679990451020!5m2!1sen!2ssg" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
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
