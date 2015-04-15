  <?php
  /*
  Template Name: About
  */
  ?>
  
<?php get_header(); ?>
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> 
        <div class="about-page-content">
            <?php the_content(); ?> 
        </div>
	<?php endwhile; ?>
   
<?php get_footer(); ?>