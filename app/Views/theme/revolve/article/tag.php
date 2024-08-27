<?= $this->extend('theme/revolve/layout'); ?>
<?= $this->section('css'); ?>
     <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/bulma/bulma.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/themify/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/slick-carousel/slick-theme.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/slick-carousel/slick.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/owl-carousel/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/owl-carousel/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/plugins/magnific-popup/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('/theme/revolve/css/style.css'); ?>">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="single-block-wrapper section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="single-post">
                    <div class="post-header mb-5 ">
                        <div class="meta-cat text-color">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("./");?>">Beranda </a> |
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("/Artikel");?>">Artikel</a>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                        <?php
                            foreach($article as $value):
                                echo "<div class=\"media py-3 sidebar-post-item border-bottom\">
                                            <img class=\"mr-4\" src=\"".base_url('images/berita4.jpg')."\" alt=\"\">
                                            <div class=\"media-body\">
                                                <small class=\"text-muted letter-spacing text-uppercase font-sm\">".date("l, d F Y - H:i", strtotime($value['created_at']))."</small><br>
                                                <h4><a href=\"".base_url('Article/'.$value['slug'])."\">".$value['title']."</a></h4>
                                            </div>
                                        </div>";
                            endforeach;
                        ?>
                        <?= $pager->links('article', 'bootstrap_pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?=base_url('/theme/revolve/plugins/jquery/jquery.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/bootstrap/js/popper.min.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/owl-carousel/owl.carousel.min.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/slick-carousel/slick.min.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/magnific-popup/magnific-popup.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/plugins/instafeed-js/instafeed.min.js'); ?>"></script>
<script src="<?=base_url('/theme/revolve/js/custom.js'); ?>"></script>
<?= $this->endSection(); ?>