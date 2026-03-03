<?php
get_header();?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h1>
                    <p class="large"><?php the_field('position'); ?></p>
                    <?php the_field('intro_copy'); ?>
                    <?php if( have_rows('practice_areas') ) : ?>
                        <div class="practice-areas">
                            <p class="eyebrow">Practice Areas</p>
                            <div class="pa-wrapper">
                                <?php while( have_rows('practice_areas') ) : 
                                    the_row();
                                    $practice_area = get_sub_field('practice_area'); ?>
                                    <a href="<?php echo $practice_area['url']; ?>"><?php echo $practice_area['title']; ?></a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="column-50 block">
                    <?php if( get_the_post_thumbnail() ) { echo get_the_post_thumbnail(); }
                        $phone_number = get_field('personal_phone_number') ?? get_field('phone_number', 'options');
                        $email = get_field('personal_email') ?? get_field('email_address', 'options');
                        ?>
                        <div class="attorney-contact-block attorney-contact-block-mobile">
                            <p class="eyebrow">Contact <?php the_field('position'); ?> <?php the_field('first_name'); ?> <?php the_field('last_name'); ?></p>
                            <a href="tel:<?php echo $phone_number; ?>" class="phone"><?php echo $phone_number; ?></a>
                            <a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container mobile-no-pad">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_field('bio_copy');  ?>
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

</div><!-- #front-page -->

<?php get_footer();?>