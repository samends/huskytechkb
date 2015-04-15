  <?php
  /*
  Template Name: Popular Articles
  */
  ?>
  <?php echo  get_current_template(  ); ?>
  <div class="wrapper">
      <?php 
	  wp_head();
      get_header();?>
	  <div class="popart-content" >
		<?php $popularpost = new WP_Query( array( 'posts_per_page' => 9, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
		if ( $popularpost -> have_posts() ) : ?>
              <div class="margin-bottom row-fluid article-row">
              <?php $count=0;
				 while ( $popularpost->have_posts() ) : $popularpost->the_post();
				 
				  if($count>2){?>
				  		</div>
						<div class="margin-bottom row-fluid article-row">	
                        <?php $count=0;  
				  }
                      get_template_part('content','article');
					  $count++;
		endwhile;
		?></div> <?php 
		endif;
		wp_reset_postdata();
		wp_reset_query(); ?>
	
<?php get_template_part('content','categories'); ?>


</div>
<?php get_footer(); ?>
</div>