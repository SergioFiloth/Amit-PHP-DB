<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation" id="nav">
        <div class="nav">
            <div class="cMenuT">
                <a id="lindex">
                    <img src="../../img/logo.png" class="nav__link--logo" alt="Logo X">
                </a>
                <div id="menuT" class="navigation__menuT">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="contMenu desactive" id="contNav">
                <div class="nav__link">
                    <ul class="nav__link--navbar">
                        <li class="navbar">
                            <a class="navbar__link" id="lsgp">Sell Guest Posts</a>
                        </li>
                        <li class="navbar">
                            <a class="navbar__link" id="lmp">Marketplace</a>
                        </li>
                        <li class="navbar">
                            <a class="navbar__link" id="lgps">Guest Posting Services</a>
                        </li>
                        <li class="navbar">
                            <a class="navbar__link" id="ldaDr">Increase DA/DR</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__cardAndLogin">
                    <ul class="nav__cardAndLogin--ul">
                        <a class="cart" id="lcart">
                            <li class="numberItem"><i class="fas fa-cart-plus cart"></i> 0 item</li>
                        </a>
                        <li class="login" id="btnL">
                            <a>Amit</a>
                        </li>
                    </ul>
                    <ul class="navLogin" id="nL">
                        <li class="liL"><a href="/login/advertiser/index.php?id=<?php echo $_SESSION['idUser']; ?>">Buyer</a></li>
                        <li class="liL"><a href="/login/publisher/index.php?id=<?php echo $_SESSION['idUser']; ?>">Seller</a></li>
                        <?php
                        include "php/db.php";
                        $query_data = mysqli_query($conexion, "CALL data();");
                        $result_data = mysqli_num_rows($query_data);
                        if ($result_data > 0) {
                            $data = mysqli_fetch_assoc($query_data);
                        }
					  ?>
                        <li class="liL"><a href="/login/profile/index.php?id=<?php echo $_SESSION['idUser']; ?>">My Profile</a></li>

                        <li class="liL"><a href="/login/profile/">Transactions History</a></li>
                        <li class="liL"><a href="">Balance:  $<?php echo $_SESSION['balance']; ?> usd</a></li>
                        <li class="liL"><a href="/php/salir.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <footer class="footer">
        <div class="firtSection">
            <div class="footer__links">
                <a href="#" class="linksF" id="fbgp">Buy gues posts</a>
                <a href="#" class="linksF" id="fsgp">Sell gues post</a>
                <a href="#" class="linksF" id="fmp">Marketplace</a>
                <a href="#" class="linksF" id="fb">Blog</a>
                <a href="#" class="linksF" id="fc">Contact</a>
            </div>
            <hr class="fS">
            <div class="footer__description">
                Buy-Sell Guest Post is a platform that merchandise guest posts only with no limitation to minimum guest
                posts or any SEO metrics. Further, there’s no evaluation for home page features or any other
                requirements.
            </div>
            <div class="social">
                <i class="socialIcons fab fa-facebook-f"></i>
                <i class="socialIcons fab fa-twitter"></i>
            </div>
        </div>
        <div class="secondSection">
            &copy; 2020 BuySellGuestPost.com
            <div class="secondSectionLink">
                <a href="#" class="sSecLink" id="ff">FAQs</a>
                <a href="#" class="sSecLink" id="ft">Terms</a>
                <a href="#" class="sSecLink" id="fp">Privacy</a>
                <a href="#" class="sSecLink" id="fr">Refunds</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>