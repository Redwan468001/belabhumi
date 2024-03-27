<?php 

function our_calling_resource(){
	wp_enqueue_style('main_style', get_stylesheet_uri(), '', '1.0.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '' , '1.0.0');
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', '', '1.0.0');
	wp_enqueue_style('nivo_theme', get_template_directory_uri() . '/themes/default/default.css', '1.0.0');
	wp_enqueue_style('nivo_slider', get_template_directory_uri() . '/css/nivo-slider.css', '', '1.0.0');
	wp_enqueue_style('font', get_template_directory_uri() . '/font/font.css', '', '1.0.0');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/responsive.css', '', '1.0.0');
	
	wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-1.9.0.min.js', '', '1.9.0');
	wp_enqueue_script('nivo_js', get_template_directory_uri() . '/js/jquery.nivo.slider.js', '', '1.0.0');
	wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider.js', '', '1.9.1');
}

add_action('wp_enqueue_scripts' , 'our_calling_resource');

function our_theme_setup(){
	register_nav_menus(array(
		'primary_manu' => 'Primary Menu',
	));
	
	add_theme_support('post-thumbnails');
	
}

add_action('after_setup_theme' , 'our_theme_setup');



/**Excerpt Function**/

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/**End Excerpt Function**/


/**Related Post**/

function cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => array($post_id),
        'posts_per_page'  => '3'


     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            <ul>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
            </ul>
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

}



// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//End Post view count


//Post view count

// function to display number of posts.

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}














?>