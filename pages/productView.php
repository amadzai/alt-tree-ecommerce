<?php
require '../database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM alt_tree_product WHERE id='$id' LIMIT 1";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $product = $row;
    }
} else {
    echo "No product found!";
}

if (isset($_POST['login_btn'])) {
    login();
}

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    logout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Alt-Tree | Product</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logos/LogoWhite.png">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">


    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Space Theme -->
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>
    <!-- Skippy -->
    <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
        <div class="container">
            <span class="u-skiplink-text">Skip to main content</span>
        </div>
    </a>
    <!-- End Skippy -->

    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header--modern u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
        <div class="u-header__section">
            <div id="logoAndNav" class="container-fluid">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">

                    <!-- Logo -->
                    <div class="u-header__navbar-brand-wrapper">
                        <a class="navbar-brand u-header__navbar-brand" href="../index.php" aria-label="Alt-Tree">
                            <img class="u-header__navbar-brand-default" src="../assets/img/logos/LogoNameWhiteSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-on-scroll py-2" src="../assets/img/logos/LogoNameSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-mobile float-right pt-2" src="../assets/img/logos/Logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
                            <span class="u-hamburger__inner"></span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
                        <ul class="navbar-nav u-header__navbar-nav">

                            <li class="nav-item">
                                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="shopView.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="shopSubMenu">
                                    Shop
                                </a>

                                <!-- Button -->
                            <li class="nav-item u-header__nav-item-btn">
                                <a class="btn btn-sm btn-primary" href="#signupModal" role="button" data-modal-target="#signupModal" data-overlay-color="#151b26">
                                    <i class="fa fa-user-circle mr-1"></i>
                                    Sign In
                                </a>
                            </li>
                            <!-- End Button -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero Section -->
        <div class="gradient-overlay-half-dark-v1 bg-img-hero pb-3" style="background-image: url(../assets/img/background/Background1F.png); max-width: 100%; height: auto;">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-80vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">
                        <div class="col-lg-5 mb-7 mb-lg-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Product Description Section -->
        <div class="container space-2 space-3--lg">
            <div class="row">
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <!-- Red Product Gallery -->
                    <div id="redShoeProduct" data-target-group="idProductSwitcher">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <!-- Slick Carousel - Main Shop Product -->
                                <div id="redShoeNavMain" class="js-slick-carousel u-slick" data-infinite="true" data-nav-for="#redShoeNavThumb">
                                    <div class="js-slide">
                                        <img src="<?php echo (isset($product['pictureSource']) && !empty($product['pictureSource'])) ? "../assets/img/product/display/" . $product['pictureSource'] : "../assets/img/logos/Logo.png" ?>" alt="The logo of Alt-Tree" class="img-fluid">
                                    </div>
                                </div>
                                <!-- End Slick Carousel - Main Shop Product -->
                            </div>
                        </div>
                    </div>
                    <!-- End Red Product Gallery -->
                </div>

                <div class="col-lg-5">
                    <!-- Content -->
                    <div class="mb-5">
                        <h1 class="font-weight-normal"><?= $product["name"] ?></h1>
                        <span class="d-block h3 mb-3">RM <?= $product["price"] ?></span>
                        <p class="text-muted"><?= $product["description"] ?></p>
                    </div>

                    <h2 class="h6">Why Sign In?</h2>
                    <p class="text-muted">We only allow registered users to add products to their cart so that:</p>
                    <ul class="font-weight-regular text-muted">
                        <li>Customers can gain rewards such as vouchers and promotions.</li>
                        <li>Customers information can be saved, making it easier to order again.</li>
                        <li>Alt-Tree can provide better customer service for normal users and partners.</li>
                    </ul>

                    <hr class="my-4">

                    <a class="btn btn-block btn-primary" href="#signupModal" data-modal-target="#signupModal">Sign In to Add to Cart</a>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!-- End Product Description Section -->
    </main>
    <!-- END MAIN CONTENT -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-dark">
        <div class="container space-2">
            <div class="row justify-content-md-between">

                <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
                    <h3 class="h6 text-white mb-3">Contact Us</h3>

                    <!-- List Group -->
                    <div class="list-group list-group-flush list-group-transparent">
                        <a class="list-group-item list-group-item-action" href="tel:03-274-3345">
                            <i class="fas fa-phone-alt min-width-3 text-center mr-2"></i>
                            03-274-3345
                        </a>
                        <a class="list-group-item list-group-item-action" href="mailto: contact@hcare.com" target="_blank">
                            <i class="fas fa-envelope min-width-3 text-center mr-2"></i>
                            contact@alttree.com
                        </a>
                        <a class="list-group-item list-group-item-action" href="https://g.page/SuriaKLCCMall?share" target="_blank">
                            <i class="fas fa-location-arrow min-width-3 text-center mr-2"></i>
                            A-50, Level 50,
                            Suria KLCC,
                            Kuala Lumpur City Centre,
                            50088 Kuala Lumpur, Malaysia.
                        </a>
                    </div>
                    <!-- End List Group -->
                </div>

                <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
                    <h3 class="h6 text-white mb-3">Social</h3>

                    <!-- List -->
                    <div class="list-group list-group-flush list-group-transparent">
                        <a class="list-group-item list-group-item-action" href="https://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook-f min-width-3 text-center mr-2"></i>
                            Facebook
                        </a>
                        <a class="list-group-item list-group-item-action" href="https://twitter.com/" target="_blank">
                            <i class="fab fa-twitter min-width-3 text-center mr-2"></i>
                            Twitter
                        </a>
                        <a class="list-group-item list-group-item-action" href="https://www.instagram.com/" target="_blank">
                            <i class="fab fa-instagram min-width-3 text-center mr-2"></i>
                            Instagram
                        </a>
                    </div>
                    <!-- End List -->
                </div>

                <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
                    <!-- Logo -->
                    <a class="d-inline-block my-6" href="../index.php" aria-label="Space">
                        <img src="../assets/img/logos/LogoNameWhite.png" alt="Logo" style="width: 500px; max-width: 100%;">
                    </a>
                    <!-- End Logo -->
                    <p class="small text-muted">All rights reserved. &copy; Alt-Tree Corporation Inc. 2022.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Signup Modal Window -->
    <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
        <!-- Modal Close Button -->
        <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
            <i class="fas fa-times"></i>
        </button>
        <!-- End Modal Close Button -->

        <!-- Content -->
        <div class="p-5 bg-white rounded">
            <form action="../index.php" method="post" class="pt-5">
                <!-- Signin -->
                <div id="signin" data-target-group="idForm">
                    <!-- Title -->
                    <header class="text-center mb-5">
                        <h2 class="h4 mb-0">Please sign in</h2>
                        <p>Sign in to start shopping.</p>
                    </header>
                    <!-- End Title -->

                    <!-- Input -->
                    <div class="js-form-message mb-3">
                        <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                                <span class="input-group-text form__text">
                                    <i class="fa fa-user form__text-inner"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form__input" name="username" required placeholder="Enter Your Username" aria-label="Username" data-msg="Please Enter A Valid Username." data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="js-form-message mb-3">
                        <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                                <span class="input-group-text form__text">
                                    <i class="fa fa-lock form__text-inner"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control form__input" name="password" required placeholder="Password" aria-label="Password" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="mb-3">
                        <button type="submit" class="btn btn-block btn-primary" name="login_btn">Sign In</button>
                    </div>
                </div>
            </form>
            <!-- End Signin -->
        </div>
        <!-- End Content -->
    </div>
    <!-- End Signup Modal Window -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="javascript:;" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
        <i class="fa fa-arrow-up u-go-to__inner"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/vendor/custombox/dist/custombox.min.js"></script>
    <script src="../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
    <script src="../assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Space -->
    <script src="../assets/js/hs.core.js"></script>
    <script src="../assets/js/components/hs.header.js"></script>
    <script src="../assets/js/components/hs.unfold.js"></script>
    <script src="../assets/js/components/hs.validation.js"></script>
    <script src="../assets/js/helpers/hs.focus-state.js"></script>
    <script src="../assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="../assets/js/components/hs.modal-window.js"></script>
    <script src="../assets/js/components/hs.show-animation.js"></script>
    <script src="../assets/js/components/hs.slick-carousel.js"></script>
    <script src="../assets/js/components/hs.fancybox.js"></script>
    <script src="../assets/js/components/hs.go-to.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991,
                hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    if (!$('body').hasClass('IE11')) {
                        $(this).find('input[type="search"]').focus();
                    }
                }
            });

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#password'
                    }
                }
            });

            // initialization of forms
            $.HSCore.helpers.HSFocusState.init();

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of autonomous popups
            $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
                autonomous: true
            });

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
</body>
</html>