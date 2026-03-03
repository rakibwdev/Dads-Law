<?php

$args = array (
	'post_type' => 'reviews',
	'post_per_page' => '10',
	'post_status' => 'publish',
	'order' => 'DESC',
    'paged' => $paged
);
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article>
                            <div class="testimonial">
                                <?php the_content(); ?>
                            </div>
                            <p class="author"><?php echo get_the_title(); ?></p>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination( array(
                        'prev_text' => __( '', 'postali-core' ),
                        'next_text' => __( '', 'postali-core' ),
                    ) ); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>