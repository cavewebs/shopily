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
        <!--================Slider Area =================-->
  <!--================Main Content Area =================-->
           
                <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                    <ul>
                    <?php 
                        $i = 0;
                        foreach ($sliderProducts as $article) {
            
                        ?>

                        <li data-index="rs-158<?=$i?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="<?= base_url('attachments/shop_images/' . $article['image']) ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('attachments/shop_images/' . $article['image']) ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box">
                                <div class="tp-caption tp-resizeme first_text" 
                                data-x="['right','right','right','center','center']" 
                                data-hoffset="['50','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['60','60','60','80','95']" 
                                data-fontsize="['54','54','54','40','40']"
                                data-lineheight="['64','64','64','50','35']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']"
                                style="z-index: 8;font-family: Montserrat,sans-serif;font-weight:700;color:#29263a; background:rgba(255, 255, 255, 0.53); width: auto; margin-right: 20px; padding:10px; border-radius: 25% "><?= reduce_words_to($article['title'], 3) ?></div>

                                <div class="tp-caption tp-resizeme secand_text" 
                                    data-x="['right','right','right','center','center',]" 
                                    data-hoffset="['0','0','0','0']" 
                                    data-y="['top','top','top','top']" 
                                    data-voffset="['200','255','255','230','220']"  
                                    data-fontsize="['48','48','48','48','36']"
                                    data-lineheight="['52','52','52','46']"
                                    data-width="['450','450','450','450','450']"
                                    data-height="none"
                                    data-whitespace="normal"
                                    data-type="text" 
                                    data-responsive_offset="on"
                                    data-transform_idle="o:1;"
                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                    data-textAlign="['left','left','left','left','left','center']"
                                    ><?= strip_tags(reduce_words_to($article['basic_description'], 3)) ?> <br /> <?= strip_tags(reduce_words_to($article['basic_description'], 3, 3 )) ?>
                                </div>

                                <div class="tp-caption tp-resizeme third_btn" 
                                    data-x="['right','right','right','center','center','center']" 
                                    data-hoffset="['0','0','0','0']" 
                                    data-y="['top','top','top','top']" data-voffset="['385','385','385','385','350']" 
                                    data-width="['450','450','450','auto','auto']"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-type="text" 
                                    data-responsive_offset="on" 
                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                    data-textAlign="['left','left','left','left','left','center']">
                                    <a class="checkout_btn" href="<?= LANG_URL . '/' . $article['url'] ?>">Buy Now</a>
                                </div>
                            </div>
                        </li>
                         <?php $i++; } ?>
                    </ul>
                </div>
            </div>
        </section>
                                 <?php  }?>

        <!--================End Slider Area =================-->
        
        <!--================Feature Add Area =================-->
        <section class="feature_add_area">
            <div class="container">
                <div class="row feature_inner">
                    <div class="col-lg-5">
                        <div class="f_add_item">
                            <div class="f_add_img"><img class="img-fluid" src="<?= base_url() ?>assets/templates/kiosk/img/feature-add/f-add-1.jpg" alt=""></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                            <div class="sale">Sale</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="f_add_item right_dir">
                            <div class="f_add_img"><img class="img-fluid" src="<?= base_url() ?>assets/templates/kiosk/img/feature-add/f-add-2.jpg" alt=""></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                            <div class="off">10% off</div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="f_add_item">
                            <div class="f_add_img"><img class="img-fluid" src="<?= base_url() ?>assets/templates/kiosk/img/feature-add/f-add-3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Add Area =================-->
        
        <!--================Our Latest Product Area =================-->
        <section class="our_latest_product">
            <div class="container">
                <div class="s_m_title">
                    <h2>Our Latest Product</h2>
                </div>
                <div class="l_product_slider owl-carousel">
                    <?php
                        if (!empty($products)) {
                                    $i = 0;
                                    foreach ($newProducts as $product) {
                            ?>
                    <div class="item">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?> " class="product-img" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="<?= LANG_URL . '/' . $product['url'] ?>">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4><?= $product['title'] ?></h4>
                                <h5><del><?php if ($product['old_price'] !=''){ echo '₦'. $product['old_price']; } ?></del>  ₦<?= $product['price'] ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                </div>
            </div>
        </section>
        <!--================End Our Latest Product Area =================-->
        
        <!--================Feature Big Add Area =================-->
        <section class="feature_big_add_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="f_add_item white_add">
                            <div class="f_add_img"><img class="img-fluid" src="<?= base_url() ?>assets/templates/kiosk/img/feature-add/f-add-4.jpg" alt=""></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="f_add_item white_add">
                            <div class="f_add_img"><img class="img-fluid" src="<?= base_url() ?>assets/templates/kiosk/img/feature-add/f-add-5.jpg" alt=""></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Big Add Area =================-->
        
       <!--================Latest Product isotope Area =================-->
        <section class="fillter_latest_product">
            <div class="container">
                <div class="single_c_title">
                    <h2>Our Products</h2>
                </div>
                <div class="fillter_l_p_inner">
                    <ul class="fillter_l_p">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <?php

                        foreach ($nav_categories as $nav_categori) {
                                                        
                            ?> 
                            <li data-filter=".<?= $nav_categori['id'] ?>"><a href="#"><?= $nav_categori['name'] ?> </a></li>
                            <?php
                        }
                    ?>
                    </ul>
                    <div class="row isotope_l_p_inner">
                         <?php
                        if (!empty($products)) {
                                    $i = 0;
                                    foreach ($products as $dproduct) {
                            ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 <?= $dproduct['shop_categorie'] ?>">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="<?= base_url('attachments/shop_images/' . $dproduct['image']) ?> " class="product-img" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="<?= LANG_URL . '/' . $dproduct['url'] ?>">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                     <h4><?= $dproduct['title'] ?></h4>
                                    <h5><del><?php if ($dproduct['old_price'] !=''){ echo '₦'. number_format($dproduct['old_price']); } ?></del>  ₦<?= number_format($dproduct['price']) ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } }?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest Product isotope Area =================-->
        
        <!--================Form Blog Area =================-->
        <section class="from_blog_area">
            <div class="container">
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
                                <div class="f_blog_text">
                                    <h5> <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>">Read Post </a></h5>
                                    <p class="f_blog_title"><?= character_limiter($post['title'], 85) ?></p>
                                    <h6><?= date('M d, Y', $post['time']) ?></h6>
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
        
       