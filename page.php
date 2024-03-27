<?php get_header(); ?>

	<!--Section-->
	<div class="container_full"> 
		<div class="container"> 
			<div class="row">
				
				<!--Section_left-->
				<div class="col-lg-8 col-md-8 col-xs-12" style="padding-right:10px;box-shadow: 6px 0px 3px -2px #ddd;"> 
					<div class="section_left">
						<div id="sn_bl">
				            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				        </div>
						<div class="col-lg-12 col-md-12 col-xs-12" style="padding:0"> 
							<div id="section_4_right">
							
								<div id="cat_title"> 
									<h2><?php wp_title(); ?></h2>
								</div>
								
								<div class="section_4_art_top"> 
								
								    <?php
                						if(have_posts()) : while(have_posts()) : the_posts();
                					?>
									<div class="col-lg-6 col-md-6 col-xs-12 sng_sct4_art"><a href="<?php the_permalink(); ?>">
										<div id="sng_sct4_art_img"> 
											<?php the_post_thumbnail(); ?>
										</div>
										<div id="sng_sct4_art_cnt">
											<h2><?php the_title(); ?></h2> 
											<div id="post_meta">
    											<p style="font-size:14px;padding: 0;margin:0"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
    										</div>
											<p><?php echo excerpt('20'); ?></p>
											<a class="read_more" href="<?php the_permalink(); ?>">বিস্তারিত</a>
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
				
				<!--Section Right-->
				<div class="col-lg-4 col-md-4 col-xs-12"> 
					<div class="section_right sidebar"> 
						
						<div id="single_sidebar"> 
							<div class="fb-page" data-href="https://www.facebook.com/mugdhotabd/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mugdhotabd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mugdhotabd/">মুগ্ধতা</a></blockquote></div>
						</div>
						
						<div id="single_sidebar"> 
							<div class="sng_sidebar_img"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/add1.jpg" alt="" />
							</div>
						</div>
						
						<div id="single_sidebar"> 
							<div id="cat_title"> 
								<h2>বিজ্ঞাপন</h2>
							</div>
							<div class="sng_sidebar_img"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/add2.jpg" alt="" />
							</div>
						</div>
						
						<div id="single_sidebar"> 
							<div id="cat_title"> 
								<h2>বিজ্ঞাপন</h2>
							</div>
							<div class="sng_sidebar_img"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/add2.jpg" alt="" />
							</div>
						</div>
						
						<div id="single_sidebar"> 
							<div id="cat_title"> 
								<h2>এ মাসের সর্বাধিক পঠিত</h2>
							</div>
							
							<div class="section_4_art_bottom">
							    
							    <?php
    								$query = new WP_Query('custom_name=test&posts_per_page=8&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
    								if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
    							?>
								<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
									<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
										<div class="sng_sct4b_img wi_img"> 
											<?php the_post_thumbnail(); ?>
										</div>
									</div>
									<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
										<div class="sng_sct4b_cnt">
											<h2><?php the_title(); ?></h2> 
										    <div id="post_meta">
    											<p style="font-size:15px;padding: 0;margin:0"><i class="fa fa-clock"></i> <?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?></p>
    										</div>
										</div>
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
	
	
	<?php get_footer(); ?>