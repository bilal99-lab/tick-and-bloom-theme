<?php
/**
 * Homepage template (2026 redesign).
 *
 * @package Tick_Bloom
 */
get_header();

$c   = tb_colors();
$lib = tb_library();

$fan = array(
	array( 'Monthly habit tracker', 'Up to 8 habits, 31 days', 'habit', $c['mint'] ),
	array( '75 Soft tracker', '75 days, 4 daily rules', 'soft', $c['coral'] ),
	array( 'My morning routine', 'For kids to tick alone', 'kids', $c['lemon'] ),
	array( 'Weekly meal planner', 'Meals plus grocery list', 'meal', $c['lilac'] ),
	array( 'One habit, one year', '365 days on one page', 'year', $c['mint'] ),
);

$cats = array(
	array( 'habits', 'Habits', '14 printables', $c['mint'], 'habit', true ),
	array( 'challenges', 'Challenges', '6 printables', $c['coral'], 'soft', false ),
	array( 'kids', 'Kids', '9 printables', $c['lemon'], 'kids', false ),
	array( 'home', 'Meals and money', '11 printables', $c['lilac'], 'meal', true ),
	array( 'year', 'Yearly and planners', '4 printables', $c['sky'], 'year', false ),
);

$marquee = array( 'Habit trackers', '75 Soft', 'Kids routines', 'Meal planners', 'Budget sheets', '66-day challenge', 'Yearly trackers', 'Student planners' );
$mcol    = array( $c['mint'], $c['coral'], $c['lemon'], $c['lilac'] );
?>

<section class="tb-hero tb-grid-bg" aria-labelledby="hero-title">
  <div class="tb-wrap tb-hero__inner">
    <div class="tb-hero__text">
      <a class="tb-pill" href="<?php echo esc_url( home_url( '/yearly-habit-tracker-printable/' ) ); ?>"><span class="tb-pill__tag">New</span><?php esc_html_e( 'Yearly habit tracker for 2027 is out', 'tick-bloom' ); ?></a>
      <h1 id="hero-title" class="tb-hero__title">Print it.<br>Tick it.<br><span class="tb-hl">Watch it bloom.</span></h1>
      <p class="tb-hero__lead"><?php esc_html_e( "Free printable trackers and planners for habits, kids' routines, meals and money. One page, a pen, and a tick every day.", 'tick-bloom' ); ?></p>
      <div class="tb-hero__ctas">
        <a class="tb-btn tb-btn--blue tb-btn--lg" href="#library"><?php esc_html_e( 'Pick a printable', 'tick-bloom' ); ?></a>
        <a class="tb-btn tb-btn--lemon tb-btn--lg" href="#challenge"><?php esc_html_e( 'Start the 66-day challenge', 'tick-bloom' ); ?></a>
      </div>
      <ul class="tb-hero__chips">
        <?php foreach ( array( 'Always free', 'No sign-up', 'A4 and US Letter' ) as $chip ) : ?>
        <li><svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true"><rect x="1" y="1" width="16" height="16" rx="4.5" fill="#fff" stroke="#1B2340" stroke-width="1.6"/><path d="M5 9.3l2.6 2.6L13 6.3" fill="none" stroke="#2F5BFF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo esc_html( $chip ); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="tb-hero__art">
      <div class="tb-fan" role="group" aria-label="<?php esc_attr_e( 'Preview printables', 'tick-bloom' ); ?>">
        <?php foreach ( $fan as $i => $s ) : ?>
        <button type="button" class="tb-fan__sheet tb-pos-<?php echo (int) $i; ?>" data-i="<?php echo (int) $i; ?>" aria-pressed="<?php echo 0 === $i ? 'true' : 'false'; ?>" aria-label="<?php echo esc_attr( 'Show the ' . $s[0] ); ?>">
          <span class="tb-tape" style="background:<?php echo esc_attr( $s[3] ); ?>"></span>
          <span class="tb-fan__title"><?php echo esc_html( $s[0] ); ?></span>
          <span class="tb-fan__sub"><?php echo esc_html( $s[1] ); ?></span>
          <span aria-hidden="true"><?php echo tb_sheet_rows( $s[2], 1.1, $s[3] ); // phpcs:ignore WordPress.Security.EscapeOutput -- built from fixed values. ?></span>
        </button>
        <?php endforeach; ?>

        <div class="tb-sticker" aria-hidden="true">
          <svg class="tb-spin" viewBox="0 0 128 128" width="128" height="128"><defs><path id="tbc" d="M64 64m-46 0a46 46 0 1 1 92 0a46 46 0 1 1 -92 0"/></defs><circle cx="64" cy="64" r="62" fill="#FFE45C" stroke="#1B2340" stroke-width="2.5"/><text font-family="Sora, sans-serif" font-size="12.5" font-weight="700" fill="#1B2340" letter-spacing="2.2"><textPath href="#tbc">ALWAYS FREE &#10022; PRINT AT HOME &#10022; NO SIGN-UP &#10022;</textPath></text></svg>
          <svg class="tb-sticker__tick" viewBox="0 0 40 40" width="40" height="40"><path d="M9 21l7.5 7.5L31 13" fill="none" stroke="#1B2340" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="tb-streak" aria-hidden="true">
          <span class="tb-streak__top"><span>Water streak</span><span class="tb-blue">19 days</span></span>
          <span class="tb-streak__bar"><span></span></span>
        </div>
        <span class="tb-hand" aria-hidden="true">tap a sheet</span>
      </div>
    </div>
  </div>
</section>

<div class="tb-marquee" aria-hidden="true">
  <div class="tb-marquee__track">
    <?php for ( $loop = 0; $loop < 2; $loop++ ) : foreach ( $marquee as $mi => $m ) : ?>
    <span class="tb-marquee__item"><?php echo esc_html( $m ); ?><span class="tb-marquee__dot" style="background:<?php echo esc_attr( $mcol[ $mi % 4 ] ); ?>"></span></span>
    <?php endforeach; endfor; ?>
  </div>
</div>

<section id="library" class="tb-library" aria-labelledby="lib-title">
  <div class="tb-wrap">
    <div class="tb-section-head">
      <div>
        <h2 id="lib-title" class="tb-h2"><?php esc_html_e( 'What are you working on?', 'tick-bloom' ); ?></h2>
        <p class="tb-lead"><?php esc_html_e( 'Pick a goal. Every printable comes with a short guide on how to use it.', 'tick-bloom' ); ?></p>
      </div>
      <form class="tb-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="tb-sr" for="tb-search-input"><?php esc_html_e( 'Search printables', 'tick-bloom' ); ?></label>
        <svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true"><circle cx="8" cy="8" r="5.5" fill="none" stroke="#1B2340" stroke-width="2"/><path d="M12.2 12.2L16 16" stroke="#1B2340" stroke-width="2" stroke-linecap="round"/></svg>
        <input id="tb-search-input" type="search" name="s" placeholder="<?php esc_attr_e( 'Search printables', 'tick-bloom' ); ?>">
      </form>
    </div>

    <div class="tb-bento" role="tablist" aria-label="<?php esc_attr_e( 'Printable categories', 'tick-bloom' ); ?>">
      <?php foreach ( $cats as $i => $cat ) : ?>
      <button type="button" role="tab" id="tab-<?php echo esc_attr( $cat[0] ); ?>" class="tb-tile<?php echo $cat[5] ? ' tb-tile--wide' : ''; ?><?php echo 0 === $i ? ' is-active' : ''; ?>" data-cat="<?php echo esc_attr( $cat[0] ); ?>" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>" aria-controls="tb-cards" style="background:<?php echo esc_attr( $cat[3] ); ?>">
        <span class="tb-tile__label"><?php echo esc_html( $cat[1] ); ?></span>
        <span class="tb-tile__count"><?php echo esc_html( $cat[2] ); ?></span>
        <span class="tb-tile__sheet" aria-hidden="true"><?php echo tb_sheet_rows( $cat[4], 0.85, 'all' === $cat[0] ? $c['cobalt'] : $cat[3], 6 ); // phpcs:ignore ?></span>
      </button>
      <?php endforeach; ?>
      <a class="tb-tile tb-tile--all" href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>">
        <span class="tb-tile__label"><?php esc_html_e( 'All printables', 'tick-bloom' ); ?></span>
        <span class="tb-tile__count"><?php esc_html_e( '40+ and counting', 'tick-bloom' ); ?></span>
        <span class="tb-tile__sheet" aria-hidden="true"><?php echo tb_sheet_rows( 'budget', 0.85, $c['cobalt'], 6 ); // phpcs:ignore ?></span>
      </a>
    </div>

    <div id="tb-cards" class="tb-cards" role="tabpanel" aria-labelledby="tab-habits">
      <?php
      $accent = array( 'habits' => $c['mint'], 'challenges' => $c['coral'], 'kids' => $c['lemon'], 'home' => $c['lilac'], 'year' => $c['sky'] );
      foreach ( $lib as $cat_id => $items ) :
        foreach ( $items as $i => $p ) :
          $col = $accent[ $cat_id ];
          ?>
      <article class="tb-card" data-cat="<?php echo esc_attr( $cat_id ); ?>"<?php echo 'habits' !== $cat_id ? ' hidden' : ''; ?>>
        <a class="tb-card__paper<?php echo $i % 2 ? ' is-right' : ''; ?>" href="<?php echo esc_url( home_url( $p[3] ) ); ?>" tabindex="-1" aria-hidden="true">
          <span class="tb-tape tb-tape--left" style="background:<?php echo esc_attr( $col ); ?>"></span>
          <span class="tb-card__ptitle"><?php echo esc_html( $p[1] ); ?></span>
          <?php echo tb_sheet_rows( $p[4], 1, $col ); // phpcs:ignore ?>
          <span class="tb-card__badge" style="background:<?php echo esc_attr( $col ); ?>"><?php echo esc_html( $p[5] ); ?></span>
        </a>
        <h3 class="tb-card__title"><a href="<?php echo esc_url( home_url( $p[3] ) ); ?>"><?php echo esc_html( $p[0] ); ?></a></h3>
        <p class="tb-card__desc"><?php echo esc_html( $p[2] ); ?></p>
        <a class="tb-card__link" href="<?php echo esc_url( home_url( $p[3] ) ); ?>" style="text-decoration-color:<?php echo esc_attr( $col ); ?>"><?php esc_html_e( 'Get the free PDF', 'tick-bloom' ); ?><span class="tb-sr"><?php echo esc_html( ': ' . $p[0] ); ?></span></a>
      </article>
          <?php
        endforeach;
      endforeach;
      ?>
    </div>
  </div>
</section>

<section class="tb-steps tb-grid-bg" aria-labelledby="how-title">
  <div class="tb-wrap">
    <h2 id="how-title" class="tb-h2 tb-center"><?php esc_html_e( 'Three steps, zero sign-ups', 'tick-bloom' ); ?></h2>
    <ol class="tb-steps__list">
      <?php
      $steps = array(
        array( 'Pick a printable', 'Choose by goal: habits, a challenge, kids, meals or money.', $c['mint'] ),
        array( 'Print it at home', 'A4 or US Letter, with a low-ink version for home printers.', $c['lemon'] ),
        array( 'Tick it every day', 'Stick it where you will see it. Watch the page fill up.', $c['coral'] ),
      );
      foreach ( $steps as $n => $st ) :
        ?>
      <li class="tb-step">
        <span class="tb-step__num" style="background:<?php echo esc_attr( $st[2] ); ?>"><?php echo (int) ( $n + 1 ); ?></span>
        <h3><?php echo esc_html( $st[0] ); ?></h3>
        <p><?php echo esc_html( $st[1] ); ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<?php if ( has_action( 'tb_ad_slot' ) ) : ?>
<aside class="tb-ad" aria-label="<?php esc_attr_e( 'Advertisement', 'tick-bloom' ); ?>">
  <div class="tb-ad__slot tb-ad__slot--banner">
    <?php
    // AdSense goes here once the account is approved. The slot keeps its
    // height before the ad loads, so the page never jumps (no layout shift).
    do_action( 'tb_ad_slot', 'home-banner' );
    ?>
  </div>
</aside>
<?php endif; ?>

<section id="challenge" class="tb-challenge" aria-labelledby="challenge-title">
  <div class="tb-wrap tb-challenge__inner">
    <div class="tb-challenge__big">
      <p class="tb-66" aria-hidden="true">66</p>
      <span class="tb-tag-rot"><?php esc_html_e( 'days to make it automatic', 'tick-bloom' ); ?></span>
    </div>
    <div class="tb-challenge__body">
      <h2 id="challenge-title" class="tb-h2"><?php esc_html_e( 'The free 66-day habit challenge', 'tick-bloom' ); ?></h2>
      <p class="tb-lead tb-ink"><?php esc_html_e( 'A University College London study found new habits took 66 days on average to feel automatic. Tap a day to see how the tracker fills up.', 'tick-bloom' ); ?></p>
      <div class="tb-tracker">
        <div class="tb-tracker__head"><span class="tb-tracker__day">Day <span data-tb-day>19</span> of 66</span><span class="tb-blue"><span data-tb-pct>29</span>% there</span></div>
        <div class="tb-dots" role="group" aria-label="<?php esc_attr_e( 'Example 66-day tracker', 'tick-bloom' ); ?>">
          <?php for ( $d = 1; $d <= 66; $d++ ) : ?>
          <button type="button" class="tb-dot<?php echo $d <= 19 ? ' is-on' : ''; ?><?php echo 19 === $d ? ' is-last' : ''; ?>" data-day="<?php echo (int) $d; ?>" aria-label="<?php echo esc_attr( 'Day ' . $d ); ?>" aria-pressed="<?php echo $d <= 19 ? 'true' : 'false'; ?>"></button>
          <?php endfor; ?>
        </div>
      </div>
      <a class="tb-btn tb-btn--ink tb-btn--lg tb-challenge__cta" href="<?php echo esc_url( home_url( '/66-day-habit-challenge-printable/' ) ); ?>"><?php esc_html_e( 'Get the 66-day tracker', 'tick-bloom' ); ?></a>
    </div>
  </div>
</section>

<section id="guides" class="tb-guides" aria-labelledby="guides-title">
  <div class="tb-wrap">
    <div class="tb-section-head">
      <h2 id="guides-title" class="tb-h2"><?php esc_html_e( 'Guides to go with them', 'tick-bloom' ); ?></h2>
      <a class="tb-ulink" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'All guides', 'tick-bloom' ); ?></a>
    </div>
    <div class="tb-guides__grid">
      <?php
      $chips  = array( $c['mint'], $c['coral'], $c['lemon'], $c['lilac'] );
      $guides = get_posts(
        array(
          'numberposts' => 4,
          'post_status' => 'publish',
          'post__in'    => array_filter(
            array_map(
              'url_to_postid',
              array(
                home_url( '/how-to-start-a-habit-tracker-you-will-actually-keep/' ),
                home_url( '/75-soft-vs-75-medium-challenge/' ),
                home_url( '/calm-morning-routine-guide/' ),
                home_url( '/simple-daily-mood-tracking-guide/' ),
              )
            )
          ),
          'orderby'     => 'post__in',
        )
      );
      if ( ! $guides ) {
        $guides = get_posts( array( 'numberposts' => 4, 'post_status' => 'publish' ) );
      }
      foreach ( $guides as $gi => $g ) :
        $cats_g  = get_the_category( $g->ID );
        $topic   = $cats_g ? $cats_g[0]->name : __( 'Guide', 'tick-bloom' );
        $words   = str_word_count( wp_strip_all_tags( $g->post_content ) );
        $minutes = max( 2, (int) round( $words / 220 ) );
        ?>
      <a class="tb-guide" href="<?php echo esc_url( get_permalink( $g ) ); ?>">
        <span class="tb-chip" style="background:<?php echo esc_attr( $chips[ $gi % 4 ] ); ?>"><?php echo esc_html( $topic ); ?></span>
        <h3><?php echo esc_html( get_the_title( $g ) ); ?></h3>
        <span class="tb-guide__time"><?php echo esc_html( sprintf( '%d min read', $minutes ) ); ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
get_footer();
