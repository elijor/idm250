</main>
<footer>
<div> 
<div>
    
    <div class="businesshrs">
        <div> 
            <p>   Monday </p>
            <p> <b>
                <?php
                    $mondayhours = get_field('mondayhours', 'option');
                    echo $mondayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Tuesday </p>
            <p> <b>
                <?php
                    $tuesdayhours = get_field('hours-tuesday', 'option');
                    echo $tuesdayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Wednesday </p>
            <p> <b>
                <?php
                    $wednesdayhours = get_field('hours-wednesday', 'option');
                    echo $wednesdayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Thursday </p>
            <p> <b>
                <?php
                    $thursdayhours = get_field('hours-thursday', 'option');
                    echo $thursdayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Friday </p>
            <p> <b>
                <?php
                    $fridayhours = get_field('hours-friday', 'option');
                    echo $fridayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Saturday </p>
            <p> <b>
                <?php
                    $saturdayhours = get_field('hours-saturday', 'option');
                    echo $saturdayhours;
                ?>
            </b> </p>
        </div>

        <hr>

        <div> 
            <p>   Sunday </p>
            <p> <b>
                <?php
                    $sundayhours = get_field('hours-sunday', 'option');
                    echo $sundayhours;
                ?>
            </b> </p>
        </div>

    </div>
    </div>

    <div>
    <div class="contactinfo">
    <p> <?php echo get_field('phone-number', 'option') ?> </p>
    <p> <?php echo get_field('email-address', 'option') ?> </p>
    </div>
    <div class="socmed">
    <a target="_blank" href="<?php echo get_field('link_to_social_media-fb', 'option') ?>">
    <img src="<?php echo get_field('social-media-icon-fb', 'option') ?>"/>
    </a>

    <a target="_blank" href="<?php echo get_field('link_to_social_media-ig', 'option') ?>">
    <img src="<?php echo get_field('social-media-icon-ig', 'option') ?>"/>
    </a>

    <a target="_blank" href="<?php echo get_field('link_to_social_media-tt', 'option') ?>">
    <img src="<?php echo get_field('social-media-icon-tt', 'option') ?>"/>
    </a>
    </div>
   

    <p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>

    </div>

    <div class="mapcon">
    <figure class="wp-block-image size-full is-layout-flow wp-block-image-is-layout-flow" >
        <img src="<?php echo get_field('location', 'option') ?>">
    </figure>
    <figcaption class="in-image">
    <?php echo get_field('address-label', 'option') ?>
    </figcaption>

    </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>