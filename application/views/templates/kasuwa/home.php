<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (count($sliderProducts) > 0) { ?>

    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                 <?php
                    $i = 0;
                    foreach ($sliderProducts as $article) { ?>
                <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('attachments/shop_images/' . $article['image']) ?>)">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h3 class="caption2-slide1 l-text2 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                             <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                <?= character_limiter($article['title'], 100) ?>
                            </a>
                        </h3>

                        <h4 class="caption2-slide1 m-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                           <?= character_limiter(strip_tags($article['basic_description']), 50) ?>
                        </h4>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                                <a class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" data-goto="<?= LANG_URL . '/checkout' ?>" href="javascript:void(0);" data-id="<?= $article['id'] ?>">
                            <?= lang('buy_now') ?>
                        </a>
                        </div>
                    </div>
                </div>
                 <?php $i++; } ?>

            </div>
        </div>
    </section>      
<?php } ?>
<!---->
<div class="product-model">  
     <div class="container">
            <h2>OUR PRODUCTS</h2> 
    <div class="rsidebar span_1_of_left">
        <section  class="sky-form">
                     <div class="product_right">
                         <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
                         <div class="tab1">
                             <ul class="place">                             
                                 <li class="sort">Furniture</li>
                                 <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                              </ul>
                             <div class="single-bottom">                        
                                    <a href="#"><p>Sofas</p></a>
                                    <a href="#"><p>Fabric Sofas</p></a>
                                    <a href="#"><p>Love Seats</p></a>
                                    <a href="#"><p>Dinning Sets</p></a>
                             </div>
                          </div>                          
                          <div class="tab2">
                             <ul class="place">                             
                                 <li class="sort">Decor</li>
                                 <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                              </ul>
                             <div class="single-bottom">                        
                                    <a href="#"><p>Shelves</p></a>
                                    <a href="#"><p>Wall Racks</p></a>
                                    <a href="#"><p>Curios</p></a>
                                    <a href="#"><p>Ash Trays</p></a>
                             </div>
                          </div>
                          <div class="tab3">
                             <ul class="place">                             
                                 <li class="sort">Lighting</li>
                                 <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                              </ul>
                             <div class="single-bottom">                        
                                    <a href="#"><p>Table Lamps</p></a>
                                    <a href="#"><p>Tube Lights</p></a>
                                    <a href="#"><p>Study Lamps</p></a>
                                    <a href="#"><p>Usb Lamps</p></a>
                             </div>
                          </div>
                          <div class="tab4">
                             <ul class="place">                             
                                 <li class="sort">Bed & Bath</li>
                                 <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                              </ul>
                             <div class="single-bottom">                        
                                    <a href="#"><p>Towels</p></a>
                                    <a href="#"><p>Bath Roles</p></a>
                                    <a href="#"><p>Mirrors</p></a>
                                    <a href="#"><p>Soap Stands</p></a>
                             </div>
                          </div>
                          <div class="tab5">
                             <ul class="place">                             
                                 <li class="sort">Fabric</li>
                                 <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                              </ul>
                             <div class="single-bottom">                        
                                    <a href="#"><p>Sofas</p></a>
                                    <a href="#"><p>Fabric Sofas</p></a>
                                    <a href="#"><p>Beds</p></a>
                                    <a href="#"><p>Relax Chairs</p></a>
                             </div>
                          </div>
                          
                          <!--script-->
                        <script>
                            $(document).ready(function(){
                                $(".tab1 .single-bottom").hide();
                                $(".tab2 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab4 .single-bottom").hide();
                                $(".tab5 .single-bottom").hide();
                                
                                $(".tab1 ul").click(function(){
                                    $(".tab1 .single-bottom").slideToggle(300);
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                })
                                $(".tab2 ul").click(function(){
                                    $(".tab2 .single-bottom").slideToggle(300);
                                    $(".tab1 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                })
                                $(".tab3 ul").click(function(){
                                    $(".tab3 .single-bottom").slideToggle(300);
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })
                                $(".tab4 ul").click(function(){
                                    $(".tab4 .single-bottom").slideToggle(300);
                                    $(".tab5 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })  
                                $(".tab5 ul").click(function(){
                                    $(".tab5 .single-bottom").slideToggle(300);
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })  
                            });
                        </script>
                        <!-- script -->                  
                 </section>

            <div class="col-md-3">
            <div class="filter-sidebar">
                <div class="title">
                    <span><?= lang('categories') ?></span>
                    <?php if (isset($_GET['category']) && $_GET['category'] != '') { ?>
                        <a href="javascript:void(0);" class="clear-filter" data-type-clear="category" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <?php } ?>
                </div>
                <a href="javascript:void(0)" id="show-xs-nav" class="visible-xs visible-sm">
                    <span class="show-sp"><?= lang('showXsNav') ?><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span>
                    <span class="hidde-sp"><?= lang('hideXsNav') ?><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></span>
                </a>
                <div id="nav-categories">
                    <?php

                    function loop_tree($pages, $is_recursion = false)
                    {
                        ?>
                        <ul class="<?= $is_recursion === true ? 'children' : 'parent' ?>">
                            <?php
                            foreach ($pages as $page) {
                                $children = false;
                                if (isset($page['children']) && !empty($page['children'])) {
                                    $children = true;
                                }
                                ?>
                                <li>
                                    <?php if ($children === true) {
                                        ?>
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    <?php } ?>
                                    <a href="javascript:void(0);" data-categorie-id="<?= $page['id'] ?>" class="go-category left-side <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>">
                                        <?= $page['name'] ?>
                                    </a>
                                    <?php
                                    if ($children === true) {
                                        loop_tree($page['children'], true);
                                    } else {
                                        ?>
                                    </li>
                                    <?php
                                }
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
            </div>
            <?php if ($showBrands == 1) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('brands') ?></span>
                        <?php if (isset($_GET['brand_id']) && $_GET['brand_id'] != '') { ?>
                            <a href="javascript:void(0);" class="clear-filter" data-type-clear="brand_id" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <?php } ?>
                    </div>
                    <ul>
                        <?php foreach ($brands as $brand) { ?>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="javascript:void(0);" data-brand-id="<?= $brand['id'] ?>" class="brand <?= isset($_GET['brand_id']) && $_GET['brand_id'] == $brand['id'] ? 'selected' : '' ?>"><?= $brand['name'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } if ($showOutOfStock == 1) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('store') ?></span>
                        <?php if (isset($_GET['in_stock']) && $_GET['in_stock'] != '') { ?>
                            <a href="javascript:void(0);" class="clear-filter" data-type-clear="in_stock" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <?php } ?>
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" data-in-stock="1" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '1' ? 'selected' : '' ?>"><?= lang('in_stock') ?> (<?= $countQuantities['in_stock'] ?>)</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-in-stock="0" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '0' ? 'selected' : '' ?>"><?= lang('out_of_stock') ?> (<?= $countQuantities['out_of_stock'] ?>)</a>
                        </li>
                    </ul>
                </div>
            <?php } if ($shippingOrder != 0 && $shippingOrder != null) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('freeShippingHeader') ?></span>
                    </div>
                    <div class="oaerror info">
                        <strong><?= lang('promo') ?></strong> - <?= str_replace(array('%price%', '%currency%'), array($shippingOrder, CURRENCY), lang('freeShipping')) ?>!
                    </div>
                </div>
            <?php } ?>
        </div> 
        <section  class="sky-form">
                     <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
                     <div class="row row1 scroll-pane">
                         <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
                         </div>
                         <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                         </div>
                     </div>
                 </section>                                  
                   <section  class="sky-form">
                        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
                            <ul class="dropdown-menu1">
                                 <li><a href="">                                               
                                <div id="slider-range"></div>                           
                                <input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
                             </a></li>          
                          </ul>
                   </section>
                   <!---->
                     <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                     <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
                    <script type='text/javascript'>//<![CDATA[ 
                    $(window).load(function(){
                     $( "#slider-range" ).slider({
                                range: true,
                                min: 0,
                                max: 400000,
                                values: [ 8500, 350000 ],
                                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                }
                     });
                    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                    });//]]> 
                    </script>
                     <!---->
                     <section  class="sky-form">
                        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
                            <div class="row row1 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dinner Sets   (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3+1+1 Sofa Sets (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sofa Chairs     (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 Seater Sofas  (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Display Units   (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L-shaped Sofas  (30)</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 Seater Sofas  (30)</label>
                                </div>
                            </div>
                   </section>    
        </div>    
         <div class="col-md-9 product-model-sec">
           
                     <?php
                    $i = 0;
                        foreach ($products as $product) {
                            ?>
                     <a href="<?= LANG_URL . '/' . $product['url'] ?>">
                        <div class="product-grid love-grid">
                   
                        <div class="more-product"><span> </span></div>                      
                        <div class="product-img b-link-stripe b-animate-go  thickbox">
                            <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
                            <h4 class="b-animate b-from-left  b-delay03">                           
                            <button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
                            </h4>
                            </div>
                        </div></a>                      
                        <div class="product-info simpleCart_shelfItem">
                            <div class="product-info-cust prt_name">
                                <h4><?= $product['title'] ?></h4>
                                <p>ID: SR4598</p>
                                <span class="item_price"><?= $product['price'] ?></span>
                                 <a  href="<?= LANG_URL . '/' . $product['url'] ?>" class="item_add items"> <?= lang('add_to_cart') ?> </a>
                            </div>                                                  
                            <div class="clearfix"> </div>
                        </div>
                    </div>  
              <?php $i++; } ?>
        </div>
    </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="recommendation">
     <div class="container">
         <div class="recmnd-head">
             <h3>RECOMMENDATIONS FOR YOU</h3>
         </div>
         <div class="bikes-grids">           
             <ul id="flexiselDemo1">
                 <li>
                     <a href="products.html"><img src="images/ts1.jpg" alt=""/></a> 
                     <h4><a href="products.html">King Size Bed</a></h4> 
                     <p>ID: KS3989</p>
                 </li>
                 <li>
                     <a href="products.html"><img src="images/r2.jpg" alt=""/></a>  
                     <h4><a href="products.html">Elite Diwan Seater</a></h4>    
                     <p>ID: KS3989</p>
                 </li>
                 <li>
                     <a href="products.html"><img src="images/r3.jpg" alt=""/></a>
                     <h4><a href="products.html">Dior Corner Sofa</a></h4>  
                     <p>ID: KS3989</p>
                 </li>
                 <li>
                     <a href="products.html"><img src="images/r4.jpg" alt=""/></a>
                     <h4><a href="products.html">Alia Modular Sofa</a></h4> 
                     <p>ID: KS3989</p>
                 </li>
                 <li>
                     <a href="products.html"><img src="images/r5.jpg" alt=""/></a>  
                     <h4><a href="products.html">King Size Bed</a></h4> 
                     <p>ID: KS3989</p>                   
                 </li>
            </ul>
            <script type="text/javascript">
             $(window).load(function() {            
              $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover:true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            });
            </script>
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>             
     </div>
     </div>
</div>
<!---->
                    
<div class="blog-posts">
    <div class="container">
        <h3><?= lang('blog_posts') ?></h3> 
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="theCarousel1">
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        foreach ($lastBlogs as $post) {
                            ?>
                            <div class="item <?= $i == 0 ? 'active' : '' ?>">
                                <div class="col-xs-12 col-sm-4">
                                    <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>">
                                        <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" class="img-responsive">
                                        <span class="time"><?= date('M d, Y', $post['time']) ?></span>
                                        <h1><?= character_limiter($post['title'], 85) ?></h1>
                                        <p class="description"><?= character_limiter(strip_tags($post['description']), 300) ?></p>
                                        <span class="read-more"><?= lang('read_more') ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </a> 
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#theCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#theCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
             $(window).load(function() {            
              $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover:true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            });
            </script>
<script src="<?= base_url('templatejs/jquery.flexisel.js.js') ?>"></script>           
