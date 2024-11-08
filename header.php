      <header class="header">
            <div class="logo">
                <a href="#"><img src="logo.png" alt="Fresh Meat"></a>
            </div>
           <nav class="nav-links">
                <a href="index.php">
                   <i class="fas fa-home"></i>  Home
                </a>
                <a href="about-us.php">
                   <i class="fas fa-info-circle"></i>   About Us
                </a>
                <a href="faq.php">
                      <i class="fas fa-question-circle"></i>  FAQ
                </a>
                <a href="https://wa.me/918072989769" target="_blank">
                    <b><i class="fab fa-whatsapp" style="color: #25D366; font-size:18px"></i></b>
                </a>
            </nav>
            <div class="hamburger" onclick="openSideMenu()">
        <i class="fas fa-bars"></i>
    </div>
        </header>
        <div id="side-menu" class="side-menu">
    <a href="javascript:void(0)" class="close-btn" onclick="closeSideMenu()">&times;</a>
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="about-us.php"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="faq.php"><i class="fas fa-question-circle"></i> FAQ</a>
    <a href="https://wa.me/918072989769" target="_blank"><i class="fab fa-whatsapp" style="color: #25D366;"></i> WhatsApp</a>
</div>

<script>
    function openSideMenu() {
    document.getElementById("side-menu").style.width = "250px";
}

function closeSideMenu() {
    document.getElementById("side-menu").style.width = "0";
}</script>
