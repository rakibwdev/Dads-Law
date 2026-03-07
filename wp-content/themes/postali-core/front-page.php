<?php

/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
 **/
get_header(); ?>

<div class="body-container">

    <section class="banner">
        <div class="columns">
            <div class="column-50 block">
                <div class="container">
                    <h1 class="eyebrow"><?php the_field('banner_title'); ?></h1>
                    <p class="large-subtitle"><?php the_field('banner_subtitle'); ?></p>
                    <p><?php the_field('banner_copy'); ?></p>
                    <p>test</p>


                    <?php
                    $getCurentAuthor = get_field('attorney-author') ?: [];
                    if (!empty($getCurentAuthor)) {
                        $author_id = $getCurentAuthor[0];
                        $author_title = get_field('first_name', $author_id) . ' ' . get_field('last_name', $author_id);
                        $author_position = get_field('position', $author_id);
                        $author_image = get_the_post_thumbnail_url($author_id);
                    ?>
                        <style>
                            .attorney-author {
                                display: flex;
                                align-items: stretch;
                                gap: 20px;

                                h3 {
                                    margin: 0px !important;
                                    font-size: 20px !important;
                                    color: #f0f0f1 !important;
                                }

                                p {
                                    margin: 0px !important;
                                }

                                img {
                                    max-width: 40px;
                                    aspect-ratio: 1/1;
                                    border-radius: 50%;
                                    object-fit: cover;
                                }
                            }
                        </style>
                        <div class="container">
                            <div class="attorney-author">
                                <?php if ($author_image) : ?>
                                    <img src="<?php echo esc_url($author_image); ?>" alt="<?php echo esc_attr($author_title); ?>" />
                                <?php endif; ?>
                                <div class="author-info">
                                    <h3>Author By: <?php echo esc_html($author_title); ?></h3>
                                    <p><?php echo esc_html($author_position); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    <div class="cta-wrapper">
                        <a title="call <?php the_field('phone_number', 'options'); ?>" href="tel:<?php the_field('phone_number', 'options'); ?>" class="btn"><?php the_field('phone_number', 'options'); ?></a>
                        <?php $cta_group = get_field('banner_cta_group');
                        $cta_link = $cta_group['contact_link'];
                        if ($cta_link) : ?>
                            <a href="<?php echo $cta_link['url']; ?>"><?php echo $cta_link['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="column-50 block">
                <?php $banner_img = get_field('banner_image');
                if ($banner_img) {
                    echo wp_get_attachment_image($banner_img['id'], 'full');
                } ?>
            </div>
        </div>
    </section>

    <section class="featured-testimonial bg-lt-blue">

        <div class="wrapper desktop-testimonial">
            <div class="stars"></div>
            <div class="testimonial">
                <p class="testimonial"><?php the_field('testimonial'); ?></p>
                <p class="author"><?php the_field('author'); ?></p>
            </div>
        </div>

        <div class="wrapper mobile-testimonial">
            <div class="testimonial-image-slider">
                <?php if (have_rows('testimonial_mobile_slider_images')) : $img_count = 0;
                    while (have_rows('testimonial_mobile_slider_images')) : the_row();
                        $img_count++; ?>
                        <?php if ($img_count == 1) : ?>
                            <div class="testimonial-outer">
                                <div class="stars"></div>
                                <div class="testimonial-inner">
                                    <p class="testimonial-copy"><?php the_field('testimonial'); ?></p>
                                    <p class="author"><?php the_field('author'); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $mobile_img = get_sub_field('mobile_image');
                        if ($mobile_img) : ?>
                            <div class="img-wrapper">
                                <?php echo wp_get_attachment_image($mobile_img['ID'], 'full'); ?>
                            </div>
                            <?php if ($img_count == 1) : ?>
                                <div class="testimonial">
                                    <div class="stars"></div>
                                    <div class="testimonial">
                                        <p class="testimonial"><?php the_field('testimonial'); ?></p>
                                        <p class="author"><?php the_field('author'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                <?php endwhile;
                endif; ?>

            </div>
        </div>

    </section>

    <section class="panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-full block">
                    <p class="eyebrow"><?php the_field('p1_subtitle'); ?></p>
                    <h2><?php the_field('p1_title'); ?></h2>
                </div>
            </div>
            <div class="columns">
                <div class="column-50">
                    <p class="large-copy"><?php the_field('p1_left_copy'); ?></p>
                </div>
                <div class="column-50">
                    <?php the_field('p1_right_copy'); ?>
                    <?php $p1_button = get_field('p1_about_button');
                    if ($p1_button) : ?>
                        <a title="navigate to about page" href="<?php echo $p1_button['url']; ?>" class="btn"><?php echo $p1_button['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="legal-tools">
        <div class="container">
            <div class="clip-block">
                <p class="eyebrow"><?php the_field('legal_tools_section_title'); ?></p>
                <?php if (have_rows('blog_posts')) : $blog_count = count(get_field('blog_posts')); ?>
                    <div class="blogs blogs-<?php echo $blog_count; ?>">
                        <?php while (have_rows('blog_posts')) : the_row(); ?>
                            <div class="blog">
                                <?php $post_obj = get_sub_field('post'); ?>
                                <h4> <?php echo get_the_title($post_obj->ID); ?> </h4>
                                <p><?php echo get_the_excerpt($post_obj->ID); ?></p>
                                <a href="<?php echo get_the_permalink($post_obj->ID); ?>">Read More</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="panel-2 bg-blue">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <p class="eyebrow"><?php the_field('p2_subtitle'); ?></p>
                    <h2><?php the_field('p2_title'); ?></h2>
                    <?php the_field('p2_copy'); ?>
                </div>
            </div>
            <div class="columns">
                <div class="column-full">
                    <?php
                    // var_export(get_field('practice_areas_home'));
                    $pa_args = array(
                        'post_type' => 'page',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        // 'meta_key' => '_wp_page_template',
                        // 'meta_value' => 'page-practice-parent.php',
                        'post__in' => get_field('practice_areas_home') ?: [],
                        'orderby' => 'post__in',
                    );
                    $practice_pages = new WP_Query($pa_args);
                    if ($practice_pages->have_posts()) : ?>
                        <div class="practice-areas practice-areas-mobile-scroller">
                            <?php while ($practice_pages->have_posts()) : $practice_pages->the_post();
                                $title = get_field('global_title', $practice_pages->ID);
                                $subtitle = get_field('global_subtitle', $practice_pages->ID);
                                $excerpt = get_field('global_excerpt', $practice_pages->ID);
                                $pa_link = get_the_permalink();
                            ?>
                                <div class="pa-box">
                                    <a class="fill-link" href="<?php echo $pa_link; ?>"></a>
                                    <h4><?php echo $title; ?></h4>
                                    <p class="eyebrow"><?php echo $subtitle; ?></p>
                                    <p class="pa-excerpt"><?php echo $excerpt; ?></p>
                                    <a class="bottom-link" href="<?php echo $pa_link; ?>">Learn More</a>
                                </div>
                            <?php endwhile; ?>
                            <div class="pa-box all-pa">
                                <h4>Explore All Practice Areas</h4>
                                <a href="/practice-areas/"></a>
                            </div>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                    <div class="mobile-pa-nav">
                        <a title="navigate to practice areas page" href="/practice-areas/" class="btn btn-t-white btn-mobile">All Practice Areas</a>
                        <div class="mobile-pa-slider-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-3 bg-red">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <p class="eyebrow"><?php the_field('p3_subtitle'); ?></p>
                    <h2><?php the_field('p3_title'); ?></h2>
                    <?php the_field('p3_copy'); ?>
                    <a title="call <?php the_field('phone_number', 'options'); ?>" href="tel:<?php the_field('phone_number', 'options'); ?>" class="btn"><?php the_field('phone_number', 'options'); ?></a>
                </div>
                <div class="column-50 block">
                    <div class="form-title-wrapper">
                        <h4 class="form-title"><?php the_field('p3_form_title'); ?></h4>
                        <?php echo do_shortcode(get_field('p3_form_embed')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-4">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <div class="img-container">
                        <?php $p4_img = get_field('p4_left_column_image');
                        if ($p4_img) {
                            echo wp_get_attachment_image($p4_img['ID'], 'full');
                        } ?>
                        <h2><?php the_field('p4_title'); ?></h2>
                        <a title="navigate to reviews page" href="/reviews/" class="btn btn-t-white">More Reviews</a>
                        <div class="slider-arrows-custom"></div>
                    </div>
                </div>
                <div class="column-50 block">
                    <?php if (have_rows('p4_featured_testimonials')) : ?>
                        <div class="testimonial-slider">
                            <?php while (have_rows('p4_featured_testimonials')) : the_row();
                                $testimonial_obj = get_sub_field('testimonial'); ?>
                                <div class="testimonial">
                                    <p><?php echo get_the_content(null, false, $testimonial_obj->ID); ?></p>
                                    <p class="author"><?php echo get_the_title($testimonial_obj->ID); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-5">
        <div class="container">
            <div class="columns">
                <div class="column-33 block">
                    <p class="eyebrow"><?php the_field('p5_subtitle') ?></p>
                    <h2><?php the_field('p5_title'); ?></h2>
                    <?php the_field('p5_copy'); ?>
                    <?php $p5_btn = get_field('p5_button');
                    if ($p5_btn) : ?>
                        <a title="navigate to attorney bio page" href="<?php echo $p5_btn['url']; ?>" class="btn"><?php echo $p5_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="column-66 block">
                    <div class="cornered-block">
                        <?php $p5_img = get_field('p5_right_column_image');
                        if ($p5_img) {
                            echo wp_get_attachment_image($p5_img['ID'], 'full');
                        }
                        $featured_attorney_group = get_field('p5_featured_attorney');
                        $first_name = $featured_attorney_group['first_name'];
                        $last_name = $featured_attorney_group['last_name'];
                        $attorney_obj = $featured_attorney_group['featured_attorney'];
                        $callout = $featured_attorney_group['callout'];
                        ?>
                        <div class="copy-wrapper">
                            <h4><?php echo $first_name . ' ' . $last_name; ?></h4>
                            <p class="eyebrow"><?php echo $callout; ?></p>
                        </div>
                        <a href="<?php echo get_the_permalink($attorney_obj->ID); ?>">Read <?php echo $first_name ?>'s Bio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-6 bg-red">
        <div class="columns">
            <div class="column-50 block">
                <div class="container">
                    <p class="eyebrow"><?php the_field('p6_subtitle'); ?></p>
                    <h2><?php the_field('p6_title'); ?></h2>
                    <?php the_field('p6_copy'); ?>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column-full block">
                <?php if (have_rows('p6_steps')) : $count = 0; ?>
                    <div class="steps-wrapper">
                        <?php while (have_rows('p6_steps')) : the_row();
                            $count++; ?>
                            <div class="step">
                                <p class="number"><?php echo $count; ?>.</p>
                                <p class="heading"><?php the_sub_field('title'); ?></p>
                                <?php the_sub_field('copy'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="steps-slider-arrows-custom"></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="separator">
            <span class="line-separator"></span>
            <?php $p6_btn = get_field('p6_button');
            if ($p6_btn) : ?>
                <a title="navigate to <?php echo $p6_btn['title']; ?> page" title="navigate to <?php echo $p6_btn['title']; ?> page" href="<?php echo $p6_btn['url']; ?>" class="btn btn-t-white"><?php echo $p6_btn['title']; ?></a>
            <?php endif; ?>
            <span class="line-separator"></span>
        </div>
    </section>

    <section class="cta">

        <?php $cta_img = get_field('cta_background_image');
        if ($cta_img) {
            echo wp_get_attachment_image($cta_img['ID'], 'full');
        } ?>

        <div class="columns">
            <div class="left-col">
                <p class="eyebrow"><?php the_field('cta_subtitle'); ?></p>
                <h2><?php the_field('cta_title'); ?></h2>
            </div>
            <div class="right-col">
                <?php $cta_btn = get_field('cta_button');
                if ($cta_btn) : ?>
                    <a title="navigate to contact page" href="<?php echo $cta_btn['url']; ?>" class="btn"><?php echo $cta_btn['title']; ?></a>
                <?php endif; ?>
                <a title="call <?php echo get_field('phone_number', 'options'); ?>" href="tel:<?php echo get_field('phone_number', 'options'); ?>" class="btn">Call <?php echo get_field('phone_number', 'options'); ?></a>
            </div>
        </div>

    </section>

    <section class="panel-7">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <p class="eyebrow"><?php the_field('p7_subtitle') ?></p>
                    <h2><?php the_field('p7_title'); ?></h2>
                    <?php the_field('p7_copy'); ?>
                    <?php $p7_btn = get_field('p7_all_faqs_button');
                    if ($p7_btn) : ?>
                        <a title="navigate to f a q page" href="<?php echo $p7_btn['url']; ?>" class="btn"><?php echo $p7_btn['title']; ?></a>
                    <?php endif; ?>
                    <?php if (have_rows('p7_faqs')) : ?>
                        <div class="accordions-wrapper">
                            <?php while (have_rows('p7_faqs')) : the_row(); ?>
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

    <section class="panel-8">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('p8_title'); ?></h2>
                    <?php $p8_btn = get_field('p8_blog_button');
                    if ($p8_btn) : ?>
                        <a title="navigate to blog page" href="<?php echo $p8_btn['url']; ?>" class="btn"><?php echo $p8_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column-full block">
                    <?php if (have_rows('p8_posts')) : $post_count = count(get_field('p8_posts')); ?>
                        <div class="posts-grid posts-grid-<?php echo $post_count; ?>">
                            <?php while (have_rows('p8_posts')) : the_row();
                                $post_obj = get_sub_field('post'); ?>
                                <div class="post">
                                    <?php $post_img = get_the_post_thumbnail($post_obj->ID);
                                    if ($post_img) {
                                        echo $post_img;
                                    } ?>
                                    <p class="date"><?php echo get_the_date('F d, Y', $post_obj->ID); ?></p>
                                    <h4><?php echo get_the_title($post_obj->ID); ?></h4>
                                    <a title="<?php echo get_the_title($post_obj->ID); ?>" href="<?php echo get_the_permalink($post_obj->ID); ?>" class="fill-link"></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php $pre_footer = get_field('pre_footer_cta');
    get_template_part('blocks/pre-footer', null, array('data' => [$pre_footer])); ?>

</div><!-- #front-page -->

<?php get_footer(); ?>