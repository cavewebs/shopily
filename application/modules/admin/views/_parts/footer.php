   
          </div>
        </div>
<?php if ($this->session->userdata('logged_in')) { ?>
    <!-- footer content -->
        <footer>
          <div class="text-center">
            Shop.Online Admin Powered by  <a href="https://software.shop.online.com">Shop Online commerce Inc</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<?php
require('calculator.php');
 } ?>
 <!-- end: Content -->

        <!-- jQuery -->
    <script src="<?= base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url();?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url();?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url();?>assets/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url();?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?= base_url();?>assets/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?= base_url();?>assets/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url();?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url();?>assets/admin/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url();?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url();?>assets/admin/js/custom.js"></script>
    <script src="<?= base_url('assets/js/mine_admin.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/pGenerator.jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/zxcvbn.js') ?>"></script>
    <script src="<?= base_url('assets/js/zxcvbn_bootstrap3.js') ?>"></script>
<script>
    var urls = {
        changePass: '<?= base_url('admin/changePass') ?>',
        editShopCategorie: '<?= base_url('admin/editshopcategorie') ?>',
        changeTextualPageStatus: '<?= base_url('admin/changePageStatus') ?>',
        removeSecondaryImage: '<?= base_url('admin/removeSecondaryImage') ?>',
        productstatusChange: '<?= base_url('admin/productstatusChange') ?>',
        productsOrderBy: '<?= base_url('admin/products?orderby=') ?>',
        productStatusChange: '<?= base_url('admin/productStatusChange') ?>',
        changeOrdersOrderStatus: '<?= base_url('admin/changeOrdersOrderStatus') ?>',
        ordersOrderBy: '<?= base_url('admin/orders?order_by=') ?>',
        uploadOthersImages: '<?= base_url('admin/uploadOthersImages') ?>',
        loadOthersImages: '<?= base_url('admin/loadOthersImages') ?>',
        editPositionCategorie: '<?= base_url('admin/changePosition') ?>'
    };
</script>
</body>
</html>