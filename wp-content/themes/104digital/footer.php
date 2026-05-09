<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();
// Default Footer Options.
$dma_var_footer_scripts = $dma_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$dma_var_schema_check = $dma_option_fields['dma_var_schema_check'] ?? null;
if ( $dma_var_schema_check ) {
	$dma_var_schema_business_name       = $dma_option_fields['dma_var_schema_business_name'] ?? null;
	$dma_var_schema_business_legal_name = $dma_option_fields['dma_var_schema_business_legal_name'] ?? null;
	$dma_var_schema_street_address      = $dma_option_fields['dma_var_schema_street_address'] ?? null;
	$dma_var_schema_locality            = $dma_option_fields['dma_var_schema_locality'] ?? null;
	$dma_var_schema_region              = $dma_option_fields['dma_var_schema_region'] ?? null;
	$dma_var_schema_postal_code         = $dma_option_fields['dma_var_schema_postal_code'] ?? null;
	$dma_var_schema_map_short_link      = $dma_option_fields['dma_var_schema_map_short_link'] ?? null;
	$dma_var_schema_latitude            = $dma_option_fields['dma_var_schema_latitude'] ?? null;
	$dma_var_schema_longitude           = $dma_option_fields['dma_var_schema_longitude'] ?? null;
	$dma_var_schema_opening_hours       = $dma_option_fields['dma_var_schema_opening_hours'] ?? null;
	$dma_var_schema_telephone           = $dma_option_fields['dma_var_schema_telephone'] ?? null;
	$dma_var_schema_business_email      = $dma_option_fields['dma_var_schema_business_email'] ?? null;
	$dma_var_schema_business_logo       = $dma_option_fields['dma_var_schema_business_logo'] ?? null;
	$dma_var_schema_price_range         = $dma_option_fields['dma_var_schema_price_range'] ?? null;
	$dma_var_schema_type                = $dma_option_fields['dma_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$dma_var_tohdr_phne     = $dma_option_fields['dma_var_tohdr_phne'] ?? null;
$dma_var_tohdr_email      = $dma_option_fields['dma_var_tohdr_email'] ?? null;
$dma_var_ftrop_copyright = $dma_option_fields['dma_var_ftrop_copyright'] ?? null;
$dma_var_tohdr_address = $dma_option_fields['dma_var_tohdr_address'] ?? null;
$dma_var_tocta_title     = $dma_option_fields['dma_var_tocta_title'] ?? null;
$dma_var_tocta_text      = $dma_option_fields['dma_var_tocta_text'] ?? null;
$dma_var_tocta_form = $dma_option_fields['dma_var_tocta_form'] ?? null;

$dma_var_facebook_link = $dma_option_fields['dma_var_facebook_link'] ?? null;
$dma_var_twitter_link = $dma_option_fields['dma_var_twitter_link'] ?? null;
$dma_var_dribble_link = $dma_option_fields['dma_var_dribble_link'] ?? null;
$dma_var_instagram_link = $dma_option_fields['dma_var_instagram_link'] ?? null;
$dma_var_linkedin_link = $dma_option_fields['dma_var_linkedin_link'] ?? null;
$dma_var_pinterest_link = $dma_option_fields['dma_var_pinterest_link'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>

    <footer id="footer-section" class="footer-section">
        <div class="footer-ctn footer-ctn--toolkit">
            <div class="wrapper">
                <!-- Footer CTA (Upper Section) -->
                <div class="footer-cta d-flex justify-content-between align-items-center flex-wrap">
                    <div class="footer-cta-left d-flex align-items-center">
                        <h2 class="footer-cta-heading"><?php echo $dma_var_tocta_title; ?></h2>
                        <span class="footer-cta-arrow" aria-hidden="true"></span>
                    </div>
                    <div class="footer-cta-right">
                        <p class="footer-cta-text">
                            <?php echo $dma_var_tocta_text; ?>
                        </p>
                        <?php if ( $dma_var_tocta_form ) { ?>
                            <div class="footer-cta-form">
                                <?php echo do_shortcode('[gravityform id="' . $dma_var_tocta_form . '" title="false"]'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Main Footer (Three Columns) -->
                <div class="footer-cols d-flex justify-content-between align-items-start flex-wrap">
                    <div class="footer-col-left">
                        <div class="footer-col--social">
                            <h3 class="footer-col-heading">
                                Helping Start-Ups Scale & Grow.
                            </h3>
                            <div class="social-icons d-flex align-items-center">
                                <?php if($dma_var_facebook_link): ?>
                                <a href="<?php echo esc_url($dma_var_facebook_link); ?>" class="social-icon flex-center" aria-label="Facebook">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/facebook-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                                <?php if($dma_var_twitter_link): ?>
                                <a href="<?php echo esc_url($dma_var_twitter_link); ?>" class="social-icon flex-center" aria-label="X">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/twitter-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                                <?php if($dma_var_dribble_link): ?>
                                <a href="<?php echo esc_url($dma_var_dribble_link); ?>" class="social-icon flex-center" aria-label="Dribbble">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/dribbble-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                                <?php if($dma_var_instagram_link): ?>
                                <a href="<?php echo esc_url($dma_var_instagram_link); ?>" class="social-icon flex-center" aria-label="Instagram">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/instagram-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                                <?php if($dma_var_linkedin_link): ?>
                                <a href="<?php echo esc_url($dma_var_linkedin_link); ?>" class="social-icon flex-center" aria-label="LinkedIn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/linkedin-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                                <?php if($dma_var_pinterest_link): ?>
                                <a href="<?php echo esc_url($dma_var_pinterest_link); ?>" class="social-icon flex-center" aria-label="Pinterest">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/pinterest-icon.svg" alt="" />
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col-right d-flex justify-content-between align-items-start flex-wrap">
                        <div class="footer-col footer-col--links">
                            <h3 class="footer-col-heading">Quick Links</h3>
                            <nav class="footer-quick-links" aria-label="Quick links">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-nav-one',
                                        'menu_class'     => 'footer-quick-links-list d-flex flex-wrap', // ul ki classes
                                        'container'      => false, // div wrapper ko remove kare
                                        'fallback_cb'    => 'Digital::nav_fallback',
                                        'walker'         => new \Digital\Walker\WP_Theme_Walker_Nav(),
                                    )
                                );
                                ?>
                            </nav>
                        </div>
                        <div class="footer-col footer-col--contact">
                            <h3 class="footer-col-heading">Contact</h3>
                            <address class="footer-contact">
                                <ul class="footer-contact-list">
                                    <?php if($dma_var_tohdr_phne): ?>
                                    <li>
                                        <span class="footer-contact-icon" aria-hidden="true">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/phone-icon.svg" alt="" />
                                        </span>
                                        <a href="tel:<?php echo $dma_var_tohdr_phne; ?>"><?php echo $dma_var_tohdr_phne; ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($dma_var_tohdr_email): ?>
                                    <li>
                                        <span class="footer-contact-icon" aria-hidden="true">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/mail-icon.svg" alt="" />
                                        </span>
                                        <a href="mailto:<?php echo $dma_var_tohdr_email; ?>"><?php echo $dma_var_tohdr_email; ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($dma_var_tohdr_address): ?>
                                    <li>
                                        <span class="footer-contact-icon" aria-hidden="true">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/location-icon.svg" alt="" />
                                        </span>
                                        <span><?php echo $dma_var_tohdr_address; ?></span>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="footer-bottom d-flex align-items-center justify-content-between flex-wrap">
                    <div class="copy-right">
                        <?php echo html_entity_decode($dma_var_ftrop_copyright);?>
                    </div>
                    <nav class="legal-nav" aria-label="Legal">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'legal-nav',
                                'menu_class'     => 'menu footer-legal-list d-flex align-items-center flex-wrap',
                                'fallback_cb'    => 'Digital::nav_fallback',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

      
    <script>
        /**
     * Hero Portfolio: fit title lines to container width (generationalco-style)
     */
        function heroPortfolioFitTitles() {
            const fitContainers = jQuery('.hero-portfolio-title-fit');
            if (!fitContainers.length) {
                return;
            }
            fitContainers.each(function () {
                const container = jQuery(this);
                container.find('.hero-portfolio-fit').each(function () {
                    const el = jQuery(this);
                    if (el.find('.hero-portfolio-fit-inner').length) {
                        el.find('.hero-portfolio-fit-inner').contents().unwrap();
                    }
                    el.wrapInner('<span class="hero-portfolio-fit-inner"></span>');
                    const fitInner = el.find('.hero-portfolio-fit-inner');
                    fitInner.css('white-space', 'nowrap');
                    el.css('display', 'block');
                    // Force reflow so inner has laid-out width
                    void el[0].offsetHeight;
                    const fitWidth = el[0].getBoundingClientRect().width;
                    const innerWidth = fitInner[0].getBoundingClientRect().width;
                    if (!fitWidth || !innerWidth) {
                        return;
                    }
                    // Use element's current font-size (toolkit has 64/60px from CSS); demo uses 1em = 16px because .fit has no font-size
                    const currentFontSize = parseFloat(el.css('font-size'), 10) || 16;
                    const factor = fitWidth / innerWidth;
                    const calc = currentFontSize * factor;
                    const calcPercent = (calc * 2.5) / 100;
                    const calcFirst = Math.max(14, calc - calcPercent);
                    el.css('font-size', calcFirst + 'px');
                });
            });
        }
        function runHeroPortfolioFit() {
            if (!jQuery('.hero-portfolio-title-fit').length) {
                return;
            }
            requestAnimationFrame(function () {
                requestAnimationFrame(heroPortfolioFitTitles);
            });
        }
        if (jQuery('.hero-portfolio-title-fit').length) {
            runHeroPortfolioFit();
            jQuery(window).on('resize', runHeroPortfolioFit);
            jQuery(window).on('load', function () {
                setTimeout(runHeroPortfolioFit, 150);
            });
        }

    </script>
    
    <script>
        (function processBlock() {
            const section = document.getElementById('processReplica');
            if (!section) {
                return;
            }
            const connectors = document.getElementById('connectors');
            const desktopLayout = document.getElementById('desktopLayout');
            const mobileLayout = document.getElementById('mobileLayout');
            const rearrangeWrap = document.getElementById('rearrangeWrap');
            const rearrangeBtn = document.getElementById('rearrangeBtn');

            function varLine() {
                return section ? (getComputedStyle(section).getPropertyValue('--process-block-line').trim() || 'rgb(222,222,222)') : 'rgb(222,222,222)';
            }
            function varLineHi() {
                return section ? (getComputedStyle(section).getPropertyValue('--process-block-line-hi').trim() || 'rgb(255,255,255)') : 'rgb(255,255,255)';
            }

            function getCardsFromDom() {
                const dataEl = section.querySelector('.process-block-data');
                if (!dataEl) {
                    return [];
                }
                const cardEls = dataEl.querySelectorAll('.process-block-card');
                const out = [];
                for (let i = 0; i < cardEls.length; i++) {
                    const el = cardEls[i];
                    const id = parseInt(el.getAttribute('data-id'), 10) || (i + 1);
                    const headingEl = el.querySelector('.process-block-card-heading');
                    const heading = headingEl ? headingEl.textContent.trim() : '';
                    const theme = (el.getAttribute('data-theme') || 'bg-lime').trim();
                    const linesEl = el.querySelector('.process-block-card-lines');
                    const lines = [];
                    if (linesEl) {
                        const items = linesEl.querySelectorAll('li');
                        for (let j = 0; j < items.length; j++) {
                            lines.push(items[j].textContent.trim());
                        }
                    }
                    out.push({ id, heading, lines, theme });
                }
                return out;
            }

            const cardsData = getCardsFromDom();
            if (!cardsData.length) {
                return;
            }

            const cardRefs = new Map();
            const cardWrapRefs = new Map();
            const positions = {};
            let activeConnections = [];
            let activeCards = [];
            let dragZ = 1000;
            let state = { w: window.innerWidth, h: window.innerHeight };

            const desktopConnections = [
                { from: 1, to: 2 }, { from: 1, to: 3 }, { from: 1, to: 4 },
                { from: 2, to: 3 }, { from: 3, to: 4 },
                { from: 2, to: 5 }, { from: 3, to: 5 }, { from: 4, to: 5 },
                { from: 5, to: 6 },
            ];
            const mobileConnections = [
                { from: 1, to: 2 }, { from: 1, to: 4 }, { from: 2, to: 3 },
                { from: 4, to: 3 }, { from: 3, to: 5 }, { from: 5, to: 6 },
            ];

            function clamp(min, v, max) {
                return Math.min(max, Math.max(min, v));
            }
            function isMobile() {
                return state.w < 640;
            }
            function isTablet() {
                return state.w >= 640 && state.w < 1024;
            }
            function isCompact() {
                return isMobile() || isTablet();
            }
            function currentConnections() {
                return isCompact() ? mobileConnections : desktopConnections;
            }
            function inset() {
                return isCompact() ? 8 : 12;
            }

            function cardWidth() {
                if (isMobile()) {
                    return 'clamp(130px, 40vw, 160px)';
                }
                if (isTablet()) {
                    return 'clamp(140px, 22vw, 180px)';
                }
                return 'clamp(160px, 13.5vw, 230px)';
            }
            function titleSize() {
                if (isMobile()) {
                    return 'clamp(14px, 3.5vw, 18px)';
                }
                if (isTablet()) {
                    return 'clamp(16px, 2.2vw, 20px)';
                }
                return 'clamp(20px, 1.7vw, 34px)';
            }
            function contentSize() {
                if (isMobile()) {
                    return 'clamp(10px, 2.8vw, 13px)';
                }
                if (isTablet()) {
                    return 'clamp(11px, 1.8vw, 14px)';
                }
                return 'clamp(13px, 0.95vw, 18px)';
            }
            function cardPadding() {
                if (isMobile()) {
                    return 'clamp(10px, 3vw, 14px)';
                }
                if (isTablet()) {
                    return 'clamp(14px, 2.5vw, 20px)';
                }
                return 'clamp(14px, 1.3vw, 20px)';
            }
            function rowGap() {
                if (isMobile()) {
                    return 'clamp(12px, 3vw, 20px)';
                }
                if (isTablet()) {
                    return 'clamp(16px, 3vw, 24px)';
                }
                return 'clamp(24px, 4vw, 48px)';
            }
            function colGap() {
                if (isMobile()) {
                    return 'clamp(16px, 6vw, 32px)';
                }
                if (isTablet()) {
                    return 'clamp(20px, 5vw, 40px)';
                }
                return 'clamp(24px, 4vw, 48px)';
            }

            function buildCard(card, areaName) {
                const wrap = document.createElement('div');
                wrap.className = 'card-wrap';
                if (!isCompact()) {
                    wrap.style.gridArea = areaName;
                }

                const title = document.createElement('h3');
                title.className = 'card-title heading-5';
                title.textContent = card.heading;

                const box = document.createElement('div');
                box.className = 'process-card ' + card.theme;
                box.style.width = cardWidth();
                box.style.height = 'auto';
                box.style.padding = cardPadding();

                const list = document.createElement('ul');
                list.className = 'process-block-card-lines';
                card.lines.forEach(function (text) {
                    const li = document.createElement('li');
                    li.className = 'line';
                    li.style.fontSize = contentSize();
                    li.textContent = text;
                    list.appendChild(li);
                });
                box.appendChild(list);

                wrap.appendChild(title);
                wrap.appendChild(box);

                cardRefs.set(card.id, box);
                cardWrapRefs.set(card.id, wrap);
                makeDraggable(card.id, wrap, box);

                return wrap;
            }

            function buildLayouts() {
                desktopLayout.innerHTML = '';
                mobileLayout.innerHTML = '';
                cardRefs.clear();
                cardWrapRefs.clear();

                desktopLayout.style.gap = rowGap();
                desktopLayout.style.columnGap = colGap();

                const areaMap = { 1: 'card1', 2: 'card2', 3: 'card3', 4: 'card4', 5: 'card5', 6: 'card6' };
                cardsData.forEach(function (card) {
                    desktopLayout.appendChild(buildCard(card, areaMap[card.id]));
                });

                const row1 = document.createElement('div'); row1.className = 'row'; row1.appendChild(cardWrapRefs.get(1));
                const row2 = document.createElement('div'); row2.className = 'row'; row2.style.gap = colGap(); row2.appendChild(cardWrapRefs.get(2)); row2.appendChild(cardWrapRefs.get(4));
                const row3 = document.createElement('div'); row3.className = 'row'; row3.appendChild(cardWrapRefs.get(3));
                const row4 = document.createElement('div'); row4.className = 'row'; row4.appendChild(cardWrapRefs.get(5));
                const row5 = document.createElement('div'); row5.className = 'row'; row5.appendChild(cardWrapRefs.get(6));

                mobileLayout.append(row1, row2, row3, row4, row5);

                desktopLayout.innerHTML = '';
                cardsData.forEach(function (card) {
                    desktopLayout.appendChild(buildCard(card, areaMap[card.id]));
                });

                if (isCompact()) {
                    mobileLayout.innerHTML = '';
                    const compactRows = [[1], [2, 4], [3], [5], [6]];
                    compactRows.forEach(function (ids) {
                        const row = document.createElement('div');
                        row.className = 'row';
                        row.style.gap = ids.length > 1 ? colGap() : '0px';
                        ids.forEach(function (id) {
                            row.appendChild(cardWrapRefs.get(id));
                        });
                        mobileLayout.appendChild(row);
                    });
                    mobileLayout.style.gap = rowGap();
                }
            }

            function capturePositions() {
                const sec = section.getBoundingClientRect();
                cardsData.forEach(function (card) {
                    const box = cardRefs.get(card.id);
                    if (!box) {
                        return;
                    }
                    const r = box.getBoundingClientRect();
                    positions[card.id] = {
                        x: r.left - sec.left + r.width / 2,
                        y: r.top - sec.top + r.height / 2,
                        width: r.width,
                        height: r.height,
                    };
                });
            }

            function anchor(id, isStart, otherId) {
                const p = positions[id];
                if (!p) {
                    return { x: 0, y: 0 };
                }
                const I = inset();
                const a = p.width / 2;
                const o = p.height / 2;

                if (isCompact()) {
                    if (id === 1) {
                        if (otherId === 2) {
                            return { x: p.x - a + I, y: p.y + o - I };
                        }
                        if (otherId === 4) {
                            return { x: p.x + a - I, y: p.y + o - I };
                        }
                    }
                    if (id === 2 || id === 4 || id === 3 || id === 5) {
                        return isStart ? { x: p.x, y: p.y + o - I } : { x: p.x, y: p.y - o + I };
                    }
                    if (id === 6) {
                        return { x: p.x, y: p.y - o + I };
                    }
                    return { x: p.x, y: p.y };
                }

                if (id === 1) {
                    return { x: p.x + a - I, y: p.y };
                }
                if (isStart && id === 2 && otherId === 3) {
                    return { x: p.x, y: p.y + o - I };
                }
                if (!isStart && id === 3 && otherId === 2) {
                    return { x: p.x, y: p.y - o + I };
                }
                if (isStart && id === 3 && otherId === 4) {
                    return { x: p.x, y: p.y + o - I };
                }
                if (!isStart && id === 4 && otherId === 3) {
                    return { x: p.x, y: p.y - o + I };
                }
                if (!isStart && (id === 2 || id === 3 || id === 4) && otherId === 1) {
                    return { x: p.x - a + I, y: p.y };
                }
                if (isStart && (id === 2 || id === 3 || id === 4) && otherId === 5) {
                    return { x: p.x + a - I, y: p.y };
                }
                if (!isStart && id === 5) {
                    return { x: p.x - a + I, y: p.y };
                }
                if (isStart && id === 5) {
                    return { x: p.x + a - I, y: p.y };
                }
                if (!isStart && id === 6) {
                    return { x: p.x - a + I, y: p.y };
                }
                return { x: p.x, y: p.y };
            }

            function drawConnectors() {
                capturePositions();
                connectors.innerHTML = '';
                currentConnections().forEach(function (conn, i) {
                    const start = anchor(conn.from, true, conn.to);
                    const end = anchor(conn.to, false, conn.from);
                    if ((start.x === 0 && start.y === 0) || (end.x === 0 && end.y === 0)) {
                        return;
                    }

                    const left = Math.min(start.x, end.x) - 10;
                    const top = Math.min(start.y, end.y) - 10;
                    const w = Math.abs(end.x - start.x) + 20;
                    const h = Math.abs(end.y - start.y) + 20;

                    const c = start.x - left,
                        u = start.y - top,
                        d = end.x - left,
                        e = end.y - top;
                    const cp1 = c + (d - c) * 0.6,
                        cp2 = d - (d - c) * 0.6;
                    const dx = d - c,
                        dy = e - u;
                    const dash = 1.5 * Math.sqrt(dx * dx + dy * dy);
                    const visible = activeConnections.indexOf(i) !== -1;

                    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                    svg.setAttribute('class', 'absolute pointer-events-none');
                    svg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
                    svg.style.cssText = 'position:absolute;left:' + left + 'px;top:' + top + 'px;width:' + w + 'px;height:' + h + 'px;z-index:100;';

                    svg.innerHTML = '<defs>' +
                        '<path id="leader-line-path-' + i + '" d="M ' + c + ' ' + u + ' C ' + cp1 + ' ' + u + ' ' + cp2 + ' ' + e + ' ' + d + ' ' + e + '"></path>' +
                        '<linearGradient id="shimmer-gradient-' + i + '" gradientUnits="userSpaceOnUse" x1="' + c + '" y1="' + u + '" x2="' + d + '" y2="' + e + '">' +
                        '<stop offset="0%" stop-color="rgb(200, 200, 200)"><animate attributeName="stop-color" values="rgb(200, 200, 200);rgb(255, 255, 255);rgb(200, 200, 200)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop>' +
                        '<stop offset="20%" stop-color="rgb(220, 220, 220)"><animate attributeName="stop-color" values="rgb(220, 220, 220);rgb(200, 200, 200);rgb(255, 255, 255);rgb(220, 220, 220)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop>' +
                        '<stop offset="40%" stop-color="rgb(255, 255, 255)"><animate attributeName="stop-color" values="rgb(255, 255, 255);rgb(220, 220, 220);rgb(200, 200, 200);rgb(255, 255, 255)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop>' +
                        '<stop offset="60%" stop-color="rgb(220, 220, 220)"><animate attributeName="stop-color" values="rgb(220, 220, 220);rgb(255, 255, 255);rgb(220, 220, 220);rgb(200, 200, 200)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop>' +
                        '<stop offset="80%" stop-color="rgb(200, 200, 200)"><animate attributeName="stop-color" values="rgb(200, 200, 200);rgb(220, 220, 220);rgb(255, 255, 255);rgb(200, 200, 200)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop>' +
                        '<stop offset="100%" stop-color="rgb(220, 220, 220)"><animate attributeName="stop-color" values="rgb(220, 220, 220);rgb(200, 200, 200);rgb(220, 220, 220);rgb(255, 255, 255)" dur="2s" repeatCount="indefinite" begin="' + (0.2 * i) + 's"></animate></stop></linearGradient>' +
                        '<marker id="leader-line-plug-marker-start-' + i + '" orient="0" markerWidth="8.75" markerHeight="8.75" markerUnits="strokeWidth" viewBox="-5 -5 10 10"><circle cx="0" cy="0" r="4" fill="' + varLine() + '" stroke="' + varLineHi() + '" stroke-width="1" style="opacity:' + (visible ? 1 : 0) + ';transition:opacity 0.2s ease-in-out;"></circle></marker>' +
                        '<marker id="leader-line-plug-marker-end-' + i + '" orient="0" markerWidth="8.75" markerHeight="8.75" markerUnits="strokeWidth" viewBox="-5 -5 10 10"><circle cx="0" cy="0" r="4" fill="' + varLine() + '" stroke="' + varLineHi() + '" stroke-width="1" style="opacity:' + (visible ? 1 : 0) + ';transition:opacity 0.3s ease-in-out 0.3s;"></circle></marker>' +
                        '</defs>' +
                        '<use href="#leader-line-path-' + i + '" stroke="' + (visible ? 'url(#shimmer-gradient-' + i + ')' : varLine()) + '" stroke-width="1.4" fill="none" marker-start="url(#leader-line-plug-marker-start-' + i + ')" marker-end="url(#leader-line-plug-marker-end-' + i + ')" style="stroke-dasharray:' + dash + ';stroke-dashoffset:' + (visible ? 0 : dash) + ';transition:stroke-dashoffset 0.4s ease-in-out;"></use>';

                    connectors.appendChild(svg);
                });
            }

            function makeDraggable(id, wrap, handle) {
                let dragging = false,
                    sx = 0,
                    sy = 0,
                    bx = 0,
                    by = 0;

                function getPoint(ev) {
                    if (ev.touches && ev.touches[0]) {
                        return { x: ev.touches[0].clientX, y: ev.touches[0].clientY };
                    }
                    return { x: ev.clientX, y: ev.clientY };
                }
                function getTranslate(transform) {
                    if (!transform || transform === 'none') {
                        return { x: 0, y: 0 };
                    }
                    const m = transform.match(/translate3d\(([-\d.]+)px,\s*([-\d.]+)px/i) || transform.match(/translate\(([-\d.]+)px,\s*([-\d.]+)px/i);
                    return m ? { x: parseFloat(m[1]) || 0, y: parseFloat(m[2]) || 0 } : { x: 0, y: 0 };
                }
                function boundedTranslate(wrapEl, tx, ty) {
                    const secR = section.getBoundingClientRect();
                    const base = wrapEl.getBoundingClientRect();
                    const cur = getTranslate(wrapEl.style.transform);
                    const baseLeft = base.left - cur.x,
                        baseTop = base.top - cur.y;
                    return {
                        x: clamp(secR.left - baseLeft, tx, secR.right - (baseLeft + base.width)),
                        y: clamp(secR.top - baseTop, ty, secR.bottom - (baseTop + base.height)),
                    };
                }

                handle.addEventListener('pointerdown', function (ev) {
                    const p = getPoint(ev);
                    dragging = true; sx = p.x; sy = p.y;
                    const tr = getTranslate(wrap.style.transform); bx = tr.x; by = tr.y;
                    wrap.style.zIndex = String(++dragZ);
                    ev.preventDefault(); ev.stopPropagation();
                }, { passive: false });

                window.addEventListener('pointermove', function (ev) {
                    if (!dragging) {
                        return;
                    }
                    const p = getPoint(ev);
                    const next = boundedTranslate(wrap, bx + (p.x - sx), by + (p.y - sy));
                    wrap.style.transform = 'translate3d(' + next.x + 'px, ' + next.y + 'px, 0)';
                    drawConnectors();
                    ev.preventDefault();
                }, { passive: false });

                window.addEventListener('pointerup', function () {
                    if (dragging) {
                        dragging = false; drawConnectors();
                    }
                });
                window.addEventListener('pointercancel', function () {
                    if (dragging) {
                        dragging = false; drawConnectors();
                    }
                });
            }

            function reveal() {
                activeCards = [];
                activeConnections = [];
                cardsData.forEach(function (card, i) {
                    setTimeout(function () {
                        activeCards.push(card.id);
                        const w = cardWrapRefs.get(card.id);
                        if (w) {
                            w.style.opacity = '1';
                        }
                        drawConnectors();
                    }, 300 * i);
                });
                currentConnections().forEach(function (_, i) {
                    setTimeout(function () {
                        activeConnections.push(i);
                        drawConnectors();
                    }, 400 * i);
                });
            }

            function placeRearrange() {
                if (isCompact()) {
                    rearrangeWrap.style.bottom = 'clamp(16px, 4vh, 32px)';
                    rearrangeWrap.style.right = 'auto';
                    rearrangeWrap.style.left = '50%';
                    rearrangeWrap.style.transform = 'translateX(-50%)';
                } else {
                    rearrangeWrap.style.bottom = 'var(--dma_space_16)';
                    rearrangeWrap.style.left = 'auto';
                    rearrangeWrap.style.right = '0';
                    rearrangeWrap.style.transform = 'translateX(0)';
                }
            }

            function rearrange() {
                const wraps = [];
                cardWrapRefs.forEach(function (w) {
                    wraps.push(w);
                });
                wraps.forEach(function (w) {
                    w.style.transition = 'transform 0.6s cubic-bezier(0.33, 1, 0.68, 1)';
                    w.style.transform = 'translate3d(0px, 0px, 0px)';
                });
                let frames = 0;
                var timer = setInterval(function () {
                    drawConnectors();
                    frames++;
                    if (frames > 40) {
                        clearInterval(timer);
                        wraps.forEach(function (w) {
                            w.style.transition = '';
                        });
                        drawConnectors();
                    }
                }, 16);
            }

            function render() {
                state = { w: window.innerWidth, h: window.innerHeight };
                buildLayouts();
                placeRearrange();
                requestAnimationFrame(function () {
                    drawConnectors();
                    reveal();
                });
            }

            rearrangeBtn.addEventListener('click', rearrange);

            window.addEventListener('resize', function () {
                const wasCompact = isCompact();
                state = { w: window.innerWidth, h: window.innerHeight };
                if (wasCompact !== isCompact()) {
                    render(); return;
                }
                placeRearrange();
                cardRefs.forEach(function (box) {
                    box.style.width = cardWidth();
                    box.style.padding = cardPadding();
                    const lines = box.querySelectorAll('.line');
                    for (let i = 0; i < lines.length; i++) {
                        lines[i].style.fontSize = contentSize();
                    }
                });
                desktopLayout.style.gap = rowGap();
                desktopLayout.style.columnGap = colGap();
                if (mobileLayout) {
                    mobileLayout.style.gap = rowGap();
                }
                drawConnectors();
            });

            render();
        }());
    </script>
    <script>
        (function () {
            const track = document.querySelector('.marquee-track');
            const container = document.querySelector('.testimonial-slider');
            if (!track || !container) {
                return;
            }

            const slides = [...track.children];
            const minItems = 4;
            if (slides.length < minItems) {
                return;
            }

            for (let i = 0; i < 2; i++) {
                slides.forEach((slide) => {
                    track.appendChild(slide.cloneNode(true));
                });
            }

            let x = 0;
            let speed = 0.5;
            let isDragging = false;
            let startX;
            let lastX;

            function animate() {
                if (!isDragging) {
                    x -= speed;
                }
                if (Math.abs(x) >= track.scrollWidth / 2) {
                    x = 0;
                }
                gsap.set(track, { x });
                requestAnimationFrame(animate);
            }
            animate();

            container.addEventListener('mouseenter', () => {
                speed = 0;
            });
            container.addEventListener('mouseleave', () => {
                if (!isDragging) {
                    speed = 0.5;
                }
            });

            container.addEventListener('mousedown', (e) => {
                isDragging = true;
                startX = e.clientX;
                lastX = startX;
            });
            window.addEventListener('mouseup', () => {
                isDragging = false;
                speed = 0.5;
            });
            window.addEventListener('mousemove', (e) => {
                if (!isDragging) {
                    return;
                }
                x += e.clientX - lastX;
                lastX = e.clientX;
            });

            container.addEventListener('touchstart', (e) => {
                isDragging = true;
                startX = e.touches[0].clientX;
                lastX = startX;
            });
            container.addEventListener('touchend', () => {
                isDragging = false;
                speed = 0.5;
            });
            container.addEventListener('touchmove', (e) => {
                if (!isDragging) {
                    return;
                }
                const current = e.touches[0].clientX;
                x += current - lastX;
                lastX = current;
            });
        }());
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script>
		if (jQuery('.faq-ctn').length > 0) {
			jQuery('.faq-single > span').on('click', function () {
				const $span = jQuery(this);
				const $faqSingle = $span.closest('.faq-single');
				const $content = $span.siblings('.faq-content');
				const isActive = $span.hasClass('active');
				if (isActive) {
					// Close this FAQ - remove classes after animation completes
					$content.slideUp({
						duration: 300,
						easing: 'swing',
						complete() {
							$span.removeClass('active');
							$faqSingle.removeClass('active');
						},
					});
				} else {
					// Close all other FAQs first
					jQuery('.faq-single > span').not($span).each(function () {
						const $otherSpan = jQuery(this);
						const $otherFaqSingle = $otherSpan.closest('.faq-single');
						const $otherContent = $otherSpan.siblings('.faq-content');
						if ($otherSpan.hasClass('active')) {
							$otherContent.slideUp({
								duration: 300,
								easing: 'swing',
								complete() {
									$otherSpan.removeClass('active');
									$otherFaqSingle.removeClass('active');
								},
							});
						}
					});

					// Open this FAQ
					$faqSingle.addClass('active');
					$span.addClass('active');
					$content.slideDown({
						duration: 300,
						easing: 'swing',
					});
				}
			});
		}
	</script>
	<script>
		const testiSwiperEl = document.querySelectorAll('.testi-swiper');
		if (typeof Swiper !== 'undefined' && testiSwiperEl.length !== 0) {
			new Swiper('.testi-swiper', {
				pagination: {
					el: '.cta-testi-dots',
					clickable: true,
				},
				navigation: {
					nextEl: '.cta-testi-next',
					prevEl: '.cta-testi-prev',
				},
			});
		}
	</script>
	<script>
		(function () {
			const root = document.querySelector('.tb');
			if (!root) {
				return;
			}
			const swiperEl = root.querySelector('.tb-swiper');
			if (!swiperEl || typeof Swiper === 'undefined') {
				return;
			}
			const prev = root.querySelector('.tb-prev');
			const next = root.querySelector('.tb-next');
			const pagination = root.querySelector('.tb-dots');
			new Swiper(swiperEl, {
				effect: 'cards',
				grabCursor: true,
				loop: true,
				speed: 550,
				cardsEffect: {
					perSlideOffset: 6,
					perSlideRotate: 4,
					rotate: true,
					slideShadows: false,
				},
				navigation: {
					nextEl: next,
					prevEl: prev,
				},
				pagination: {
					el: pagination,
					clickable: true,
				},
			});
		}());
	</script>
<?php wp_footer(); ?>
<?php
if ( '' !== $dma_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $dma_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>
