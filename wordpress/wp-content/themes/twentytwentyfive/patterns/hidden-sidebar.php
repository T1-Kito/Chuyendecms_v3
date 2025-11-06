<?php
/**
 * Title: Sidebar
 * Slug: twentytwentyfive/hidden-sidebar
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase" aria-label="<?php echo esc_attr_x( 'Sidebar section: Other Posts', 'Accessible label for sidebar section', 'twentytwentyfive' ); ?>"><?php esc_html_e( 'Other Posts', 'twentytwentyfive' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
			<!-- wp:post-date {"fontSize":"small","isLink":true} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>","fontSize":"medium"} -->
		<p class="has-medium-font-size"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.2px"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600;letter-spacing:1.2px;text-transform:uppercase" aria-label="<?php echo esc_attr_x( 'Sidebar section: Recent Comments', 'Accessible label for recent comments section', 'twentytwentyfive' ); ?>"><?php esc_html_e( 'Recent Comments', 'twentytwentyfive' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-comments {"displayAvatar":true,"avatarSize":32,"displayDate":true,"displayPostTitle":true,"number":6} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.2px"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600;letter-spacing:1.2px;text-transform:uppercase" aria-label="<?php echo esc_attr_x( 'Sidebar section: Recent Posts', 'Accessible label for recent posts section', 'twentytwentyfive' ); ?>"><?php esc_html_e( 'Recent Posts', 'twentytwentyfive' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":48,"featuredImageSizeHeight":48,"postLayout":"list","postsToShow":6} /-->
