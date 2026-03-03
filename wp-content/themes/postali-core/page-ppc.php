<?php
/**
 * Template Name: PPC
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <?php if( have_rows('body_elements') ) : while( have_rows('body_elements') ) : the_row(); ?>
                
                <?php if( get_row_layout() == 'awards_block' ) : $active_awards = get_sub_field('awards'); 
                    if( $active_awards && get_field('include_awards','options')) {
                        get_template_part('block','awards');
                    } 
                endif; ?>

                <?php if( get_row_layout() == 'copy_block' ) : ?>
                    <section class="content-block">
                        <div class="container">
                            <div class="columns">
                                <div class="column-66 center block">
                                    <?php the_sub_field('copy'); ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if( get_row_layout() == 'reviews_block' ) : $featured_testimonial = get_sub_field('featured_review'); ?>
                    <section class="blue" id="testimonial">
                        <div class="container">
                            <div class="columns">
                                <div class="column-66 block">
                                    <div class="quote"></div>
                                    <p class="testimonial-callout"><?php the_field('testimonial_callout','options'); ?></p>
                                </div>
                                <div class="column-66 block">
                                    <p><?php echo get_the_content( null, 'false', $featured_testimonial->ID ); ?></p>
                                    <div class="author">
                                        <p><?php echo get_the_title( $featured_testimonial->ID ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if( get_row_layout() == 'faqs_block' ) : ?>
                    <section class="main-content main-content-2">
                        <div class="container">
                            <div class="columns">
                                <div class="column-66 center block">
                                    <h2><?php the_sub_field('section_title'); ?></h2>
                                    <?php the_sub_field('section_copy'); ?>
                                    <?php if( have_rows('accordions') ) : ?>
                                        <div class="accordions-wrapper">
                                            <?php while( have_rows('accordions') ) : the_row(); ?>
                                            <div class="accordions">
                                                <div class="accordions_title">
                                                    <h3><?php the_sub_field('title'); ?></h3>
                                                </div>
                                                <div class="accordions_content">
                                                    <?php the_sub_field('copy'); ?>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if( get_row_layout() == 'attorneysabout_block' ) : $featured_attorney = get_sub_field('featured_attorney'); ?>
                <section class="featured-attorney">
                    <div class="container">
                        <div class="columns">
                            <div class="column-66 center block">
                                <div class="attorney">
                                    <div class="img">
                                        <?php if( get_the_post_thumbnail($featured_attorney->ID) ) { echo get_the_post_thumbnail($featured_attorney->ID); }?>
                                    </div>
                                    <div class="copy">
                                        <h2><?php the_field('first_name', $featured_attorney->ID); ?> <?php the_field('last_name', $featured_attorney->ID); ?></h2>
                                        <p class="eyebrow"><?php the_field('position', $featured_attorney->ID); ?></p>

                                        <?php $enable_custom_excerpt = get_sub_field('custom_excerpt'); 
                                            if( $enable_custom_excerpt ) {
                                                the_sub_field('custom_attorney_excerpt');
                                            } else {
                                                the_field('intro_copy', $featured_attorney->ID);
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif; ?>

                <?php if( get_row_layout() === 'map_block' ) : $map_copy = get_sub_field('copy'); ?>
                <section class="map">
                    <div class="container">
                        <div class="columns">
                            <div class="column-66 center block">
                                <div class="columns">
                                    <div class="column-50 block">
                                        <?php echo $map_copy; ?>
                                    </div>
                                    <div class="column-50 block">
                                        <?php if( get_field('map_embed', 'options') ) : ?>
                                            <div class="iframe-container">
                                                <iframe title="dads.law office location" src="<?php the_field('map_embed','options'); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                            <div class="spacer-15"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif; ?>

        <?php endwhile; endif; ?>
    </section>

    <?php $pre_footer = get_field('pre-footer'); get_template_part('blocks/pre-footer', null, array('data' => [$pre_footer])); ?>
</div>

<?php get_footer();?>