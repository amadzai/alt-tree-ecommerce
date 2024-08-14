<?php
require 'database.php';

if (isset($_POST['register_btn'])) {
    register();
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
    <title>Alt-Tree | Home</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logos/LogoWhite.png">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">


    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Space Theme -->
    <link rel="stylesheet" href="assets/css/theme.css">
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
                        <a class="navbar-brand u-header__navbar-brand" href="index.php" aria-label="Alt-Tree">
                            <img class="u-header__navbar-brand-default" src="assets/img/logos/LogoNameWhiteSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-on-scroll py-2" src="assets/img/logos/LogoNameSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-mobile float-right pt-2" src="assets/img/logos/Logo.png" alt="Logo">
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
                                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="pages/shopView.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="shopSubMenu">
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

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero Section -->
        <div class="gradient-overlay-half-dark-v1 bg-img-hero" style="background-image: url(assets/img/background/Background1F.png); max-width: 100%; height: auto;">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-85vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">
                        <div class="col-lg-5 mb-7 mb-lg-0">
                            <!-- Title -->
                            <span class="d-block text-white text-uppercase mb-2">Join the change</span>
                            <h1 class="display-4 font-size-48--md-down text-white mb-0">A new way to shop, through recycling.</h1>
                            <!-- End Title -->
                        </div>

                        <div class="col-lg-5">
                            <!-- Signup Form -->
                            <div class="bg-white shadow-sm rounded p-6">
                                <form class="js-validate" action="index.php" method="post">

                                    <?php echo display_error(); ?>

                                    <div class="mb-4">
                                        <h2 class="h4">Sign up to shop</h2>
                                    </div>

                                    <!-- Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="text" class="form-control form__input" name="username" required placeholder="Enter Your Username" aria-label="Enter your Username">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="email" class="form-control form__input" name="email" required placeholder="Enter Your Email Address" aria-label="Enter your email address">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="password" class="form-control form__input" name="password_1" required placeholder="Enter Your Password" aria-label="Enter your password">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="password" class="form-control form__input" name="password_2" required placeholder="Confirm Your Password" aria-label="Confirm your password">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <div class="form-group">
                                        <label class="form-check-label"><input type="checkbox" name="check" value="yes"> I accept the <a href="#" class="text-success">Terms of Use</a> &amp; <a href="#" class="text-success">Privacy Policy</a></label>
                                    </div>


                                    <button type="submit" class="btn btn-block btn-primary" name="register_btn">Get Started</button>
                                </form>
                            </div>
                            <!-- End Signup Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Works Section -->
        <div class="bg-gray-100">
            <div class="container space-1 space-2--lg">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <span class="u-label u-label--sm u-label--purple mb-3">What we do</span>
                    <h2 class="h3">Experience how we help keep the world sustainable through recycling and refurbishing.</h2>
                </div>
                <!-- End Title -->

                <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
                    <div class="card border-0 mb-3">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/recycle.png" alt="A recycling icon">
                            <h4 class="h5 mb-1">Recycle</h4>
                            <p class="mb-0">We buy and sell recycled products. Alt-Tree shops and buildings also practice recycling.</p>
                        </div>
                        <!-- End Works -->
                    </div>

                    <div class="card border-0 mb-3">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/reuse.png" alt="A refurbish icon">
                            <h4 class="h5 mb-1">Refurbish</h4>
                            <p class="mb-0">We buy and sell refurbsihed products. Certain products are refurbished in-house.</p>
                        </div>
                        <!-- End Works -->
                    </div>

                    <div class="card border-0 mb-3">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/biodegradable.png" alt="A biodegradable icon">
                            <h4 class="h5 mb-1">Biodegradable</h4>
                            <p class="mb-0">Certain Alt-Tree products are made up of biodegradable materials.</p>
                        </div>
                        <!-- End Works -->
                    </div>
                </div>

                <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
                    <div class="card border-0 mb-3 mb-lg-0">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/agreement.png" alt="An icon of two people shaking hands, conveying partnership">
                            <h4 class="h5 mb-1">Partnership</h4>
                            <p class="mb-0">Alt-Tree partners with recycling centers and customers who can donate to earn vouchers.</p>
                        </div>
                        <!-- End Works -->
                    </div>

                    <div class="card border-0 mb-3 mb-lg-0">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/presentation.png" alt="An icon of a person presenting on a board">
                            <h4 class="h5 mb-1">Education</h4>
                            <p class="mb-0">Learn with Alt-Tree is an educational program that spreads awareness on the importance of recycling.</p>
                        </div>
                        <!-- End Works -->
                    </div>

                    <div class="card border-0">
                        <!-- Works -->
                        <div class="card-body border border-bottom-0 rounded-top text-center p-5">
                            <img class="u-md-avatar rounded mb-4" src="assets/img/icons/donate.png" alt="A donations icon">
                            <h4 class="h5 mb-1">Donations</h4>
                            <p class="mb-0">50% of Alt-Tree earnings are donated to environmental organizations and to those in need.</p>
                        </div>
                        <!-- End Works -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Works Section -->

        <!-- FAQ Section -->
        <div class="container space-1 space-1--lg">
            <div class="row justify-content-lg-between">
                <div class="col-lg-4 mb-7 mb-lg-0">
                    <!-- Info -->
                    <div class="bg-dark shadow-sm rounded p-5 mt-lg-9">
                        <h3 class="text-white">Have a question?</h3>
                        <p class="text-white-70">Call us and we'll be happy to help.</p>

                        <address class="mb-0">
                            <span class="d-block text-white-70 font-weight-medium py-1">+6 (03) 274-3345</span>
                            <span class="d-block text-white-70 font-weight-light py-1">Monday - Friday</span>
                            <span class="d-block text-white-70 font-weight-light py-1">9AM - 6PM Malaysian Time (UTC +8:00)</span>
                        </address>
                    </div>
                    <!-- End Info -->
                </div>

                <div class="col-lg-7">
                    <!-- Title -->
                    <div class="mb-4">
                        <h2 class="h3">Frequently Asked Questions</h2>
                    </div>
                    <!-- End Title -->

                    <!-- Accordion -->
                    <div class="mb-5" id="basicsAccordion">
                        <div class="card card-collapse mb-3">
                            <div class="card-header card-collapse__header" id="basicsHeadingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                        What's the difference between Alt-Tree's recycled and refurbished products?

                                        <span class="card-collapse__btn-arrow">
                                            <i class="fa fa-arrow-down card-collapse__btn-arrow-inner"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                <div class="card-body card-collapse__body">
                                    Alt-Tree's recycled products are items either donated by recycling centers or customers that are resold in the condition that it was received. Alt-Tree's refurbished products are items either donated by recycling centers or customers that are in bad condition which is then repaired or retouched by Alt-Tree before being sold.
                                </div>
                            </div>
                        </div>

                        <div class="card card-collapse mb-3">
                            <div class="card-header card-collapse__header" id="basicsHeadingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                        How does the Alt-Tree Partnership program work?

                                        <span class="card-collapse__btn-arrow">
                                            <i class="fa fa-arrow-down card-collapse__btn-arrow-inner"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                                <div class="card-body card-collapse__body">
                                    Customers, recycling centers, or organizations can donate items to Alt-Tree that will either be recycled or refurbished before being sold. Alt-Tree partners will then receive vouchers and/or a percentage of the earnings.
                                </div>
                            </div>
                        </div>

                        <div class="card card-collapse mb-3">
                            <div class="card-header card-collapse__header" id="basicsHeadingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                        What is Learn with Alt-Tree?

                                        <span class="card-collapse__btn-arrow">
                                            <i class="fa fa-arrow-down card-collapse__btn-arrow-inner"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                                <div class="card-body card-collapse__body">
                                    Learn with Alt-Tree is an educational program that provides education on recycling, refurbishing, sustainability and their importance. The program is free for anyone to join and is conducted through live events or blog posts.
                                </div>
                            </div>
                        </div>

                        <div class="card card-collapse">
                            <div class="card-header card-collapse__header" id="basicsHeadingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                        How do I start shopping?

                                        <span class="card-collapse__btn-arrow">
                                            <i class="fa fa-arrow-down card-collapse__btn-arrow-inner"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                <div class="card-body card-collapse__body">
                                    Customers can view Alt-Tree's products without signing up. However, to add items to your shopping cart, customers will need to create an account and log in. This is so that we can provide benefits and rewards to customers who signed up.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
        <!-- End FAQ Section -->

        <!-- News Section -->
        <div class="bg-gray-100">
            <div class="container space-1 space-1--lg">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <span class="u-label u-label--sm u-label--purple mb-3">News</span>
                    <h2 class="h3">Read our news &amp; blogs</h2>
                    <p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
                </div>
                <!-- End Title -->

                <div class="card-deck d-block d-lg-flex">
                    <article class="card border-0 mb-5">
                        <div class="card-body row align-items-stretch no-gutters p-0">
                            <!-- News Blog Card -->
                            <div class="col-7 border border-right-0 rounded-left">
                                <div class="p-5">
                                    <h2 class="h5 mb-3">
                                        <a href="">Learn with Alt-Tree | Special Needs Program</a>
                                    </h2>
                                    <p class="mb-0">Here at Alt-Tree, we believe that everyone has the right to learn.</p>
                                </div>
                            </div>
                            <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="assets/img/background/News1.jpg"></div>
                        </div>
                        <!-- End News Blog Card -->
                    </article>

                    <article class="card border-0 mb-5">
                        <div class="card-body row align-items-stretch no-gutters p-0">
                            <!-- News Blog Card -->
                            <div class="col-7 border border-right-0 rounded-left">
                                <div class="p-5">
                                    <h2 class="h5 mb-3">
                                        <a href="">Alt-Tree Morib Beach Clean-Up Day </a>
                                    </h2>
                                    <p class="mb-0">Last week, we had a clean-up day with volunteers from...</p>
                                </div>
                            </div>
                            <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="assets/img/background/News2.jpg"></div>
                        </div>
                        <!-- End News Blog Card -->
                    </article>
                </div>

                <div class="card-deck d-block d-lg-flex">
                    <article class="card border-0 mb-5">
                        <div class="card-body row align-items-stretch no-gutters p-0">
                            <!-- News Blog Card -->
                            <div class="col-7 border border-right-0 rounded-left">
                                <div class="p-5">
                                    <h2 class="h5 mb-3">
                                        <a href="">Family Alt-Tree Day</a>
                                    </h2>
                                    <p class="mb-0">The members of Alt-Tree brought their families to plant...</p>
                                </div>
                            </div>
                            <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="assets/img/background/News3.jpg"></div>
                        </div>
                        <!-- End News Blog Card -->
                    </article>

                    <article class="card border-0 mb-5">
                        <div class="card-body row align-items-stretch no-gutters p-0">
                            <!-- News Blog Card -->
                            <div class="col-7 border border-right-0 rounded-left">
                                <div class="p-5">
                                    <h2 class="h5 mb-3">
                                        <a href="">Recycling Art at Paradigm Mall</a>
                                    </h2>
                                    <p class="mb-0">The artists of Malaysia's environmental body worked...</p>
                                </div>
                            </div>
                            <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="assets/img/background/News4.jpg"></div>
                        </div>
                        <!-- End News Blog Card -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End News Section -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

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
                    <a class="d-inline-block my-6" href="index.php" aria-label="Space">
                        <img src="assets/img/logos/LogoNameWhite.png" alt="Logo" style="width: 500px; max-width: 100%;">
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
            <form action="index.php" method="post" class="pt-5">
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
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/dist/custombox.min.js"></script>
    <script src="assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Space -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/components/hs.unfold.js"></script>
    <script src="assets/js/components/hs.validation.js"></script>
    <script src="assets/js/helpers/hs.focus-state.js"></script>
    <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="assets/js/components/hs.modal-window.js"></script>
    <script src="assets/js/components/hs.show-animation.js"></script>
    <script src="assets/js/components/hs.slick-carousel.js"></script>
    <script src="assets/js/components/hs.fancybox.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

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