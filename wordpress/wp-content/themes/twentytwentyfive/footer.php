<?php
/**
 * Dynamic footer for Twenty Twenty-Five
 * Uses menus from WordPress Admin (DB-driven), no hard-coded links.
 */
?>

<footer id="site-footer" class="header-footer-group">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-8">
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <nav aria-label="<?php esc_attr_e( 'Footer', 'twentytwentyfive' ); ?>">
                        <ul class="list-unstyled d-flex flex-wrap gap-3">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer',
                                    'container'      => '',
                                    'items_wrap'     => '%3$s',
                                    'depth'          => 1,
                                )
                            );
                            ?>
                        </ul>
                    </nav>
                <?php else : ?>
                    <p class="small mb-0"><?php _e( 'Assign a menu to Footer Menu to display links here.', 'twentytwentyfive' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-4 text-md-end mt-3 mt-md-0">
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwentyfive' ); ?>">
                        <ul class="list-unstyled d-inline-flex gap-3">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'social',
                                    'container'      => '',
                                    'items_wrap'     => '%3$s',
                                    'depth'          => 1,
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>',
                                )
                            );
                            ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 d-flex justify-content-between small">
                <span><?php echo esc_html( '© ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></span>
                <span><?php _e( 'Powered by WordPress', 'twentytwentyfive' ); ?></span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
