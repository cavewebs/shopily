<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
       <section class="emty_cart_area p_100">
                    <div class="container">

        <h5> You chose to pay via Bank Transfer, Kindly find the details below</h5>
            <?= purchase_steps(1, 2, 3) ?> 
        <div class="row">
            <?php
            if (isset($_SESSION['order_id'])) {
                ?>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2"><b><?= lang('bank_recipient_name') ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= $bank_account != null ? $bank_account['name'] : '' ?></td>
                        </tr>
                        <tr>
                            <td><b><?= lang('bank_iban') ?></b></td>
                            <td><b><?= lang('bank_bic') ?></b></td>
                        </tr>
                        <tr>
                            <td><?= $bank_account != null ? $bank_account['iban'] : '' ?></td>
                            <td><?= $bank_account != null ? $bank_account['bic'] : '' ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b><?= lang('bank_name') ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= $bank_account != null ? $bank_account['bank'] : '' ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b><?= lang('bank_reason') ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= lang('the_reason') ?> - <?= $_SESSION['order_id'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= lang('final_amount_for_pay') ?> <?= $_SESSION['final_amount'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div> 
    <div class="col-md-4">
        <div class="container">
            <div class="emty_cart_inner ">
                <i class="fa fa-check-circle alert alert-success"></i>
                <h3>Your Order has been processed</h3>
                <h4>back to <a href="#">shopping</a></h4>
            </div>
        </div>
    </div>
        <?php } ?>
    </div>
    </div>
</section>
