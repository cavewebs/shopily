<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function reduce_words_to($phrase, $max_words, $begin_from = 0) {
   $phrase_array = explode(' ',$phrase);
   if(count($phrase_array) > $max_words && $max_words > 0)
      $phrase = implode(' ',array_slice($phrase_array, $begin_from, $max_words));
   return $phrase;
}                          
if (count($sliderProducts) > 0) {
  ?>
        <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                    <?php 
                        $i = 0;
                        foreach ($sliderProducts as $article) {
            
                        ?>
                <div class="item-slick1" style="background-image: url(<?= base_url('attachments/shop_images/' . $article['image']) ?>);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-201 cl2 respon2"><?= reduce_words_to($article['title'], 3) ?></span>
                            </div>
                                
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h6 class="ltext-101 cl2 p-t-19 p-b-23 respon1"> <?= strip_tags(reduce_words_to($article['basic_description'], 5)) ?> <br /> <?= strip_tags(reduce_words_to($article['basic_description'], 5, 5 )) ?></h6>
                            </div>
                                
                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">

                                    <a class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" href="<?= LANG_URL . '/' . $article['url'] ?>">Buy Now</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                         <?php $i++; } ?>
            </div>
        </div>
    </section>
                                 <?php  }?>

        <!--================End Slider Area =================-->
        
        <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>

        
  <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All 
                    </button>

                    
                        <?php

                        foreach ($nav_categories as $nav_categori) {
                                                        
                            ?> 
                            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?= $nav_categori['id'] ?>"><?= $nav_categori['name'] ?></button>
                            <?php
                        }
                    ?>
                    </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                         Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>
                </div>

            <div class="row isotope-grid">
                         <?php
                        if (!empty($products)) {
                                    $i = 0;
                                    foreach ($products as $dproduct) {
                            ?>
                        <div  class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $dproduct['shop_categorie'] ?>">
                            <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                                    <img src="<?= base_url('attachments/shop_images/' . $dproduct['image']) ?> " class="product-img" alt="">
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View 
                        </a>
                    </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    
                                    <a class="add_cart_btn" href="<?= LANG_URL . '/' . $dproduct['url'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"><?= $dproduct['title'] ?></a>

                                <span class="stext-105 cl3"><del><?php if ($dproduct['old_price'] !=''){ echo '₦'. number_format($dproduct['old_price']); } ?></del>  ₦<?= number_format($dproduct['price']) ?>
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                    <?php } }?>
                    </div>
                <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">


                    </div>
        
                <div class="from_blog_inner">
                    <div class="c_main_title">
                        <h2 style="text-transform: capitalize;"><?= lang('blog_posts') ?></h2>
                    </div>
                    <div class="row">
                     <?php
                        $i = 0;
                        foreach ($lastBlogs as $post) {
                            ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item img-blog">
                                <img class="" src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="">
                            </div>
                            
                            <div class="p-t-32">
                                <h4><a href="<?= LANG_URL . '/blog/' . $post['url'] ?>"  class="stext-120 cl8 hov-cl1 trans-04"><?= $post['title'] ?></h4></a>
                                <p class="stext-117 cl6">
                                    <?= character_limiter($post['description'], 155) ?></p>

                                <div class="flex-w flex-sb-m p-t-18">
                                    <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                        <span>
                                            <span class="cl12 m-l-4 m-r-6"></span>
                                        </span>

                                        <span>
                                            on <?= date('M d, Y', $post['time']) ?>
                                        </span>
                                    </span>

                                    <a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                        Continue Reading

                                        <i class="fa fa-long-arrow-right m-l-9"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                     <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Form Blog Area =================-->
        
       