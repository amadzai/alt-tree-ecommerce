<?php
require '../database.php';

if (isset($_POST['save_btn'])) {
    updateAdmin();
    header("Location: adminProfile.php"); 
}

if (isset($_POST['cancel_btn'])) {
    header("Location:adminProfile.php");
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    if ($user['user_type'] === 'admin') {
        $id = $user['id'];
        $username = $user['username'];
        $pictureSource = $user['pictureSource'];
        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $email = $user['email'];
        $phone_number = $user['phone_number'];
        $address = $user['address'];
        $user_type = $user['user_type'];
    }
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
    <title>Alt-Tree | Admin Profile</title>

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
                        <a class="navbar-brand u-header__navbar-brand" href="adminHome.php" aria-label="Alt-Tree">
                            <img class="u-header__navbar-brand-default" src="../assets/img/logos/LogoNameWhiteSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-on-scroll py-2" src="../assets/img/logos/LogoNameSM.png" alt="Logo">
                            <img class="u-header__navbar-brand-mobile float-center pt-0" src="../assets/img/logos/Logo.png" alt="Logo">
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
                            <?php if (isset($_SESSION['user'])) : ?>

                                <li class="nav-item u-header__sub-menu-list-item dropdown-item">
                                    <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="adminShop.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="shopSubMenu">
                                        Shop
                                    </a>
                                <li class="nav-item u-header__sub-menu-list-item dropdown-item ">
                                    <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="adminProfile.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">
                                        Profile
                                    </a>
                                <li class="nav-item u-header__sub-menu-list-item dropdown-item ">
                                    <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="../index.php?logout=true" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">
                                        Logout
                                    </a>
                                <?php
                            else : ?>
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
                            <?php
                            endif;
                            ?>
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
        <div class="gradient-overlay-half-dark-v1 bg-img-hero pb-3" style="background-image: url(../assets/img/background/Background2.jpg); max-width: 100%; height: auto;">
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
        <?php if (!isset($_GET['edit_profile'])) { ?>
            <div class="container space-2 space-2--lg">
                <form action="" class="js-validate row">
                    <div class="col-lg-7 mb-7 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h6>User Image</h6>
                                <div class="js-form-message">
                                    <div class="js-focus-state input-group input-group form">
                                        <img src="<?php echo (isset($pictureSource) && !empty($pictureSource)) ? "../assets/img/user/" . $pictureSource : "../assets/img/user/blank-avatar.png" ?>" alt="A blank avatar image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">

                        <?php echo display_error(); ?>
                        <!-- Content -->
                        <h6>Username</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($username) && !empty($username)) ? $username : "" ?></p>
                            </div>
                        </div>

                        <h6>Email</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($email) && !empty($email)) ? $email : "" ?></p>
                            </div>
                        </div>

                        <h6>First Name</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($first_name) && !empty($first_name)) ? $first_name : "" ?></p>
                            </div>
                        </div>

                        <h6>Last Name</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($last_name) && !empty($last_name)) ? $last_name : "" ?></p>
                            </div>
                        </div>

                        <h6>Phone Number</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($phone_number) && !empty($phone_number)) ? $phone_number : "" ?></p>
                            </div>
                        </div>

                        <h6>Address</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <p><?php echo (isset($address) && !empty($address)) ? $address : "" ?></p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary" name="edit_btn"><a class="text-white" href="adminProfile.php?edit_profile=true">Edit Profile</a></button>
                        </div>
                    </div>
                </form>
            </div>
        <?php } else { ?>
            <!-- User Section -->
            <div class="container space-2 space-2--lg">
                <form action="" class="js-validate row" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-7 mb-7 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h6>User Image</h6>
                                <div class="js-form-message">
                                    <div class="js-focus-state input-group input-group form">
                                        <img src="<?php echo (isset($pictureSource) && !empty($pictureSource)) ? "../assets/img/user/" . $pictureSource : "../assets/img/user/blank-avatar.png" ?>" alt="A blank avatar image" class="img-fluid">
                                        <div class="">
                                            <input class="form-control" type="file" id="pictureSource" name="pictureSource">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">

                        <?php echo display_error(); ?>
                        <!-- Content -->
                        <h6>Username</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="username" placeholder="Enter Username" aria-label="Enter Product Name" required value="<?php echo (isset($username) && !empty($username)) ? $username : "" ?>">
                            </div>
                        </div>

                        <h6>Email</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="email" class="form-control form__input" name="email" placeholder="Enter Email" aria-label="Enter Product Name" required value="<?php echo (isset($email) && !empty($email)) ? $email : "" ?>">
                            </div>
                        </div>

                        <h6>First Name</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="first_name" placeholder="Enter First Name" aria-label="Enter Product Name" required value="<?php echo (isset($first_name) && !empty($first_name)) ? $first_name : "" ?>">
                            </div>
                        </div>

                        <h6>Last Name</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="last_name" placeholder="Enter Last Name" aria-label="Enter Product Name" required value="<?php echo (isset($last_name) && !empty($last_name)) ? $last_name : "" ?>">
                            </div>
                        </div>

                        <h6>Phone Number</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="phone_number" placeholder="Enter Phone Number" aria-label="Enter Product Name" required value="<?php echo (isset($phone_number) && !empty($phone_number)) ? $phone_number : "" ?>">
                            </div>
                        </div>

                        <h6>Address</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="text" class="form-control form__input" name="address" placeholder="Enter Address" aria-label="Enter Product Name" required value="<?php echo (isset($address) && !empty($address)) ? $address : "" ?>">
                            </div>
                        </div>

                        <h6>New Password</h6>
                        <div class="js-form-message">
                            <div class="js-focus-state input-group input-group form">
                                <input type="password" class="form-control form__input" name="password" placeholder="Enter New Password" aria-label="Enter Product Name">
                            </div>
                        </div>

                        
                        <div class="mt-4">
                            <button class="btn btn-primary" name="cancel_btn"><a class="text-white">Cancel</a></button>
                            <button class="btn btn-primary" name="save_btn"><a class="text-white">Save Edit</a></button>
                        </div>

                        <!-- User Type -->
                        <div style="visibility:hidden">
                            <input type="text" class="form-control form__input" name="user_type" placeholder="Enter User Type" aria-label="Enter Product Name" required value="<?php echo isset($user_type) && !empty($user_type) ? $user_type : "" ?>">
                        </div>

                        <!-- Product ID -->
                        <div style="visibility:hidden;">
                            <input type="number" min="0" class="form-control form__input" name="id" placeholder="Enter Product Stock" aria-label="product stock" required value="<?php echo isset($id) && !empty($id) ? $id : "" ?>">
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
        <!-- End User Section -->
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
                    <a class="d-inline-block my-6" href="adminHome.php" aria-label="Space">
                        <img src="../assets/img/logos/LogoNameWhite.png" alt="Logo" style="width: 500px; max-width: 100%;">
                    </a>
                    <!-- End Logo -->
                    <p class="small text-muted">All rights reserved. &copy; Alt-Tree Corporation Inc. 2022.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

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