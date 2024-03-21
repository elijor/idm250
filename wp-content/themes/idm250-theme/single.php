<?php get_header(); ?>
<?php

echo get_the_content();
if (has_post_thumbnail()){
    echo get_the_post_thumbnail();
};
?>
<?php get_footer(); ?>