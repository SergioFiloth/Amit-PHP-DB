<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}

                        include "../../php/db.php";
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertiser Dashboard</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../css/panel.css">
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
                        <li class="login"><a id="llogin">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="main mN" id="fean">
        <h1 class="title">
            Advertiser <span class="sT">» Dashboard</span>
        </h1>
    </div>
    <div class="main container">
        <aside class="aside">
            <h2 class="titleA">Account Balance</h2>
            <p class="priceA" >$<?php echo $_SESSION['balance']; ?> usd</p>
            <a href="funds/" class="fundsAdd">
                + Deposit Funds
            </a>
            <nav class="navA">
                <ul class="ulA">
                    <li class="liA active">
                        Dashboard
                    </li>
                    <a href="orders/">
                        <li class="liA">
                            Orders
                        </li>
                    </a>
                    <a href="so/">
                        <li class="liA">
                            Services Orders
                        </li>
                    </a>
                    <a href="dadr/">
                        <li class=" liA">
                            DADR Services Orders
                        </li>
                    </a>
                </ul>
            </nav>
            <img src="../aside.jpg" alt="dadr Increase" class="dadr">
        </aside>
        <?php
						

						$query = mysqli_query($conexion, "SELECT b.idbuy, b.orden, b.item, b.price, b.date, b.duedate, s.status FROM buyer b INNER JOIN stats s ON  b.status = s.idstatus ");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
                            while ($data = mysqli_fetch_assoc($query)) { 
                        
                                ?>
                            
        <div class="main principal">
            <div class="info">
                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Total purchases
                        </h3>
                        <div class="value">
                        <?php echo $result;  ?>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Complete Orders
                        </h3>
                        <div class="value">
                        <?php echo $count1;  ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Active orders
                        </h3>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
            </div>
            <table class="tableO">
                <tbody class="bodyT">
                    <tr class="trH">
                        <th>Orders</th>
                    </tr>
                    <tr class="trD">
                        <td>Order</td>
                        <td>Item</td>
                        <td>Price</td>
                        <td>Date</td>
                        <td>Due Date</td>
                        <td>Status</td>
                    </tr>

								<tr>
									<td><?php echo $data['orden']; ?></td>
									<td><?php echo $data['item']; ?></td>
									<td><?php echo $data['price']; ?></td>
                                    <td><?php echo $data['date']; ?></td>
                                    <td><?php echo $data['duedate']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <?php 
                                    }
						} ?>
                </tbody>
            </table>
            <div class="cBO">
                <a href="orders/" class="btnO">Go to Orders Page</a>
            </div>
        </div>
    </div>
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
    <script src="../../js/main.js"></script>
    <script>
        fean.style.marginTop = `${hNavbar}px`;
    </script>
</body>

</html>