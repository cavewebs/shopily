<!-- 
Kasuwa template, a shop.online tempate 
inspired by by W3layouts Furnyish
 -->
<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?= base_url('assets/img/site-overview.png') ?>" />
        <title><?= $title ?></title>
        <link href="<?= base_url('templatecss/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="<?= base_url('templatejs/jquery-1.11.1.min.js') ?>"></script>
        <!-- Custom Theme files -->
        <link href="<?= base_url('templatecss/style.css')?>" rel='stylesheet' type='text/css' />
        <link href="<?= base_url('templatecss/slick.css')?>" rel='stylesheet' type='text/css' />
        <link href="<?= base_url('templatecss/animate.css')?>" rel='stylesheet' type='text/css' />
        <link href="<?= base_url('templatecss/util.min.css')?>" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
       <!-- start menu -->
        <link href="<?= base_url('templatecss/megamenu.css')?>" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="<?= base_url('templatejs/megamenu.js')?>"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="<?= base_url('templatejs/menu_jquery.js')?>"></script>
        <script src="<?= base_url('templatejs/main.js')?>"> </script>
          <script src="<?= base_url('templatejs/responsiveslides.min.js')?>"></script>
          
        </head>
<body>
<!-- header -->
<div class="top_bg">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>
                    <li><a href="#">help</a></li>|
                    <li><a href="/contact">Contact</a></li>|
                    <!-- <li><a href="/">Track Order</a></li> -->
                </ul>
            </div>
            <div class="top_left">
                <ul>
                    <li class="top_link"><?php
                        if ($footerContactPhone != '') {
                            ?>
                            <?= lang('call_us') . ' ' . $footerContactPhone ?>
                        <?php } ?>
                    </li>|
                    <li class="top_link"><a href="<?= LANG_URL . '/myaccount' ?>">
                        <?= lang('my_acc') ?>
                    </a></li>|                  
                </ul>
                <div class="social">
                    <ul>
                         <?php if ($footerSocialFacebook != '') { ?>
                            <li> <a href="<?= $footerSocialFacebook ?>"><i class="facebook"></i></a></li>
                        <?php } if ($footerSocialTwitter != '') { ?>
                            <li> <a href="<?= $footerSocialTwitter ?>"><i class="twitter"></i></a></li>
                        <?php } if ($footerSocialGooglePlus != '') { ?>
                            <li> <a href="<?= $footerSocialGooglePlus ?>"><i class="google-plus"></i></a></li>
                        <?php } if ($footerSocialPinterest != '') { ?>
                            <li> <a href="<?= $footerSocialPinterest ?>"><i class="pinterest"></i></a></li>
                        <?php } if ($footerSocialYoutube != '') { ?>
                            <li> <a href="<?= $footerSocialYoutube ?>"><i class="youtube"></i></a></li>
                        <?php } ?>
                        
                        <!-- <li><a href="#"><i class="facebook"></i></a></li>
                        <li><a href="#"><i class="twitter"></i></a></li>
                        <li><a href="#"><i class="dribble"></i></a></li>    
                        <li><a href="#"><i class="google"></i></a></li>  -->                                    
                    </ul>
                </div>
            </div>
                <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="header_top">
     <div class="container">
         <div class="logo">
            <a href="<?= LANG_URL ?>">
                <img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" alt="<?= $title ?>">
            </a>             
         </div>
         <div class="header_right">
            <?php if (isset($_SESSION['logged_user'])) { ?>
                <div class="login">
                <a href="<?= LANG_URL . '/logout' ?> "> Logout </a>
                </div> 

            <?php } else { ?>
             <div class="login">
                 <a href="<?= LANG_URL . '/login' ?>"> <?= lang('login') ?> </a> &nbsp; &nbsp;
             </div>
             <!-- <div class="login">
                 <a href="<?= LANG_URL . '/register' ?>"> <?= lang('register') ?> </a>
             </div> -->
            <?php } ?>
             <div class="cart box_1">
                <a href="<?= LANG_URL . '/checkout' ?> ">
                    <h3> <span> <?= CURRENCY. $cartItems['finalSum']?></span> 
                    (<span class=""><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span> items)<img src="<?= base_url('template/imgs/bag.png')?>" alt=""></h3>
                </a>    
                <!-- <p><a href="javascript();" class="simpleCart_empty">Empty cart</a></p> -->
                <div class="clearfix"> </div>
             </div> 


         </div>
          <div class="clearfix"></div>  
     </div>
</div>
<!--cart-->
     
<!------>
<div class="mega_nav">
     <div class="container">
         <div class="menu_sec">
         <!-- start header menu -->
         <ul class="megamenu skyblue">
             <li class="active grid"><a class="color1" href="index.html">Home</a></li>
             <?php

            function loop_tree_nav($nav_categories, $is_recursion = false)
            {
                if ($is_recursion == false) {
                    ?>
                    <!-- <span> -->
                        <?php
                    }
                   
                    foreach ($nav_categories as $nav_category) {
                        $children = false;
                        if (isset($nav_category['children']) && !empty($nav_category['children'])) {
                            $children = true;
                        }
                      ?> 

                <li class="grid"> <a class="color2" href="javascript:void(0);" data-categorie-id="<?= $nav_category['id'] ?>"><?= $nav_category['name'] ?></a> 
                </li>
                        <?php
                        if ($children === true) {
                            loop_tree_nav($nav_category['children'], true);
                        }
                    }
                    if ($is_recursion == false) {
                        ?>
                    <!-- </span> -->
                    <?php
                                }
                            }

                            loop_tree_nav($nav_categories);
                            ?> 

               </ul> 
               <div class="search">
                 <form>
                    <input type="text" value="" placeholder="Search...">
                    <input type="submit" value="">
                    </form>
             </div>
             <div class="clearfix"></div>
         </div>
      </div>
</div>
<!------>