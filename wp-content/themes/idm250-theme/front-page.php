<?php get_header(); ?>
<?php
echo get_the_content();

$args = array(
    "post_type" => "gallery",
    "post_per_page" => "1",
    "orderby"=> "date"
);

$galleries = new WP_Query($args);

if ($galleries->have_posts()) : 
    echo '<div class="recent-post-block">';
        echo '<h2 class="wp-block-heading"> Recent Galleries </h2>';
        echo '<div class="recent-post-list">';
        while ($galleries->have_posts()) : $galleries->the_post();
            echo '<div>';
            echo '<a href="'. get_post_permalink() .'">';
                echo '<div class="wp-gallery-img">';
                echo get_the_post_thumbnail();
                echo '</div>';
                echo '<figcaption class="in-image">' .  get_the_title() . '</figcaption>';
            echo '</a>';
            echo '</div>';
    // echo '</div>';
    // wp_reset_postdata();
    endwhile;
  
        echo '</div>';
        $gotoBlog = esc_url( home_url( '/gallery' ) );
    wp_reset_postdata();
    echo '<div class="wp-block-buttons">';
    echo '<div class="wp-block-button">';
    echo '<a href="' . $gotoBlog . '" class="wp-block-button__link wp-element-button">See More</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    endif;



 get_footer(); 
 
 ?>