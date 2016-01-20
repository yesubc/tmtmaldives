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
        <div class="col2-right-layout page">
            <div class="breadcrumb">
                <ul class="container">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li><a href="#">Company</a> <span class="divider">/</span></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
            <div class="container">
                <div class="main">
                    <div class="col-main">
                        <h1>CMS Page Header</h1>
                    </div>
                </div>
                <div class="col-right">
                    <h3>Pages</h3>
                    <ul class="categories highlight">
                        <li><a href="#" title="Our Company">Our Company</a></li>
                         <li><a href="#" title="Our Vision">Our Vision</a></li>
                         <li><a href="#" title="Our Mission">Our Mission</a></li>
                         <li><a href="#" title="Our Objective">Our Objective</a></li>
                   </ul>
                </div>  
            </div>  
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