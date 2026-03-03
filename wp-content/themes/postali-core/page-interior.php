<?php
/**
 * Template Name: Interior (Practice Child)
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <?php if(get_field('add_testimonial','options')) { ?>
        <div class="testimonial-block testimonial-block-mobile">
            <div class="stars"></div>
            <p class="testimonial"><?php the_field('sidebar_testimonial','options'); ?></p>
            <p><?php the_field('sidebar_testimonial_author','options'); ?></p>
        </div>
        <?php } ?>

        <div class="container mobile-no-pad">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_content(); ?>

                    <?php if( have_rows('interior_accordion') ) : ?>
                        <div class="accordions-wrapper">
                            <?php while( have_rows('interior_accordion') ) : the_row(); ?>
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
                <div class="column-33 sidebar-block block">
                <?php if(get_field('add_testimonial','options')) { ?>
                    <div class="testimonial-block">
                        <div class="stars"></div>
                        <p class="testimonial"><?php the_field('sidebar_testimonial','options'); ?></p>
                        <p><?php the_field('sidebar_testimonial_author','options'); ?></p>
                    </div>
                <?php } ?>

                <?php if(get_field('add_result','options')) { ?>
                    <div class="result-block">
                        <p class="eyebrow">CASE RESULT</p>
                        <p class="large"><?php the_field('sidebar_result_headline','options'); ?></p>
                        <p class="result"><?php the_field('sidebar_result','options'); ?></p>
                        <p class="sidebar-more"><a class="more-results-link" href="/results/" title="Read more results">Read More Results</a> <span class="icon-tick-down"></span></p>
                    </div>
                <?php } ?>
                <?php
                    if ( is_page() ) :
                        if( $post->post_parent ) {
                            $children = wp_list_pages( 
                                array(
                                    'title_li'      => '',
                                    'child_of'      => $post->post_parent,
                                    'echo'          => '0',
                                    'meta_key'      => 'page_title_h1',
                                    'orderby'       => 'meta_value',
                                    'order'         => 'DESC'
                                ) 
                            );
                        } else {
                            $children = wp_list_pages( 
                                array(
                                    'title_li'      => '',
                                    'child_of'      => $post->ID,
                                    'echo'          => '0',
                                    'meta_key'      => 'page_title_h1',
                                    'orderby'       => 'meta_value',
                                    'order'         => 'DESC'
                                ) 
                            );
                        }

                        if ($children) { ?>
                        <?php global $post;
                        $pageid = $post->post_parent; ?>
                            <div class="sidebar-menu">
                                <?php if( get_field('sidebar_menu_title', $pageid) ) : ?>
                                    <p class="eyebrow"><?php the_field('sidebar_menu_title', $pageid); ?></p>
                                <?php else : ?>
                                    <p class="eyebrow">Practice Areas</p>
                                <?php endif; ?>
                                
                                <ul class="menu" id="menu-practice-areas-menu">
                                    <?php echo $children; ?>
                                </ul>
                            </div>

                        <?php } else { ?>
                            
                            <div class="sidebar-menu">
                                <p class="eyebrow">Our Practice Areas</p>
                                <?php the_field('practice_area_menu','options'); ?>	
                            </div>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer();?>