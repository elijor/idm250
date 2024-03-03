<body <?php body_class(); ?> <?php wp_body_open(); ?>>
    <header>
        <div>
            <div id="hamburgerMenu" tabindex=0 class="Xcontainer" onclick="changeMenutoX(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <a href="<?php echo get_home_url(); ?>">
                <h2>Sasha Velour Hair Studio</h2>
            </a>
        </div>
        <nav id="menu" class="mobileMenu">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary'
        ]);
        ?>
        </nav>

        <nav>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary'
        ]);
        ?>
        </nav>
    </header>
    <?php 
    // $title1 = get_the_title();
    if (is_archive()) {
        $title1 = post_type_archive_title('', false);
    } else {
        $title1 =  get_the_title();
    }
    
    if (has_post_thumbnail()) { ?>
        <div class="heroImgCon">
            <?php echo get_the_post_thumbnail(); ?>
            <h1><?php echo $title1; ?></h1>
        </div>
    <?php } else { ?>
        <h1><?php echo $title1; ?></h1>
    <?php } ?>
    

</div>
    <main>