<?php
/**
 * Template Name: Newsletter Subscription
 */

get_header(); 
$banner_image_path = get_template_directory_uri().'/images/banner.jpg';
$page = get_page_by_path('newsletter-subscription');
$content = apply_filters('the_content', $page->post_content);
?>
<div class="inside-page-banner" id="error" style="background-image: url(<?php echo $banner_image_path; ?>);">
    <div class="container">
        <div class="col-md-6 text-center col-md-offset-3">
           <h1><?php echo get_the_title($page); ?></h1>
        </div>
    </div>
    <div class="breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb"> <a class="" href="<?php echo get_site_url(); ?>">Home</a> <i class="fa fa-angle-double-right duble-arrow" aria-hidden="true"></i> <a class="active"> newsletter</a> </div>
        </div>
    </div>
</div>

<div id="page-body">
    <div class="container">
        <div class="error-section">
    	    <div class="auto-container"> 	
                <div class="text-content">
                        <?php echo $content; ?>
                        <a href="<?php echo get_site_url(); ?>" class="theme-btn btn-style-one fadeInUp animated">Back To Home</a> 
                </div>          
                <figure class="image-box fadeInUp animated"><img src="<?php echo get_template_directory_uri(); ?>/images/error.png" alt=""></figure>
            </div>
        </div>  
    </div>
</div>
<?php get_footer(); ?>