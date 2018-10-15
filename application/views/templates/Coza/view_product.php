<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--================Product Details Area =================-->

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
                Men
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Lightweight Jacket
            </span>
        </div>
    </div>
        

    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="<?= base_url('/attachments/shop_images/' . $product['image']) ?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= base_url($dir . $file) ?>">
                                            <i class="fa fa-expand"></i>
                                       </a>
                                    </div>
                                </div>
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
                                <div class="item-slick3" data-thumb="<?= base_url($dir . $file) ?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?= base_url($dir . $file) ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= base_url($dir . $file) ?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                           
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
                            </div>
                        </div>
                    </div>
                </div>
                    
         <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <?= $product['title'] ?></h4>

                        <span class="mtext-106 cl2">
                            <?php  if ($publicQuantity == 1) { ?>
                                
                                <?= lang('in_stock') ?>: In <?= $product['quantity'] ?>
                            <?php } ?>
                                
                        </span>                            
                        <span class="mtext-106 cl2"> <del style="color: red"><?php if ($product['old_price'] !=''){ echo '₦'. number_format($product['old_price']); } ?></del>  ₦<?= number_format($product['price']) ?>
                           </span
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

                                <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/checkout' ?>" class="btn btn-primary">
                                    <span class="add_cart_btn"><?= lang('buy_now') ?></span>
                                </a>
                            <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="btn btn-secondary">
                                <span class="add_cart_btn"><?= lang('add_to_cart') ?></span>
                            </a>
                        <?php } else { ?>
                            <div class="alert alert-info"><?= lang('out_of_stock_product') ?></div>
                        <?php } ?>
                            </div>
                            <p class="stext-102 cl3 p-t-23"> <?= $product['description'] ?> </p>
                            </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <h5>share :</h5>
                               
                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                   </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6"><?= $product['description'] ?></p>
                            </div>
                        </div>
</div>
                </div>
            </div>
        </div>

        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
            <span class="stext-107 cl6 p-lr-25">
                SKU: JAK-01
            </span>

            <span class="stext-107 cl6 p-lr-25">
                Categories: Jacket, Men
            </span>
        </div>
    </section>


    <!-- Related Products -->
    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center"><?= lang('oder_from_category') ?></h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                        <?php
                            if (!empty($sameCagegoryProducts)) {
                                foreach ($sameCagegoryProducts as $prod) {
                                    ?>
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="<?= base_url('attachments/shop_images/' . $prod['image']) ?> " class="product-img" alt=""><a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="<?= LANG_URL . '/' . $prod['url'] ?>"  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> <?= $prod['title'] ?></a>

                                    <span class="stext-105 cl3"><del><?php if ($prod['old_price'] !=''){ echo '₦'. number_format($prod['old_price']); } ?></del>  ₦<?= number_format($prod['price']) ?>iv>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON"><i class="fa fa-heart"></i>
                                    </a>
                                </div>
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
            </div>
        </div>
    </section>
        
        <!--================End Related Product Area =================-->
        