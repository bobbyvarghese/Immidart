<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>
	<?php return; endif; ?>

<?php if (have_comments()) : ?>
        <div id="comments">
            <h2 class="comments-title" data-aos="fade-up" data-aos-duration="1000"><?php echo '('. get_comments_number().') COMMENTS'; ?></h2>
            <ol class="comments-list"> 
		    <?php  wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
            </ol>
        </div>
<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>
<?php endif; ?>

<?php // comment_form(); 

 bs_comment_form();
?>

</div>


