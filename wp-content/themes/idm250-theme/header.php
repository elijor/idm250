<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php if (is_archive()) {post_type_archive_title();
    } else {
        wp_title();
    }; ?>
    </title>
    <?php wp_head(); ?>
</head>
<?php get_template_part('components/header') ?>