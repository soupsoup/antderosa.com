<?php
/**
 * Front page: editorial operator positioning, proof, lanes, and credibility.
 */
get_header();
?>

<main>
	<section class="lt-home-hero" aria-label="<?php esc_attr_e( 'Homepage introduction', 'limeticker' ); ?>">
		<div class="lt-home-hero-copy">
			<h1 class="lt-home-title">I turn complexity into <em>clarity</em> &amp; <em>agency.</em></h1>
			<p class="lt-home-lede">Building brand voice, owned media, and audience systems across Reuters, WSJ, The Daily Show, ON_Discourse, and Pluralsight. Product marketing, content strategy, market intelligence, field enablement, and audience development.</p>

			<div class="lt-home-proof" aria-label="<?php esc_attr_e( 'Selected proof points', 'limeticker' ); ?>">
				<div class="lt-home-metric"><b>250%</b><span>WSJ audience growth</span></div>
				<div class="lt-home-metric"><b>3.7M</b><span>WSJ digital subscribers</span></div>
				<div class="lt-home-metric"><b>65%+</b><span>Newsletter open rate</span></div>
				<div class="lt-home-metric"><b>400%</b><span>Reuters social growth</span></div>
			</div>
		</div>

		<figure class="lt-home-portrait">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/anthony2.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</figure>
	</section>

	<section class="lt-home-lanes" aria-label="<?php esc_attr_e( 'Core work', 'limeticker' ); ?>">
		<a class="lt-home-lane" href="<?php echo esc_url( home_url( '/product-marketing/' ) ); ?>">
			<small>01 / Strategy</small>
			<h2>Product Marketing</h2>
			<p>Positioning, narratives, launch programs, customer education, field-ready content, and technical translation.</p>
			<span>Explore GTM work -&gt;</span>
		</a>

		<a class="lt-home-lane" href="<?php echo esc_url( home_url( '/audience/' ) ); ?>">
			<small>02 / Growth</small>
			<h2>Audience Systems</h2>
			<p>Independent industry intelligence, newsletters, podcasts, executive audiences, and durable owned channels.</p>
			<span>See audience systems -&gt;</span>
		</a>

		<a class="lt-home-lane" href="<?php echo esc_url( home_url( '/editorial-ops/' ) ); ?>">
			<small>03 / Operations</small>
			<h2>Editorial Operations</h2>
			<p>Teams, workflows, quality bars, analytics, AI-assisted production, segmentation, and publishing systems.</p>
			<span>See the operating model -&gt;</span>
		</a>
	</section>

	<section class="lt-home-case">
		<div>
			<small>Recent Work</small>
			<h2>Pluralsight as GTM infrastructure.</h2>
		</div>
		<div>
			<p>Built Pluralsight&rsquo;s B2B strategic content and market intelligence function from scratch, creating a new audience and GTM channel for senior technology and business decision-makers.</p>
			<p>Launched three newsletters and a podcast across AI, cybersecurity, cloud computing, and workforce transformation. Sales, marketing, customer success, and enablement teams used the work to open doors, inform customer conversations, reduce churn risk, and keep acquisition pipelines warm.</p>
			<div class="lt-home-tags">
				<span>CIO / CTO / CISO audiences</span>
				<span>Market intelligence</span>
				<span>Sales enablement</span>
				<span>Customer retention</span>
				<span>Iterable migration</span>
			</div>
		</div>
	</section>

	<div class="lt-logo-strip" aria-label="<?php esc_attr_e( 'Career credibility', 'limeticker' ); ?>">
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/reuters-ink3.png' ); ?>" alt="Reuters"></span>
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/wsj-ink2.png' ); ?>" alt="WSJ"></span>
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/dailyshow-ink2.png' ); ?>" alt="The Daily Show"></span>
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/ondiscourse-ink2.png' ); ?>" alt="ON_Discourse"></span>
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/pluralsight-ink2.png' ); ?>" alt="Pluralsight"></span>
		<span><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logos/circa-icon-ink2.png' ); ?>" alt="Circa"></span>
	</div>
</main>

<?php get_footer(); ?>
