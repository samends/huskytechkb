<?php
/*
 Template Name: Browse All
 */
get_header(); ?>
        <section id="primary" class="content-area">
            <div id="content" class="browseall-content site-content" role="main">
			<?php
			  $idObj = get_category_by_slug('do-not-browse-all'); 
			  $id = $idObj->term_id;
              $limit = get_option('posts_per_page');
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			  $args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
              query_posts('showposts=' . $limit . '&paged=' . $paged.'&orderby=title&order=ASC'.'&cat=-'.$id);
              $wp_query->is_archive = true; $wp_query->is_home = false;
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
		    		get_template_part('content','search');?>
                <?php endwhile; ?>
		<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
            <?php else : ?>
                <?php echo "there are no post that match this search"; ?>
		<div class="searchlabel"><?php get_search_form(); ?></div>
            <?php endif; ?>
            <?php wp_reset_postdata();
			wp_reset_query(); ?>
            </div>
        </section>
        
<?php get_template_part('content','categories'); ?>
<?php get_footer(); ?>