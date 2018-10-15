<hr>
<?php if ($this->session->flashdata('result_publish')) { ?>
    <hr>
    <div class="alert alert-info"><?= $this->session->flashdata('result_publish') ?></div>
    <?php
}
?>
<div class="row">
    <div class="col-sm-6">
        <form method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="search" value="<?= @$_GET['search'] ?>" placeholder="Search blog posts">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                </span>
            </div>
            <?php if (isset($_GET['search'])) { ?>
                <a href="<?= base_url('admin/blog') ?>">Clear search</a>
            <?php } ?>
        </form>
    </div>
</div>
<hr>
<?php
if (!empty($posts)) {
    ?>
    <h1><?= !isset($_GET['search']) ? $page == 0 ? '' : 'Page: ' . floor($page / 20 + 1) : '' ?></h1>
    <div class="row">
        <?php
        foreach ($posts as $row) {
            ?>
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                <div class="well profile_view">
                    <img src="<?= base_url('attachments/blog_images/' . $row['image']) ?>" class=" img-responsive view_all_img" alt="image">
                    <div class="caption">
                        <h3 ><a href="<?= base_url('blog/'.$row['url']) ?>" target="_blank"><?= character_limiter($row['title'], 90) ?></a></h3>
                        <a href="<?= base_url('admin/blogpublish/' . $row['id']) ?>" class="btn btn-primary" role="button">Edit</a>
                        <a href="<?= base_url('admin/blog/?delete=' . $row['id']) ?>" class="btn btn-danger confirm-delete" role="button">Delete</a>
                    </div>
                </div>
            </div> 
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="alert alert-danger" role="alert">You Have No Blog Posts Yet</div>
<?php } ?>
<?= $links_pagination ?>
