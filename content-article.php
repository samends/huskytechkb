<?php
/**
 * The template used for displaying recent/popular articles
 *
 * @package WordPress
 */

?>
<div class="about boxsizing mobile-one article-post span4">
  <div class="article article-block">
        <div class="article-picture"><?php 
			$current_url=get_stylesheet_directory_uri();
			$main_url=$current_url.'/img/no-picture.jpg';
			if ( has_post_thumbnail() ) {
        	set_post_thumbnail_size( 270, 230, true );
        	the_post_thumbnail();} 
            else{ ?>
            	<img src="<?php echo $main_url ?>" alt="no-image">
           <?php  } ?>
        </div>
        <h3 class="article_results">
              <a class="articleattr" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h3>
    <div class="article-excerpt">    
    	<?php the_excerpt(); ?> 
  	</div>
  </div>  
</div>