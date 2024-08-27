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
		<div class="columns is-desktop">
			<div class="column is-8-desktop">
				<div class="single-post">
                    <div class="post-header mb-5 ">
                        <div class="meta-cat text-color">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("./");?>">Beranda </a> |
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("/Artikel");?>">Artikel</a>
                        </div>
                        <h2 class="post-title mt-2">
                        <?=$article['title'];?>
                        </h2>
                        <div class="post-meta">
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">Reporter : <?=$article['author'];?></span>
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">Editor : <?=$article['author'];?></span>
                            <span class="text-uppercase font-sm letter-spacing-1"><?=date("l, d F Y - H:i", strtotime($article['created_at']));?></span>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                            <?=$article['content'];?>                            
                        </div>
                        <div class="post-tags py-4">
                            <?php if(trim($article['tag']) != ''){
                                    $tags = explode("#", trim($article['tag']));
                                    foreach($tags as $value){
                                        if(trim($value) != '')
                                            echo "<a href=\"".base_url('Artikel/tag/#'.$value)."\">#".$value."</a>";
                                    }
                               }
                            ?>
                        </div>
                        <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">
                            <div class="list-posts-share">Share : 
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?= view_cell('\App\Libraries\Widget::article', ['title' => $article['title'], 'limit' => 10]) ?>
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