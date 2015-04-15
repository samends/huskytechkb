  <?php
  /*
  Template Name: Cover Page
  */
   get_header();?>
  <div class="wrapper">
      <?php 
	$current_url=get_stylesheet_directory_uri();
	$main_url=$current_url.'/img/background_image_blue.jpg'; ?>
    <div class="picturerow span12 row-fluid">
            <div class="picturespan span12">
            <img class="huskytechcoverpic" src="<?php echo $main_url ?>" alt="huskytech picture">
            </div>
        </div>
        
      <div class="searchrow row-fluid">
        <div class="span1 offset4">
          	<h3 id="search-database" class="search"> Search: </h3>
        </div>
        <div class="search span2">
            <?php get_search_form(); ?>
        </div>
      </div>
      </div>
      </body>
<?php get_footer(); ?>