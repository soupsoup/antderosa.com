<?php
/**
 * Template Name: Launches
 */
get_header();
?>

<main>
	<div class="lt-sec" style="padding-bottom:40px;display:flex;flex-wrap:wrap;gap:34px;align-items:flex-end;justify-content:space-between">
		<h1 class="lt-h1 lt-h1--page">Things I&rsquo;ve put<br>into the world.</h1>
		<p style="margin:0;max-width:420px;font-size:17px;font-weight:500;line-height:1.5;color:rgba(20,21,7,.7)">Newsletters, podcasts, platforms, apps, a department, and one book that became a museum exhibit. Fifteen years of launch day.</p>
	</div>

	<section class="lt-stats" aria-label="Launch tally">
		<div class="lt-stat"><b>14</b><span>products, platforms, and publications launched since 2009</span></div>
		<div class="lt-stat"><b>5</b><span>newsletters launched or rebooted</span></div>
		<div class="lt-stat"><b>3</b><span>podcasts launched</span></div>
		<div class="lt-stat"><b>4</b><span>awards: Emmy, Cannes Lions Grand Prix, two Clios</span></div>
	</section>

	<section class="lt-sec" style="padding-bottom:0">
		<span class="lt-kicker lt-kicker--wide" style="display:block;margin-bottom:16px">Featured &middot; 2023 &middot; ON_Discourse</span>
		<div class="lt-feat">
			<div class="lt-feat-copy">
				<h2>ondiscourse.com</h2>
				<p>As Head of Product and Content I led the launch of the platform for a private membership community of business leaders &mdash; home to the newsletters, podcasts, events, issue collections, and member-facing programming. Alongside it: the audience and lead-gen programs, an expert network, and an enterprise product for Fortune 50 buyers.</p>
				<div class="lt-chips">
					<a class="lt-chip" href="https://ondiscourse.com/" target="_blank" rel="noopener">Visit ondiscourse.com &#8599;</a>
					<a class="lt-chip" href="<?php echo esc_url( home_url( '/podcasts/' ) ); ?>">The podcasts</a>
				</div>
			</div>
			<div class="lt-feat-gallery">
				<a href="https://ondiscourse.com/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ondiscourse/od-01.png" alt="ON_Discourse homepage" loading="lazy"></a>
				<a href="https://ondiscourse.com/issue-collections/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ondiscourse/od-04.png" alt="Internet 2025 issue" loading="lazy"></a>
				<a href="https://ondiscourse.com/issue-collections/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ondiscourse/od-05.png" alt="The Intelligently Artificial Issue" loading="lazy"></a>
				<a href="https://ondiscourse.com/newsletter/" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ondiscourse/od-02.png" alt="Weekly Provocation newsletter" loading="lazy"></a>
			</div>
		</div>
	</section>

	<section class="lt-sec">
		<div class="lt-filters" data-filter-group="launch">
			<span class="lt-org" style="margin-right:8px">Filter</span>
			<button type="button" class="lt-filter" data-filter="all" aria-pressed="true">All</button>
			<button type="button" class="lt-filter" data-filter="Publication" aria-pressed="false">Publications</button>
			<button type="button" class="lt-filter" data-filter="Platform" aria-pressed="false">Platforms</button>
			<button type="button" class="lt-filter" data-filter="Podcast" aria-pressed="false">Podcasts</button>
			<button type="button" class="lt-filter" data-filter="Product" aria-pressed="false">Products</button>
			<button type="button" class="lt-filter" data-filter="Activation" aria-pressed="false">Activations</button>
		</div>
		<div class="lt-index" data-filter-target="launch">
			<div class="lt-index-row" data-cat="Product">
				<span class="lt-index-year">2026</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Frontier</span>
					<span class="lt-index-sub">Independent &middot; Product</span>
					<div class="lt-index-foot"><span class="lt-outcome">Live product</span><a class="lt-link" href="https://frontiernewswire.com/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">A source-first AI intelligence product for people building with AI &mdash; tracking model releases, labs, open models, developer changes, verified reporting, and briefings in one editorially organized interface.</p>
			</div>
			<div class="lt-index-row" data-cat="Product">
				<span class="lt-index-year">2026</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Chronicle News</span>
					<span class="lt-index-sub">Independent &middot; Product</span>
					<div class="lt-index-foot"><span class="lt-outcome">Live demo</span><a class="lt-link" href="https://chronicle-news-demo.vercel.app/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">The Circa idea rebuilt for today &mdash; structured, followable atoms of a story, with an editorial CMS and a reader app.</p>
			</div>
			<div class="lt-index-row" data-cat="Publication">
				<span class="lt-index-year">2025</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Prompt, Scale &amp; Exploit</span>
					<span class="lt-index-sub">Pluralsight &middot; Publication</span>
					<div class="lt-index-foot"><span class="lt-outcome">10K+ subs in a year</span><a class="lt-link" href="https://programarchive.vercel.app/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">Three B2B newsletters built from zero for CIOs, CTOs, and CISOs across AI, cloud, and cybersecurity.</p>
			</div>
			<div class="lt-index-row" data-cat="Podcast">
				<span class="lt-index-year">2024</span>
				<div class="lt-index-main">
					<span class="lt-index-name">The Pluralsight Podcast</span>
					<span class="lt-index-sub">Pluralsight &middot; Podcast</span>
					<div class="lt-index-foot"><span class="lt-outcome">Launched to market</span><a class="lt-link" href="https://www.pluralsight.com/resources/podcasts/the-pluralsight-podcast" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">Conversations on tech skills, engineering culture, and the people building the future of the workforce.</p>
			</div>
			<div class="lt-index-row" data-cat="Platform">
				<span class="lt-index-year">2023</span>
				<div class="lt-index-main">
					<span class="lt-index-name">ondiscourse.com</span>
					<span class="lt-index-sub">ON_Discourse &middot; Platform</span>
					<div class="lt-index-foot"><span class="lt-outcome">Platform launch</span><a class="lt-link" href="https://ondiscourse.com/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">The membership platform for a private community of business leaders &mdash; newsletters, podcasts, events, and issue collections.</p>
			</div>
			<div class="lt-index-row" data-cat="Product">
				<span class="lt-index-year">2023</span>
				<div class="lt-index-main">
					<span class="lt-index-name">ON_Discourse enterprise product</span>
					<span class="lt-index-sub">ON_Discourse &middot; Product</span>
					<div class="lt-index-foot"><span class="lt-outcome">Fortune 50 clients</span></div>
				</div>
				<p class="lt-index-desc">An expert network plus an enterprise offering built for Fortune 50 buyers, turning expert ideas into a repeatable product model.</p>
			</div>
			<div class="lt-index-row" data-cat="Podcast">
				<span class="lt-index-year">2023</span>
				<div class="lt-index-main">
					<span class="lt-index-name">The ON_Discourse Podcast &amp; Playing Business</span>
					<span class="lt-index-sub">ON_Discourse &middot; Podcast</span>
					<div class="lt-index-foot"><span class="lt-outcome">2 shows launched</span><a class="lt-link" href="https://ondiscourse.com/podcasts/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">Two shows: co-founders provoked weekly, and pro athletes asked whether sports success translates to business.</p>
			</div>
			<div class="lt-index-row" data-cat="Publication">
				<span class="lt-index-year">2022</span>
				<div class="lt-index-main">
					<span class="lt-index-name">What&rsquo;s News reboot</span>
					<span class="lt-index-sub">The Wall Street Journal &middot; Publication</span>
					<div class="lt-index-foot"><span class="lt-outcome">+15% open rate</span><a class="lt-link" href="https://www.wsj.com/newsletters/whats-news" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">Relaunched the Journal&rsquo;s flagship newsletter. It still runs on the format I created.</p>
			</div>
			<div class="lt-index-row" data-cat="Publication">
				<span class="lt-index-year">2021</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Career &amp; utility news series</span>
					<span class="lt-index-sub">The Wall Street Journal &middot; Publication</span>
					<div class="lt-index-foot"><span class="lt-outcome">Best-performing series</span></div>
				</div>
				<p class="lt-index-desc">A newsroom group delivering news you can use for job seekers and career development.</p>
			</div>
			<div class="lt-index-row" data-cat="Activation">
				<span class="lt-index-year">2017</span>
				<div class="lt-index-main">
					<span class="lt-index-name">The Donald J. Trump Presidential Twitter Library</span>
					<span class="lt-index-sub">The Daily Show &middot; Activation</span>
					<div class="lt-index-foot"><span class="lt-outcome">Cannes Grand Prix &middot; Clio &middot; NYT bestseller</span></div>
				</div>
				<p class="lt-index-desc">Helped produce the book and its physical installations across America &mdash; a museum exhibit built out of a Twitter feed.</p>
			</div>
			<div class="lt-index-row" data-cat="Platform">
				<span class="lt-index-year">2015</span>
				<div class="lt-index-main">
					<span class="lt-index-name">The Daily Show digital department</span>
					<span class="lt-index-sub">The Daily Show &middot; Platform</span>
					<div class="lt-index-foot"><span class="lt-outcome">Emmy Award</span></div>
				</div>
				<p class="lt-index-desc">Helped build the department from scratch: social video, platform-native formats, live experiences, books, and activations.</p>
			</div>
			<div class="lt-index-row lt-index-row--detail" data-cat="Platform">
				<span class="lt-index-year"></span>
				<div class="lt-index-main">
					<span class="lt-index-name">Top digital video series and segments</span>
					<span class="lt-index-sub">The Daily Show &middot; Digital originals</span>
				</div>
				<div class="lt-index-desc lt-launch-detail">
					<div class="lt-cards lt-cards--compact">
						<div class="lt-card">
							<span class="lt-org">Between the Scenes</span>
							<p>Won the Primetime Emmy for Outstanding Short Form Variety Series and multiple Webby and Shorty Awards, generating hundreds of millions of views across YouTube and social platforms. Under Trevor Noah&rsquo;s digital strategy, the show built a dedicated rapid-response and native social team that repeatedly ranked The Daily Show as the most socially engaged late-night program on Twitter and YouTube.</p>
							<div class="lt-card-foot"><a class="lt-link" href="https://simonowens.substack.com/p/how-the-daily-show-reinvented-itself" target="_blank" rel="noopener">Read the case study &#8599;</a></div>
						</div>
						<div class="lt-card">
							<span class="lt-org">Desi Lydic Womansplains</span>
							<p>A hit digital-original web series starring correspondent Desi Lydic that humorously dissected social expectations, gender roles, and politics, earning critical praise including a Webby Winner honor.</p>
							<div class="lt-card-foot"><a class="lt-link" href="https://winners.webbyawards.com/2020/video/performance-craft/best-web-personalityhost/119683/the-daily-show-with-trevor-noah--desi-lydic-womansplains" target="_blank" rel="noopener">Webby winner &#8599;</a></div>
						</div>
						<div class="lt-card">
							<span class="lt-org">Vibe Check &amp; Extended Interviews</span>
							<p>Extended online-only discussions and bonus tracks featuring deeper conversations with high-profile guests, activists, and cultural icons that did not fit the broadcast time window.</p>
							<div class="lt-card-foot"><a class="lt-link" href="https://www.youtube.com/watch?v=FfxJazhf9Ek" target="_blank" rel="noopener">Watch &#8599;</a></div>
						</div>
						<div class="lt-card">
							<span class="lt-org">What in the World?</span>
							<p>Digital segments exploring bizarre, fascinating, and overlooked international news stories with the show&rsquo;s trademark satirical edge.</p>
							<div class="lt-card-foot"><a class="lt-link" href="https://www.youtube.com/watch?v=d1rHsI-g3z4" target="_blank" rel="noopener">Watch &#8599;</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="lt-index-row" data-cat="Product">
				<span class="lt-index-year">2013</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Circa</span>
					<span class="lt-index-sub">Circa &middot; Product</span>
					<div class="lt-index-foot"><span class="lt-outcome">NYT Innovation Report</span></div>
				</div>
				<p class="lt-index-desc">Editor-in-chief of the mobile news app that broke stories into structured atoms readers could follow over time.</p>
			</div>
			<div class="lt-index-row" data-cat="Platform">
				<span class="lt-index-year">2011</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Reuters social newsroom</span>
					<span class="lt-index-sub">Reuters &middot; Platform</span>
					<div class="lt-index-foot"><span class="lt-outcome">400% audience growth</span></div>
				</div>
				<p class="lt-index-desc">Built the social-first reporting and distribution practice across 30 accounts alongside a global news API.</p>
			</div>
			<div class="lt-index-row" data-cat="Platform">
				<span class="lt-index-year">2009</span>
				<div class="lt-index-main">
					<span class="lt-index-name">Neighborhoodr</span>
					<span class="lt-index-sub">Independent &middot; Platform</span>
					<div class="lt-index-foot"><span class="lt-outcome">25+ cities</span><a class="lt-link" href="https://neighborhoodr.vercel.app/" target="_blank" rel="noopener">Open &#8599;</a></div>
				</div>
				<p class="lt-index-desc">A hyperlocal news network on Tumblr, co-founded and grown to cover more than 25 cities. Rebuilt in 2026.</p>
			</div>
		</div>
	</section>

	<section class="lt-cta">
		<div class="lt-cta-inner">
			<div>
				<span class="lt-kicker lt-kicker--wide">Still launching</span>
				<h2 style="margin-top:16px">Got something that<br>doesn&rsquo;t exist yet?</h2>
			</div>
			<a class="lt-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in touch</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
