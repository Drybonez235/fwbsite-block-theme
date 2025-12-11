<?php get_header(); ?>

<?php
/**
 * Template Name: What We Believe Page
 * Description: A template for displaying the church's statement of faith and core beliefs.
 */

// Customizer values - UPDATED TO MATCH NEW SETTING IDs
$wweb_page_title           = get_theme_mod('fwbsite_beliefs_page_main_title', __('Our Beliefs', 'fwbsite'));
$wweb_intro_text           = get_theme_mod('fwbsite_beliefs_page_intro_text', __('Discover the core beliefs and values that guide our church community...', 'fwbsite'));
$wweb_background_image     = get_theme_mod('fwbsite_beliefs_page_background_image', '');

// Granular Beliefs - UPDATED TO MATCH NEW SETTING IDs
$wweb_belief_bible         = get_theme_mod('fwbsite_belief_content_the_bible', __('The Scriptures of the Old and New Testaments were given by inspiration of God, and are our only infallible rule of faith and practice.', 'fwbsite'));
$wweb_belief_god           = get_theme_mod('fwbsite_belief_content_the_godhead', __('We believe that there is one God, eternally existent in three persons:  the Father, Son and Holy Spirit, and that each person of the Triune Godhead is equal, eternal, and self-existent as God.', 'fwbsite'));
$wweb_belief_christ        = get_theme_mod('fwbsite_belief_content_jesus_christ', __('We believe in the deity of our Lord Jesus Christ, in His virgin birth, in His sinless life, in His substitutionary death, in His bodily resurrection, in His ascension to the right hand of the Father, and in His personal return in power and glory.', 'fwbsite'));
$wweb_belief_holyspirit    = get_theme_mod('fwbsite_belief_content_the_holy_spirit', __('We believe in the present ministry of the Holy Spirit by whose indwelling the Christian is enabled to live a godly life. ', 'fwbsite'));
$wweb_belief_sinfulness    = get_theme_mod('fwbsite_belief_content_human_sinfulness', __('Man was created innocent, but by disobedience fell into a state of sin and condemnation. All people, therefore, inherit a fallen nature of such tendencies that all who come to years of accountability, sin and become guilty before God.', 'fwbsite'));
$wweb_belief_salvation     = get_theme_mod('fwbsite_belief_content_salvation_doctrine', __('We believe that for the salvation of lost and sinful man, regeneration by the Holy Spirit is absolutely essential.   We further believe that salvation is a totally free gift from God and cannot be earned by any amount of good deeds or religious activity.', 'fwbsite'));
$wweb_belief_terms_salvation = get_theme_mod('fwbsite_belief_content_salvation_terms', __(' The conditions of salvation are: (1) Repentance of sin or sincere sorrow for sin and hearty renunciation of it. (2) Faith or the unreserved committal of one’s self to Christ as Savior and Lord with purpose to love and obey Him in all things.  Repentance and faith are not to be viewed as two separate actions, but two ways of stating the same decision. In the exercise of saving faith, the soul is renewed by the Holy Spirit, freed from the dominion of sin, and becomes a child of God.   (3) Continuance in faith unto death.', 'fwbsite'));
$wweb_belief_freedom_will  = get_theme_mod('fwbsite_belief_content_freedom_of_will', __('Under the work and influence of the Holy Spirit, the human will is freed and enabled to choose, having power to yield to the influence of the truth and the Spirit, or to resist them and perish.', 'fwbsite'));
$wweb_belief_eternal_future = get_theme_mod('fwbsite_belief_content_eternal_future_destiny', __('We believe in the resurrection of both the saved and the lost; they that are saved unto the resurrection of life and they that are lost unto the resurrection of punishment.', 'fwbsite'));
$wweb_belief_church        = get_theme_mod('fwbsite_belief_content_the_church_universal', __('We believe in the spiritual unity of believers in our Lord Jesus Christ.  Northwest recognizes that we are one gathering of believers who make up just one part of the universal body of Christ, the Church.  We share Christian fellowship with all who hold Jesus as their one and only Savior.', 'fwbsite'));

$wweb_belief_gospel_ordinances = get_theme_mod('fwbsite_belief_content_gospel_ordinances', __('We believe that the New Testament teaches the following perpetual practices in the church: Baptism, or the immersion of believers in water and the Lord’s Supper. Feet Washing, an ordinance teaching humility, is of universal obligation, and is to be ministered to all true believers.', 'fwbsite'));
$wweb_belief_tithing = get_theme_mod('fwbsite_belief_content_tithing', __('We believe that God commanded tithes and offerings in the Old Testament; Jesus endorsed it in the Gospels, and the apostle Paul said, “Upon the first day of the week let every one of you lay by him in store, as God hath prospered him” (1 Cor. 16:2a).', 'fwbsite'));
$wweb_belief_the_christian_sabbath = get_theme_mod('fwbsite_belief_content_the_christian_sabbath', __('We believe that Divine law teaches that one day in seven be set apart from secular employments and amusements for rest, worship, holy works and activities, and for personal communion with God. In the Christian era this is Sunday in celebration of Jesus Christ’s resurrection on that day.', 'fwbsite'));
$wweb_belief_perseverance = get_theme_mod('fwbsite_belief_content_perseverance', __('We believe that all disciples of Christ, who through grace persevere in faith to the end of life, have promise of eternal salvation.', 'fwbsite'));
$wweb_belief_salvation_free = get_theme_mod('fwbsite_belief_content_salvation_free', __('We believe that God desires the salvation of all, the Gospel invites all, the Holy Spirit strives with all, and whosoever will may come and take of the water of life freely.', 'fwbsite'));

// Church Covenant Content
$wweb_display_church_covenant = get_theme_mod('fwbsite_display_church_covenant', false);
$wweb_church_covenant_title   = get_theme_mod('fwbsite_church_covenant_title', __('Our Church Covenant', 'fwbsite'));
$wweb_church_covenant_content = get_theme_mod('fwbsite_church_covenant_content', __('Having been led, as we believe, by the Spirit of God, to receive the Lord Jesus Christ as our Savior, and on the profession of our faith, having been baptized in the name of the Father, and of the Son, and of the Holy Spirit, we do now, in the presence of God and this assembly, most solemnly and joyfully enter into covenant with one another as one body in Christ.', 'fwbsite'));

// Partnerships front-end variables
$wweb_display_partnerships = get_theme_mod( 'fwbsite_display_partnerships', false );
$wweb_partnerships_title   = get_theme_mod( 'fwbsite_partnerships_title', __( 'Partnerships & Affiliations', 'fwbsite' ) );
//Gather affiliations into an array for easy rendering
$wweb_affiliations = array();
for ( $i = 1; $i <= 10; $i++ ) {
  $wweb_affiliations[ $i ] = array(
    'display'     => get_theme_mod( "fwbsite_affiliation_{$i}_display", false ),
    'name'        => get_theme_mod( "fwbsite_affiliation_{$i}_name", sprintf( __( 'Affiliation %d', 'fwbsite' ), $i ) ),
    'description' => get_theme_mod( "fwbsite_affiliation_{$i}_description", '' ),
  );
}

$header_style = '';
if (! empty($wweb_background_image)) {
  $header_style = sprintf(
    'background-image: url(%s); background-size: cover; background-position: center;',
    esc_url($wweb_background_image)
  );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" style="<?php echo esc_attr($header_style); ?>">
    <div class="header-content">
      <h1 class="custom-page-title">
        <?php echo esc_html($wweb_page_title); ?>
      </h1>
      <?php if (! empty($wweb_intro_text)) : ?>
        <p class="intro-text">
          <?php echo esc_html($wweb_intro_text); ?>
        </p>
      <?php endif; ?>
    </div>
  </header>

  <div class="entry-content">
    <?php
      // Content added via the editor (optional).
      the_content();
    ?>

    <!-- Wrap the beliefs list with native <details>/<summary> so it toggles without JS -->
    <details class="beliefs-toggle" aria-label="<?php esc_attr_e('Toggle core beliefs', 'fwbsite'); ?>">
      <summary class="beliefs-summary">
        <?php echo esc_html($wweb_page_title); ?>
      </summary>

      <section
        class="granular-beliefs-list"
        aria-label="<?php esc_attr_e('Core beliefs', 'fwbsite'); ?>"
      >
        <div class="belief-point belief-bible" id="belief-bible">
          <h2><?php _e('The Bible', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_bible); ?></p>
        </div>

        <div class="belief-point belief-god" id="belief-god">
          <h2><?php _e('God', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_god); ?></p>
        </div>

        <div class="belief-point belief-christ" id="belief-christ">
          <h2><?php _e('Jesus Christ', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_christ); ?></p>
        </div>

        <div class="belief-point belief-holyspirit" id="belief-holyspirit">
          <h2><?php _e('The Holy Spirit', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_holyspirit); ?></p>
        </div>

        <div class="belief-point belief-sinfulness" id="belief-sinfulness">
          <h2><?php _e('Human Sinfulness', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_sinfulness); ?></p>
        </div>

        <div class="belief-point belief-salvation" id="belief-salvation">
          <h2><?php _e('Salvation', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_salvation); ?></p>
        </div>

        <div
          class="belief-point belief-terms-salvation"
          id="belief-terms-salvation"
        >
          <h2><?php _e('The Terms of Salvation', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_terms_salvation); ?></p>
        </div>

        <div class="belief-point belief-freedom-will" id="belief-freedom-will">
          <h2><?php _e('Free Will', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_freedom_will); ?></p>
        </div>

        <div class="belief-point belief-salvation-free" id="belief-salvation-free">
          <h2><?php _e('Salvation Free', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_salvation_free); ?></p>
        </div>
        <div class="belief-point belief-perseverance" id="belief-perseverance">
          <h2><?php _e('Perseverance', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_perseverance); ?></p>
        </div>
        <div
          class="belief-point belief-eternal-future"
          id="belief-eternal-future"
        >
          <h2><?php _e('Eternal Future', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_eternal_future); ?></p>
        </div>

        <div class="belief-point belief-church" id="belief-church">
          <h2><?php _e('The Church', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_church); ?></p>
        </div>
        <div class="belief-point belief-gospel-ordinances" id="belief-gospel-ordinances">
          <h2><?php _e('Gospel Ordiances', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_gospel_ordinances); ?></p>
        </div>
        <div class="belief-point belief-tithing" id="belief-tithing">
          <h2><?php _e('Tithing', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_tithing); ?></p>
        </div>
        <div class="belief-point belief-the-christian-sabbath" id="belief-the-christian-sabbath">
          <h2><?php _e('The Christian Sabbath', 'fwbsite'); ?></h2>
          <p><?php echo wp_kses_post($wweb_belief_the_christian_sabbath); ?></p>
        </div>
      </section>
    </details>

    <?php if ( ! empty( $wweb_display_church_covenant ) ) : ?>
  <details class="church-covenant-toggle" aria-label="<?php esc_attr_e( 'Church Covenant', 'fwbsite' ); ?>">
    <summary class="church-covenant-summary">
      <?php echo esc_html( $wweb_church_covenant_title ); ?>
    </summary>

    <section class="church-covenant-content" aria-label="<?php esc_attr_e( 'Church Covenant content', 'fwbsite' ); ?>">
      <?php
        // The content was sanitized with wp_kses_post in the Customizer.
        // Use wpautop so plain text gets paragraph tags (optional).
        echo wp_kses_post( wpautop( $wweb_church_covenant_content ) );
      ?>
    </section>
  </details>
<?php endif; ?>
<?php if ( ! empty( $wweb_display_partnerships ) ) : ?>
  <?php
    // Only show the details block if at least one affiliation is enabled.
    $has_any = false;
    foreach ( $wweb_affiliations as $aff ) {
      if ( ! empty( $aff['display'] ) ) {
        $has_any = true;
        break;
      }
    }
  ?>
  <?php if ( $has_any ) : ?>
    <details class="partnerships-toggle" aria-label="<?php esc_attr_e( 'Partnerships & Affiliations', 'fwbsite' ); ?>">
      <summary class="partnerships-summary">
        <?php echo esc_html( $wweb_partnerships_title ); ?>
      </summary>

      <section class="partnerships-list" aria-label="<?php esc_attr_e( 'List of affiliations', 'fwbsite' ); ?>">
        <?php foreach ( $wweb_affiliations as $i => $aff ) : ?>
          <?php if ( ! empty( $aff['display'] ) ) : ?>
            <div class="affiliation affiliation-<?php echo intval( $i ); ?>">
              <h3 class="affiliation-name">
                <?php echo esc_html( $aff['name'] ); ?>
              </h3>
              <div class="affiliation-description">
                <?php
                  // Description was sanitized via wp_kses_post in customizer.
                  echo wp_kses_post( wpautop( $aff['description'] ) );
                ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </section>
    </details>
  <?php endif; ?>
<?php endif; ?>
  </div>
</article>

<?php get_footer(); ?>