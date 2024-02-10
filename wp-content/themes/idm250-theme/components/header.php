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
    <main>