<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--================Product Details Area =================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="product_details_slider">
                    <div id="product_slider" class="rev_slider" data-version="5.3.1.6">
                        <ul>    <!-- SLIDE  -->
                            <li data-index="rs-28" data-transition="scaledownfrombottom" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?= base_url('/attachments/shop_images/' . $product['image']) ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>"  alt=""  width="1920" height="1080" data-lazyload="img/product/product-details/p-details-big-1.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                        <?php
            if ($product['folder'] != null) {
                $dir = "attachments/shop_images/" . $product['folder'] . '/';
                ?>
                    <?php
                    if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {
                            $i = 1;
                            while (($file = readdir($dh)) !== false) {
                                if (is_file($dir . $file)) {
                                    ?>

                           <li data-index="rs-<?= $i ?>" data-transition="scaledownfrombottom" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?= base_url($dir . $file) ?>"  data-rotate="0"  data-saveperformance="off"  data-title="The Dreaming Girl" data-param1="<?= str_replace('"', "'", $product['title']) ?>" data-param2="Lol" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url($dir . $file) ?>" data-num="<?= $i ?>"  alt="<?= str_replace('"', "'", $product['title']) ?>"  width="1920" height="1080" data-lazyload="<?= base_url($dir . $file) ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <?php
                                    $i++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
            }
            ?>
                        </ul>
                    </div>
                </div>
            </div>
         <div class="col-lg-7">
                        <div class="product_details_text">
                            <h3><?= $product['title'] ?></h3>
                            <h6><?php  if ($publicQuantity == 1) { ?>
                                
                                <?= lang('in_stock') ?>: In <span><?= $product['quantity'] ?>
                            <?php } ?></span>

                            </h6>
                            
                            <h4> <span style="font-size: small; "> <del style="color: red"><?php if ($product['old_price'] !=''){ echo '₦'. number_format($product['old_price']); } ?></del>  </span> ₦<?= number_format($product['price']) ?>
                            </h4>
                            <p>
                                 
                            <div class="row row-info">
                                <div class="col-sm-6"><b><?= lang('num_added_to_cart') ?>:</b></div>
                                <div class="col-sm-6"><?php
                                    @$result = array_count_values($_SESSION['shopping_cart']);
                                    if (isset($result[$product['id']]))
                                        echo $result[$product['id']];
                                    else
                                        echo 0;
                                    ?></div>
                                <div class="col-sm-12 border-bottom"></div>
                            </div>
                            <?php if ($publicDateAdded == 1) { ?>
                                <div class="row row-info">
                                    <div class="col-sm-6"><b><?= lang('added_on') ?>:</b></div>
                                    <div class="col-sm-6"><?= date('m.d.Y', $product['time']) ?></div>
                                    <div class="col-sm-12 border-bottom"></div>
                                </div>
                            <?php } ?>
                            <div class="row row-info">
                                <div class="col-sm-6"><b><?= lang('in_category') ?>:</b></div>
                                <div class="col-sm-6">
                                    <a href="javascript:void(0);" class="go-category btn-blue-round" data-categorie-id="<?= $product['shop_categorie'] ?>">
                                        <?= $product['categorie_name'] ?>
                                    </a>
                                </div>
                            </div>

                            </p>                    
                        <?php if ($product['quantity'] > 0) { ?>
                            <div class="custom">

                                <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/checkout' ?>" class="add-to-cart btn-add">
                                    <span class="add_cart_btn"><?= lang('buy_now') ?></span>
                                </a>
                            <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="add-to-cart btn-add">
                                <span class="add_cart_btn"><?= lang('add_to_cart') ?></span>
                            </a>
                        <?php } else { ?>
                            <div class="alert alert-info"><?= lang('out_of_stock_product') ?></div>
                        <?php } ?>
                            </div>
                            <div class="shareing_icon">
                                <h5>share :</h5>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
            <div class="container">
                <nav class="tab_menu">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p><?= $product['description'] ?></p>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================End Related Product Area =================-->
        <section class="related_product_area">
            <div class="container">
                <div class="related_product_inner">
                    <h2 class="single_c_title"><?= lang('oder_from_category') ?></h2>
                    <div class="row">
                        <?php
                            if (!empty($sameCagegoryProducts)) {
                                foreach ($sameCagegoryProducts as $prod) {
                                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 <?= $prod['shop_categorie'] ?>">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="<?= base_url('attachments/shop_images/' . $prod['image']) ?> " class="product-img" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    
                                    <li><a class="add_cart_btn" href="<?= LANG_URL . '/' . $prod['url'] ?>">Add To Cart</a></li>
                                     
                                </ul>
                                 <h4><?= $prod['title'] ?></h4>
                                <h5><del><?php if ($prod['old_price'] !=''){ echo '₦'. number_format($prod['old_price']); } ?></del>  ₦<?= number_format($prod['price']) ?></h5>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php } 

                }else {
            ?>
            <div class="alert alert-info"><?= lang('no_same_category_products') ?></div>
            <?php
        }
        ?> 
                </div>
            </div>
        </section>
        <!--================End Related Product Area =================-->
        