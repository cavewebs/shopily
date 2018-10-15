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
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

        <?php if ($cookieLaw != false) { ?>
        <script type="text/javascript">
            window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
        </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
<link href="<?= base_url('templatecss/custom.css') ?>" rel="stylesheet" />

        
                <!-- Icon css link -->
        <link href="<?= base_url() ?>assets/templates/kiosk/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?= base_url() ?>assets/templates/kiosk/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="<?= base_url() ?>assets/templates/kiosk/css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/templates/kiosk/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            
                        <form method="GET" class="search" id="bigger-search" action="<?= LANG_URL . '/shop' ?>">     
                        <input type="hidden" name="category" value="<?= isset($_GET['category']) ? $_GET['category'] : '' ?>">
                            <input type="hidden" name="in_stock" value="<?= isset($_GET['in_stock']) ? $_GET['in_stock'] : '' ?>">
                            <input type="hidden" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>">
                            <input type="hidden" name="order_new" value="<?= isset($_GET['order_new']) ? $_GET['order_new'] : '' ?>">
                            <input type="hidden" name="order_price" value="<?= isset($_GET['order_price']) ? $_GET['order_price'] : '' ?>">
                            <input type="hidden" name="order_procurement" value="<?= isset($_GET['order_procurement']) ? $_GET['order_procurement'] : '' ?>">
                            <input type="hidden" name="brand_id" value="<?= isset($_GET['brand_id']) ? $_GET['brand_id'] : '' ?>">                       
                            <div class="input-group">
                                <input type="text" class="field" id="search_in_title" value="<?= @$_GET['search_in_title'] ?>" placeholder="<?= lang('search_here') ?>">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" onclick="submitForm()" type="button"><i class="icon-magnifier"></i></button>
                                </span>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top_header_middle">
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
                               <a class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>"></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_right_header">
                            <ul class="header_social">
                              <?php if ($footerSocialFacebook != '') { ?>
                                  <li> <a href="<?= $footerSocialFacebook ?>"><i class=" fa fa-facebook"></i></a></li>
                              <?php } if ($footerSocialTwitter != '') { ?>
                                  <li> <a href="<?= $footerSocialTwitter ?>"><i class="fa fa-twitter"></i></a></li>
                              <?php } if ($footerSocialGooglePlus != '') { ?>
                                  <li> <a href="<?= $footerSocialGooglePlus ?>"><i class="fa fa-instagram"></i></a></li>
                              <?php } if ($footerSocialPinterest != '') { ?>
                                  <li> <a href="<?= $footerSocialPinterest ?>"><i class="fa fa-pinterest"></i></a></li>
                              <?php } if ($footerSocialYoutube != '') { ?>
                                  <li> <a href="<?= $footerSocialYoutube ?>"><i class="fa fa-youtube"></i></a></li>
                              <?php } ?>
                            </ul>
                            <ul class="top_right">
                                <li class="user"><a href="<?= LANG_URL . '/myaccount' ?>"><i class="icon-user icons"></i></a></li>
                                <li class=""><a href="<?= LANG_URL . '/shopping-cart' ?>"><i class="icon-handbag icons"></i><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown submenu categories">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ALL CATEGORIES <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                                <ul class="dropdown-menu">
                                    <?php

                                            function loop_tree_nav($nav_categories, $is_recursion = false)
                                            {
                                                if ($is_recursion == false) {
                                                    ?>
                                                    <span>
                                                        <?php
                                                    }
                                                    foreach ($nav_categories as $nav_category) {
                                                        $children = false;
                                                        if (isset($nav_category['children']) && !empty($nav_category['children'])) {
                                                            $children = true;
                                                        }
                                                        ?> 
                                                        <li class="nav-item"><a href="javascript:void(0);" data-categorie-id="<?= $nav_category['id'] ?>" class="go-category <?= $children == true ? 'mega-title' : '' ?>"><?= $nav_category['name'] ?> </a></li>
                                                        <?php
                                                    }
                                                    if ($is_recursion == false) {
                                                        ?>
                                                    </span>
                                                    <?php
                                                }
                                            }

                                            loop_tree_nav($nav_categories);
                                            ?>
                                    
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item <?= uri_string() == $LANG_URL || uri_string() == MY_LANGUAGE_ABBR . '/' . $LANG_URL ? 'active' : '' ?>">
                                <a class="nav-link dropdown-toggle" href="<?=LANG_URL?>" role="button"> <i class="fa fa-home" aria-hidden="true"></i>
                                Home 
                                </a>
                                
                            </li>
                           <li class="nav-item <?= uri_string() == 'shop' || uri_string() == MY_LANGUAGE_ABBR . '/' . $shopPage ? ' active' : '' ?>">
                                <a class="nav-item" href="<?= LANG_URL . '/shop'  ?>" role="button"> <i class="fa fashoppig-cart" aria-hidden="true"></i><?= lang('shop') ?> 
                                 
                                </a>
                                
                            </li>
                            <?php
                                    if (!empty($nonDynPages)) {
                                        foreach ($nonDynPages as $addonPage) {
                                            ?>
                                            <li<?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="active"' : '' ?> class="nav-item"><a class="nav-link" href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                            <?php
                                        }
                                    }
                                    if (!empty($dynPages)) {
                                        foreach ($dynPages as $addonPage) {
                                            ?>
                                            <li<?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="active"' : ''
                                            ?>  class="nav-item"><a href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>" class="nav-link"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <li<?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>  class="nav-item"><a class="nav-link" href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End Menu Area =================-->
        