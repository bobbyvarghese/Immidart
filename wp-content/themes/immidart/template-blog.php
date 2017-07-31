<?php /* Template Name: Blog */ 
   get_header();
   $category_slug = 'blog';
   $id_obj = get_category_by_slug($category_slug);
   $current_cat_id  = $id_obj->term_id;
   $meta_image = z_taxonomy_image_url($id_obj->term_id);
?>
<div class="inside-page-banner" id="blog" style="background: url(<?php echo $meta_image; ?>); background-size: cover;
    background-position: center;">
      <div class="container">
        <div class="col-md-6 text-center col-md-offset-3">
          <h1><?php echo $id_obj->description; ?></h1>
        </div>
      </div>
      <div class="breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb"> <a class="" href="<?php echo get_site_url(); ?>">Home</a> <i class="fa fa-angle-double-right duble-arrow" aria-hidden="true"></i> <a class="active" href="<?php echo get_site_url() .'/blog'; ?>"> <?php echo $id_obj->name; ?></a> </div>
        </div>
      </div>
</div>

<div id="page-body">
    <div class="container"> 
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="blog-items">
            <?php 
                   $args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish');
                   query_posts($args);
                   if (have_posts()): while (have_posts()) : the_post();  
            ?>
                        <div class="blog-item blog-item-wide" data-aos="fade-up" data-aos-duration="1000">
                          <div class="blog-image"> <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="blog image" class="img-responsive"></a> </div>
                          <div class="blog-content">
                            <h4><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?> </a></h4>
                            <ul>
                                <li><i class="fa fa-user" aria-hidden="true"></i><span><?php echo get_the_author(); ?></span></li>
                              <li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_time('F j, Y'); ?></span></li>
                            </ul>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                        </div>
                        <hr data-aos="fade-up" data-aos-duration="1000">
            <?php   
                    endwhile; 
                    endif;
            ?>
            <!-- blog item -->
          </div>
        </div>
            <?php get_sidebar(); ?>
      </div>
      <!-- row --> 
    </div>
  </div>
<?php get_footer(); ?>

<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });

      setInterval(addItem, 300);

      var itemsCounter = 1;
      var container = document.getElementById('aos-demo');

      function addItem () {
        if (itemsCounter > 42) return;
        var item = document.createElement('div');
        item.classList.add('aos-item');
        item.setAttribute('data-aos', 'fade-up');
        item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
        //container.appendChild(item);
        itemsCounter++;
      }
</script>