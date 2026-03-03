<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_image', 'options');

get_header();?>



<div class="body-container">

    <section class="banner no-bg">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <p class="eyebrow"><?php echo get_the_date('F d, Y'); ?></p>
                    <h1><?php echo get_the_title(); ?></h1>
                    <p class="share-cta">Share This Post:</p>
                    <div class="social-share-links">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" class="share-link facebook-link"></a>
                        <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_the_permalink(); ?>" class="share-link linkedin-link"></a>
                    </div>
                </div>
                <div class="column-50 block">
                    <?php $banner_img = get_the_post_thumbnail(); if( $banner_img ) {
                        echo $banner_img;   
                    } else {
                        echo wp_get_attachment_image('534', 'full');
                    }?>
                </div>
            </div>
        </div>
    </section>
    <?php require_once(dirname( __FILE__ ) . '/author-section.php') ?>
    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_content(); ?>
                    <div class="spacer-30"></div>
                    <?php if( is_singular('results')) : ?>
                        <a title="navigate to all results page" href="/results/" class="btn">View All Results</a>
                    <?php elseif( is_singular('reviews') ) : ?>
                        <a title="navigate to all reviews page" href="/reviews/" class="btn">View All reviews</a>
                    <?php else : ?>
                        <a title="navigate to all blogs page" href="/blog/" class="btn">View All Blogs</a>
                    <?php endif; ?>
                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block','sidebar'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer();?>