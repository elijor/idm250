<?php get_header(); ?>
    <h1 class="c404p"> 404 Error</h1> 
<?php
    $image_id = 290; // Replace with the actual image attachment ID
$image_url = wp_get_attachment_image_url( $image_id, 'full' ); // Get URL for the full size image


?>
<div class="wp-block-media-text is-stacked-on-mobile"> 
    <figure class="wp-block-media-text__media">
        <img src="<?php echo $image_url; ?>" alt="" class="wp-image-290 size-full">
    </figure>
    <div class="wp-block-media-text__content">
    <h2 class="wp-block-heading">Whoops!</h2>
    <p>The page you were looking for does not exist. Check the URL to see if there were any typos. If not, this page may have been moved or renamed. Feel free to go back to the previous page or go to our home page.</p>
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button" href="<?php echo get_home_url(); ?>">
        Go Home
        </a>
    </div>
<!-- /wp:button -->
</div>    

</div>

</div>
    <!-- <p> is it working</p> -->
<?php get_footer(); ?>