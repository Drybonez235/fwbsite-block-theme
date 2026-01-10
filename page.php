<?php get_header(); ?>
<main id="main-content" class="site-main">
    <?php
    // Start The Loop
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('content-container'); ?>>
            
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div>

        </article>

        <?php
    endwhile; // End of the loop.
    ?>
</main>
<?php get_footer(); ?>