<?php
/**
 * Template Name: 404 Page
 */

get_header(); 
$banner_image_path = get_template_directory_uri().'/images/banner.jpg';
?>
<div class="inside-page-banner" id="error" style="background-image: url(<?php echo $banner_image_path; ?>);">
    <div class="container">
        <div class="col-md-6 text-center col-md-offset-3">
           <h1>404 Error</h1>
        </div>
    </div>
    <div class="breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb"> <a class="" href="<?php echo get_site_url(); ?>">Home</a> <i class="fa fa-angle-double-right duble-arrow" aria-hidden="true"></i> <a class="active"> 404 Error</a> </div>
        </div>
    </div>
</div>

<div id="page-body">
    <div class="container">
        <div class="error-section">
    	    <div class="auto-container"> 	
                <div class="text-content">
                    <div class="bigger-text fadeInUp animated">404</div>
                        <div class="medium-text fadeInUp animated">the page you are looking for does not exit.</div>
                        <div class="text fadeInUp animated">
                            <p>The Site is Currently Unavailable, Please Try Again Soon, or Contact Support if You Need a Help.</p>
                        </div>
                        <a href="<?php echo get_site_url(); ?>" class="theme-btn btn-style-one fadeInUp animated">Back To Home</a> 
                </div>          
                <figure class="image-box fadeInUp animated"><img src="<?php echo get_template_directory_uri(); ?>/images/error.png" alt=""></figure>
            </div>
        </div>  
    </div>
</div>
<?php get_footer(); ?>