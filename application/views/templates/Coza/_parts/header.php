<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?= base_url('assets/img/site-overview.png') ?>" />
        <title><?= $title ?></title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="<?= base_url('templatecss/custom.css') ?>" rel="stylesheet" />

        <?php if ($cookieLaw != false) { ?>
        <script type="text/javascript">
            window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
        </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>

        
       
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
       
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/animate/animate.css">
    <!--===============================================================================================-->  
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/slick/slick.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"href="<?= base_url() ?>assets/templates/coza/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/templates/coza/css/main.css">
    <!--===============================================================================================-->
      </head>
<body class="animsition">
    
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar" style="font-size: x-large;">
                              <?php if ($footerSocialFacebook != '') { ?>
                                  <a href="<?= $footerSocialFacebook ?>"><i class=" fa fa-facebook"></i></a>
                              <?php } if ($footerSocialTwitter != '') { ?>
                                  <a href="<?= $footerSocialTwitter ?>"><i class="fa fa-twitter"></i></a>
                              <?php } if ($footerSocialGooglePlus != '') { ?>
                                  <a href="<?= $footerSocialGooglePlus ?>"><i class="fa fa-instagram"></i></a>
                              <?php } if ($footerSocialPinterest != '') { ?>
                                  <a href="<?= $footerSocialPinterest ?>"><i class="fa fa-pinterest"></i></a>
                              <?php } if ($footerSocialYoutube != '') { ?>
                                  <a href="<?= $footerSocialYoutube ?>"><i class="fa fa-youtube"></i></a>
                              <?php } ?>
                            </div>

                    <div class="right-top-bar flex-w h-full">
                                <?php
                            if ($footerContactPhone != '') {
                                ?>
                            <a class="flex-c-m trans-04 p-lr-25" href="tel:<?php echo $footerContactPhone;  ?>"><i class="fa fa-phone" ></i> Call Us: <span><?php echo $footerContactPhone; ?></span></a>
                            <?php  } ?>
                              <?php
                            if ($footerContactEmail != '') {
                                ?>
                            <a class="flex-c-m trans-04 p-lr-25" href="#"><i class="fa fa-envelope"></i> Email: <span><?php echo $footerContactEmail; ?></span></a>
                            <?php  } ?>
                        </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    
                    <!-- Logo desktop -->       
                    <a class="logo" href="<?=base_url()?>">
                        <img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">

                            <li class=" <?= uri_string() == $LANG_URL || uri_string() == MY_LANGUAGE_ABBR . '/' . $LANG_URL ? 'active' : '' ?>">
                                <a href="<?=LANG_URL?>" role="button"> <i class="fa fa-home" aria-hidden="true"></i>
                                Home 
                                </a>
                                
                            </li>
                           <li class="<?= uri_string() == 'shop' || uri_string() == MY_LANGUAGE_ABBR . '/' . $shopPage ? ' active' : '' ?>">
                                <a  href="<?= LANG_URL . '/shop'  ?>" role="button"> <i class="fa fashoppig-cart" aria-hidden="true"></i><?= lang('shop') ?> 
                                 
                                </a>
                                
                            </li>
                            <?php
                                    if (!empty($nonDynPages)) {
                                        foreach ($nonDynPages as $addonPage) {
                                            ?>
                                            <li <?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="active"' : '' ?> ><a class="nav-link" href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                            <?php
                                        }
                                    }
                                    if (!empty($dynPages)) {
                                        foreach ($dynPages as $addonPage) {
                                            ?>
                                            <li <?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="active"' : ''
                                            ?>  ><a href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>" class="nav-link"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <li <?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>  ><a class="nav-link" href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>  
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->        
            <div class="logo-mobile">
                <a href="<?=base_url()?>">  
                    <img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>">
                    </a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                         <?php
                            if ($footerContactPhone != '') {
                                ?>
                            <a href="tel:<?php echo $footerContactPhone;  ?>"><i class="fa fa-phone"></i> Call Us: <span><?php echo $footerContactPhone; ?></span></a>
                            <?php  } ?>
                              <?php
                            if ($footerContactEmail != '') {
                                ?>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span><?php echo $footerContactEmail; ?></span></a>
                            <?php  } ?>
                            </div>
                </li>
                </ul>

            <ul class="main-menu-m">
                <li>
                    <li class=" <?= uri_string() == $LANG_URL || uri_string() == MY_LANGUAGE_ABBR . '/' . $LANG_URL ? 'active' : '' ?>">
                                <a href="<?=LANG_URL?>" role="button"> <i class="fa fa-home" aria-hidden="true"></i>
                                Home 
                                </a>
                                
                            </li>
                           <li class="<?= uri_string() == 'shop' || uri_string() == MY_LANGUAGE_ABBR . '/' . $shopPage ? ' active' : '' ?>">
                                <a  href="<?= LANG_URL . '/shop'  ?>" role="button"> <i class="fa fashoppig-cart" aria-hidden="true"></i><?= lang('shop') ?> 
                                 
                                </a>
                                
                            </li>
                            <?php
                                    if (!empty($nonDynPages)) {
                                        foreach ($nonDynPages as $addonPage) {
                                            ?>
                                            <li <?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="active"' : '' ?> ><a class="nav-link" href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                            <?php
                                        }
                                    }
                                    if (!empty($dynPages)) {
                                        foreach ($dynPages as $addonPage) {
                                            ?>
                                            <li <?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="active"' : ''
                                            ?>  ><a href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>" class="nav-link"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <li <?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>  ><a class="nav-link" href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>
                                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-01.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>
                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>

                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>

                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>
                
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   