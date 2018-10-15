<!---->
<div class="footer-content">
     <div class="container">
         <div class="ftr-grids">
             <div class="col-md-3 ftr-grid">
                 <h4>About Us</h4>
                 <ul>
                     <li><a href="#">Who We Are</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                     <li><a href="#">Our Sites</a></li>
                     <li><a href="#">In The News</a></li>
                     <li><a href="#">Team</a></li>
                     <li><a href="#">Carrers</a></li>                    
                 </ul>
             </div>
             <div class="col-md-3 ftr-grid">
                 <h4>Customer service</h4>
                 <ul>
                     <li><a href="#">FAQ</a></li>
                     <li><a href="#">Shipping</a></li>
                     <li><a href="#">Cancellation</a></li>
                     <li><a href="#">Returns</a></li>
                     <li><a href="#">Bulk Orders</a></li>
                     <li><a href="#">Buying Guides</a></li>                  
                 </ul>
             </div>
             <div class="col-md-3 ftr-grid">
                 <h4>Your account</h4>
                 <ul>
                     <li><a href="account.html">Your Account</a></li>
                     <li><a href="#">Personal Information</a></li>
                     <li><a href="#">Addresses</a></li>
                     <li><a href="#">Discount</a></li>
                     <li><a href="#">Track your order</a></li>                                       
                 </ul>
             </div>
             <div class="col-md-3 ftr-grid">
                 <h4>Categories</h4>
                 <ul>
                     <li><a href="#">> Furinture</a></li>
                     <li><a href="#">> Bean Bags</a></li>
                     <li><a href="#">> Decor</a></li>
                     <li><a href="#">> Kichen & Dinning</a></li>
                     <li><a href="#">> Bed & Bath</a></li>
                     <li><a href="#">...More</a></li>                    
                 </ul>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="footer">
     <div class="container">
         <div class="store">
             <ul>
                 <li class="active">OUR STORE LOCATOR::</li>
                 <li><a href="#">Noida</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Belgium</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">China</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Germany</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Japan</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Armenia</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">South Africa</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Malaysia</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Indonesia</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Mumbai</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Portugal</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Spain</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Northern Ireland</a></li>  
                 <li><a href="#">|</a></li>              
                 <li><a href="#">Mohali</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Gurgaon</a></li>
                 <li><a href="#">|</a></li>
                 <li><a href="#">Panchkula</a></li>
                 <li><a href="#">|</a></li>              
                 <li><a href="#">Ambala</a></li>    
             </ul>
         </div>      
         <div class="copywrite">
             <p>Copyright © 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
         </div>          
         </div>
     </div>
</div>
<!---->
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
<script src="<?= base_url('assets/js/system.js') ?>"></script>
<script src="<?= base_url('templatejs/animsition.min.js') ?>"></script>
<script src="<?= base_url('templatejs/slick.min.js') ?>"></script>
<script src="<?= base_url('templatejs/lightbox.min.js') ?>"></script>
<script src="<?= base_url('templatejs/slick-custom.js') ?>"></script>
\</body>
</html>
