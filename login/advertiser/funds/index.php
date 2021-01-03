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
    <script src="../../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../css/panel.css">
    <link rel="stylesheet" href="funds.css">
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
            Advertiser <span class="sT">» Deposit Funds</span>
        </h1>
    </div>
    <div class="main">
        <aside class="aside">
            <h2 class="titleA">Account Balance</h2>
            <p class="priceA">Value</p>
            <a href="../funds/" class="fundsAdd">
                <span class="liA active">
                    + Deposit Funds
                </span>
            </a>
            <nav class="navA">
                <ul class="ulA">
                    <a href="../">
                        <li class="liA">
                            Dashboard
                        </li>
                    </a>
                    <a href="../orders/">
                        <li class="liA">
                            Orders
                        </li>
                    </a>
                    <a href="../so/">
                        <li class="liA">
                            Services Orders
                        </li>
                    </a>
                    <a href="../dadr/">
                        <li class=" liA">
                            DADR Services Orders
                        </li>
                    </a>
                </ul>
            </nav>
            <img src="../../aside.jpg" alt="dadr Increase" class="dadr">
        </aside>
        <div class="main principal">
            <div class="upSection">
                <form action="" class="form">
                    <label for="amount">Enter Amount For Deposit Funds</label>
                    <input type="number" name="amount" id="amount" class="amount" onkeyup="fundv()" onblur="total()">
                    <label>Select Method:</label>
                    <div class="radio">
                        <input type="radio" name="pay" id="pay" onclick="paypal()">
                        <img src="paypal.svg" alt="Paypal Logo" class="imgF">
                    </div>
                </form>
                <table>
                    <tbody>
                        <tr>
                            <td class="titlesT">Method</td>
                            <td id="paypal"> method</td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td class="tTable" id="cant"> Amount </td>
                        </tr>
                        <tr>
                            <td>Processing Fee </td>
                            <td id="cant"> +10%</td>
                        </tr>
                        <tr>
                            <td class="tTable">Sub Total</td>
                            <td class="totalT" id="total"> total</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cBtn">
                <a href="" class="btn">
                    Procced to Deposit
                </a>
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
    <script src="../../../js/main.js"></script>
    <script>
        fean.style.marginTop = `${hNavbar}px`;
    </script>
    <script>
    function fundv() {
    valor = document.getElementById('amount').value;
    document.getElementById('cant').innerHTML='$'+valor + ' usd';} 

    function paypal() {
        document.getElementById('paypal').innerHTML='Paypal';
    }


    function total() {
    valor1 = document.getElementById('amount').value;
    valor2 = valor1 * .10;
    document.getElementById('total').innerHTML= '$' + (parseInt(valor1) + parseInt(valor2)) +' usd';} 
    </script>
</body>

</html>