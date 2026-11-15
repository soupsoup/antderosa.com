<?php
/**
 * Single post: same skin as pages, plus date.
 */
get_header();
?>

<main>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="lt-section lt-wrap">
			<div class="lt-kicker"><?php echo esc_html( get_the_date() ); ?></div>
			<h1 class="lt-h1 lt-h1--page"><?php the_title(); ?></h1>
		</div>
		<div class="lt-panel lt-section">
			<div class="lt-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
