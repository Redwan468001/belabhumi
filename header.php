<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
	<title><?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('description'); } else { bloginfo('description'); } ?> | <?php bloginfo('name');?></title>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div class="container_full" id="navbar">
		<div class="container">
			<div id="s">
				<div class="col-lg-3 col-md-3 col-xs-4"> 
					<div id="web_img"> 
						<a href="<?php echo home_url(); ?>"><img style="height:52px" src="<?php echo get_template_directory_uri(); ?>/images/belabhumi.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-xs-8">
					<nav id="manu"> 
						<?php 
							$args = array(
								'theme_location' => 'primary_manu'
							);
							wp_nav_menu($args);
						?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	<!--Header-->
	<div class="container_full"> 
		<div class="img_top"> 
		</div>
	</div>
	
	<div class="container_full"> 
		<div class="container"> 
			<div class="row">
				
				<div id="web_img" class="col-lg-4 col-md-4 col-xs-4"> 
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/belabhumi.PNG" alt="" /></a>
				</div>
				
			</div>
		</div>
	</div>
	
	<!--Menu-->
	<div class="container_full nav_bg"> 
		<div class="container"> 
			<div class="row" style="padding:0">
				
				<div class="col-lg-9 col-md-9 col-xs-9"> 
					<nav id="manu"> 
						<?php 
							$args = array(
								'theme_location' => 'primary_manu'
							);
							wp_nav_menu($args);
						?>
					</nav>
				</div>
				
				<div class="col-lg-3 col-md-3 col-xs-3"> 
					<div id="search"> 
						<?php get_search_form(); ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!--Mobile Small Menu-->
	<div class="container_full mm_bg"> 
		<div class="container"> 
			<div id="mb_menu" class="side_menu">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; <span style="font-size:25px;color:#fff;font-family: georgia;font-weight:bold;">Close</span></a>
				<nav id="sm_menu"> 
					<?php 
						$args = array(
							'theme_location' => 'primary_manu'
						);
						wp_nav_menu($args);
					?>
				</nav>
			</div>

			<div class="col-lg-12 col-md-12 col-xs-12"> 
				<div class="col-lg-4 col-md-4 col-xs-5"> 
					<span style="font-size:30px;color:#fff;cursor:pointer" onclick="openNav()">&#9776;</span>
				</div>
				<div class="col-lg-8 col-md-8 col-xs-7" style="padding:0"> 
					<div id="search" style="padding:0"> 
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	