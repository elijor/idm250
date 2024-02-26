<?php get_header(); ?>
<?php
echo get_the_content();
$galleries = new WP_Query(array(
    "post_type" => "gallery",
    "post_per_page" => "2",
    "orderby"=> "date"
 ));

if (is_active_sidebar("main_sidebar")) { 
    dynamic_sidebar("main_sidebar");
};
// if ()
// if ($galleries->have_posts()) : 
//     while ($galleries->have_posts()) : $galleries->the_post();
//     echo '<h3>' .  get_the_title() . '</h3>';
//     echo get_the_post_thumbnail();
//     endwhile;
//     wp_reset_postdata();
//     endif;

    
?>

<?php get_footer(); ?>