<section class="slider mt-5">
	<div class="container-fluid">
		<div class="columns is-gapless">
			<div class="column is-12 slider-wrap">
            <?php
                            
                foreach($widget as $value):
					$filepdf = base64_encode($value['file']);
                    $thumbpdf = base64_encode(str_replace('pdf', 'png', $value['file']));
                    $pdf = base_url('/Files/naskah/?q='.$filepdf.'&act=show');
                    $thumb = base_url('/Files/naskah/?q='.$thumbpdf.'&act=thumb');
                    echo "<div class=\"slider-item\">
							<div class=\"slider-item-content\">
									<div class=\"post-thumb mb-5\">
										<a href=\"\">
											<img src=\"{$thumb}\" alt=\"\" class=\"img-fluid\">
										</a>
									</div>
									<div class=\"slider-post-content\">
										<h3 class=\"post-title mt-2\"><a href=\"blog-single.html\">".$value['title']."</a></h3>
									</div>
							</div>
						 </div>";
				
                endforeach
            ?>

	          
            </div>
		</div>
	</div>
</section>


