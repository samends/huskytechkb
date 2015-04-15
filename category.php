<?php
/**
* Huskytech Category Template
*/

get_header(); ?> 
<?php 
if ( have_posts() ) : ?>

<div class="category-temp topcategoryrow1 row-fluid">
	<?php $this_category = get_category($cat); ?>
	<?php if ($this_category->category_parent == 0) { ?>

	<?php } else { ?>
	<?php $parent_category = get_category($this_category->category_parent); ?>
        <?php $parent_name = $parent_category->cat_name; 
			  $child_name=$this_category->cat_name;?>
	<?php } ?>
    <?php if(substr( $child_name, 0, 3 ) == "All"):
			$child_name='All';
		else:
			
		endif;?>
	<h2 class="subcategory-title category-temp category-title"> <?php echo $parent_name.':'; echo $child_name; ?></h2>
</div>

    <div class="category-temp topcategoryrow2 row-fluid">
          <div class="span3">
           <form class="category-temp" action="<?php bloginfo('url'); ?>/" method="get">
                  <?php 
                  $idObj = $parent_category; 
                  $id = $idObj->term_id;
                  ?>
                      <?php
                        $catargs = array(
                            'show_count' => 0,
                            'orderby' => 'name',
                            'echo' => 0,
                            'child_of' => $id,
                        );
                        $select = wp_dropdown_categories($catargs);
                        $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
                        echo $select;
                      ?>
                    <noscript><input type="submit" value="View" /></noscript>
             </form>
          </div>
    </div>
<div class="rowbottom topcategoryrow3 category-temp row-fluid">
  <?php
    while ( have_posts() ) : the_post();
      get_template_part('content','search');
  ?>
    <?php endwhile;
    else: ?>
    <p>No articles in this area</p>
    <?php endif; ?>
</div>

<section class="rowbottom" id="catagories">
<?php get_template_part('content','categories'); ?>
</section>
<?php get_footer(); ?>