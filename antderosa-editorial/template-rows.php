<?php
/**
 * Template Name: Lime Ticker Section
 *
 * A generic rows page (AI Builds, Podcasts, Newsletters, Launches…)
 * whose content is edited entirely in the WordPress page editor.
 *
 * - The page TITLE renders as the giant headline.
 * - The page EXCERPT (sidebar → Excerpt) renders as the intro line.
 * - The page CONTENT renders on the cream panel. Starter block markup
 *   for each section lives in the theme's page-content/ folder — paste
 *   it into the page's code editor view, then edit visually forever after.
 */
get_header();
limeticker_render_native_page( 'lt-page-rows' );
get_footer();
