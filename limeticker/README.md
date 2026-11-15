# Lime Ticker — WordPress theme

A bold-type redesign of antderosa.com: chartreuse background, giant Archivo Black headlines, marquee ticker.

## Install

1. Zip the `limeticker` folder (or use the zip you downloaded).
2. In WordPress admin: **Appearance → Themes → Add New → Upload Theme**, choose the zip, install, then **Activate**.
   - Tip: use a staging site or the **Live Preview** button first — this doesn't touch your current theme until you activate.

## Set up (5 minutes)

1. **Menu** — Appearance → Menus: create a menu with Home, Bio, Portfolio, Testimonials, Blog, Newsletter, AI Builds, Tech Stack, Contact and assign it to the **Primary Menu** location. Without one, the theme falls back to a plain page list.
   - To style Contact as the black pill button, add the CSS class `lt-nav-cta` to that menu item (enable "CSS Classes" under Screen Options).
2. **Homepage** — Settings → Reading → set "Your homepage displays" to a static page. Any page works; the theme's `front-page.php` renders the hero/ticker/stats layout regardless of that page's content.
3. **AI Builds page** — Pages → Add New, title it "AI Builds", leave the content blank, choose the **AI Builds** template in the page settings, and publish it. Add that page to the primary menu.
4. **Pages** — Bio, Testimonials, Contact, Tech Stack render through the new skin automatically (giant title + cream panel). Blockquotes get the big-type testimonial treatment, so the Testimonials page looks right as-is.

## Customizing

- Hero headline, stats, ticker text, and homepage quote: edit `front-page.php` (plain HTML, clearly commented).
- Footer CTA + social links: `footer.php`.
- Colors: CSS variables at the top of `style.css` (`--lt-lime`, `--lt-ink`, `--lt-panel`).
- Headshot: replace `images/anthony.png`.

## Notes

- The contact form on the prototype was a mock — keep using your existing contact form plugin/shortcode on the Contact page.
- Google Fonts (Archivo + Archivo Black) load from fonts.googleapis.com. Self-host them later if you prefer.
