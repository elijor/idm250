<?php get_header(); ?>
<?php
echo get_the_content();
$galleries = new WP_Query(array(
    "post_type" => "gallery",
    "post_per_page" => "3",
    "orderby"=> "date"
));


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



    // if (is_active_sidebar("main_sidebar")) { 
    //     dynamic_sidebar("main_sidebar");
    // };
?>
<?php
// <table class="mabel-bhi-businesshours">


// <tbody><tr><td>Monday</td><td>10:00 AM — 7:00 PM</td></tr><tr><td>Tuesday</td><td>10:00 AM — 7:00 PM</td></tr><tr><td>Wednesday</td><td>10:00 AM — 7:00 PM</td></tr><tr><td>Thursday</td><td>Closed</td></tr><tr><td>Friday</td><td>10:00 AM — 7:00 PM</td></tr><tr><td>Saturday</td><td>10:00 AM — 5:00 PM</td></tr><tr class="mbhi-is-current"><td>Sunday</td><td>10:00 AM — 5:00 PM</td></tr></tbody></table>


?>
<?php get_footer(); ?>