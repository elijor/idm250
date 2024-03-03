</main>
<footer>
    <div>
<?php 
$socialmedias = new WP_Query(array(
    "post_type" => "socialmedias",
    // "post_per_page" => "3",
    // "orderby"=> "date"
));

if ($socialmedias && $socialmedias->have_posts()) : 
    while ($socialmedias->have_posts()) :
        $socialmedias->the_post();  
        $icons = get_field('social-media-icon');
        $links = get_field('link_to_social_media');
        // var_dump($icons);
        if ($icons) {
            echo '<a href="'.$links.'">';
            echo '<img src="' . $icons['url'] . '"/>';  // Use the first value of the array
            echo '</a>';
        }
    endwhile;
endif;
?>
    </div>
<!-- <h3> &copy; Eli Goldberg</h3> -->
<p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
</footer>
<?php wp_footer(); ?>
</body>
</html>