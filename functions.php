<?php 

/*Adding custom javascript*/

function addarticlesytle()
{
	$current_url=get_stylesheet_directory_uri();
	$mainjs_url=$current_url.'/js/main.js';
    wp_register_script( 'display-articles',$mainjs_url,array( 'jquery' ), false, true);
    wp_enqueue_script( 'display-articles' );
}
add_action( 'wp_enqueue_scripts', 'addarticlesytle' );

/*Functions for popular articles page */

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
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
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/*Excluding category from search query*/

function gt_search_filter($query) {
if ($query->is_search) {
$idObj = get_category_by_slug('do-not-browse-all'); 
$browseid0 = $idObj->term_id;
$browseid = '-'.$browseid0;
$query->set('cat', $browseid);
}
return $query;
}
 
add_filter('pre_get_posts','gt_search_filter');

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('cat','0,1');
}
  return $query;
}
add_filter('pre_get_posts','SearchFilter');

/*Customizing Excerpt Length*/

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

$title 	= get_the_title();
	$keys= explode(" ",$s);
	$title 	= preg_replace('/('.implode('|', $keys) .')/iu',
		'<strong class="search-excerpt">\0</strong>',
		$title);
		
/* Customize Recent Article/Popular Article Length */

function short_title($title, $id=null){
	if(	get_current_template()=="recentarticles.php" || get_current_template()=="populararticles.php"){		
		$title=substr($title, 0, 45);
		if(strlen($title)>=45){
			$title=$title."...";
		}
	}
	return $title;	
}

add_filter( 'the_title', 'short_title', 10, 2 );

/*Get current template */
add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}
?>