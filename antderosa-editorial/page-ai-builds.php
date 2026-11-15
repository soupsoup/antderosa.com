<?php
/**
 * AI Builds page slug template.
 */
get_header();
?>

<main>
	<div class="lt-band lt-band--dark" style="border-top:0">
		<div class="lt-band-inner">
			<span class="lt-kicker">AI builds &middot; Shipped, not theorized</span>
			<h1 style="font-size:clamp(38px,6.4vw,92px);line-height:.9;letter-spacing:-.04em;max-width:1100px">I don&rsquo;t just have opinions about AI.<br>I ship them.</h1>
			<p>Eight systems, built end-to-end and in active use. Every one started as a workflow I was already doing by hand. The demos run on fictional data &mdash; click through everything.</p>
		</div>
	</div>

	<section class="lt-stats lt-stats--light" aria-label="Build tally">
		<div class="lt-stat"><b>8</b><span>systems built end-to-end, from data model to interface</span></div>
		<div class="lt-stat"><b>10</b><span>live demos and products you can click through right now</span></div>
		<div class="lt-stat"><b>2</b><span>of my own shipped products rebuilt: Circa and Neighborhoodr</span></div>
		<div class="lt-stat"><b>1</b><span>public product in the wild: frontiernewswire.com</span></div>
	</section>

	<section class="lt-sec">
		<div class="lt-sec-head2">
			<h2>They stack.</h2>
			<p>These aren&rsquo;t eight unrelated demos. A personal context layer feeds an ops layer, which feeds the products &mdash; the same architecture I&rsquo;d build for a company&rsquo;s market intelligence.</p>
		</div>
		<div class="lt-cards">
			<div class="lt-card"><span class="lt-org">Layer 01 &middot; Context</span><h3>Durable memory</h3><p>A structured knowledge base so every tool starts from real context instead of a blank session. Nothing above it works without this.</p><div class="lt-card-meta">AnthonyWiki</div></div>
			<div class="lt-card"><span class="lt-org">Layer 02 &middot; Operations</span><h3>Daily judgment</h3><p>Systems that read the context layer and act on it &mdash; briefings, tracked commitments, ranked outreach, feedback on my own data.</p><div class="lt-card-meta">Chief of Staff &middot; Market Signal &middot; Networker &middot; HealthDash</div></div>
			<div class="lt-card"><span class="lt-org">Layer 03 &middot; Products</span><h3>Things other people use</h3><p>Full editorial products with their own audiences, CMSes, and reader apps &mdash; where the first two layers stop being personal.</p><div class="lt-card-meta">Frontier &middot; Chronicle News &middot; Neighborhoodr</div></div>
		</div>
	</section>

	<section class="lt-sec" style="padding-top:0">
		<div class="lt-org" style="margin-bottom:20px">All eight builds</div>
		<div class="lt-cards">
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://frontiernewswire.com/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/frontier.png" alt="Frontier screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">01 &middot; AI intelligence</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Frontier</h3>
				<p>A source-first AI intelligence product for people building with AI: model releases, labs, open models, developer changes, and verified reporting in one editorially organized interface built around signal instead of recycled takes.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://frontiernewswire.com/" target="_blank" rel="noopener">Open live product &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://neighborhoodr.vercel.app/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/neighborhoodr.png" alt="Neighborhoodr screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">02 &middot; Hyperlocal news</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Neighborhoodr</h3>
				<p>A living feed for where you live &mdash; posts, events, and a neighborhood pulse from the people who know it best. A rebuild of the network I started on Tumblr in 2009, which grew past 25 cities.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://neighborhoodr.vercel.app/" target="_blank" rel="noopener">Open the demo &#8599;</a>
					<a class="lt-chip" href="https://thenextweb.com/news/neighborhoodr-gets-it-right-as-a-hyper-local-news-source-on-tumblr" target="_blank" rel="noopener">TNW, 2011 &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://chronicle-news-demo.vercel.app/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/chronicle.png" alt="Chronicle News screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">03 &middot; News product</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Chronicle News</h3>
				<p>A modern take on Circa &mdash; the mobile news app I helped build that broke stories into structured atoms readers could follow over time. Rebuilt with an editorial CMS and a reader app.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://chronicle-news-demo.vercel.app/" target="_blank" rel="noopener">Editorial CMS &#8599;</a>
					<a class="lt-chip" href="https://chronicle-news-reader-demo.vercel.app/" target="_blank" rel="noopener">Reader app &#8599;</a>
					<a class="lt-chip" href="https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/chronicle-news.md" target="_blank" rel="noopener">Build notes &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<div class="lt-card-shot"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/market-signal.png" alt="Market Signal screenshot" loading="lazy"></div>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">04 &middot; Market intelligence</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Market Signal</h3>
				<p>A market-wide screener on Alpaca&rsquo;s movers and most-active endpoints, wrapped in a terminal-style board: index tape, top gainers and losers, three free news sources, and a fresh opinionated market read written every 30 minutes.</p>

			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://anthonywiki-demo.vercel.app/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/anthonywiki.png" alt="AnthonyWiki screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">05 &middot; Context layer</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">AnthonyWiki</h3>
				<p>A personal knowledge wiki compiled from journals, notes, and messages &mdash; a writer&rsquo;s pass over raw personal data that synthesizes it into structured articles. The context layer that lets every other tool reason from durable memory.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://anthonywiki-demo.vercel.app/" target="_blank" rel="noopener">Open live demo &#8599;</a>
					<a class="lt-chip" href="https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/anthonywiki.md" target="_blank" rel="noopener">Build notes &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://ai-builds-showcase.vercel.app/demo-apps/chief-of-staff.html" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/chief-of-staff.png" alt="Chief of Staff screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">06 &middot; Ops layer</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Chief of Staff</h3>
				<p>A daily-briefing and project-tracking system built on top of AnthonyWiki. Morning briefings, open items across projects, 1:1 prep, and a running memory of people, projects, and commitments.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://ai-builds-showcase.vercel.app/demo-apps/chief-of-staff.html" target="_blank" rel="noopener">Open live demo &#8599;</a>
					<a class="lt-chip" href="https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/chief-of-staff.md" target="_blank" rel="noopener">Build notes &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://networkersaas.vercel.app/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/networker.png" alt="Networker screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">07 &middot; Relationship intelligence</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">Networker</h3>
				<p>A local-first tool for deciding who in a professional network is worth reconnecting with &mdash; turning a fuzzy relationship graph into a ranked system for outreach, follow-up, and second-degree discovery.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://networkersaas.vercel.app/" target="_blank" rel="noopener">Open sanitized demo &#8599;</a>
				</div>
			</div>
			<div class="lt-card lt-card--wide">
				<a class="lt-card-shot" href="https://ai-builds-showcase.vercel.app/demo-apps/healthdash.html" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/builds/healthdash.png" alt="HealthDash screenshot" loading="lazy"></a>
				<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
					<span class="lt-org">08 &middot; Feedback loop</span>
				</div>
				<h3 style="font-size:clamp(24px,2.5vw,32px);line-height:1">HealthDash</h3>
				<p>I text what I eat and what exercise I do to Poke, which feeds Notion. HealthDash turns that into a dashboard with coach-style commentary &mdash; AI giving feedback on the data, not just charting it.</p>
				<div class="lt-card-foot">
					<a class="lt-btn" style="padding:10px 18px;font-size:13px" href="https://ai-builds-showcase.vercel.app/demo-apps/healthdash.html" target="_blank" rel="noopener">Open live demo &#8599;</a>
					<a class="lt-chip" href="https://github.com/soupsoup/ai-builds-showcase/blob/main/docs/healthdash.md" target="_blank" rel="noopener">Build notes &#8599;</a>
				</div>
			</div>
		</div>
	</section>

	<section class="lt-cta">
		<div class="lt-cta-inner">
			<div>
				<h2>Want this fluency<br>on your team?</h2>
				<p>The same instinct that builds these is what makes an AI-era content operation actually run. Build notes for most of them are public on GitHub.</p>
			</div>
			<div class="lt-btn-row" style="margin:0">
				<a class="lt-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in touch</a>
				<a class="lt-btn lt-btn--outline" href="https://github.com/soupsoup" target="_blank" rel="noopener">GitHub &#8599;</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
