<hr>
<div class="row text-center">
    <div class="col-sm-6 col-md-8 text-center" >
        <?php
        if ($this->session->flashdata('result_publish')) {
            ?>
            <div class="alert alert-success"><?= $this->session->flashdata('result_publish') ?></div>
            <hr>
            <?php
        }
        ?>
        <form action="" method="POST">
            <?php
            foreach ($languages->result() as $language) {
                ?>
                <input type="hidden" name="translations[]" value="<?= $language->abbr ?>">
                <?php
            }
            foreach ($seo_pages as $page) {
                ?>
                <input type="hidden" name="pages[]" value="<?= $page['name'] ?>">
                <?php
            }
            foreach ($seo_pages as $page) {
                ?>
                <h4 class="bg-info" style="text-transform: uppercase;"><?= $page['name'] ?> Page</h4>
                <?php
                foreach ($languages->result() as $language) {
                    ?>
                    <div class="form-group"> 
                        <label>Page Title </label>
                        <input type="text" name="title[]" value="<?= @$seo_trans[$page['name']][$language->abbr]['title'] ?>" class="form-control">
                    </div>
                    <?php
                }
                foreach ($languages->result() as $language) {
                    ?>
                    <div class="form-group"> 
                        <label>Page Description </label>
                        <input type="text" name="description[]" value="<?= @$seo_trans[$page['name']][$language->abbr]['description'] ?>" class="form-control">
                    </div>
                    <?php
                }
            }
            ?>
            <input type="submit" name="save" value="Save" class="btn btn-primary text-center" style="margin-bottom: 10px;">
        </form>
    </div>
</div>