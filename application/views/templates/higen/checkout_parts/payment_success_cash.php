<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="emty_cart_area p_100">
        <div class="col-md-12">
    <?= purchase_steps(1, 2, 3) ?> 
        <div class="emty_cart_inner ">
            <i class="fa fa-check-circle alert alert-success"></i>
            <h3><?= lang('c_o_d_order_completed') ?></h3>
            <h4>back to <a href="#">shopping</a></h4>
        </div>
    </div>
    </section>