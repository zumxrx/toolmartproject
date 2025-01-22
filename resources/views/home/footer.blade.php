<footer class="footer-section">
   <div class="container">
      <div class="footer-content">
         <!-- Company Info -->
         <div class="footer-col company-info">
            <div class="footer-logo">
               <img width="150" src="images/toolmart.png" alt="ToolMart Logo" />
            </div>
            <p class="company-desc">Your trusted partner in professional tool rentals. Quality tools for every project.</p>
            <div class="contact-info">
               <p><i class="fa fa-map-marker"></i> 123 Construction Ave, Tool City</p>
               <p><i class="fa fa-phone"></i> +1 800 555 1234</p>
               <p><i class="fa fa-envelope"></i> support@toolmart.com</p>
            </div>
         </div>

         <!-- Quick Links -->
         <div class="footer-col">
            <h4>Quick Links</h4>
            <ul class="footer-links">
               <li><a href="/"><i class="fa fa-angle-right"></i> Home</a></li>
               <li><a href="/products"><i class="fa fa-angle-right"></i> Products</a></li>
               <li><a href="/faq"><i class="fa fa-angle-right"></i> FAQs</a></li>
               <li><a href="/contact"><i class="fa fa-angle-right"></i> Contact</a></li>
            </ul>
         </div>

         <!-- Customer Support -->
         <div class="footer-col">
            <h4>Customer Support</h4>
            <ul class="footer-links">
               <li><a href="#"><i class="fa fa-angle-right"></i> My Account</a></li>
               <li><a href="#"><i class="fa fa-angle-right"></i> Terms & Conditions</a></li>
               <li><a href="#"><i class="fa fa-angle-right"></i> Privacy Policy</a></li>
               <li><a href="#"><i class="fa fa-angle-right"></i> Help Center</a></li>
            </ul>
         </div>

         <!-- Newsletter -->
         <div class="footer-col newsletter">
            <h4>Newsletter</h4>
            <p>Subscribe for updates and special offers</p>
            <form class="newsletter-form">
               <div class="input-group">
                  <input type="email" placeholder="Your email" required>
                  <button type="submit"><i class="fa fa-paper-plane"></i></button>
               </div>
            </form>
            <div class="social-links">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
         </div>
      </div>
   </div>
   
   <!-- Copyright -->
   <div class="footer-bottom">
      <div class="container">
         <p>&copy; 2024 ToolMart. All Rights Reserved | Designed by ToolMart Team</p>
      </div>
   </div>

   <style>
      .footer-section {
         background: #2c3e50;
         color: #ecf0f1;
         padding: 40px 0 0;
         font-size: 14px;
      }

      .footer-content {
         display: grid;
         grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
         gap: 30px;
         padding-bottom: 30px;
      }

      .footer-col {
         padding: 0 15px;
      }

      .company-info .footer-logo {
         margin-bottom: 15px;
      }

      .company-desc {
         color: #bdc3c7;
         margin-bottom: 15px;
         line-height: 1.6;
      }

      .contact-info p {
         color: #bdc3c7;
         margin: 5px 0;
         display: flex;
         align-items: center;
         gap: 10px;
      }

      .footer-col h4 {
         color: #fff;
         font-size: 16px;
         font-weight: 600;
         margin-bottom: 20px;
         position: relative;
         padding-bottom: 10px;
      }

      .footer-col h4::after {
         content: '';
         position: absolute;
         left: 0;
         bottom: 0;
         width: 30px;
         height: 2px;
         background: #f7444e;
      }

      .footer-links {
         list-style: none;
         padding: 0;
         margin: 0;
      }

      .footer-links li {
         margin-bottom: 10px;
      }

      .footer-links a {
         color: #bdc3c7;
         text-decoration: none;
         transition: all 0.3s ease;
         display: flex;
         align-items: center;
         gap: 8px;
      }

      .footer-links a:hover {
         color: #f7444e;
         padding-left: 5px;
      }

      .newsletter p {
         color: #bdc3c7;
         margin-bottom: 15px;
      }

      .newsletter-form .input-group {
         display: flex;
         gap: 10px;
      }

      .newsletter-form input {
         flex: 1;
         padding: 8px 15px;
         border: 1px solid #34495e;
         border-radius: 4px;
         background: #34495e;
         color: #fff;
      }

      .newsletter-form button {
         background: #f7444e;
         border: none;
         padding: 8px 15px;
         border-radius: 4px;
         color: #fff;
         cursor: pointer;
         transition: all 0.3s ease;
      }

      .newsletter-form button:hover {
         background: #e12d35;
      }

      .social-links {
         margin-top: 20px;
         display: flex;
         gap: 10px;
      }

      .social-links a {
         width: 35px;
         height: 35px;
         background: #34495e;
         display: flex;
         align-items: center;
         justify-content: center;
         border-radius: 50%;
         color: #fff;
         text-decoration: none;
         transition: all 0.3s ease;
      }

      .social-links a:hover {
         background: #f7444e;
         transform: translateY(-3px);
      }

      .footer-bottom {
         background: #243342;
         padding: 15px 0;
         text-align: center;
         margin-top: 20px;
      }

      .footer-bottom p {
         margin: 0;
         color: #bdc3c7;
      }

      @media (max-width: 992px) {
         .footer-content {
            grid-template-columns: repeat(2, 1fr);
         }
      }

      @media (max-width: 576px) {
         .footer-content {
            grid-template-columns: 1fr;
         }

         .footer-col {
            text-align: center;
         }

         .footer-col h4::after {
            left: 50%;
            transform: translateX(-50%);
         }

         .footer-links a {
            justify-content: center;
         }

         .newsletter-form .input-group {
            flex-direction: column;
         }

         .social-links {
            justify-content: center;
         }
      }
   </style>
</footer>
