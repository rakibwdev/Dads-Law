<?php

get_header(); 

$att_args = array(
    'post_type'         => 'attorneys',
    'post_per_page'     => -1,
    'post_status'       => 'publish',
    'order'             => 'DESC',
);

$att_query = new WP_Query($att_args);

?>

<div class="body-container">

    <section class="banner no-bg">
        <div class="container">
            <div class="columns">
                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                <div class="column-66 block">
                    <h1>About Dads.Law</h1>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a title="call <?php the_field('phone_number','options'); ?>" href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <div class="contact-block-right">
                            <p><a href="/contact-us/" title="Request a Consultation">Request a Consultation</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mobile-no-pad"> 
            <div class="columns">
                <div class="column-66 block">
                <?php if( $att_query->have_posts() ) : ?>
                    <div class="attorneys-list">
                        <?php while( $att_query->have_posts() ) : $att_query->the_post(); ?>
                        <div class="attorney">
                            <div class="img">
                                <?php if( get_the_post_thumbnail() ) { echo get_the_post_thumbnail(); }?>
                            </div>
                            <div class="copy">
                                <h2><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h2>
                                <p class="eyebrow"><?php the_field('position'); ?></p>
                                <?php the_field('intro_copy'); ?>
                                <a title="view attorney bio" href="<?php echo get_the_permalink(); ?>" class="btn">Learn More About <?php the_field('first_name'); ?></a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block', 'sidebar') ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>