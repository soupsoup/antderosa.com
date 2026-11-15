<?php
/**
 * Lime Ticker theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function limeticker_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'limeticker' ),
	) );
}
add_action( 'after_setup_theme', 'limeticker_setup' );

function limeticker_scripts() {
	wp_enqueue_style(
		'limeticker-fonts',
		'https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'limeticker-style', get_stylesheet_uri(), array( 'limeticker-fonts' ), '1.1.11' );
	wp_enqueue_script( 'limeticker-nav', get_template_directory_uri() . '/js/nav.js', array(), '1.0.1', true );
	wp_enqueue_script( 'limeticker-filters', get_template_directory_uri() . '/js/filters.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'limeticker_scripts' );

/**
 * Fallback menu: page list styled like the nav.
 */
function limeticker_fallback_menu() {
	echo '<ul>';
	wp_list_pages( array( 'title_li' => '', 'depth' => 1 ) );
	echo '</ul>';
}

/**
 * Render saved WordPress page content with the editorial theme frame.
 */
function limeticker_render_native_page( $class_name = '' ) {
	$classes = trim( 'lt-page-native ' . $class_name );
	?>
	<main class="<?php echo esc_attr( $classes ); ?>">
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="lt-page-native-head">
				<div class="lt-wrap">
					<h1 class="lt-h1 lt-h1--page"><?php the_title(); ?></h1>
					<?php if ( has_excerpt() ) : ?>
						<p class="lt-lede"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
				</div>
			</header>
			<div class="lt-page-native-content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</main>
	<?php
}
