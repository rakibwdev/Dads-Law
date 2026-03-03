<?php
/**
 * Template Name: Practice Parent
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_field('top_copy_block'); ?>
                </div>
                <div class="column-33 sidebar-block block">
                <?php
                    $practice_area_sidebar = get_field('practice_sidebar_menu');
                    $side_bar_child = [
                            'title_li'      => '',
                            'echo'          => '0',
                            'meta_key'      => 'page_title_h1',
                            'orderby'       => 'meta_value',
                            'order'         => 'DESC',
                        ];
                    if($practice_area_sidebar){
                        $side_bar_child['include'] = $practice_area_sidebar;
                    }else{
                        $side_bar_child['child_of'] = $post->ID;
                    }
                    $children = wp_list_pages($side_bar_child); ?>
                        
                        <div class="sidebar-menu">
                            
                        <?php if( $post->post_parent ) { ?>
                        <?php if ($children) : ?>
                            <div class="sidebar-header"><?php the_field('sidebar_menu_title'); ?></div>
                            <?php global $post;
                            $pageid = $post->post_parent;
                            ?>
                            <div class="sidebar-menu">
                                <ul class="menu" id="menu-practice-areas-menu">
                                    <?php echo $children; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                            <div class="spacer-30"></div>
                            <p class="sidebar-more"><a class="more-results-link" href="/practice-areas/" title="Read more results">All Practice Areas</a> <span class="icon-tick-down"></span></p>
                        </div>

                        <?php } else { ?>
                        <p class="eyebrow">Practice Areas</p>
                        
                        <?php the_field('practice_area_menu','options'); ?>	
                        <div class="spacer-30"></div>
                        <p class="sidebar-more"><a class="more-results-link" href="/practice-areas/" title="Read more results">All Practice Areas</a> <span class="icon-tick-down"></span></p>
                        
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_2_copy_block'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
        $custom_testimonial = get_field('custom_testimonial');
        if($custom_testimonial){
            $testimonial_callout = get_field('custom_review_callout');
            $full_testimonial = get_field('custom_full_review');
            $testimonial_author = get_field('custom_review_author');
        }else{
            $testimonial_callout = get_field('testimonial_callout','options');
            $full_testimonial = get_field('full_testimonial','options');
            $testimonial_author = get_field('testimonial_author','options');
        }
    ?>
    <section class="blue" id="testimonial">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <div class="quote"></div>
                    <p class="testimonial-callout"><?php echo $testimonial_callout; ?></p>
                </div>
                <div class="column-66 block">
                    <p><?php echo $full_testimonial; ?></p>
                    <div class="author">
                        <p><?php echo $testimonial_author; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content main-content-2">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_3_copy_block'); ?>
                </div>

                <div class="column-66 center block">
                    <h2><?php the_field('section_4_title'); ?></h2>
                    <?php the_field('section_4_copy'); ?>
                    <?php $section_4_btn = get_field('section_4_faqs_button'); if( $section_4_btn ) : ?>
                        <a title="learn more about <?php echo $section_4_btn['title']; ?>" href="<?php echo $section_4_btn['url']; ?>" class="btn"><?php echo $section_4_btn['title']; ?></a>
                    <?php endif; ?>
                    <?php if( have_rows('section_4_accordions') ) : ?>
                        <div class="accordions-wrapper">
                            <?php while( have_rows('section_4_accordions') ) : the_row(); ?>
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

    <?php $pre_footer = get_field('pre-footer'); get_template_part('blocks/pre-footer', null, array('data' => [$pre_footer])); ?>

</div>

<?php get_footer();?>