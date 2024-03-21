<?php get_header();
?>

<?php $loop = new WP_Query( array( 'post_type' => 'gallery', 'posts_per_page' => 3 ) ); 
   

if ($loop->have_posts()) : 

    // $recent_args = array(
    //     "posts_per_page" => 3,
    //     "orderby" => "date",
    // );      

    // $recent_post = new WP_Query( $recent_args );
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
wp_reset_postdata();


if ($loop->have_posts()) : 
    echo '<div class="recent-post-block">';
        echo '<h2 class="wp-block-heading"> Recent Galleries </h2>';
        echo '<div id="recent-post-list" class="recent-post-list">';
        while ($loop->have_posts()) : $loop->the_post();
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
    echo '<div class = "wp-block-button">';
    echo '<button id="load-more">Load More</button>';
    echo '</div>';
endif;


?>

<script> 

document.getElementById('load-more').addEventListener('click', function() {
    var xhr = new XMLHttpRequest();

    var loadbtn = document.getElementById('load-more');

    loadbtn.style.display = "none";

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Find the element by ID
            var postList = document.getElementById('recent-post-list');
            // Check if the element exists
            if (postList) {
                // Append the fetched posts to the existing list
                postList.innerHTML = xhr.responseText;
            } else {
                console.error('Element with ID "recent-post-list" not found');
            }
        }
    };
    var offset = document.querySelectorAll('.recent-post-block .recent-post-list div').length;
    console.log(offset);
    
    xhr.open('GET', '<?php echo admin_url('admin-ajax.php'); ?>?action=load_more_posts&offset=' + offset, true);
    xhr.send();
});

</script>

<?php get_footer(); ?>