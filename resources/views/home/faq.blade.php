<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="shortcut icon" href="images/toolmart.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding-top: 50px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/images/banner.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .hero-content p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* FAQ Section */
        .faq-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .faq-item {
            background: #fff;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .faq-question:hover {
            background: #f8f9fa;
        }

        .faq-question h3 {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-answer p {
            padding: 20px 0;
            color: #666;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
        }

        .icon {
            font-size: 20px;
            transition: transform 0.3s;
        }

        .faq-item.active .icon {
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
@include('home.header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to the most common questions about our services</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <div class="faq-container">
        <div class="faq-item">
            <div class="faq-question">
                <h3>How can I place an order?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>You can place an order through our website by browsing our catalog, adding items to your cart, and proceeding to checkout. Follow the simple steps to complete your purchase.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>What payment methods do you accept?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers. All transactions are secure and encrypted.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>What is your return policy?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>We offer a 30-day return policy for items in their original condition. Please contact our customer service team to initiate a return.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>How can I track my order?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Once your order ships, you'll receive a tracking number via email. You can use this number to track your package through our website or the courier's website.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>Do you offer international shipping?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by location. Please check our shipping policy for details.</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't already open
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
