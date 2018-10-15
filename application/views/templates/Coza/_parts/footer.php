<!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">

                            <aside class="f_widget f_about_widget">
                                <a class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>"></a>
                                <p><?= $footerAboutUs ?></p>
                    </div>

                <div class="col-sm-6 col-lg-2 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">We are Social</h4>
                               </h4>

                    <ul>
                                    <?php if ($footerSocialFacebook != '') { ?>
                                        <li class="p-b-10"> <a href="<?= $footerSocialFacebook ?>"><i class=" fa fa-facebook"></i>Facebook</a></li>
                                    <?php } if ($footerSocialTwitter != '') { ?>
                                        <li class="p-b-10"> <a href="<?= $footerSocialTwitter ?>"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <?php } if ($footerSocialGooglePlus != '') { ?>
                                        <li class="p-b-10"> <a href="<?= $footerSocialGooglePlus ?>"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    <?php } if ($footerSocialPinterest != '') { ?>
                                        <li class="p-b-10"> <a href="<?= $footerSocialPinterest ?>"><i class="fa fa-pinterest"></i>Pinterest</a></li>
                                    <?php } if ($footerSocialYoutube != '') { ?>
                                        <li class="p-b-10"> <a href="<?= $footerSocialYoutube ?>"><i class="fa fa-youtube"></i>Youtube</a></li>
                                    <?php } ?>
                               </ul>
                </div>

                <div class="col-sm-6 col-lg-2 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">Information</h4>
                                <ul>
                                    <li><a href="<?= base_url() ?>">» <?= lang('home') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/checkout' ?>">» <?= lang('checkout') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/contacts' ?>">» <?= lang('contacts') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/blog' ?>">» <?= lang('blog') ?></a></li>
                                </ul>
                        </div>
                <div class="col-sm-6 col-lg-2 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        <?= lang('categories') ?></h4>
                                <?php if (!empty($footerCategories)) { ?>
                                    <ul>
                                        <?php foreach ($footerCategories as $key => $categorie) { ?>
                                            <li><a href="javascript:void(0);" data-categorie-id="<?= $key ?>" class="go-category"><?= $categorie ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } else { ?>
                                    <p><?= lang('no_categories') ?></p>
                                <?php } ?>
                                </ul>
                        </div>
                        <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30"><?= lang('newsletter') ?></h4>
                                        
                        <div class="wrap-input1 w-full p-b-4">
                        <form method="POST" id="subscribeForm">
                            <input type="text" class="input1 bg-none plh1 stext-107 cl7" name="subscribeEmail" placeholder="<?= lang('email_address') ?>">
                    <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" onclick="checkEmailField()" type="button"> <?= lang('subscribe') ?> <i class="fa fa-long-arrow-right"></i>
                        </button>
                        </div>
                    </form>
                                            <ul>
                                            </li>
                                    <?php if ($footerContactAddr != '') { ?>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <?= $footerContactAddr ?> 
                            </li>
                        <?php }if ($footerContactPhone != '') { ?>
                            <li>
                                <i class="fa fa-phone"></i>
                                <?= $footerContactPhone ?>
                            </li>
                        <?php } if ($footerContactEmail != '') { ?>
                            <li>
                            <i class="fa fa-envelope"></i><a href="mailto:<?= $footerContactEmail ?>"><?= $footerContactEmail ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
                    <div class="p-t-40">
                        <p class="stext-107 cl6 txt-center">
                    <?= $footerCopyright ?>
                
                </p>
            </div>
        </div>
    </footer>
        <!--===============================================================================================-->  
    <script src="<?= base_url() ?>assets/templates/coza/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/templates/coza/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/templates/coza/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/slick/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/templates/coza/js/slick-custom.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/templates/coza/js/main.js"></script>


        <?php if ($this->session->flashdata('emailAdded')) { ?>
<script>
    $(document).ready(function () {
        ShowNotificator('alert-info', '<?= lang('email_added') ?>');
    });
</script>
    <?php
}
echo $addedJs;
if ($this->session->flashdata('userError')) {
    if (is_array($this->session->flashdata('userError'))) {
        $usr_err = implode(' ', $this->session->flashdata('userError'));
    } else {
        $usr_err = $this->session->flashdata('userError');
    }
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-danger', '<?= $usr_err ?>');
        });
    </script>
    <?php
}
?>
<div id="notificator" class="alert"></div>
<script src="<?= base_url('assets/js/placeholders.min.js') ?>"></script>
<script>
var variable = {
    clearShoppingCartUrl: "<?= base_url('clearShoppingCart') ?>",
    manageShoppingCartUrl: "<?= base_url('manageShoppingCart') ?>",
    discountCodeChecker: "<?= base_url('discountCodeChecker') ?>"
};
</script>
        <script src="<?= base_url('loadlanguage/all.js') ?>"></script>

<script src="<?= base_url('assets/js/system.js') ?>"></script>
<script src="<?= base_url('templatejs/mine.js') ?>"></script>

</body>
</html>