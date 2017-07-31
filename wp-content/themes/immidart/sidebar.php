<!-- sidebar -->
<?php 
   $category_slug = 'blog';
   $id_obj = get_category_by_slug($category_slug);
   $current_cat_id  = $id_obj->term_id;
   $args = array('parent' => $current_cat_id, 'orderby' => 'id', 'order' => 'ASC',  'hide_empty' => 0);
   $child_categories = get_categories($args);
?>

<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="sidebar">
        <h3 class="sidebar-title">Subscribe Newsletter</h3>
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Your Email">
                <button class="search-btn" type="submit">Subscribe</button>
              </form>
            </div>
            <div class="sidebar-item" >
              <h3 class="sidebar-title">Blog Categories</h3>
              <ul class="sidebar-categories">
                  <?php foreach($child_categories as $child){ 
                      $category = get_category($child->term_id);
                      $count = $category->category_count;
                  ?>
                <li><a href="<?php echo get_category_link($child->term_id);?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $child->name;?> <span><?php if($count < 10) {echo 0;} echo $count;?></span></a></li>
                  <?php } ?>
              </ul>
            </div>
            
            <!-- sidebar item -->
            <?php 
                $popularpost = new WP_Query( 
                                      array('posts_per_page' => 4, 
                                            'meta_key' => 'wpb_post_views_count', 
                                            'orderby' => 'meta_value_num', 
                                            'order' => 'DESC'  ));
            ?>
            <div class="sidebar-item">
              <h3 class="sidebar-title">Popular Posts</h3>
              <ul class="sidebar-posts">
                  <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                <li>
                  <div class="image"> <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php the_post_thumbnail_url('small'); ?>" alt="post image" class="img-responsive"></a> </div>
                  <div class="content"> <a href="<?php echo get_permalink($post->ID); ?>"><?php echo the_title(); ?></a> <span><?php the_time('F j, Y'); ?></span> </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <!-- sidebar-posts --> 
            </div>
            <!-- sidebar item --> 
    </div>
          <!-- sidebar --> 
</div>

<!-- /sidebar -->