<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!--================End Categories Banner Area =================-->
    <div class="container" id="blog">
    <div class="row eqHeight">
        <div class="col-sm-4 col-md-3">
            <div class="blog-home-left-categ">
                <?= $archives ?>
            </div>
            <div id="search-input-blog col-md-12">
                <div class="input-group col-md-12">
                    <form method="GET" action="">
                        <span class="input-group-btn">
                        <input type="text" class="form-control search-query" value="<?= isset($_GET['find']) ? $_GET['find'] : '' ?>" name="find" placeholder="<?= lang('search') ?>" />
                            <button class="btn btn-danger" type="submit">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-sm-8 col-md-9">
            <div class="alone title">
                <h4><span><?= lang('latest_blog') ?></span></h4>
            </div>
            <div class="row">
                <?php
                if (!empty($posts)) {
                    foreach ($posts as $post) {
                        ?>
                        <div class="col-md-6 blog-col" align="left">
                            <div class="thumbnail blog-list">
                                <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>" class="img-container">
                                    <div class="img-blog">
                                    <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="<?= $post['title'] ?>">
                                </div>
                                </a>
                                <div class="caption">
                                    <h5>
                                        <?= character_limiter($post['title'], 85) ?>
                                    </h5>
                                    <small>
                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                            <?= date('M d, y', $post['time']) ?>
                                        </span>
                                    </small>
                                    <p class="description"><?= character_limiter(strip_tags($post['description']), 300) ?></p>
                                    <a class="btn btn-secondary pull-right" href="<?= LANG_URL . '/blog/' . $post['url'] ?>">
                                        <i class="fa fa-long-arrow-right"></i>
                                        <?= lang('read_mode') ?>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-info"><?= lang('no_posts') ?></div>
                <?php } ?>
            </div>
            <?= $links_pagination ?>
        </div>
    </div>
</div>
</section>