<?php get_header(); ?>

	<?php get_template_part('slider'); ?>
	<!--Section-->
	<div class="container_full"> 
		<div class="container"> 
			<div class="row">
				
				<!--Section_left-->
				<div class="col-lg-8 col-md-8 col-xs-12" style="padding-right:0px;box-shadow: 6px 0px 3px -2px #ddd;"> 
					<div class="section_left">
						
						<!--Section 1-->
						<div class="col-lg-12 col-md-12 col-xs-12" style="padding:0"> 
			
							<section id="section">
						
								<div id="myBtnContainer"> 
                                    <button class="f_btn fil_act" onclick="filterSelection('movie')"> গদ্য</button>
                                    <button class="f_btn" onclick="filterSelection('art')"> উপন্যাস</button>
                                    <button class="f_btn" onclick="filterSelection('play')"> অনুবাদ</button>
								</div>
							
								<div class="col-lg-12 col-md-12 col-xs-12" style="padding:0px;"> 
									
									<!--গদ্য-->
									<div class="filterDiv movie">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=গদ্য&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=গদ্য&posts_per_page=7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
														    <div id="post_meta">
                    											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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

									
									<!--উপন্যাস-->
									<div class="filterDiv art">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=উপন্যাস&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=উপন্যাস&posts_per_page=7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
														    <div id="post_meta">
                    											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
									
									
									<!--অনুবাদ-->
									<div class="filterDiv play">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=অনুবাদ&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=অনুবাদ&posts_per_page=7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
														    <div id="post_meta">
                    											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
								
							</section>
						
						</div>
						
						<!--Interview-->
						<div class="col-lg-12 col-md-12 col-xs-12 int_bg" style="padding:0"> 
							<div id="interview"> 
							
								<div id="cat_title"> 
									<h2>সাক্ষাৎকার</h2>
								</div>
								
								<?php
            						$query = new WP_Query('category_name=সাক্ষাৎকার&posts_per_page=6&order=DESC');
            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
            					?>
								<div class="col-lg-4 col-md-4 col-xs-6" style="padding:0"><a href="<?php the_permalink(); ?>">
									<div class="single_inter"> 
										<div class="sng_int_img"> 
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="sng_int_cnt"> 
											<p><?php the_title(); ?></p>
										</div>
									</div></a>
								</div>
								<?php 
								    endwhile;
								    endif;
								?>
								
							</div>
						</div>
						
						<!--Section 3-->
						<div class="col-lg-12 col-md-12 col-xs-12" style="padding:0"> 
			
							<section id="section">
							
									<div id="myBtnContainer2"> 
                                        <button class="f_btn2 fil_act2" onclick="filterSelection2('movie2')"> নাটক</button>
                                        <button class="f_btn2" onclick="filterSelection2('art2')"> চারুকলা</button>
                                        <button class="f_btn2" onclick="filterSelection2('play2')"> বার্তা</button>
									</div>
								
								<div class="col-lg-12 col-md-12 col-xs-12" style="padding:0px;"> 
									
									<!--নাটক-->
									<div class="filter movie2">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=নাটক&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=নাটক&posts_per_page=7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
        													<div id="post_meta">
                    											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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

									
									<!--চারুকলা-->
									<div class="filter art2">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=চারুকলা&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=চারুকলা&posts_per_page7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
    														<div id="post_meta">
                    											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
									
									
									<!--বার্তা-->
									<div class="filter play2">
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0 20px 0 0">
											<div class="section_4_art_top"> 
											
												<?php
                            						$query = new WP_Query('category_name=বার্তা&posts_per_page=1&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
													<div id="sng_sct4_art_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
													<div id="sng_sct4_art_cnt"style="border:none">
														<h2><?php the_title(); ?></h2> 
                										<div id="post_meta">
                											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0">
											<div class="section_4_art_bottom"> 
											
											    <?php
                            						$query = new WP_Query('category_name=বার্তা&posts_per_page=7&order=DESC');
                            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                            					?>
												<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
													<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
														<div class="sng_sct4b_img"> 
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
														<div class="sng_sct4b_cnt">
															<h2><?php the_title(); ?></h2> 
														    <div id="post_meta">
                    											<p style="font-size:15px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
								
							</section>
						
						</div>
						
						
						<!--Section 4-->
						<div class="col-lg-12 col-md-12 col-xs-12 np" style="padding:0 20px 0 0">
							<div class="section_4"> 
							
								<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0"> 
									<div id="section_4_left">
									
										<div id="cat_title"> 
											<h2>পদ্য</h2>
										</div>
										
										<div class="section_4_art_top"> 
										
										    <?php
                        						$query = new WP_Query('category_name=পদ্য&posts_per_page=1&order=DESC');
                        						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                        					?>
											<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>"> 
												<div id="sng_sct4_art_img"> 
    												<?php the_post_thumbnail(); ?>
												</div>
												<div id="sng_sct4_art_cnt">
													<h2><?php the_title(); ?></h2> 
													<div id="post_meta">
            											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="section_4_art_bottom"> 
										
										    <?php
                        						$query = new WP_Query('category_name=পদ্য&posts_per_page=5&order=DESC');
                        						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                        					?>
											<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
												<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
													<div class="sng_sct4b_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
												</div>
												<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
													<div class="sng_sct4b_cnt">
														<h2><?php the_title(); ?></h2>
    													<div id="post_meta">
                											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
								
								<div class="col-lg-6 col-md-6 col-xs-12" style="padding:0"> 
									<div id="section_4_right">
									
										<div id="cat_title"> 
											<h2>ছড়া</h2>
										</div>
										
										<div class="section_4_art_top"> 
										
										    <?php
                        						$query = new WP_Query('category_name=ছড়া&posts_per_page=1&order=DESC');
                        						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                        					?>
											<div class="sng_sct4_art"><a href="<?php the_permalink(); ?>">
												<div id="sng_sct4_art_img"> 
													<?php the_post_thumbnail(); ?>
												</div>
												<div id="sng_sct4_art_cnt">
													<h2><?php the_title(); ?></h2> 
													<div id="post_meta">
            											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
										
										<div class="section_4_art_bottom"> 
										
										    <?php
                        						$query = new WP_Query('category_name=ছড়া&posts_per_page=5&order=DESC');
                        						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                        					?>
											<div class="sng_sct4_art oth_child"><a href="<?php the_permalink(); ?>">
												<div class="col-lg-3 col-md-3 col-xs-3" style="padding:0"> 
													<div class="sng_sct4b_img"> 
														<?php the_post_thumbnail(); ?>
													</div>
												</div>
												<div class="col-lg-9 col-md-9 col-xs-9" style="padding:0"> 
													<div class="sng_sct4b_cnt">
														<h2><?php the_title(); ?></h2> 
    													<div id="post_meta">
                											<p style="font-size:14px;padding: 0;margin:0"><?php the_time('jS F, Y'); ?> | <?php comments_popup_link('<i class="fas fa-comments"></i> 0', '<i class="fas fa-comments"></i> 1' , '<i class="fas fa-comments"></i> %' , 'my_comment_class' , 'Comments Off'); ?> |  <i style="margin-right:5px" class="fas fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></p>
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
				
				<!--Section Right-->
				<div class="col-lg-4 col-md-4 col-xs-12"> 
					<div class="section_right sidebar"> 
						
						<div id="single_sidebar"> 
							
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
								<?php
            						$query = new WP_Query('category_name=ay_sec_1&posts_per_page=4&order=DESC');
            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
            					?>
								<?php the_post_thumbnail(); ?>
								<?php 
								    endwhile;
								    endif;
								?>
							</div>
						</div>
						
						<div id="single_sidebar"> 
							<div id="cat_title"> 
								<h2>বিজ্ঞাপন</h2>
							</div>
							<div class="sng_sidebar_img"> 
								<?php
            						$query = new WP_Query('category_name=ay_sec_2&posts_per_page=4&order=DESC');
            						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
            					?>
								<?php the_post_thumbnail(); ?>
								<?php 
								    endwhile;
								    endif;
								?>
							</div>
						</div>
						
						<div id="single_sidebar"> 
							<div id="cat_title"> 
								<h2>এ মাসের সর্বাধিক পঠিত</h2>
							</div>
							
							<div class="section_4_art_bottom">
							    
							    <?php
    								$query = new WP_Query('posts_per_page=8&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
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