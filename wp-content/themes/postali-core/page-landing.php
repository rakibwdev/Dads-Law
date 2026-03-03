<?php
/**
 * Template Name: Practice Areas Landing
 * @package Postali Child
 * @author Postali LLC
**/

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                <?php 
                    $pa_args = array(
                        'post_type' => 'page',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'meta_key' => '_wp_page_template',
                        'meta_value' => 'page-practice-parent.php',
                    );
                    $practice_pages = new WP_Query($pa_args);

                    if( $practice_pages->have_posts() ) : ?>
                    <div class="practice-areas">
                        <?php while( $practice_pages->have_posts() ) : $practice_pages->the_post(); 
                            $title = get_field('global_title', $post->ID);
                            $subtitle = get_field('global_subtitle', $post->ID);
                            $excerpt = get_field('global_excerpt', $post->ID);
                            $pa_link = get_the_permalink();
                        ?>
                        <div class="columns">
                            <div class="column-50 block">
                                <h3><?php echo $title; ?></h3> 
                                <p class="eyebrow"><?php echo $subtitle; ?></p>
                                <p class="pa-excerpt"><?php echo $excerpt; ?></p>
                                <a title="learn more about <?php echo $title; ?>" class="btn" href="<?php echo $pa_link; ?>">Learn More</a>
                            </div>
                            <div class="column-50">
                                <?php                              
                                    $child_pa_args = array(
                                        'post_type'         => 'page',
                                        'posts_per_page'    => -1,
                                        'post_parent'       => $post->ID,
                                        'post_status'       => 'publish',
                                        'order'             => 'ASC'
                                        
                                    );
                                    $child_pages = new WP_Query($child_pa_args);

                                    if( $child_pages->have_posts() ) : 
                                ?>

                                <div class="clip-box">
                                    <div class="links-wrapper">
                                        <?php
                                        while( $child_pages->have_posts() ) : $child_pages->the_post(); 
                                            $title = get_the_title();
                                            $pa_link = get_the_permalink(); ?>
                                            <a title="learn more about <?php echo $title; ?>" href="<?php echo $pa_link ?>"><?php echo $title; ?></a>
                                        <?php endwhile; ?> 
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>