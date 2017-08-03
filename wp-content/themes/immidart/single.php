<?php 
       get_header(); 
       $category_slug = 'blog';
       $id_obj = get_category_by_slug($category_slug);
       $current_cat_id  = $id_obj->term_id;
       $meta_image = z_taxonomy_image_url($id_obj->term_id);
       $categoryLink = get_category_link($current_cat_id);
       $single_page_category = get_the_category();
?>
<?php if(!empty($meta_image)): ?>
<div class="inside-page-banner" id="blog" style="background: url(<?php echo $meta_image; ?>); background-size: cover; background-position: center;">
      <div class="container">
        <div class="col-md-6 text-center col-md-offset-3">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
      </div>
      <div class="breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb" style="width: inherit;"> 
              <a class="" href="<?php echo get_site_url(); ?>">Home</a> 
              <i class="fa fa-angle-double-right duble-arrow" aria-hidden="true"></i> 
              <a class="" href="<?php echo get_site_url() .'/blog'; ?>"> <?php echo $id_obj->name; ?></a> 
              <i class="fa fa-angle-double-right duble-arrow" aria-hidden="true"></i> 
              <a class="active" href="<?php echo $categoryLink; ?>"> <?php echo $single_page_category[0]->name; ?></a> 
          </div>
        </div>
      </div>
</div>
<?php endif ?>

<div id="page-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="blog-items">
            <div class="blog-item blog-item-wide">
                   <?php if (have_posts()): while (have_posts()) : the_post(); 
                         /*To get the page view count. To get popular post*/
                               wpb_get_post_views(get_the_ID()); 
                   ?>
                  <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                            <div class="blog-image blog-details-img" data-aos="fade-up" data-aos-duration="1000"> 
                                <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="blog image" class="img-responsive"></a> 
                            </div>
                            <div class="blog-content blog-content-details" data-aos="fade-up" data-aos-duration="1000">
                  <?php else : ?>
                                <div class="blog-content blog-content-details" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-15px;" >       
                  <?php endif; ?>
                        <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <ul>
                          <li><i class="fa fa-user" aria-hidden="true"></i> <span><?php echo get_the_author(); ?></span></li>
                          <li><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php the_time('F j, Y'); ?><span></li>
                        </ul>
                        <?php the_content(); ?>
                  </div>
	          <?php comments_template(); ?>	
	          <?php endwhile; 
                        else: ?>
                        <article>
                            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
                        </article>
	          <?php endif; ?>
            </div>
         </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

<script>
   function socialclick(url){
    window.open(url,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=450');return false;
   }
</script>
