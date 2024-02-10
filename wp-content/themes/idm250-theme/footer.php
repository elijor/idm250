</main>
<footer>
    <div>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/igIcon.svg' ); ?>" alt="Instagram Logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/ttIcon.svg' ); ?>" alt="Tiktok Logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/fbIcon.svg' ); ?>" alt="Facebook Logo">
    </div>
<!-- <h3> &copy; Eli Goldberg</h3> -->
<p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
</footer>
<?php wp_footer(); ?>
</body>
</html>