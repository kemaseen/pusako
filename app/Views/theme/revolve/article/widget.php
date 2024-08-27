<div class="column is-4-desktop">
				<div class="sidebar sidebar-right">
					<div class="sidebar-wrap">
                        <div class="sidebar-widget mb-5">
                            <h4 class="has-text-centered widget-title">Artikel Lain</h4>
                            <?php
                            
                                foreach($widget as $value):
                                    echo "<div class=\"media sidebar-post-item\">
                                                <img src=\"../images/berita4.jpg\">
                                                <div class=\"ml-5\">
                                                    <span class=\"text-muted letter-spacing is-uppercase font-xs\">".date("l, d F Y - H:i", strtotime($value['created_at']))."</span>
                                                    <h5>
                                                        <a href=\"".base_url('Artikel/'.$value['slug'])."\">".$value['title']."</a>
                                                    </h5>
                                                </div>
                                            </div>";
                                endforeach
                            ?>
                        </div>

                    </div>
				</div>
			</div>