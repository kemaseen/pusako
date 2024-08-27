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
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/plugins/pdf/css/flipbook.style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/plugins/pdf/css/font-awesome.css'); ?>">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="single-block-wrapper section-padding">
	<div class="container">
        <div class="columns is-multiline">
			<div class="column is-12">
                <div class="post-header mb-5 ">
                        <div class="meta-cat text-color">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("./");?>">Beranda </a> |
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("/Kamus/AksaraUlu");?>">Kamus Aksara Ulu</a>
                        </div>
                    </div>
				<div class="columns is-multiline">
                <?php
                    foreach($aksaraulu as $value):
                        $file = base64_encode($value['file']);
                        $images = base_url('/Files/aksara/?q='.$file.'&act=show');
						echo "<div class=\"column is-2-desktop is-6-tablet\">
									<article class=\"post-grid mb-6\">
										<a class=\"post-thumb mb-5 is-block\" >
											<img src=\"{$images}\" class=\" w-30\" >
										</a>
										<span class=\"cat-name text-color font-extra text-sm is-uppercase letter-spacing-1\">".$value['label']."</span>
									</article>
								</div>";
                    endforeach;
                ?>
				
                </div>
				<?= $pager->links('aksaraulu', 'bootstrap_pagination'); ?>
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
<script src="<?=base_url('/assets/plugins/pdf/js/pdfThumbnails.js');?>" data-pdfjs-src="<?=base_url('/assets/plugins/pdf/js/pdf.min.js');?>"></script>
<script src="<?=base_url('/assets/plugins/pdf/js/flipbook.min.js');?>"></script>
<?= $this->endSection(); ?>