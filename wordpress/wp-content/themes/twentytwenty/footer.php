<?php
/**
 * The template for displaying the footer
 *
 * Pulls menus and widgets from the database (no hard-code).
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">
    <div class="section-inner">
        <div class="footer-credits">
            <p class="powered-by-wordpress">
                <?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
            </p>
            <p class="footer-copyright">
                <?php echo esc_html( '© ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?>
            </p>
        </div>
    </div>
    <a class="to-the-top" href="#site-header">
        <span class="to-the-top-long">
            <?php
            /* translators: Hidden accessibility text. */
            _e( 'To the top', 'twentytwenty' );
            ?>
        </span>
        <span class="to-the-top-short">
            <?php
            /* translators: Hidden accessibility text. */
            _e( 'Up', 'twentytwenty' );
            ?>
        </span>
    </a>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>
</body>
</html>
