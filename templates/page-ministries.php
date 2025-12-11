<?php get_header(); ?>

<?php
/*
 * Template Name: Ministries Page
 * Description: A template for displaying church ministries.
 */

// Use the new prefix and total from your Customizer registration
$total  = 5;
$prefix = 'fwbsite_ministry_'; // <<<<<<<<<<<<<<<<< UPDATED PREFIX!

// Bail early if none enabled
$any_enabled = false;
for ( $i = 1; $i <= $total; $i++ ) {
    // UPDATED get_theme_mod calls with new IDs
    if ( get_theme_mod( $prefix . $i . '_enabled', 0 ) ) {
        $any_enabled = true;
        break;
    }
}

if ( ! $any_enabled ) {
    // Consider adding some placeholder or message if no ministries are enabled
    // return; // Only return if you want a completely blank page when none are enabled
    ?>
    <section class="ministries-no-content">
        <div class="container">
            <p><?php _e( 'No ministries are currently enabled or configured. Please enable them in the Customizer.', 'fwbsite' ); ?></p>
        </div>
    </section>
    <?php
    get_footer();
    return; // Exit template after showing message
}
?>

<section class="ministries">
    <div class="container ministries__container">
        <?php for ( $i = 1; $i <= $total; $i++ ) :
            // UPDATED get_theme_mod calls with new IDs
            $enabled = get_theme_mod( $prefix . $i . '_enabled', 0 );
            if ( ! $enabled ) {
                continue;
            }

            $image_raw    = get_theme_mod( $prefix . $i . '_image', '' );
            $title_raw    = get_theme_mod( $prefix . $i . '_title', '' );
            $catch_raw    = get_theme_mod( $prefix . $i . '_catchphrase', '' );
            $details_raw  = get_theme_mod( $prefix . $i . '_details', '' );

            // Escaped outputs
            $image_url    = $image_raw ? esc_url( $image_raw ) : '';
            $title_text   = $title_raw ? wp_strip_all_tags( $title_raw ) : '';
            $catch_text   = $catch_raw ? wp_strip_all_tags( $catch_raw ) : '';
            $details_text = $details_raw !== '' ? wp_strip_all_tags( $details_raw ) : '';

            // Prepare alt text safely
            if ( $title_text ) {
                $alt_text = $title_text;
            } else {
                $alt_text = sprintf( 'Ministry image %d', $i );
            }

            // Convert details to safe HTML with line breaks
            $details_html = $details_text !== '' ? nl2br( esc_html( $details_text ) ) : '';
        ?>
            <article class="ministry ministry--<?php echo esc_attr( $i ); ?>">
                <div class="ministry__media" aria-hidden="<?php echo $image_url ? 'false' : 'true'; ?>">
                    <?php if ( $image_url ) : ?>
                        <img
                            class="ministry__image"
                            src="<?php echo esc_url( $image_url ); ?>"
                            alt="<?php echo esc_attr( $alt_text ); ?>"
                            loading="lazy"
                        />
                    <?php else : ?>
                        <div
                            class="ministry__placeholder"
                            role="img"
                            aria-label="<?php echo esc_attr( $title_text ? $title_text : sprintf( 'Ministry placeholder %d', $i ) ); ?>"
                        ></div>
                    <?php endif; ?>

                    <div class="ministry__overlay">
                        <?php if ( $title_text ) : ?>
                            <h3 class="ministry__title"><?php echo esc_html( $title_text ); ?></h3>
                        <?php endif; ?>

                        <?php if ( $catch_text ) : ?>
                            <p class="ministry__catch"><?php echo esc_html( $catch_text ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ( $details_html ) : ?>
                    <div class="ministry__details">
                        <?php echo $details_html; // already escaped above ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endfor; ?>
    </div>
</section>

<?php get_footer();?>