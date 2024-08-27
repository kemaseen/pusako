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
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/plugins/flipbook/css/dflip.min.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/plugins/pdf/css/flipbook.style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/plugins/pdf/css/font-awesome.css'); ?>">-->
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="single-block-wrapper section-padding">
	<div class="container">
        <div class="columns is-multiline">
			<div class="column is-12">
                <div class="post-header mb-5 ">
                        <div class="meta-cat text-color">
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("./");?>">Beranda </a> |
                            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="<?=base_url("/ebook");?>">E Book</a>
                        </div>
                    </div>
				<div class="columns is-multiline">
                <?php
                    foreach($ebook as $value):
                        $filepdf = base64_encode($value['file']);
                        $thumbpdf = base64_encode(str_replace('pdf', 'png', $value['file']));
                        $pdf = base_url('/Files/ebook/?q='.$filepdf.'&act=show');
                        $thumb = base_url('/Files/ebook/?q='.$thumbpdf.'&act=thumb');
						echo "<div class=\"column is-2-desktop is-6-tablet\">
									<article class=\"post-grid mb-6\">
                                        <div class=\"post-thumb mb-5 is-block _df_thumb\" source=\"{$pdf}\" thumb=\"{$thumb}\">
                                            </div>
                                        <span class=\"cat-name text-color font-extra text-sm is-uppercase letter-spacing-1\">".$value['title']."</span><br>
										<span class=\"text-muted letter-spacing is-uppercase font-sm\">".date("l, d F Y - H:i", strtotime($value['created_at']))."</span>	
                                        										
									</article>
								</div>";
                    endforeach;
                ?>
				
                </div>
				<?= $pager->links('ebook', 'bootstrap_pagination'); ?>
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


<script src="<?=base_url('/assets/plugins/flipbook/js/libs/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('/assets/plugins/flipbook/js/libs/three.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('/assets/plugins/flipbook/js/libs/compatibility.js');?>" type="text/javascript"></script>
<script src="<?=base_url('/assets/plugins/flipbook/js/libs/mockup.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('/assets/plugins/flipbook/js/libs/pdf.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('/assets/plugins/flipbook/js/libs/pdf.worker.min.js');?>" type="text/javascript"></script>
<!-- Flipbook main Js file -->
<script src="<?=base_url('/assets/plugins/flipbook/js/dflip.min.js');?>" type="text/javascript"></script>

<!--
<script src="<?=base_url('/assets/plugins/pdf/js/pdfThumbnails.js');?>" data-pdfjs-src="<?=base_url('/assets/plugins/pdf/js/pdf.min.js');?>"></script>
<script src="<?=base_url('/assets/plugins/pdf/js/flipbook.min.js');?>"></script>
<script type="text/javascript">
	  
      $(document).ready(function () {
		  console.log(this);	
          $('.pdfflip').flipBook({
            //Layout Setting
            pdfUrl: $('.pdfflip').attr('value'),
            lightBox:true,
			logoImg : '<?=base_url('/logopdf.png');?>',
			btnBookmark:false,
            layout:4,
            currentPage:{vAlign:"bottom", hAlign:"left"},
            // BTN SETTING
            btnShare : {enabled:false},
            btnPrint : {enabled:false},
			
			btnDownloadPdf : {enabled:false},
            btnDownloadPages : {enabled:false},
            btnColor:'rgb(157 114 94)',
            sideBtnColor:'rgb(157 114 94)',
            sideBtnSize:60,
            sideBtnRadius:60,
			sideBtnBackground:"rgba(0,0,0,0)",
            btnSound:{vAlign:"top", hAlign:"left"},
            btnAutoplay:{vAlign:"top", hAlign:"left"}
        });
      })
  </script>
-->
<?= $this->endSection(); ?>