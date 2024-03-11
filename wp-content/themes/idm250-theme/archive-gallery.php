<?php get_header();
?>

<?php $loop = new WP_Query( array( 'post_type' => 'gallery', 'posts_per_page' => 5 ) ); 
   

if ($loop->have_posts()) : 

    $recent_args = array(
        "posts_per_page" => 1,
        "orderby" => "date",
    );      

    $recent_post = new WP_Query( $recent_args );
    // the_post_list($recent_args);
    echo '<div>';
    echo '<h2 class="wp-block-heading"> Featured </h2>';
    echo '<div class="wp-block-media-text is-stacked-on-mobile">';
    echo '<figure class="wp-block-media-text__media">';
    echo get_the_post_thumbnail();
    echo '</figure>';
    echo '<div class="wp-block-media-text__content">';
    echo '<h3 class="wp-block-heading"> ' .  get_the_title() . '</h3>';
    echo '<p>' .get_the_date(). '</p>';
    echo '<p>' .get_the_excerpt() . '</p>';
    echo '<div class="wp-block-buttons">';
    echo '<div class="wp-block-button">';
    echo '<a href="' . get_post_permalink() . '" class="wp-block-button__link wp-element-button">Read More</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
endif;

if (have_posts()) :
    echo '<div class="recent-post-block">';
        echo '<h2 class="wp-block-heading"> Recent Galleries </h2>';
        echo '<div class="recent-post-list">';
    while (have_posts()) : the_post();
            echo '<div>';
            echo '<a href="'. get_post_permalink() .'">';
                echo '<div class="wp-gallery-img">';
                echo get_the_post_thumbnail();
                echo '</div>';
                echo '<figcaption class="in-image">' .  get_the_title() . '</figcaption>';
                echo '</a>';
            echo '</div>';
    // echo '</div>';
    endwhile;
    echo '</div>';
    echo '</div>';
endif;
?>

<?php get_footer(); ?>