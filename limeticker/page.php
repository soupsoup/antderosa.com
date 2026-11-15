<?php
/**
 * Generic page: giant title + content on the cream panel.
 * Bio, Testimonials, Contact, Tech Stack all render through this.
 */
get_header();
?>

<main>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="lt-section lt-wrap">
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
