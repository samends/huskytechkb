<?php
/**
* Huskytech Single Post Template
*/
get_header(); ?> 
<div id="content" class="clearfix row">	
      <div id="main" class="span10  clearfix" role="main">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
             
              <header>
                  
                  <div class="page-header"><h3 class="article-title" itemprop="headline"><?php the_title(); ?></h3></div>
                                          
              </header>
          
              <section class="post_content clearfix" itemprop="articleBody">
                  <?php the_content(); ?>
                  
                  <?php wp_link_pages(); ?>
          
              </section>
                      
          <?php endwhile; ?>			
          
          <?php else : ?>
          
          <article id="post-not-found">
              <header>
                  <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
              </header>
              <section class="post_content">
                  <p><?php _e("Sorry, but the requested article was not found on this site.", "wpbootstrap"); ?></p>
              </section>
          </article>
          
          <?php endif; ?>
  
      </div> <!-- end #main -->
      
      <div class="span3 more-information">
      		
      		<div class="information-circle"><h2 class="question-mark">?</h2>
            </div>
      		<div class="information-text">
            	<p><b>Need assistance?</b><br>Contact huskytech at <a href="http://www.huskytech.uconn.edu">our website</a></p>
            </div>
      </div>

  </div> <!-- end #content -->
<div class="finalrow row">
  <div class="">
	<?php
      $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
      echo "<a class='btn btn-default backattr' href='$url'>Back</a>"; 
    ?>
  </div>
</div>
<?php get_footer(); ?>