<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if ( have_posts() ) {

                // Load posts loop.
                while ( have_posts() ) {
                    the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( is_singular() ) : ?>
                                <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
                            <?php else : ?>
                                <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">

                        </div><!-- .entry-content -->
                    </article><!-- #post-${ID} -->
                <?php  }
            } ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php
get_footer();
