<?php
/**
 * The template for displaying Search Results pages.
 *
 */
get_header(); ?>
        <section id="primary" class="content-area">
            <div id="content" class="search-content site-content" role="main">
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                <div class="search"
              <?php $idObj = get_category_by_slug('do-not-browse-all'); 
			  $id = $idObj->term_id; ?>
                	<?php get_search_query('cat=-'.$id) ?>
                </div>
		    		<div id="searchresultinput" class="searchlabel"><?php get_search_form(); ?></div>
                </header><!-- .page-header -->
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post();
		    get_template_part('content','search');?>
 
                <?php endwhile; ?>
		<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
 
            <?php else : ?>
 
		<div id="searchresultinput" class="searchlabel"><?php get_search_form(); ?></div>
        <?php echo "There are no articles that match your search"; ?>
 
            <?php endif; ?>
            <?php wp_reset_postdata();
			wp_reset_query(); ?>
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
        
<?php get_template_part('content','categories'); ?>
<?php get_footer(); ?>