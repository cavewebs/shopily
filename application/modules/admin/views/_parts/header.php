<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $description ?>">
        <title><?= $title ?></title>
        <!-- start: Css -->

          <!-- Bootstrap -->
        <link href="<?= base_url();?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= base_url();?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= base_url();?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?= base_url();?>assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="<?= base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?= base_url();?>assets/admin/css/my-custom.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/admin/css/custom.min.css" rel="stylesheet">

    <script src="<?= base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>

                <?php if ($this->session->userdata('logged_in')) { ?>
                    <body class="nav-md">
                        <div class="container body">
                          <div class="main_container">
                            <div class="col-md-3 left_col">
                              <div class="left_col scroll-view">
                                <div class="navbar nav_title" style="border: 0;">
                                  <a href="<?= base_url('admin') ?>" class="site_title"><i class="fa fa-home"></i> <span>Home</span></a>
                                </div>

                                <div class="clearfix"></div>

                                <!-- menu profile quick info -->
                                <!-- <div class="profile clearfix">
                                  <div class="profile_pic">
                                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                  </div>
                                  <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                  </div>
                                </div> -->
                                <!-- /menu profile quick info -->

                                <br />                           
                                <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>E-Commerce</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-shopping-cart"></i> PRODUCTS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/shopcategories') ?>">Categories</a></li>
                      <li><a href="<?= base_url('admin/publish') ?>">Add Product</a></li>
                      <li><a href="<?= base_url('admin/products') ?>">View Products</a></li>
                      <li><a href="<?= base_url('admin/discounts') ?>">Discount Codes (Coupons)</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?= base_url('admin/orders') ?>">
                    <i class="fa fa-money"></i> Manage Orders <?php if ($numNotPreviewOrders > 0) { ?>
                    <span class="label label-danger pull-right">  New </span>
                                            <?php } ?>
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('admin/orders?settings') ?>">
                    <i class="fa fa-credit-card"></i> Payment Settings
                    </a>
                  </li>
              </ul>
          </div>


        <div class="menu_section">
             <h3>Website Blog </h3>
                <ul class="nav side-menu">
                  <?php if (in_array('blog', $activePages)) { ?>
                  <li><a href="<?= base_url('admin/blogpublish') ?>" <?= urldecode(uri_string()) == 'admin/blogpublish' ? 'class="active"' : '' ?>><i class="fa fa-edit" aria-hidden="true"></i> Publish post</a>
                  </li>
                  <li><a href="<?= base_url('admin/blog') ?>" <?= urldecode(uri_string()) == 'admin/blog' ? 'class="active"' : '' ?>><i class="fa fa-th" aria-hidden="true"></i> Posts</a></li>
              <?php } ?>
              </ul>
          </div>

          <?php
                if (!empty($textualPages)) {
                foreach ($nonDynPages as $nonDynPage) {
                    if (($key = array_search($nonDynPage, $textualPages)) !== false) {
                        unset($textualPages[$key]);
                    }
                }
                  ?>
                  <div class="menu_section">
             <h3>Site Pages</h3>
                  <?php foreach ($textualPages as $textualPage) { ?>
                <ul class="nav side-menu">
                      <li><a href="<?= base_url('admin/pageedit/' . $textualPage) ?>" <?= strpos(urldecode(uri_string()), $textualPage) ? 'class="active"' : '' ?>><i class="fa fa-edit" aria-hidden="true"></i> <?= $textualPage ?></a></li>
                      <?php
                  }
              }
              ?>
                <li><a href="<?= base_url('admin/pages') ?>" <?= urldecode(uri_string()) == 'admin/pages' ? 'class="active"' : '' ?>><i class="fa fa-file" aria-hidden="true"></i> Add/Manage Pages</a>
                </li>
                </ul>
          </div>

          <div class="menu_section">
             <h3>Settings</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('admin/settings') ?>"><i class="fa fa-cogs"></i>Shop Settings</a></li>
                  <li><a href="<?= base_url('admin/templates') ?>"> <i class="fa fa-desktop"></i>Templates/Design</a></li>
                  <li><a href="<?= base_url('admin/emails') ?>"> <i class="fa fa-envelope"></i>Newsletter Subscribtions</a></li>
                  <li><a href="<?= base_url('admin/titles') ?>"> <i class="fa fa-globe"></i>Search Engine Settings</a></li>
                </ul>
          </div>

        <div class="menu_section">
             <h3>Advanced Settings</h3>
                <ul class="nav side-menu">
                    <li>
                    <a href="<?= base_url('admin/history') ?>">
                        <i class="fa fa-chevron-down"></i> 
                            Activity History 
                    </a>
                    </li>

                   <li>
                    <a href="<?= base_url('admin/pages') ?>">
                        <i class="fa fa-edit"></i> 
                            Site Pages 
                    </a>
                  </li>
                  <li><a href="<?= base_url('admin/languages') ?>" <?= urldecode(uri_string()) == 'admin/languages' ? 'class="active"' : '' ?>><i class="fa fa-globe" aria-hidden="true"></i> Site Messages</a>
                  </li>
                  <li><a href="<?= base_url('admin/adminusers') ?>" <?= urldecode(uri_string()) == 'admin/adminusers' ? 'class="active"' : '' ?>><i class="fa fa-user" aria-hidden="true"></i> Admin Users</a></li>   
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" target="blank" data-placement="top" title="View Shop" href="<?= base_url() ?>">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('admin/logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">My Account
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <!-- <span class="badge bg-red pull-right">50%</span> -->
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?=base_url('admin/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php if ($newNotifs >0) {echo '<span class="badge bg-green"> '.$newNotifs;} ?> </span>
                  </a>
                  <?php if ($newNotifs >0) { ?>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul> <?php }?>
                </li>
                <li role="" class="">
                  <a href="javascript:void(0);" title="Calculator" data-toggle="modal" data-target="#modalCalculator"><i class="fa fa-calculator" aria-hidden="true"></i> </a>
              </li>

              <li role="" class="">
                <a target="blank" data-placement="top" title="View Shop" href="<?= base_url() ?>">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                </a>              
              </li>
               

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4><?=$title?></h4>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <form method="GET" action="<?= base_url('admin/products') ?>">
                        <div class="input-group">
                            <input class="form-control" name="search_title" value="<?= isset($_GET['search_title']) ? $_GET['search_title'] : '' ?>" type="text" placeholder="Search products...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" value="" placeholder="Find product.." type="submit">
                                    <i class="fa fa-search"></i>GO
                                </button>
                            </span>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
                                <?php } ?>

