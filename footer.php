<?php

/**
 * Search Form
 */
get_template_part('template-parts/search', 'popup');

/**
 * Mobile Menu
 */
if (wp_is_mobile()) :
    get_template_part('template-parts/search', 'popup');
endif;
?>

<footer class="_aty-site-footer">
    <div class="_aty-full-wrapper">

        <div class="_aty-block _aty-info _aty-3">
            <div class="_aty-info-block">
                <label>E-Mail</label>
                <a href="mailto:help@articely.com" class="_aty-href">help@articely.com</a>
            </div>
            <!-- /._aty-info-block -->

            <div class="_aty-info-block">
                <label>Telephone</label>
                <a href="tel:01465294888" class="_aty-href">(+91) 01465 - 294888 </a>
            </div>
            <!-- /._aty-info-block -->

        </div>
        <!-- /._aty-block -->
        <div class="_aty-block _aty-logo _aty-6">
            <div class="_aty-secondary-logo">
                <a href="https://www.xpertzmate.com" target="_blank" class="_aty-href">
                    <img src="<?php echo ARTICELY_URL . '/assets/img/xpertzmate.svg'; ?>" alt="XpertzMate" class="_aty-img">
                </a>
                <!-- /._aty-href -->
            </div>
            <!-- /._aty-secondary-logo -->
        </div>
        <!-- /._aty-block -->
        <div class="_aty-block _aty-info _aty-3">
            <div class="_aty-info-block">
                <label>Social Media</label>
                <ul class="_aty-social-media-icon">
                    <li class="_aty-icon"><a href="" class="_aty-href"><img src="<?php echo ARTICELY_URL . '/assets/img/facebook.svg'; ?>" alt="Facebook" class="_aty-img"></a>
                        <!-- /._aty-href -->
                    </li>
                    <!-- /._aty-icon -->
                    <li class="_aty-icon"><a href="" class="_aty-href"><img src="<?php echo ARTICELY_URL . '/assets/img/twitter.svg'; ?>" alt="Twitter" class="_aty-img"></a>
                        <!-- /._aty-href -->
                    </li>
                    <!-- /._aty-icon -->
                    <li class="_aty-icon"><a href="" class="_aty-href"><img src="<?php echo ARTICELY_URL . '/assets/img/instagram.svg'; ?>" alt="Instagram" class="_aty-img"></a>
                        <!-- /._aty-href -->
                    </li>
                    <!-- /._aty-icon -->
                </ul>
                <!-- /._aty-social-media-icon -->
            </div>
            <!-- /._aty-info-block -->
            <div class="_aty-info-block">
                <div class="_aty-info-block">
                    <label>Signup</label>
                    <input type="text" class="_aty-input-field _aty-signup-form" placeholder="Enter Your Email" />
                </div>
                <!-- /._aty-info-block -->
            </div>
            <!-- /._aty-info-block -->
        </div>
        <!-- /._aty-block -->

    </div>

    <div class="_aty-copyright-wrapper">
        <div class="_aty-copyright">
            <label> &copy; <?php echo date("Y"); ?> Articely.</label>
            <label> <a href="https://www.xpertzmate.com" title="XpertzMate | ">www.xpertzmate.com</a> </label>
        </div>
        <!-- /._aty-copyright -->

    </div>
    <!-- /._aty-wrapper-->

</footer>
<!-- /._aty-site-footer -->

<div class="_aty-full-wrapper _aty-fixed _aty-footer-sticky-bar">
    <div class="_aty-logo _aty-1 center">
        <a href="" class="_aty-href">
            <img src="<?php echo ARTICELY_URL . '/assets/img/favicon.svg'; ?>" alt="XpertzMate" class="_aty-img">
        </a>
        <!-- /._aty-href -->
    </div>
    <!-- /._aty-logo -->
    <div class="_aty-search-form _aty-3">
        <?php get_search_form(); ?>
    </div>
    <!-- /._aty-search-form -->
    <div class="_aty-menu-items _aty-7">
        <?php
        wp_nav_menu([
            'container' => false,
            'menu_id' => 'footer-menu',
            'menu_class' => '_aty-footer-menu',
            'theme_location' => 'footer'
        ]);
        ?>
    </div>
    <!-- /._aty-menu-items -->
    <div class="_aty-goto-top _aty-1 center">
        <a href="#" class="_aty-href">
            <img src="<?php echo ARTICELY_URL . '/assets/img/gotop.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="_aty-img">
        </a>
    </div>
    <!-- /._aty-goto-top -->
</div>
<!-- /._aty-wrapper._aty-full-wrapper._aty-sticky -->
<?php wp_footer(); ?>
</body>

</html>