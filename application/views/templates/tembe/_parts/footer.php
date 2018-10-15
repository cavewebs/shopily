 <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <a class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>"></a>
                                <p><?= $footerAboutUs ?></p>
                                <h6>Social:</h6>
                                <ul>
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
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href="<?= base_url() ?>">» <?= lang('home') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/checkout' ?>">» <?= lang('checkout') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/contacts' ?>">» <?= lang('contacts') ?> </a></li>
                                    <li><a href="<?= LANG_URL . '/blog' ?>">» <?= lang('blog') ?></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3><?= lang('categories') ?></h3>
                                </div>
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
                            </aside>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3><?= lang('newsletter') ?></h3>
                                </div>
                                        <ul>
                                            <li>
                                                <div class="">
                                                    <form method="POST" id="subscribeForm">
                                                        <input type="text" class="full text-center" name="subscribeEmail" placeholder="<?= lang('email_address') ?>"> <br />
                                                        <button class="btn btn-secondary" onclick="checkEmailField()" type="button"> <?= lang('subscribe') ?> <i class="fa fa-long-arrow-right"></i></button>
                                                    </form>
                                                </div>
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
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5><?= $footerCopyright ?></h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->        

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= base_url() ?>assets/templates/kiosk/js/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/js/smoothscroll.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="<?= base_url() ?>assets/templates/kiosk/js/theme.js"></script>

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
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
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