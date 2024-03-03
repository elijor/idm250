<?php get_header(); ?>

    <h2> This is an archive page</h2> 
    <p> is it working</p>

<?php
    echo get_the_content();
    // echo 'assss';
// echo '<h2>'. single_cat_title() .'</h2>';


//     if (have_posts()) : 
//     while (have_posts()) : the_post();
//     echo '<h3>' .  get_the_title() . '</h3>';
//     // echo get_the_post_thumbnail();
//     endwhile;
//     wp_reset_postdata();
// else:
//     echo '<p> no content has been found sucks </p>';
//     endif;
?>
<?php get_footer(); ?>