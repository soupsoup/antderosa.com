<?php
/**
 * Index / blog archive: big-type post list.
 */
get_header();
?>

<main>
	<div class="lt-section lt-wrap">
		<h1 class="lt-h1 lt-h1--page"><?php echo is_home() ? 'Blog' : wp_kses_post( get_the_archive_title() ); ?></h1>
	</div>
	<div class="lt-panel lt-section">
		<div class="lt-wrap">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;flex-wrap:wrap;padding:20px 0;border-bottom:2px solid #141507">
					<span class="lt-display" style="font-size:clamp(22px,2.6vw,32px)"><?php the_title(); ?></span>
					<span style="font-size:14px;font-weight:600"><?php echo esc_html( get_the_date() ); ?></span>
				</a>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Nothing here yet.', 'limeticker' ); ?></p>
			<?php endif; ?>
			<div style="margin-top:28px">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
