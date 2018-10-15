<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
 <section class="contact_area p_100">
            <div class="container">
                <div class="contact_title">
                    <h2><?= lang('contact_us') ?> </h2>
                     <?php
                if ($this->session->flashdata('resultSend')) {
                    ?>
                    <hr>
                    <div class="alert alert-info"><?= $this->session->flashdata('resultSend') ?></div>
                    <hr>
                <?php } else {
                ?>
                    <?= lang('contact_us_feel_free') ?> <br/>

                    <?= $contactsPage ?> 

                     <?php } 
                ?>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h5> <?= lang('our_office') ?></h5>

                                <?= $footerContactAddr ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel: <?= $footerContactPhone ?>"> <?= $footerContactPhone ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:<?= $footerContactEmail ?>"><?= $footerContactEmail ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    <h3>Drop a Message</h3>
                    <form method="POST" action="" class="contact_us_form row">
                        <div class="form-group col-lg-4">
                                    <label for="name">
                                        <?= lang('name') ?></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                        <div class="form-group col-lg-4">
                                    <label for="email">
                                        <?= lang('email_address') ?></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-envelope"></span>
                                        </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                </div>
                        <div class="form-group col-lg-4">
                                    <label for="subject">
                                        <?= lang('subject') ?></label>
                                    <input type="text" name="subject" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                    <label for="name">
                                        <?= lang('message') ?></label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="<?= lang('message') ?>"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn update_btn form-control" id="btnContactUs"> <?= lang('send_message') ?>
                                    
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    <?php if(trim($googleApi) != null && trim($googleMaps) != null) { ?>
    <div id="map"></div>
    <?php $coordinates = explode(',', $googleMaps); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $googleApi ?>"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?= $coordinates[0] ?>, <?= $coordinates[1] ?>);
            var mapOptions = {
                zoom: 10,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                title: "Here we are!"
            });
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php } ?>
</div>
</section>