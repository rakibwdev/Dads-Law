<?php
/**
 * Template Name: Interior (Basic)
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner no-bg">
        <div class="container">
            <div class="columns">
                <div class="column-full block">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                  <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();?>