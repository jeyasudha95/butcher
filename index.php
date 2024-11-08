<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header and Hero Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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

        /* Container Styling */
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

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #b22222;
            text-decoration: none;
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
        }

        .cart-icon {
            font-size: 20px;
        }
        @media (max-width: 768px) {
    .home-link, .contact-link {
        display: none;
    }
}

        /* Hero Section Styling */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Text Section Styling */
        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 48px;
            color: #b22222;
            font-weight: bold;
            line-height: 1.2;
        }

        .order-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 16px;
            color: #b22222;
            border: 2px solid #b22222;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .order-button:hover {
            background-color: #b22222;
            color: white;
        }

        /* Image Styling */
        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .hero-text {
                max-width: 100%;
            }

            .hero-text h1 {
                font-size: 36px;
            }
        }
         /* Why Us Section Styling */
        .why-us-section {
            text-align: center;
            margin-top: 40px;
        }

        .why-us-section h2 {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .why-us-cards {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .why-us-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 18%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .why-us-card img {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }

        .why-us-card h3 {
            font-size: 14px;
            color: #b22222;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .why-us-card a {
            text-decoration: none;
            font-size: 14px;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }

        .why-us-card a:hover {
            color: #b22222;
        }
        @media (max-width: 768px) {
            .why-us-cards {
                flex-direction: column;
                align-items: center;
            }

            .why-us-card {
                width: 80%;
            }
        }
        /* Product Listing Section Styling */
.product-listing-section {
    text-align: center;
    margin-top: 40px;
}

.product-listing-section h2 {
    font-size: 20px;
    color: #333;
    font-weight: bold;
    margin-bottom: 10px;
}

.product-listing-section p {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.product-cards {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-top:40px;
}

.product-card {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 30%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.product-card img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

.product-card h3 {
    font-size: 16px;
    color: #333;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: left;
}

.product-card p {
    font-size: 12px;
    color: #666;
    text-align: left;
}

.product-card .price {
    font-size: 16px;
    color: #b22222;
    font-weight: bold;
}

.product-card .original-price {
    text-decoration: line-through;
    color: #999;
    margin-left: 10px;
}

.product-card .discount {
    color: #27ae60;
    font-weight: bold;
    margin-left: 10px;
}
.product-card .bottom-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
 .quantity-control {
            display: none; /* Initially hidden */
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            gap: 10px;
            background-color: #f2f2f2;
        }

        .quantity-control button {
            background-color: white;
            color: #b22222;
            border: none;
            width: 25px;
            height: 25px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .quantity-control button:hover {
            background-color: #f2f2f2;
        }

        .quantity-control span {
            font-size: 15px;
            min-width: 10px;
            text-align: center;
              background-color: #f2f2f2;
              font-weight: bold;
        }
.product-card .add-button {
    background-color: #b22222;
    color: white;
    border: none;
    border-radius: 7px;
    padding: 4px 17px;
    font-size: 14px;
    cursor: pointer;
    display: inline-block;
    transition: background-color 0.3s;
}

.product-card .add-button:hover {
    background-color: #8b0000;
}

@media (max-width: 768px) {
    .product-cards {
        flex-direction: column;
        align-items: center;
    }

    .product-card {
        width: 80%;
    }
}
/* Footer Styling */
.footer {
    background-color: #ffffff;
    padding: 20px 20px;
    font-family: Arial, sans-serif;
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

.payment-icons img {
    width: 50px;
    margin-right: 10px;
    vertical-align: middle;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-links, .footer-contact {
        margin-top: 20px;
    }
}
/* Cart Display Styles */
.cart-display {
    display: flex;
    align-items: center;
    border: 1px solid #b22222; /* Red border */
    border-radius: 8px;
    padding: 8px 12px;
    gap: 8px;
    background-color: white;
}

.cart-icon {
    color: #b22222;
    font-size: 24px;
}

.cart-info {
    text-align: left;
}

.item-count {
    font-size: 14px;
    color: black;
      font-weight: bold;
    display: block;
}

.total-price {
    font-size: 14px;
    color: #b22222;
    font-weight: bold;
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
#cart-summary{
    display: none; position: sticky; bottom: 0; width: 100%; background-color: rgb(178 34 34); color: white; padding: 10px; text-align: center; font-size: 18px; font-weight: bold; margin-top:20px;
}

    </style>
</head>
<body>

    <!-- Container for Centering Content -->
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <!-- Logo -->
            <div class="logo">
            <a href="#"><img src="logo.png" alt="Fresh Meat"></a>
</div>
 <nav class="nav-links">
                <a href="index.html">
                   <i class="fas fa-home" style="color: #b22222;"></i>  Home
                </a>
                <a href="about-us.html">
                   <i class="fas fa-info-circle" style="color: #b22222;"></i>   About Us
                </a>
                <a href="faq.html">
                      <i class="fas fa-question-circle" style="color: #b22222;"></i>  FAQ
                </a>
                <a href="https://wa.me/918072989769" target="_blank">
                    <b><i class="fab fa-whatsapp" style="color: #25D366; font-size:18px"></i></b>
                </a>
            </nav>
            <!-- Navigation Links -->
            <div class="nav-links" onclick="sendToWhatsApp()">
                <a href="#"><div class="cart-display">
    <span class="cart-icon">🛒</span>
    <div class="cart-info">
        <span class="item-count" id="cart-count"><strong>0 items</strong></span>
        <span class="total-price" id="cart-total">₹0.00</span>
    </div>
</div>

                </a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero-section">
            <!-- Text Section -->
            <div class="hero-text">
                <h1 style="font-family: cursive;">ORDER FRESH MEAT ONLINE!</h1>
                <a href="#" class="order-button">Order Now</a>
            </div>
            
            <!-- Image Section -->
            <div class="hero-image">
                <img src="banner.png" alt="Fresh Meat">
            </div>
        </section>
         <section class="why-us-section">
            <h2>Why Us</h2>
            <div class="why-us-cards">
                <!-- Card 1 -->
                <div class="why-us-card">
                    <img src="icon1.webp" alt="Freshly Cut Icon">
                    <h3>FRESHLY CUT AFTER ORDER</h3>
                </div>
                
                <!-- Card 2 -->
                <div class="why-us-card">
                    <img src="icon1.webp" alt="Farm Fresh Icon">
                    <h3>FARM FRESH EVERYDAY</h3>
                </div>
                
                <!-- Card 3 -->
                <div class="why-us-card">
                    <img src="icon1.webp" alt="Safe & Healthy Icon">
                    <h3>SAFE & HEALTHY</h3>
                </div>
                
                <!-- Card 4 -->
                <div class="why-us-card">
                    <img src="icon1.webp" alt="Antibiotic Free Icon">
                    <h3>ANTIBIOTIC FREE</h3>
                </div>
                
                <!-- Card 5 -->
                <div class="why-us-card">
                    <img src="icon1.webp" alt="Locally Produced Icon">
                    <h3>LOCALLY PRODUCED</h3>
                </div>
            </div>
        </section>
        <!-- Product Listing Section -->
<section class="product-listing-section">
    <h2>Fresh Chickens</h2>
    <p>Poultry - Fresh and Tender</p>
    <div class="product-cards">
        <!-- Product Card 1 -->
        <div class="product-card" data-product-id="product1" data-price="20">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g<span> | 12-18 Pieces | Serves 4 </span></p>
            <p><span class="price">₹20</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="product-card" data-product-id="product2" data-price="5">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g | 12-18 Pieces | Serves 4</p>
            <p><span class="price">₹5</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="product-card" data-product-id="product3" data-price="45">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g | 12-18 Pieces | Serves 4</p>
            <p><span class="price">₹45</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>
    </div>
</section>
        <!-- Mutton Product Listing Section -->
<section class="product-listing-section">
    <h2>Fresh Chickens</h2>
    <p>Poultry - Fresh and Tender</p>
    <div class="product-cards">
        <!-- Product Card 1 -->
       <div class="product-card" data-product-id="product4" data-price="30">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g | 12-18 Pieces | Serves 4</p>
            <p><span class="price">₹30</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>

        <!-- Product Card 2 -->
     <div class="product-card" data-product-id="product5" data-price="20">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g | 12-18 Pieces | Serves 4</p>
            <p><span class="price">₹20</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>
        <!-- Product Card 3 -->
        <div class="product-card" data-product-id="product6" data-price="15">
            <img src="chicken1.webp" alt="Chicken Curry Cut - Small Pieces">
            <h3>Chicken Curry Cut - Small Pieces</h3>
            <p>500 g | 12-18 Pieces | Serves 4</p>
            <p><span class="price">₹15</span> <span class="original-price">₹199</span> <span class="discount">22% off</span></p>
            <div class="bottom-section">
                 <p class="delivery">Tomorrow 6AM - 8AM</p>
                  <!-- Add Button -->
                        <button class="add-button" onclick="showQuantityControl(this)">Add +</button>

                        <!-- Quantity Control (initially hidden) -->
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="item-count">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="footer-content">
        <!-- Logo and Social Media -->
        <div class="footer-logo">
            <div class="logo">
            <a href="#"><img src="logo.png" alt="Fresh Meat"></a>
</div>
            <p>KEEP IN TOUCH</p>
            <div class="social-icons" style="margin-top:15px;">
                <a href="#"><img src="https://test.propgoto.com/assets/images/LandingPage/Icon%20awesome-linkedin.svg" alt="Twitter"></a>
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
<div id="cart-summary">
    <span id="cart-summary-text"></span>
    <a href="#" onclick="sendToWhatsApp()" style="margin-left: 20px; color: white; text-decoration: underline;">Buy Now</a>
</div>
    </div>

  <script>
        let cartCount = 0;
        let cartTotal = 0;

        function showQuantityControl(button) {
            // Hide the Add button
            button.style.display = "none";

            // Show the quantity control
            const quantityControl = button.nextElementSibling;
            quantityControl.style.display = "flex";

            // Get the price of the item from the data-price attribute
            const productCard = button.closest('.product-card');
            const price = parseFloat(productCard.getAttribute('data-price'));
             const productId = productCard.getAttribute('data-product-id');

            // Update cart count and total in the header
            cartCount++;
            cartTotal += price;
            updateCartDisplay();
             const storedCartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
    storedCartItems[productId] = { quantity: 1, price: price };
    localStorage.setItem('cartItems', JSON.stringify(storedCartItems));
        }

        function increaseQuantity(button) {
            const itemCountSpan = button.previousElementSibling;
            let itemCount = parseInt(itemCountSpan.innerText);
            itemCount++;
            itemCountSpan.innerText = itemCount;

            // Get the price of the item from the data-price attribute
            const productCard = button.closest('.product-card');
            const price = parseFloat(productCard.getAttribute('data-price'));
                const productId = productCard.getAttribute('data-product-id');


            // Increase cart count and total price
            cartCount++;
            cartTotal += price;
            updateCartDisplay();
             const storedCartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
    storedCartItems[productId].quantity = itemCount;
    localStorage.setItem('cartItems', JSON.stringify(storedCartItems));
        }

        function decreaseQuantity(button) {
            const itemCountSpan = button.nextElementSibling;
            let itemCount = parseInt(itemCountSpan.innerText);

            if (itemCount > 1) {
                itemCount--;
                itemCountSpan.innerText = itemCount;

                // Get the price of the item from the data-price attribute
                const productCard = button.closest('.product-card');
                const price = parseFloat(productCard.getAttribute('data-price'));
                        const productId = productCard.getAttribute('data-product-id');


                // Decrease cart count and total price
                cartCount--;
                cartTotal -= price;
                updateCartDisplay();

                const storedCartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
        storedCartItems[productId].quantity = itemCount;
        localStorage.setItem('cartItems', JSON.stringify(storedCartItems));
            } else {
                // If item count is 1, hide the quantity control and show the Add button
                const quantityControl = button.parentElement;
                quantityControl.style.display = "none";
                quantityControl.previousElementSibling.style.display = "inline-block";

                // Get the price of the item from the data-price attribute
                const productCard = button.closest('.product-card');
                const price = parseFloat(productCard.getAttribute('data-price'));
                        const productId = productCard.getAttribute('data-product-id');

                // Decrease cart count and total price
                cartCount--;
                cartTotal -= price;
                updateCartDisplay();
                const storedCartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
        delete storedCartItems[productId];
        localStorage.setItem('cartItems', JSON.stringify(storedCartItems));
            }
        }

        function updateCartDisplay() {
            document.getElementById('cart-count').innerText = cartCount === 0 ? "0 items" : `${cartCount} items`;
            document.getElementById('cart-total').innerText = cartTotal.toFixed(2);
            localStorage.setItem('cartCount', cartCount);
    localStorage.setItem('cartTotal', cartTotal);
            showCartSummary();

        }
        // Retrieve cart data from local storage on page load
window.addEventListener('load', () => {
    // Get cart count and total from local storage
    const storedCartCount = localStorage.getItem('cartCount');
    const storedCartTotal = localStorage.getItem('cartTotal');
    const storedCartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
 
    // If data exists in local storage, update cartCount and cartTotal variables
    if (storedCartCount && storedCartTotal) {
        cartCount = parseInt(storedCartCount);
        cartTotal = parseFloat(storedCartTotal);
        updateCartDisplay();
    }
    showCartSummary();

     document.querySelectorAll('.product-card').forEach((productCard) => {
        const productId = productCard.getAttribute('data-product-id');
        const quantityControl = productCard.querySelector('.quantity-control');
        const addButton = productCard.querySelector('.add-button');
        
        if (storedCartItems[productId]) {
            // Show quantity control and set the quantity
            addButton.style.display = 'none';
            quantityControl.style.display = 'flex';
            quantityControl.querySelector('.item-count').innerText = storedCartItems[productId].quantity;
        }
    });
});

 function showCartSummary() {
        // Show the cart summary section
        const cartSummary = document.getElementById('cart-summary');
        const cartSummaryText = document.getElementById('cart-summary-text');

        if (cartCount > 0) {
            // Update the cart summary text
            cartSummaryText.innerText = `${cartCount} items added | Total: ₹${cartTotal.toFixed(2)}`;
            cartSummary.style.display = "block";
        } else {
            // Hide the cart summary if no items in cart
            cartSummary.style.display = "none";
        }
    }
    function viewCart() {
        // Redirect to the cart page or show cart details (You can customize this function)
        alert('Viewing Cart - Implement cart page redirection here');
    }
        function sendToWhatsApp() {
    // Get cart details
    const cartCount = document.getElementById('cart-count').innerText;
    const cartTotal = document.getElementById('cart-total').innerText;

    // Format the message
    const message = `Hello! I would like to place an order:\n\n${cartCount}\nTotal: ${cartTotal}`;

    // Encode the message for the URL
    const encodedMessage = encodeURIComponent(message);

    // Create the WhatsApp link (replace PHONE_NUMBER with the recipient's number)
    const whatsappURL = `https://wa.me/918072989769?text=${encodedMessage}`;

    // Open WhatsApp Web
    window.open(whatsappURL, '_blank');
}

    </script>
</body>
</html>
