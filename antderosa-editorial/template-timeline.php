<?php
/**
 * Template Name: Timeline
 * Career timeline: scroll-filled spine, era blocks, metric chips.
 * Edit the eras directly in this file (plain HTML, one .lt-tl-era block each).
 * Pill links assume page slugs /portfolio/, /ai-builds/, /launches/, /newsletters/, /podcasts/ — adjust to your slugs.
 */
get_header();
?>

<main id="main" class="lt-timeline">
	<div class="lt-tl-hero">
		<div class="lt-tl-kicker">2006 · now &mdash; scroll the arc</div>
		<h1 class="lt-tl-title">One trajectory.</h1>
		<p class="lt-tl-intro">Web engineering, then social-first journalism at global scale, then Emmy-winning digital at The Daily Show, then subscription strategy at the Journal, then B2B audience systems &mdash; now AI-native builds. The line fills as you scroll.</p>
		<div class="lt-tl-jumps">
			<button type="button" class="lt-tl-jump" data-era="0">Engineer</button>
			<button type="button" class="lt-tl-jump" data-era="1">Reuters</button>
			<button type="button" class="lt-tl-jump" data-era="2">Circa</button>
			<button type="button" class="lt-tl-jump" data-era="3">Daily Show</button>
			<button type="button" class="lt-tl-jump" data-era="4">WSJ</button>
			<button type="button" class="lt-tl-jump" data-era="5">ON_Discourse</button>
			<button type="button" class="lt-tl-jump" data-era="6">Pluralsight</button>
			<button type="button" class="lt-tl-jump" data-era="7">Now</button>
		</div>
	</div>

	<div class="lt-tl-body">
		<div class="lt-tl-rail">
			<div class="lt-tl-track"></div>
			<div class="lt-tl-fill" id="lt-tl-fill"></div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2006 · 2010</div>
				<h2 class="lt-tl-org">Web engineer &amp; product manager</h2>
				<div class="lt-tl-role">The origin</div>
				<p class="lt-tl-desc">I began my career as a web engineer and product manager. That background shapes everything about how I build: systems first, editorial judgment layered on top. It&rsquo;s also why the AI-native work now feels like coming home.</p>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2010 · 2013</div>
				<h2 class="lt-tl-org">Reuters</h2>
				<div class="lt-tl-role">Social Media Editor</div>
				<p class="lt-tl-desc">Social-first journalism before it was a category. I grew social audiences 400% across 30 accounts while managing a global news API, co-authored the Verification Handbook, and shared El Mundo&rsquo;s &ldquo;Journalist of the Year&rdquo; award in 2013 for pioneering work using social media for journalism.</p>
				<div class="lt-tl-backdrop">
					<div class="lt-tl-backdrop-kicker">The backdrop</div>
					<p>Reuters was one of the first global newsrooms to treat social platforms as both a reporting tool and a distribution channel. The job was translating a 160-year-old news authority into emerging digital channels without losing trust.</p>
				</div>
				<div class="lt-tl-chips">
					<div class="lt-tl-chip"><b>400%</b><span>social audience growth, 30 accounts</span></div>
					<div class="lt-tl-chip"><b>2013</b><span>El Mundo Journalist of the Year</span></div>
				</div>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/portfolio/">Articles from the era</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2013 · 2015</div>
				<h2 class="lt-tl-org">Circa</h2>
				<div class="lt-tl-role">Editor-in-Chief</div>
				<p class="lt-tl-desc">Editor-in-chief of the mobile news startup that broke stories into structured, followable atoms of information &mdash; cited in the NYT Innovation Report. Circa&rsquo;s ideas about atomized news are still ahead of most news products shipping today.</p>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/ai-builds/">Chronicle News — the rebuild</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2015 · 2020</div>
				<h2 class="lt-tl-org">The Daily Show</h2>
				<div class="lt-tl-role">Digital Production Manager</div>
				<p class="lt-tl-desc">Helped build a digital department from scratch and won an Emmy for our innovative work. Helped produce the NYT-bestselling &ldquo;Donald J. Trump Presidential Twitter Library&rdquo; book and its installations across America &mdash; a Cannes Lions Grand Prix and a Clio award.</p>
				<div class="lt-tl-backdrop">
					<div class="lt-tl-backdrop-kicker">The backdrop</div>
					<p>Five years turning a strong editorial voice into repeatable, platform-native digital execution: social, video, live experiences, books, and audience activations at cultural speed.</p>
				</div>
				<div class="lt-tl-chips">
					<div class="lt-tl-chip"><b>Emmy</b><span>innovative digital work</span></div>
					<div class="lt-tl-chip"><b>Grand Prix</b><span>Cannes Lions · Twitter Library</span></div>
					<div class="lt-tl-chip"><b>NYT</b><span>bestselling book</span></div>
				</div>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/launches/">Launches &amp; activations</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2020 · 2022</div>
				<h2 class="lt-tl-org">The Wall Street Journal</h2>
				<div class="lt-tl-role">Strategy Editor</div>
				<p class="lt-tl-desc">Served on the strategic newsroom team tasked with reversing a subscription plateau. Co-authored a 209-page roadmap that paved the way for doubling the flatlined subscription base, relaunched the flagship What&rsquo;s News newsletter, and drove bureau strategy with advanced analytics.</p>
				<div class="lt-tl-chips">
					<div class="lt-tl-chip"><b>209</b><span>page strategy roadmap</span></div>
					<div class="lt-tl-chip"><b>3.7M</b><span>digital subscribers reached</span></div>
				</div>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/newsletters/">What&rsquo;s News reboot</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2022 · 2023</div>
				<h2 class="lt-tl-org">ON_Discourse</h2>
				<div class="lt-tl-role">Head of Content &amp; Audience</div>
				<p class="lt-tl-desc">Helped launch a private membership community for business leaders: audience and lead-gen programs, an expert network, an enterprise product for Fortune 50 companies, plus podcasts and editorial programming that turned expert ideas into products and community.</p>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/launches/">ondiscourse.com launch</a>
					<a class="lt-tl-pill" href="/podcasts/">The podcasts</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2023 · 2026</div>
				<h2 class="lt-tl-org">Pluralsight</h2>
				<div class="lt-tl-role">VP, Newsletters &amp; Programming</div>
				<p class="lt-tl-desc">Built a B2B strategic content and market intelligence function from zero &mdash; no platform, no list, no team. Three newsletters and a podcast for CIOs, CTOs, and CISOs; 10,000+ subscribers in under a year; open rates above 65%. Sales, CS, and enablement used the work to open doors and reduce churn.</p>
				<div class="lt-tl-backdrop">
					<div class="lt-tl-backdrop-kicker">The backdrop</div>
					<p>Positioned as independent industry intelligence rather than content marketing &mdash; which created permission to reach senior technical audiences, and gave GTM teams credible market narratives for acquisition, retention, and customer education.</p>
				</div>
				<div class="lt-tl-chips">
					<div class="lt-tl-chip"><b>10K+</b><span>subscribers in under a year</span></div>
					<div class="lt-tl-chip"><b>65%+</b><span>newsletter open rates</span></div>
				</div>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/newsletters/">The newsletter portfolio</a>
					<a class="lt-tl-pill" href="/podcasts/">The podcast</a>
				</div>
			</div>
			<div class="lt-tl-era">
				<div class="lt-tl-dot"></div>
				<div class="lt-tl-years">2026 · Now</div>
				<h2 class="lt-tl-org">AI-native builder</h2>
				<div class="lt-tl-role">Building the systems, not just writing about them</div>
				<p class="lt-tl-desc">Useful AI systems built from lived editorial problems: a personal knowledge wiki, a chief-of-staff briefing system, relationship intelligence, a health feedback loop, and Chronicle News &mdash; the Circa idea rebuilt for today. Every build started as a workflow I was already doing manually.</p>
				<div class="lt-tl-pills">
					<a class="lt-tl-pill" href="/ai-builds/">See the AI builds</a>
				</div>
			</div>
		</div>
	</div>

	<div class="lt-tl-outro">
		<div class="lt-tl-outro-title">The arc continues.</div>
		<a class="lt-tl-outro-cta" href="/contact/">Get in touch</a>
	</div>
</main>

<script>
(function () {
	var rail = document.querySelector('.lt-tl-rail');
	var fill = document.getElementById('lt-tl-fill');
	if (rail && fill) {
		var onScroll = function () {
			var r = rail.getBoundingClientRect();
			var pct = Math.max(0, Math.min(1, (window.innerHeight * 0.7 - r.top) / r.height));
			fill.style.height = (pct * 100) + '%';
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}
	document.querySelectorAll('.lt-tl-jump').forEach(function (btn) {
		btn.addEventListener('click', function () {
			var el = document.querySelectorAll('.lt-tl-era')[parseInt(btn.dataset.era, 10)];
			if (el) window.scrollTo({ top: el.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
		});
	});
})();
</script>

<?php get_footer(); ?>
