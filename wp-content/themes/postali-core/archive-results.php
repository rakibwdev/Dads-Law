<?php

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                <?php
                $taxonomy = 'result_category';
                $tax_terms = get_terms( 
                    array(
                        'taxonomy' => $taxonomy,
                        'hide_empty' => true, 
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'fields' => 'names',
                    )
                ); ?>

                <?php foreach($tax_terms as $tax_term) : ?>
                <h2><?php echo $tax_term; ?></h2>
                
                <?php $term_posts = get_posts( // find posts with the correct term
                    array(
                        'no_found_rows' => true, // for performance
                        'ignore_sticky_posts' => true, // for performance
                        'post_type' => 'results',
                        'posts_per_page' => -1, // return all results
                        'tax_query' => array( // https://developer.wordpress.org/reference/classes/wp_tax_query/
                            array(
                                'taxonomy' => $taxonomy,
                                'field'    => 'name',
                                'terms'    => array( $tax_term )
                            )
                        ),
                    'fields' =>  'ids', // return the post IDs only
                    )
                );
                foreach($term_posts as $term_post_id) : // loop through posts
                    $post_title = get_the_title($term_post_id); // get post title
                    // Get raw DB content and strip block comments, shortcodes, and HTML to plain text
                    $post_content_raw = get_post_field('post_content', $term_post_id);
                    $post_content_no_comments = preg_replace('/<!--.*?-->/s', '', $post_content_raw);
                    $post_content_no_shortcodes = strip_shortcodes($post_content_no_comments);
                    $post_content_text = trim( wp_strip_all_tags( $post_content_no_shortcodes ) ); ?>
                    <article>
                        <h3 class="result-title"><?php echo $post_title; ?></h3>
                        <p><?php echo esc_html( $post_content_text ); ?></p>
                    </article>
                <?php endforeach;
                endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>