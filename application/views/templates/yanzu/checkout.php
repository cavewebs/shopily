<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
         <!--================Categories Banner Area =================-->

 <?php if ($cartItems['array'] != null) {
                                ?> 
            <div class="container">
                <div class="register_inner"  id="checkout-page">
                    <div class="row">
                            <h3><?= lang('checkout') ?></h3>
                           
                                <div class="col-lg-12">
                                <?= purchase_steps(1, 2) ?>
                                </div>
                                <div class="col-md-8">
                                    <form method="POST" id="goOrder">
                                        <?php
                                        if ($this->session->flashdata('submit_error')) {
                                            ?>
                                            <hr>
                                            <div class="alert alert-danger">
                                                <h4><span class="fa fa-alert"></span> <?= lang('finded_errors') ?></h4>
                                                <?php
                                                foreach ($this->session->flashdata('submit_error') as $error) {
                                                    echo $error . '<br>';
                                                }
                                                ?>
                                            </div>
                                            <hr>
                                            <?php
                                        }
                                        ?>
                                        <div class="payment-type-box">
                                            <select class="form-control payment-type" data-style="btn-blue" name="payment_type">
                                                <?php if ($bank_account['iban'] != null) { ?>
                                                    <option value="Bank"><?= lang('bank_payment') ?> </option>
                                                <?php } ?>
                                                <?php if ($cashondelivery_visibility == 1) { ?>
                                                    <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> 
                                                    </option>
                                                <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                                                    <option value="PayPal"><?= lang('paypal') ?> </option>
                                                <?php } ?>
                                            </select>
                                            <span class="top-header text-center"><?= lang('choose_payment') ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="firstNameInput"><?= lang('first_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <input id="firstNameInput" class="form-control" name="first_name" value="<?= @$_POST['first_name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lastNameInput"><?= lang('last_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <input id="lastNameInput" class="form-control" name="last_name" value="<?= @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="emailAddressInput"><?= lang('email_address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <input id="emailAddressInput" class="form-control" name="email" value="<?= @$_POST['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="phoneInput"><?= lang('phone') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <input id="phoneInput" class="form-control" name="phone" value="<?= @$_POST['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="addressInput"><?= lang('address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <textarea id="addressInput" name="address" class="form-control" rows="3"><?= @$_POST['address'] ?></textarea>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="cityInput"><?= lang('city') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                                <input id="cityInput" class="form-control" name="city" value="<?= @$_POST['city'] ?>" type="text" placeholder="<?= lang('city') ?>">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postInput"><?= lang('post_code') ?></label>
                                                <input id="postInput" class="form-control" name="post_code" value="<?= @$_POST['post_code'] ?>" type="text" placeholder="<?= lang('post_code') ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="notesInput"><?= lang('notes') ?></label>
                                                <textarea id="notesInput" class="form-control" name="notes" rows="3"><?= @$_POST['notes'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-products">
                                                <thead>
                                                    <tr>
                                                        <th><?= lang('product') ?></th>
                                                        <th><?= lang('title') ?></th>
                                                        <th><?= lang('quantity') ?></th>
                                                        <th><?= lang('price') ?></th>
                                                        <th><?= lang('total') ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($cartItems['array'] as $item) { ?>
                                                        <tr>
                                                            <td class="relative">
                                                                <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                                                <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                                                <img class="product-image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                                                <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=checkout') ?>" class="btn btn-xs btn-danger remove-product">
                                                                    <span class="fa fa-remove"></span>
                                                                </a>
                                                            </td>
                                                            <td><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></td>
                                                            <td>
                                                                <a class="btn btn-xs btn-primary refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                                                    <span class="fa fa-plus"></span>
                                                                </a>
                                                                <span class="quantity-num">
                                                                    <?= $item['num_added'] ?>
                                                                </span>
                                                                <a class="btn  btn-xs btn-danger" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                                                    <span class="fa fa-minus"></span>
                                                                </a>
                                                            </td>
                                                            <td><?= $item['price'] . CURRENCY ?></td>
                                                            <td><?= $item['sum_price'] . CURRENCY ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><?= lang('total') ?></td>
                                                        <td>
                                                            <span class="final-amount"><?= $cartItems['finalSum'] ?></span><?= CURRENCY ?>
                                                            <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                                                            <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                                                            <input type="hidden" name="discountAmount" value="">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                    <div>
                                        <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
                                            <span class="fa fa-circle-arrow-left"></span>
                                            <?= lang('back_to_shop') ?>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-primary go-order" onclick="document.getElementById('goOrder').submit();" class="pull-left">
                                            <?= lang('custom_order') ?> 
                                            <span class="fa fa-circle-arrow-right"></span>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                    <?php if ($codeDiscounts == 1) { ?>
                                        <div class="col-md-4">
                                            <div class="total_amount_area">
                                                <div class="cupon_box">
                                                    <h3 class="cart_single_title"><label><?= lang('discount_code') ?></label></h3>
                                                    <div class="cupon_box_inner">
                                                        Do you have a discount code or voucher?
                                                        <input class="form-control" name="discountCode" value="<?= @$_POST['discountCode'] ?>" placeholder="<?= lang('enter_discount_code') ?>" type="text">
                                                        <a href="javascript:void(0);" class="btn btn-primary subs_btn" onclick="checkDiscountCode()"><?= lang('check_code') ?></a>
                                                    </div> 
                                                </div>
                                            </div>
                                         </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
                            <?php } else { ?>

                         <!--================Empty Cart ==========-->
                            <section class="emty_cart_area p_100 text-center" > 
                                <div class="container">
                                    <div class="emty_cart_inner">
                                        <i class="icon-handbag icons"></i>
                                        <h3 class="text-capitalize">
                                            
                                            <?= lang('no_products_in_cart') ?>
                                                
                                        </h3>
                                        <h4>Back to <a href="<?= LANG_URL ?>">Shopping</a></h4>
                                    </div>
                                </div>
                            </section>
                        <?php
                    } ?>
  <?php 
if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } if ($codeDiscounts == 1 && isset($_POST['discountCode'])) { ?>
    <script>
        $(document).ready(function () {
            checkDiscountCode();
        });
    </script>
<?php } ?>