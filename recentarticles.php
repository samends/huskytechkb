<?php
/*
 Template Name: Recent Articles
 */
get_header(); ?>
        <section id="primary" class="content-area">
            <div id="content" class="browseall-content site-content" role="main">
			<?php
			  $recent_query = new WP_Query( array ( 'posts_per_page' => 9,'orderby' => 'date') );
            ?>
            <?php if ( $recent_query -> have_posts() ) : ?>
              <div class="margin-bottom row-fluid article-row">
              <?php $count=0;?>
                  <?php while ( $recent_query ->have_posts() ) : $recent_query ->the_post();
				  if($count>2){?>
				  		</div>
						<div class="margin-bottom row-fluid article-row">	
                        <?php $count=0;  
				  }
                      get_template_part('content','article');
					  $count++;?>
                      
                  <?php endwhile; ?>
              </div>
            <?php else : ?>
                <?php echo "There are no articles that match your search"; ?>
		<div class="searchlabel"><?php get_search_form(); ?></div>
            <?php endif; ?>
            <?php wp_reset_postdata();
			wp_reset_query(); ?>
            </div>
        </section>
        
<?php get_template_part('content','categories'); ?>
<?php get_footer(); ?>