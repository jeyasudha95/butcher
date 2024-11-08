<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Butcher Boy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Include all styles from the original homepage */
        
        /* Reset some default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 0 20px;
        }

        /* Header and Footer styling from your homepage */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #b22222;
            text-decoration: none;
        }
       .logo img {
    max-width: 150px; /* Adjust size as needed */
    height: auto;
}
@media (min-width: 1024px) {
    .logo img {
        max-width: 150px; /* Increase logo size on desktops */
    }
     .header {
        padding: 20px 40px;
    }
}
@media (min-width: 768px) {
    .logo img {
        max-width: 120px; /* Increase logo size on tablets */
    }
.header {
        padding: 15px 30px;
    }
}
.footer-logo h2 {
    color: #b22222;
    font-weight: bold;
    font-size: 24px;
}

.footer-logo p {
    margin-top: 10px;
    font-size: 14px;
    color: #666;
}

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-links a img {
            width: 20px;
            height: 20px;
        }
        .side-menu {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #ffffff;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 60px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
}
.side-menu a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    color: #333;
    display: block;
    transition: 0.3s;
}

.side-menu a:hover {
    color: #b22222;
}

.side-menu .close-btn {
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 36px;
}

/* Hamburger Icon */
.hamburger {
    font-size: 24px;
    display: none;
    cursor: pointer;
}
@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    .hamburger {
        display: block;
    }
}

        .cart-icon {
            font-size: 20px;
        }

        /* About Us Content Styling */
        .about-header {
            text-align: center;
            padding: 40px 20px;
            background-color: #b22222;
            color: white;
            border-radius: 15px;
        }

        .about-header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .about-header p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
        }

        .about-main {
            display: flex;
            gap: 30px;
            padding: 40px 0;
            flex-wrap: wrap;
        }

        .about-text, .about-values {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .about-text h2, .about-values h2 {
            font-size: 28px;
            color: #b22222;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 14px;
            color: #333;
        }

        .value-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 180px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            color: #b22222;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }

        .contact-info {
            text-align: center;
            padding: 40px 20px;
            background-color: #f4f4f4;
        }

        .contact-info h2 {
            font-size: 28px;
            color: #b22222;
            margin-bottom: 20px;
        }

        .contact-info ul {
            list-style-type: none;
            padding: 0;
            font-size: 16px;
            color: #333;
        }

        .contact-info li {
            margin-bottom: 10px;
        }

        .footer {
            background-color: #ffffff;
            padding: 20px 20px;
            color: #333;
            margin-top: 15px;
            position: relative;
            z-index: 1;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            text-align: left;
        }

        .footer-logo h2 {
            color: #b22222;
            font-weight: bold;
            font-size: 24px;
        }

        .footer-logo p {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .footer-links h3, .footer-contact h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover {
            color: #b22222;
        }

        .footer-contact p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
.social-icons a {
    display: inline-block;
    margin-right: 10px;
}

.social-icons img {
    width: 24px;
    height: 24px;
}
.hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top:40px;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
  <?php include 'header.php'; ?>

        <!-- About Us Content -->
        <section class="about-header">
            <h1>About Butcher Boy</h1>
            <p>Welcome to Butcher Boy, your trusted source for fresh, high-quality meat, delivered straight to your door.</p>
        </section>

        <section class="about-main">
            <div class="about-text">
                <h2>Our Mission</h2>
                <p>Our mission is to bring you the finest, freshest meat directly from farm to table. We are committed to quality, sustainability, and customer satisfaction.</p>
                <div style="margin-top:30px">
                <h2>Our Vision</h2>
                <p>Our mission is to bring you the finest, freshest meat directly from farm to table. We are committed to quality, sustainability, and customer satisfaction.</p>
            </div>
                 <div class="hero-image">
                <img src="banner.png" alt="Fresh Meat">
            </div>
            </div>

            <div class="about-values">
                <h2>Why Choose Us</h2>
                <div class="value-cards">
                    <div class="card">
                        <img src="icon1.webp" alt="Freshly Cut After Order">
                        <h3>Freshly Cut After Order</h3>
                        <p>All orders are cut fresh to ensure top quality and taste.</p>
                    </div>
                    <div class="card">
                        <img src="icon1.webp" alt="Farm Fresh Everyday">
                        <h3>Farm Fresh Everyday</h3>
                        <p>Our meats are sourced from trusted farms, providing you with fresh, healthy options daily.</p>
                    </div>
                    <div class="card">
                        <img src="icon1.webp" alt="Safe & Healthy">
                        <h3>Safe & Healthy</h3>
                        <p>We prioritize safety and health standards for every product we deliver.</p>
                    </div>
                    <div class="card">
                        <img src="icon1.webp" alt="Antibiotic-Free">
                        <h3>Antibiotic-Free</h3>
                        <p>Our products are free from antibiotics, promoting a healthier lifestyle.</p>
                    </div>
                    <div class="card">
                        <img src="icon1.webp" alt="Locally Produced">
                        <h3>Locally Produced</h3>
                        <p>We support local farmers by sourcing products from nearby communities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-logo">
                   <div class="logo">
            <a href="#"><img src="logo.png" alt="Fresh Meat"></a>
</div>
                    <p>KEEP IN TOUCH</p>
                    <div class="social-icons">
                        <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon%20awesome-linkedin.svg" alt="LinkedIn"></a>
                        <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon%20awesome-facebook-square.svg" alt="Facebook"></a>
                        <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon-x-square.svg" alt="Instagram"></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>USEFUL LINKS</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cancellation & Reschedule Policy</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>CONTACT US</h3>
                    <p>Call: 1800-4190-786</p>
                    <p>Email: talktous@butcher.com</p>
                    <p>REGISTERED OFFICE ADDRESS:</p>
                    <p>BUTCHER GOURMET PVT LTD<br>1234 Street Name, City, State - ZIP</p>
                    <p>Mail us at: security@butcher.com</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
