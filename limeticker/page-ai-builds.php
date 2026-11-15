<?php
/**
 * Template Name: AI Builds
 * Description: Landing page for Anthony's AI-assisted builds portfolio.
 */
get_header();

$builds = array(
	array(
		'number' => '01',
		'kicker' => 'Context layer',
		'title' => 'AnthonyWiki',
		'tags' => array( 'Claude Code', 'Personal knowledge base', 'Skill / agent system' ),
		'description' => 'A personal knowledge wiki compiled from journals, notes, and messages — not a filing system, but a writer\'s pass over raw personal data that synthesizes understanding into structured articles. It is the context layer that lets AI tools reason from durable personal context instead of starting every session from zero.',
		'impact' => 'AI is most useful when it can inherit durable context instead of starting every session from zero.',
		'links' => array(
			array( 'label' => 'Open live demo', 'url' => 'https://anthonywiki-demo.vercel.app/', 'style' => 'button' ),
			array( 'label' => 'Read the build notes', 'url' => 'https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/anthonywiki.md', 'style' => 'text' ),
		),
	),
	array(
		'number' => '02',
		'kicker' => 'Ops layer',
		'title' => 'Chief of Staff',
		'tags' => array( 'Claude Code', 'Daily ops', 'Briefings' ),
		'description' => 'A working daily-briefing and project-tracking system built on top of AnthonyWiki. Generates morning briefings, tracks open items across projects, preps 1:1s, and maintains a running memory of people, projects, and commitments — the kind of operational layer a chief of staff would maintain, automated.',
		'impact' => 'A personal AI system can become operational infrastructure when it remembers commitments and turns them into the next useful action.',
		'links' => array(
			array( 'label' => 'Open live demo', 'url' => 'https://ai-builds-showcase.vercel.app/demo-apps/chief-of-staff.html', 'style' => 'button' ),
			array( 'label' => 'Read the build notes', 'url' => 'https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/chief-of-staff.md', 'style' => 'text' ),
		),
	),
	array(
		'number' => '03',
		'kicker' => 'Relationship intelligence',
		'title' => 'Networker',
		'tags' => array( 'Claude Code', 'Decision support', 'Job search' ),
		'description' => 'A local-first tool for deciding who in a professional network is worth reconnecting with. The public demo is a sanitized version with fictional people and companies; the real app and its private data stay local.',
		'impact' => 'AI can turn a fuzzy relationship graph into a ranked operating system for outreach, follow-up, and second-degree opportunity discovery.',
		'links' => array(
			array( 'label' => 'Open sanitized demo', 'url' => 'https://networkersaas.vercel.app/', 'style' => 'button' ),
		),
	),
	array(
		'number' => '04',
		'kicker' => 'Feedback loop',
		'title' => 'HealthDash',
		'tags' => array( 'Codex', 'Poke', 'Notion', 'Dashboard' ),
		'description' => 'I text what I eat and what exercise I do to Poke, which feeds the data into Notion. HealthDash pulls that into a web dashboard with running coach-style commentary — AI giving feedback on the data, not just visualizing it.',
		'impact' => 'Lightweight capture plus interpretation beats a dashboard that only shows numbers.',
		'links' => array(
			array( 'label' => 'Open live demo', 'url' => 'https://ai-builds-showcase.vercel.app/demo-apps/healthdash.html', 'style' => 'button' ),
			array( 'label' => 'Read the build notes', 'url' => 'https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/healthdash.md', 'style' => 'text' ),
		),
	),
	array(
		'number' => '05',
		'kicker' => 'News product',
		'title' => 'Chronicle News',
		'tags' => array( 'Codex', 'News product', 'Atomic content' ),
		'description' => 'A modern take on Circa — the mobile news app I helped build years ago that broke stories into discrete, structured atoms of information readers could follow over time instead of re-reading a full article on every update. Chronicle News rebuilds that idea for today with an editorial CMS and a reader app.',
		'impact' => 'Editorial product instincts pair naturally with AI-assisted structured content and reader-first information design.',
		'links' => array(
			array( 'label' => 'Open editorial CMS', 'url' => 'https://chronicle-news-demo.vercel.app/', 'style' => 'button' ),
			array( 'label' => 'Open reader app', 'url' => 'https://chronicle-news-reader-demo.vercel.app/', 'style' => 'button' ),
			array( 'label' => 'Read the build notes', 'url' => 'https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/chronicle-news.md', 'style' => 'text' ),
		),
	),
	array(
		'number' => '06',
		'kicker' => 'AI intelligence',
		'title' => 'Frontier',
		'tags' => array( 'AI newswire', 'Verified sources', 'Builder intelligence' ),
		'description' => 'A source-first AI intelligence product for people building with AI. Frontier tracks model releases, labs, open models, developer changes, verified reporting, and briefings in one editorially organized interface built around signal instead of recycled takes.',
		'impact' => 'Editorial judgment can become product infrastructure when it organizes fast-moving AI information around provenance, usefulness, and builder workflows.',
		'links' => array(
			array( 'label' => 'Open live product', 'url' => 'https://frontiernewswire.com/', 'style' => 'button' ),
		),
	),
	array(
		'number' => '07',
		'kicker' => 'Market intelligence',
		'title' => 'Market Signal',
		'tags' => array( 'Codex', 'Alpaca', 'Market screener' ),
		'image' => array(
			'src' => 'images/market-signal.png',
			'alt' => 'Screenshot of the Market Signal Alpaca screener dashboard.',
		),
		'description' => 'A real-time market board built with Codex and Alpaca. Market Signal uses Alpaca\'s screener endpoints for top movers and most active stocks, then layers in index context, news headlines, and a fresh market read so the board behaves like a true market-wide scan instead of a narrow watchlist.',
		'impact' => 'AI-assisted product work can turn raw financial feeds into a faster decision surface when live data, market context, and editorial synthesis sit in one view.',
		'links' => array(),
	),
);
?>

<main class="lt-ai-page">
	<section class="lt-ai-hero lt-wrap">
		<div class="lt-ai-hero-copy">
			<h1 class="lt-h1 lt-ai-title">Useful AI systems, built from lived editorial problems.</h1>
			<p>25 years building editorial operations — now building the tools that run on top of them.</p>
			<div class="lt-btn-row">
				<a class="lt-btn lt-btn--solid" href="#selected-builds">View the builds</a>
				<a class="lt-btn lt-btn--outline" href="mailto:antderosa@gmail.com">Talk about AI systems</a>
			</div>
		</div>
		<aside class="lt-ai-stack" aria-label="<?php esc_attr_e( 'Build stack summary', 'limeticker' ); ?>">
			<div class="lt-kicker">Operating mode</div>
			<dl>
				<div><dt>Tools</dt><dd>Claude Code, Codex</dd></div>
				<div><dt>Pattern</dt><dd>Real workflows first</dd></div>
				<div><dt>Data</dt><dd>Notes, contacts, logs</dd></div>
				<div><dt>Output</dt><dd>Working software</dd></div>
			</dl>
		</aside>
	</section>

	<section class="lt-panel lt-section">
		<div class="lt-wrap lt-ai-intro">
			<p>I spent my career running newsrooms and editorial teams — Reuters, The Wall Street Journal, The Daily Show, and most recently as VP of Newsletters at Pluralsight. Over the past several months I have been using Claude Code and Codex to build the systems I always wished existed: tools that turn scattered personal and professional information into something a person — or an editorial team — can actually act on.</p>
			<p>None of this is theoretical AI-tool dabbling. Each project below was built end-to-end and is in active use. Where a demo touches private material, it runs on fictional data so you can click through without me handing over my actual contacts, health logs, or calendar.</p>
		</div>
	</section>

	<section class="lt-ai-method lt-grid lt-grid--3" aria-label="<?php esc_attr_e( 'How these projects were built', 'limeticker' ); ?>">
		<div class="lt-cell">
			<div class="lt-kicker">01</div>
			<h3>Start with an annoying real workflow</h3>
			<p>Every build began as a thing I was already doing manually: prepping calls, tracking leads, reading news updates, or interpreting health logs.</p>
		</div>
		<div class="lt-cell">
			<div class="lt-kicker">02</div>
			<h3>Let AI handle synthesis, not ownership</h3>
			<p>The useful part is judgment at the edges: turning messy inputs into ranked next steps, briefings, linked pages, and coaching notes.</p>
		</div>
		<div class="lt-cell">
			<div class="lt-kicker">03</div>
			<h3>Ship the smallest working system</h3>
			<p>These are personal products with real interfaces, data paths, and habits around them — built to be used, then improved.</p>
		</div>
	</section>

	<section class="lt-ai-builds" id="selected-builds">
		<div class="lt-section lt-wrap lt-ai-heading">
			<div>
				<div class="lt-kicker">Selected builds</div>
				<h2>Working demos, real product behavior.</h2>
			</div>
			<p>Some demos use synthetic data, but the product behavior mirrors the real tools.</p>
		</div>

		<?php foreach ( $builds as $build ) : ?>
			<article class="lt-ai-project lt-wrap">
				<div class="lt-ai-project-kicker">
					<span><?php echo esc_html( $build['number'] ); ?></span>
					<?php echo esc_html( $build['kicker'] ); ?>
				</div>
				<div class="lt-ai-project-body">
					<h3><?php echo esc_html( $build['title'] ); ?></h3>
					<div class="lt-ai-tags">
						<?php foreach ( $build['tags'] as $tag ) : ?>
							<span><?php echo esc_html( $tag ); ?></span>
						<?php endforeach; ?>
					</div>
					<?php if ( ! empty( $build['image']['src'] ) ) : ?>
						<figure class="lt-ai-shot">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/' . $build['image']['src'] ); ?>" alt="<?php echo esc_attr( $build['image']['alt'] ); ?>" loading="lazy" decoding="async">
						</figure>
					<?php endif; ?>
					<p><?php echo esc_html( $build['description'] ); ?></p>
					<p class="lt-ai-impact"><strong>What it proves:</strong> <?php echo esc_html( $build['impact'] ); ?></p>
					<div class="lt-ai-links">
						<?php foreach ( $build['links'] as $link ) : ?>
							<a class="<?php echo 'button' === $link['style'] ? 'lt-btn lt-btn--outline' : 'lt-ai-text-link'; ?>" href="<?php echo esc_url( $link['url'] ); ?>" target="_blank" rel="noopener">
								<?php echo esc_html( $link['label'] ); ?> <span aria-hidden="true">&rarr;</span>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</article>
		<?php endforeach; ?>
	</section>

</main>

<?php get_footer(); ?>
