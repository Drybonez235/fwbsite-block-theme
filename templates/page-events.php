<?php get_header(); ?>

<?php
/**
 * Template Name: Events Page
 * Description: A template for displaying church events.
 */

$total_events = 5;
$prefix       = 'church_info_event_';
$have_any     = false;

// First check if any event is enabled to avoid outputting an empty wrapper.
for ( $i = 1; $i <= $total_events; $i++ ) {
    $enabled = get_theme_mod( $prefix . $i . '_enabled', 0 );
    if ( $enabled ) {
        $have_any = true;
        break;
    }
}

if ( ! $have_any ) {
    // Nothing to show.
    return;
}
?>

<section class="church-events">
    <div class="container church-events__container">
        <?php for ( $i = 1; $i <= $total_events; $i++ ) : 
            $enabled     = get_theme_mod( $prefix . $i . '_enabled', 0 );
            if ( ! $enabled ) {
                continue;
            }

            $image_url   = get_theme_mod( $prefix . $i . '_image', '' );
            $title       = get_theme_mod( $prefix . $i . '_title', '' );
            $date        = get_theme_mod( $prefix . $i . '_date', '' );
            $location    = get_theme_mod( $prefix . $i . '_location', '' );
            $description = get_theme_mod( $prefix . $i . '_description', '' );

            // Fallback alt text for image
            $img_alt = $title ? wp_strip_all_tags( $title ) : sprintf( 'Event %d image', $i );
        ?>
            <article class="church-event church-event--<?php echo esc_attr( $i ); ?>">
                <?php if ( $image_url ) : ?>
                    <div class="church-event__media">
                        <img
                            src="<?php echo esc_url( $image_url ); ?>"
                            alt="<?php echo esc_attr( $img_alt ); ?>"
                            class="church-event__image"
                        />
                    </div>
                <?php endif; ?>

                <div class="church-event__content">
                    <?php if ( $title ) : ?>
                        <h3 class="church-event__title"><?php echo esc_html( $title ); ?></h3>
                    <?php endif; ?>

                    <?php if ( $date || $location ) : ?>
                        <div class="church-event__meta">
                            <?php if ( $date ) : ?>
                                <time class="church-event__date"><?php echo esc_html( $date ); ?></time>
                            <?php endif; ?>

                            <?php if ( $location ) : ?>
                                <span class="church-event__location"><?php echo esc_html( $location ); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $description ) : ?>
                        <div class="church-event__description">
                            <?php
                            // Allow limited HTML in description (paragraphs, links, basic formatting).
                            // Adjust allowed tags as desired.
                            echo wp_kses(
                                wpautop( $description ),
                                array(
                                    'a'      => array( 'href' => array(), 'title' => array(), 'target' => array() ),
                                    'br'     => array(),
                                    'em'     => array(),
                                    'strong' => array(),
                                    'p'      => array(),
                                    'ul'     => array(),
                                    'ol'     => array(),
                                    'li'     => array(),
                                )
                            );
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endfor; ?>
    </div>
</section>

<?php get_footer(); ?>