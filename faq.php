<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Butcher Boy</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    	/* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling for Display Centering */
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

/* Header Styling */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: white;
}

.logo img {
    max-width: 150px;
    height: auto;
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
     .privacy-policy h2 {
            font-size: 20px;
            font-weight: bold;
            color: #b22222;
            margin-bottom: 20px;
        }

        .privacy-policy p,
        .privacy-policy li {
            margin-bottom: 10px;
            font-size: 12px;
        }

        .privacy-policy h3 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
        }

/* Footer Styling */
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

.social-icons a {
    display: inline-block;
    margin-right: 10px;
}

.social-icons img {
    width: 24px;
    height: 24px;
}

.footer-links h3,
.footer-contact h3 {
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

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-links,
    .footer-contact {
        margin-top: 20px;
    }

    .logo img {
        max-width: 120px;
    }
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

    </style>
</head>
<body>
	<div class="container">
	<?php include 'header.php'; ?>
<section class="privacy-policy">
            <h2 style="text-align: center;">Terms of Service</h2>
            <p>These Terms of Service (“Agreement”) apply to the use of website – www.licious.in ("Website"), the Licious mobile application on iOS or Android devices including phones, tablets or any other electronic device ("Licious App") and the mobile site - www.m.licious.in ("Msite"); whereas the Website, the Licious App and the Msite are together referred to as the "Platform".
<br>
For the purposes of this Agreement, wherever the context so requires "you" or "User" shall mean any person including any natural or legal person who uses the Platform or buys any product of DGPL using any computer system or other device including but not limited to any mobile device, handheld device and tablet and “DGPL” or “we” shall mean Delightful Gourmet Private Limited.</p>
            
            <p>The website – www.licious.in ("Website"), the Licious mobile application ("Licious App") and the mobile site - www.m.licious.in ("Msite") (together referred to as the "Platform") are made available by Delightful Gourmet Private Limited (“Company” or “Licious” or “we”). Licious has created this privacy policy (“Privacy Policy” or “Policy”) to demonstrate our firm commitment to protecting the information you submit while using our Platform. The manner in which this information is collected, retained, shared, stored, and processed by us is addressed in this Policy.</p>
            
            <h3><u>ACCEPTANCE</u></h3><br>
            <p>DGPL encourages you to review this Agreement whenever you visit the Platform to make sure that you understand the terms and conditions governing the use of the Platform and / or the purchase of Products (defined below). This Agreement does not alter in any way the terms or conditions of any other written agreement you may have with DGPL for other products or services. In the event of any conflict between the terms of this Agreement and any other agreement executed with you, the terms of such other agreement shall prevail in relation to the subject matter thereof.</p>
                <p>If you do not agree with this Agreement (including any policies or guidelines referred to herein), please immediately terminate your use of the Platform. If you would like to print this Agreement, please click the print button on your browser toolbar.</p>
                <h3><u>ELIGIBILITY</u></h3><br>
            <p>DGPL encourages you to review this Agreement whenever you visit the Platform to make sure that you understand the terms and conditions governing the use of the Platform and / or the purchase of Products (defined below). This Agreement does not alter in any way the terms or conditions of any other written agreement you may have with DGPL for other products or services. In the event of any conflict between the terms of this Agreement and any other agreement executed with you, the terms of such other agreement shall prevail in relation to the subject matter thereof.</p>
                <p>If you do not agree with this Agreement (including any policies or guidelines referred to herein), please immediately terminate your use of the Platform. If you would like to print this Agreement, please click the print button on your browser toolbar.</p>
                <h3><u>TERMS OF USE</u></h3><br>
            <p>DGPL encourages you to review this Agreement whenever you visit the Platform to make sure that you understand the terms and conditions governing the use of the Platform and / or the purchase of Products (defined below). This Agreement does not alter in any way the terms or conditions of any other written agreement you may have with DGPL for other products or services. In the event of any conflict between the terms of this Agreement and any other agreement executed with you, the terms of such other agreement shall prevail in relation to the subject matter thereof.</p>
                <p>If you do not agree with this Agreement (including any policies or guidelines referred to herein), please immediately terminate your use of the Platform. If you would like to print this Agreement, please click the print button on your browser toolbar.</p>
                <!-- Include more details as necessary -->

            
            
            <!-- Add additional sections as needed following this format -->
        </section>
<footer class="footer">
    <div class="footer-content">
        <!-- Logo and Social Media -->
        <div class="footer-logo">
            <div class="logo">
                <a href="#"><img src="logo.png" alt="Fresh Meat"></a>
            </div>
            <p>KEEP IN TOUCH</p>
            <div class="social-icons" style="margin-top:15px;">
                <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon%20awesome-linkedin.svg" alt="LinkedIn"></a>
                <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon%20awesome-facebook-square.svg" alt="Facebook"></a>
                <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon-x-square.svg" alt="Instagram"></a>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="footer-links">
            <h3>USEFUL LINKS</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cancellation & Reschedule Policy</a></li>
            </ul>
        </div>

        <!-- Contact Us -->
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