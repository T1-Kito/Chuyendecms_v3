<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">
        <?php
        global $wp_query;
        $query_string = get_search_query();
        $found_posts  = is_a( $wp_query, 'WP_Query' ) ? (int) $wp_query->found_posts : 0;
        echo esc_html( sprintf( _n( '%d result for “%s”.', '%d results for “%s”.', $found_posts, 'twentytwentyfive' ), $found_posts, $query_string ) );
        ?>
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:post-content {"align":"full","fontSize":"medium","layout":{"type":"constrained"}} /-->
			<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:query-no-results -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html_x( 'No results matched your search. Try different keywords or filters.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:search {"label":"<?php echo esc_html_x( 'Search again', 'Search form label.', 'twentytwentyfive' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search posts…', 'Search input field placeholder text.', 'twentytwentyfive' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Button text. Verb.', 'twentytwentyfive' ); ?>"} /-->
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html_x( 'Back to homepage', 'Link text for going to homepage.', 'twentytwentyfive' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
