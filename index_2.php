<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <title>TMT Maldives</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Owl Carousel Assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <script src="assets/js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script scr="assets/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="main-container">
        <header>
            <div class="tp-line">
                <div class="container">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Currency Converter</a></li>
                        <li><a href="">Lights to Maldives</a></li>
                        <li><a href="">FAQs</a></li>
                    </ul>
                    <aside>
                        <ul>
                            <li>Language</li>
                            <li>Speak to Travel Expert</li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="logo">
                <h1><a href="">Logo</a></h1>
            </div>
            <div class="weather-support-time">
                <ul>
                    <li>
                        <span><i class="fa fa-home"></i></span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                    </li>
                    <li>
                        <span><i class="fa fa-clock-o"></i></span>
                    </li>
                </ul>
            </div>
            <?php include("includes/primary-navigation.php");?>
        </header>
        <div class="col1-layout">
            <?php include("includes/slider.php");?>
            <section>
                <h1 class="section-title">
                    FEATURED RESORTS<span>Get out of your comfort zone</span>
                </h1>
                <p><a href="" class="btn a-link">Explore our Trips</a></p>
            </section>
            <section class="featured-resorts">
                <h2></h2>
            </section>
            <section class="special-offers container">
                <h2>
                    Special Offers
                    <span>Summer Savings Up to 35% savings and a $40 coupon!</span>
                </h2>
                <?php include ("includes/special-offers.php");?>
            </section>
            <section class="special-offers container">
                <h2>
                    Holiday Types
                    <span>Summer Savings Up to 35% savings and a $40 coupon!</span>
                </h2>
                <?php include ("includes/holiday-types.php");?>
            </section>
            <section class="greetings">
                <h2>Your Journey in Luxury and Beyond</h2>
                <p>All over the world there are lots of holiday places, but Maldives travel is very unique for Vacations and Honeymoon. Maldives was unknown tourists place in 1970s, but today Maldives has become the famous honeymoon island. If you are searching for best place to travel in Maldives, you are at right destination. Check all the Maldives Travel places, resorts here. You can also look at different vacation packages of diving, wedding, honeymoon for your Maldives travel offered at Maldives Exclusive. Contact Maldives exclusive agent to travel best places. Our agents will suggest you best Maldives resorts which will suit you needs and budget.</p>
                <p><a href="">read more</a></p>
            </section>
            <section>
                <h2><span>Why Do People Choose</span> Maldives Travel</h2>
                <ul class="colset">
                    <li>
                        <ul>
                            <li>
                                <i></i>
                                <h3>QUALITY SERVICE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip exea commodo consequat...</p>
                            </li>
                        </ul>
                    </li>
                    <li></li>
                    <li></li>
                </ul>
            </section>
        </div>
        <footer></footer>
    </div>
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/cbpHorizontalMenu.min.js"></script>
<script src="assets/js/owl-carousel/owl.carousel.js"></script>

<!-- Demo -->
<style>
.owl-carousel .item img{
    display: block;
    max-width: 100%;
    height: auto;
}
</style>

<script>
    $(function() {
        cbpHorizontalMenu.init();
    });
           
    $(document).ready(function() {

        $("#featured-slide").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            loop: true,
            margin: 0,        
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
          });

        $("#specials,#holiday-types").owlCarousel({
            items : 4,
            margin: 0,
            lazyLoad : true,
            navigation : true,
        });
    });
</script>
</body>
</html>