<?php get_header(); ?>
    <?php
    echo get_the_content();
    if (is_active_sidebar("main_sidebar")) { 
        dynamic_sidebar("main_sidebar");
    };
    get_footer(); ?>