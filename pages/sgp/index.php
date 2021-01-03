<?php
include "../../php/db.php";
if (!empty($_POST['register'])) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['lname']) || empty($_POST['correo']) || empty($_POST['clave']) ) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $nombre = $_POST['nombre'];
        $lname = $_POST['lname'];
        $email = $_POST['correo'];
        $clave = md5($_POST['clave']);
        $rol = $_POST['1'];

        $query = mysqli_query($conexion, "SELECT * FROM usuario where correo = '$email'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        El correo ya existe
                    </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO usuario(nombre,lname,correo,clave,rol) values ('$nombre', '$lname', '$email', '$clave', '$rol')");
            if ($query_insert) {
                $alert = '<div class="alert alert-primary" role="alert">
                            Usuario registrado
                        </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                        Error al registrar
                    </div>';
            }
        } 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Guest Posts</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Styles of the pages -->
    <link rel="stylesheet" href="sgp.css">
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
    <main class="main" id="fean">
        <div>
            <strong class="titleMain">
                Have a Website?
            </strong>
        </div>
        <h1 class="mainH1">
            START SELLING GUEST POSTS ON YOUR WEBSITE AND GET PAID
        </h1>
        <div class="sellC">
            <div class="cardSell">
                <i class="far fa-list-alt iconCard"></i>
                <h2 class="titleCard">
                    LIST YOUR WEBSITE
                </h2>
                <p class="descriptionCard">
                    Sign up for free, submit your website, and offer your guest post opportunities. All platform
                    supported (web 2.0, forums, etc.)
                </p>
            </div>
            <div class="cardSell">
                <i class="far fa-file-alt iconCard"></i>
                <h2 class="titleCard">
                    PUBLISH POST CONTENT
                </h2>
                <p class="descriptionCard">
                    Get notified when you get guest post order and use our system to discuss details with Buyers.
                </p>
            </div>
            <div class="cardSell">
                <i class="fas fa-hand-holding-usd iconCard"></i>
                <h2 class="titleCard">
                    GET PAID
                </h2>
                <p class="descriptionCard">
                    Once you complete your endorsement, Get paid for your amazing work.
                </p>
            </div>
        </div>
        <div class="btn">
            <div class="btnIcon">
                <i class="fas fa-plus"></i>
            </div>
            Submit Your Website
        </div>
    </main>
    <div class="promotionSeo">
        <img src="seo.svg" alt="SEO" class="logo">
        <div class="pSDescription">
            <div>
                <h2 class="titleSeo">
                    Guest Posting Helps In <strong>SEO</strong>
                </h2>
                <p class="descriptionSeo">
                    There is no other second opinion that legitimate Posts on your website can earn you high rank in
                    google.
                    Plus, there will be more readers and followers on your blog if the quality is being discussed there
                    through adequate manners. Publishing Guests posts will help your website gain more legitimate
                    content
                    and your website will start getting more and more traffic as it will start showing on new keywords.
                </p>
            </div>
            <div class="moreSpecification">
                <div class="cardMS">
                    <i class="far fa-clone iconMS"></i>
                    <h3 class="titleMS">
                        REGULAR POSTING / HIGHER RANKING
                    </h3>
                    <p class="pMS">
                        More you are giving space to relevant blogs for guest posting, the more you are earning rank in
                        google. Yes, this it is
                        true that you can be the owner of most famous blog or website if your PA, DA and Moz Rank
                        becomes unbeatable.

                    </p>
                </div>
                <div class="cardMS">
                    <i class="fas fa-user-cog iconMS"></i>
                    <h3 class="titleMS">
                        QUALITY CONTENT / QUALITY RANKING
                    </h3>
                    <p class="pMS">
                        You will be accepting guest website's quality guest posts and you will have authority to reject
                        in case content is substandard. Ultimately your website will get fame for discussing relevant
                        and qualitative services. Quality content forces Google to promote you on high ranks.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="supported">
        <h2 class="supportedTitle">
            Why Sell Guest Posts At <strong>BSGP</strong>
        </h2>
        <div class="miniArticles">
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="far fa-file-alt"></i>
                    </div>
                    <h3 class="titleArticle">
                        HIGH-QUALITY CONTENT
                    </h3>
                </div>
                <div class="descriptionArticle">
                    In case you use our writers then they will be fully conscious and would give proofreading before
                    publishing anything on your website. It will be our responsibility that only quality is discussed
                    through given pitch.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="titleArticle">
                        WEB 2.0 SUPPORTED
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We don't have any issues if you are running web 2.0 websites (blogger, WordPress, Tumblr, etc.) nor
                    guests websites will
                    raise their concerns. Only interested and relevant customers will be getting access to you.

                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3 class="titleArticle">
                        ACCEPT OR REJECT
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Your decision will always be given value and no other choice will be considered. You will be having
                    a higher authority to proofread anything and give decision regarding acceptance and rejection.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="titleArticle">
                        100% PRIVACY
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Website Privacy is our 1st Priority. We have Designed our system in such a way, that your website
                    will not be visible
                    publically. Only Your Customers can see your website URL.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <h3 class="titleArticle">
                        RELEVANT NICHE ARTICLE
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We have witnessed businesses getting ruined while publishing guest posts blindly. In the guest
                    posting, it should be
                    topmost priority to check for relevancy and plagiarism. Both guest and host blogs might face issues
                    if irrelevant topics
                    are being discussed.

                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <h3 class="titleArticle">
                        SATISFACTION GUARANTEED
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We are dead sure that you will be our loyal publisher right after your initial deal. Yes, this is
                    our approach that we believe in building relations rather than chasing amount. Your satisfaction
                    will be of high worth for us and we know how to get customer satisfied.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="titleArticle">
                        CONTENT PROTECTION
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Guest websites will be having access to you only after finalizing the deal. In the initial stage,
                    your SEO parameters
                    will be visible only. Plus, once we publish content on your blog then we will be responsible for any
                    changes and that
                    change will not ruin your authority.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="titleArticle">
                        THOUSAND OF ADVERTISERS
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Our legitimate practice has earned us relations with thousands of real and authentic companies. We
                    are ready to publish
                    their posting on your given niche and you are free to decide the value against that posting.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3 class="titleArticle">
                        WORDPRESS PLUGIN
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Our wordpress plugin allows you to check and accept guest posting order directly from your WP admin
                    panel. It will not only helps you to earn maximum, but also saves a lot of time.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fa fa-link"></i>
                    </div>
                    <h3 class="titleArticle">
                        SEO FRIENDLY
                    </h3>
                </div>
                <div class="descriptionArticle">
                    You will witness our legitimacy through our work. We have mold ourselves according to ongoing google
                    updates. We have
                    never fallen a prey to google penguin, panda or hummingbird algorithms.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="far fa-clock"></i>
                    </div>
                    <h3 class="titleArticle">
                        SELECT DELIVERY TIME
                    </h3>
                </div>
                <div class="descriptionArticle">
                    Owner of hosting website will be having the freedom to decide time limit to publish a guest post.
                    You can select
                    delivery time that suits you best.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="titleArticle">
                        FORUMS SUPPORTED
                    </h3>
                </div>
                <div class="descriptionArticle">
                    No need to hesitate if you are running a forum. Just get in touch with us and have your say about
                    terms and conditions.
                    We also don't mind if you are an author of a premium forum, You will be welcomed.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="titleArticle">
                        PREMIUM WEBSITE SUPPORTED
                    </h3>
                </div>
                <div class="descriptionArticle">
                    If you are author/contributor of any premium website e-g: HuffingtonPost, TheNextWeb, NYTimes,
                    TechCrunch etc. you will
                    be given a premium section to display your services and priority support from our platform as well.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="titleArticle">
                        MULTIPLE WIDTHDRAW METHODS
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We are ever ready to pay you in return for guest posting through any means you like. In fact, you
                    can decide the medium
                    for receiving the amount.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="far fa-clock"></i>
                    </div>
                    <h3 class="titleArticle">
                        PLAGIARISM FREE CONTENT
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We know the value of hosting websites might get lower if the plagiarised content is published. You
                    can check plagiarism
                    of any article that advertiser will send you for publishing post.
                </div>
            </div>
            <div class="cardArticle">
                <div class="headArticle">
                    <div class="iconArticle">
                        <i class="far fa-copy"></i>
                    </div>
                    <h3 class="titleArticle">
                        24/7 SUPPORT
                    </h3>
                </div>
                <div class="descriptionArticle">
                    We are ready to answer your queries any time any day. You are most welcome to get in touch with us
                    and state your
                    concern. Our experts will be turning around your queries within next 12 hours.
                </div>
            </div>
        </div>
    </div>
    <div class="getStarted">
        <div class="started">
            <h2 class="startedTitle">
                Ready To Get Started?
            </h2>
            <p class="startedDescription">
                Join Wolrd’s first guest posting platform and sell backlinks on your website in a legitimate way.
                <br><br>
                Fill out the form to register at BSGP.
            </p>
        </div>
        <div class="row">
        <div class="formStarted">
            <form action="" method="post" autocomplete="off" >
            <?php echo isset($alert) ? $alert : ''; ?>
                <div class="names">
                    <div class="cFName">
                        <label for="fName" class="label">First Name</label>
                        <input type="text" id="fName" placeholder="First Name" class="input" name="nombre">
                    </div>
                    <div class="lFName">
                        <label for="lName" class="label">Last Name</label>
                        <input type="text" id="lName" placeholder="Last Name" class="input" name="lname">
                    </div>
                </div>
                <label for="email" class="label">Email</label>
                <input type="email" id="email" placeholder="Example: info@yourcompany.com" class="input" name="correo">
                <label for="password" class="label">Password</label>
                <input type="password" id="password" placeholder="Password" class="input" name="clave">
                <span>
                    By Registering, You Agree To <a href="#" class="formLinks">The Privacy Policy</a>, <a href="#"
                        class="formLinks">Refund Policy</a> & <a href="#" class="formLinks">Terms Of
                        Services.</a>
                </span>
                <div class="submit">
                    <input type="submit" value="Register Now" class="btn" name="register">
                </div>
            </form>
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
</body>

</html>