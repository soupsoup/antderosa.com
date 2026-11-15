<?php
/**
 * Template Name: Blog (latest post)
 *
 * Assign this template to a "Blog" page and add that page to the menu.
 * Visiting it redirects straight to the most recent post; from there the
 * reader pages back and forward with the Newer/Older links on each post.
 */
$limeticker_latest = get_posts( array( 'numberposts' => 1, 'post_status' => 'publish' ) );
if ( $limeticker_latest ) {
	wp_safe_redirect( get_permalink( $limeticker_latest[0] ) );
	exit;
}

// Fallback if there are no posts yet.
get_header();
?>

<main>
	<div class="lt-section lt-wrap">
		<h1 class="lt-h1 lt-h1--page">Blog.</h1>
		<p class="lt-lede"><?php esc_html_e( 'Nothing here yet — the first post will appear as soon as it\'s published.', 'limeticker' ); ?></p>
	</div>
</main>

<?php get_footer(); ?>
