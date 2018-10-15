<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!--================Categories Product Area =================-->
 <section class="home_sidebar_area">
    <div class="container">
        <div class="row row_disable">
            <div class="col-lg-9 float-md-right">

                <div class="advanced_search_area">
                        
                    <form method="GET" class="form-control"  id="bigger-search" action="<?= LANG_URL . '/shop' ?>">    
                         <input type="hidden" name="category" value="<?= isset($_GET['category']) ? $_GET['category'] : '' ?>">
                            <input type="hidden" name="in_stock" value="<?= isset($_GET['in_stock']) ? $_GET['in_stock'] : '' ?>">
                            <input type="hidden" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>">
                            <input type="hidden" name="order_new" value="<?= isset($_GET['order_new']) ? $_GET['order_new'] : '' ?>">
                            <input type="hidden" name="order_price" value="<?= isset($_GET['order_price']) ? $_GET['order_price'] : '' ?>">
                            <input type="hidden" name="order_procurement" value="<?= isset($_GET['order_procurement']) ? $_GET['order_procurement'] : '' ?>">
                            <input type="hidden" name="brand_id" value="<?= isset($_GET['brand_id']) ? $_GET['brand_id'] : '' ?>"> 
                            <div class="input-group">
                                <input type="text" class="form-control" id="search_in_title" value="<?= @$_GET['search_in_title'] ?>" placeholder="<?= lang('search_here') ?>">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" onclick="submitForm()" type="button"><i class="icon-magnifier icons"></i></button>
                                </span>
                            </div>
                    </form>
                </div>   
            </div>   
        </div>
            <div class="container" id="shop-page">
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="showing_fillter">
                                <div class="row m0">
                                    <div class="ord col-sm-4">
                                        <div class="form-group">
                                            <select class="order form-control" data-style="btn-green" data-order-to="order_new">
                                                <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "desc" ? 'selected' : '' ?> <?= !isset($_GET['order_new']) || $_GET['order_new'] == "" ? 'selected' : '' ?> value="desc"><?= lang('new') ?> </option>
                                                <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('old') ?> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ord col-sm-4">
                                        <div class="form-group">
                                            <select class="order form-control" data-style="btn-green" data-order-to="order_price" title="<?= lang('price_title') ?>..">
                                                <option label="<?= lang('not_selected') ?>"> <?= lang('price_title') ?></option>
                                                <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('price_low') ?> </option>
                                                <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('price_high') ?> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ord col-sm-4">
                                        <div class="form-group">
                                            <select class="order form-control" data-style="btn-green" data-order-to="order_procurement" title="<?= lang('procurement_title') ?>..">
                                                <option label="<?= lang('not_selected') ?>"> <?= lang('procurement_title') ?></option>
                                                <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('procurement_desc') ?> </option>
                                                <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('procurement_asc') ?> </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_product_area">
                                <div class="row">
                                     <?php
                                        if (!empty($products)) {
                                                    $i = 0;
                                                    foreach ($products as $dproduct) {
                                            ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 <?= $dproduct['shop_categorie'] ?>">
                                            <div class="l_product_item">
                                                <div class="l_p_img">
                                                    <img src="<?= base_url('attachments/shop_images/' . $dproduct['image']) ?> " class="shop-img" alt="">
                                                </div>
                                                <div class="l_p_text">
                                                    <ul>
                                                        
                                                        <li><a class="add_cart_btn" href="<?= LANG_URL . '/' . $dproduct['url'] ?>">Add To Cart</a></li>
                                                         
                                                    </ul>
                                                     <h4><?= $dproduct['title'] ?></h4>
                                                    <h5><del><?php if ($dproduct['old_price'] !=''){ echo '₦'. number_format($dproduct['old_price']); } ?></del>  ₦<?= number_format($dproduct['price']) ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } 
                                    } else {
                                        ?>
                                         <div class="text-center emty_cart_area p_100" style="align-items: center; width: 100%; margin-top: -100px">
                                                <div class="emty_cart_inner">
                                                    <i class="icon-handbag icons"></i>
                                                    <h3>No Products to Display</h3>
                                                    <h4> <a href="<?= LANG_URL ?>/shop">Clear Filters</a></h4>
                                                </div>
                                         </div>
                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                                 <?php if ($links_pagination != '') { ?>
                                    <nav aria-label="Page navigation example" class="pagination_area">
                                        <ul class="pagination">
                                            <?= $links_pagination ?>
                                      </ul>
                                    </nav>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar" id="nav-categories">
                                <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3><?= lang('categories') ?></h3>
                                         <?php if (isset($_GET['category']) && $_GET['category'] != '') { ?>
                                                <a href="javascript:void(0);" class="clear-filter" data-type-clear="category" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i> Clear Filter</a>
                                            <?php } ?>
                                            
                                    </div>
                                    
                                    <div id="nav-categories">
                        <?php

                        function loop_tree($pages, $is_recursion = false)
                        {
                            ?>
                            <ul class=" navbar-nav <?= $is_recursion === true ? 'children' : 'parent' ?>">
                                <?php
                                foreach ($pages as $page) {
                                    $children = false;
                                    if (isset($page['children']) && !empty($page['children'])) {
                                        $children = true;
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <?php if ($children === true) {
                                            ?>
                                        <?php } else { ?>
                                        <?php } ?>
                                        <a href="javascript:void(0);" data-categorie-id="<?= $page['id'] ?>" class="nav-link go-category left-side <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>">
                                            <?= $page['name'] ?>
                                            <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                        </a>
                                        
                                        </li>
                                        <?php
                                    
                                }
                                ?>
                            </ul>
                            <?php
                            if ($is_recursion === true) {
                                ?>
                                </li>
                                <?php
                            }
                        }

                        loop_tree($home_categories);
                        ?>
                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
<script src="<?= base_url('assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js') ?>">
    
</script>