	<!--Slider-->
	<div class="container_full slide_bg"> 
		<div class="container"> 
			<div class="row">
				
				<div class="col-lg-8 col-md-8 col-xs-12">
				
					<div id="main" role="main">
						<section class="slider-image">
							
							<div class="sld_img">
								<div id="slider" class="flexslider">
									<ul class="slides">
									    
									    <?php
                    						$query = new WP_Query('posts_per_page=6&order=DESC');
                    						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    					?>
										<li><a href="<?php the_permalink(); ?>">
											<div class="slide_img"> 
												<?php the_post_thumbnail(); ?>
											</div></a>
											<div class="t_silde_cnt"> 
												<div id="idx_mt">
                    						        <?php the_category(); ?> 
                    						    </div>
												<h2 class="flex-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
										</li>
										<?php 
										    endwhile;
										    endif;
										?>
										
									</ul>
								</div>
							</div>
							
							<div class="sld_cnt">
								<div id="carousel" class="flexslider">
									<ul class="slides slide_cnt">
									    
									    <?php
                    						$query = new WP_Query('posts_per_page=6&order=DESC');
                    						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    					?>
										<li style="width:100% !important"><a href="<?php the_permalink(); ?>">
											<h2 class="flex-caption"><?php the_title(); ?></h2></a>
										</li>
										<?php 
										    endwhile;
										    endif;
										?>
										
									</ul>
								</div>
							</div>
						</section>
						
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div id="slider_wrapper">
						<h2>নির্বাচিত পোস্ট</h2>
						<div class="slider-wrapper theme-default">
							<div id="slider2" class="nivoSlider">
							    
							    <?php
            						$query = new WP_Query('category_name=নির্বাচিত&posts_per_page=6&order=DESC');
            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
            					?>
								<div id="single_n_slider"><a href="<?php the_permalink(); ?>">
									<div class="n_slide_img"> 
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="n_slide_art"> 
									</div></a>
								</div>
								<?php 
								    endwhile;
								    endif;
								?>
								
							</div> 
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>