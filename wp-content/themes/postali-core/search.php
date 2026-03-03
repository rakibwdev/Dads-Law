<?php
/**
 * Search results template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                <?php if ( have_posts() ) : ?>
                    <p class="results-title">Showing <?php echo esc_html( $wp_query->found_posts ); ?> Results</p>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $imageUrl; ?>')">
                            
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                            </a>
                        </article>

                    <?php endwhile; ?>
                    <?php the_posts_pagination( array(
                        'prev_text' => __( '', 'postali-core' ),
                        'next_text' => __( '', 'postali-core' ),
                    ) ); ?>
                <?php else : ?>
                    <p><?php printf( esc_html__( 'Our apologies but there\'s nothing that matches your search for "%s"', 'postali' ), get_search_query() ); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();
