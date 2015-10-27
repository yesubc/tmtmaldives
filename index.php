<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <title>TMT Maldives</title>
    <?php
        include("includes/stylesheet.php");
        include("includes/favico.php");
    ?>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <!--[if lt IE 9]>
    <script scr="assets/js/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="main-container">
        <header>
            <?php
                include("includes/header.php");
                include("includes/primary-menu.php");
            ?>
        </header>
        <div class="col1-layout">
            <?php
                include("includes/slider.php");          
                include ("includes/featured-resorts-new.php");
                include ("includes/special-offers.php");
                include ("includes/holiday-types.php");
                include ("includes/greeting.php");
                include ("includes/whychoose.php");
                include ("includes/testimonials-gallery.php");
                include ("includes/resortslogo.php");
                include ("includes/quicklinks.php");
            ?>        
        </div>
        <?php include("includes/footer.php");?>
    </div>
<script src="assets/js/jquery/jquery-1.9.1.min.js"></script>
<script src="assets/js/modernizr/modernizr.custom.70736.js"></script>
<script src="assets/js/ddmenu/ddmenu.js"></script>
<script src="assets/js/owl-carousel/owl.carousel.js"></script>
<!--Gama Gallery-->
<script src="assets/js/gamma/jquery.masonry.min.js"></script>
<script src="assets/js/gamma/gamma.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>