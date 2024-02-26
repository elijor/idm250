    <?php get_header(); ?>
    <!-- <h1>

    </h1>  -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CTWmcZqiy0Q?si=KkVRF9irKdZk8xRX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    <?php
    echo get_the_content();
    if (is_active_sidebar("main_sidebar")) { 
        dynamic_sidebar("main_sidebar");
    };

    
    get_footer(); ?>
