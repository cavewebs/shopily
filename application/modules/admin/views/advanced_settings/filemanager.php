<link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery-ui.css'); ?>">
<script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/elFinder-2.1.38/css/elfinder.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/elFinder-2.1.38/css/theme.css'); ?>">
<script src="<?= base_url('assets/elFinder-2.1.38/js/elfinder.min.js') ?>"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#elfinder').elfinder({
            url: '<?= base_url('assets/elFinder-2.1.38/php/connector.minimal.php'); ?>'
        });
    });
</script>
<p>Here you can manage all site files</p>
<hr>
<div class="alert alert-danger">Danger zone! Do not touch anything if you're not sure!</div>
<div id="elfinder"></div>