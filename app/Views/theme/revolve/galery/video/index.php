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
        <div class="columns is-multiline">
			<div class="column is-12">
                <div class="post-header mb-5 ">
                        <div class="meta-cat text-color">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("./");?>">Beranda </a> |
                            <span class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1">Gallery</span> | 
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("/Gallery/Video");?>">Video</a>
                        </div>
                    </div>
				<div class="columns is-multiline">
                <?php
                    foreach($video as $value):
                        echo "<div class=\"column is-3-desktop is-6-tablet\">
                                <article class=\"post-grid mb-6 post-img is-relative\">
                                    <img src=\"{$value['snippet']['thumbnails']['high']['url']}\" alt=\"\" class=\"img-fluid w-100\">
                                    <a href=\"https://www.youtube.com/watch?v={$value['id']}\" class=\"play-btn popup-youtube\"><i class=\"ti-control-play\"></i></a>
                                    <h3 class=\"post-title mt-1\">
                                        <a href=\"https://www.youtube.com/watch?v={$value['id']}\" class=\"popup-youtube\">{$value['snippet']['title']}</a>
                                    </h3>
                                    <span class=\"text-muted letter-spacing is-uppercase font-sm \">".date("F d, Y", strtotime($value['snippet']['publishedAt']))."</a></span>
                                </article>
                            </div>";

                    endforeach;
                ?>
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