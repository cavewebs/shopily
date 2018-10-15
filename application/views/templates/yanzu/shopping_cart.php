<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
                                if ($cartItems['array'] == null) {
                                    ?>
                                    
                                    <!--================Empty Cart ==========-->
                                        <div class="container">
                                            <div class="emty_cart_inner">
                                                <i class="icon-handbag icons"></i>
                                                <h3 class="text-capitalize">
                                                    
                                                    <?= lang('no_products_in_cart') ?>
                                                        
                                                </h3>
                                                <h4>back to <a href="<?= LANG_URL ?>">shopping</a></h4>
                                            </div>
                                        </div>
                                    </section>
                                    <!--================End Empty ============-->
                                                           <?php
                                } else { ?>
   <!--================Shopping Cart Area =================-->
            <div class="container">
                <div class="row">
                        
                    <div class="col-lg-12">
                        <div class="cart_items" id="shopping-cart">
                            <h3 class="text-center">Your Cart Items</h3>
                             <?php
                                    echo purchase_steps(1);
                                    ?>
        

                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                      <?php foreach ($cartItems['array'] as $item) { ?>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                       <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" 
                                                            <span class="btn fa fa-remove"></span>
                                                        </a> 
                                                        <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                                        <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                                        <img class="shopping-cart-image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a> </h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="red"><?= $item['price'] . CURRENCY ?></p></td>
                                            <td>
                                                <div class="quantity">
                                                    <h6>Quantity</h6>
                                                    <div class="custom">
                                                        <a class="refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                                            <span class="fa fa-plus"></span>
                                                        </a>
                                                        <span class="quantity-num" style="font-size: larger;">
                                                            <?= $item['num_added'] ?>
                                                        </span>
                                                        <a class="" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                                            <span class="fa fa-minus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="red"><?= $item['sum_price'] . CURRENCY ?></p></td>
                                        </tr>
                                        <?php } ?>
                                        <tr align="right">
                                            <td colspan="2">
                                            </td>
                                             
                                            <td style="font-size: large; font-weight: bold;">
                                               TOTAL:
                                            </td>
                                            <td style="font-size: large; font-weight: bold; float: left">
                                               <?= $cartItems['finalSum'] . CURRENCY ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="3">
                                                <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
                                                    <span class="fa fa-arrow-left"></span>
                                                    <?= lang('back_to_shop') ?>
                                                </a>
                                            </th>
                                            <th>
                                                
                                                <a class="btn btn-secondary go-checkout" href="<?= LANG_URL . '/checkout' ?>">
                                                    Proceed to <?= lang('checkout') ?> 
                                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                                </a>
                                            </th>
                                             
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   
                <?php }?>
                </div>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->
                   
<?php
if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } ?>