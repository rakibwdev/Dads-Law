<?php

/**
 * Template Name: Ads
 * @package Postali Child
 * @author Postali LLC
 */
?>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <?php get_template_part('block', 'design'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- TODO: Replace with local file -->
    <link rel="stylesheet" href="https://i.icomoon.io/public/d175039853/DadsLaw/style.css">

    <?php get_template_part('block', 'font-select'); ?>
</head>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W8FNJKQ4');
</script>
<!-- End Google Tag Manager -->
<!-- <a class="skip-link" href='#main-content'>Skip to Main Content</a> -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/ads.css">

<body <?php body_class(); ?>>
    <!-- Header start -->
    <header>

        <div class="header_new_page">
            <div class="logo_new">
                <a href="/">
                    <?php
                    $logo = get_field('logo');

                    if ($logo) : ?>
                        <img src="<?php echo esc_url($logo['url']); ?>"
                            alt="<?php echo esc_attr($logo['alt']); ?>">
                    <?php endif; ?>
                </a>
            </div>

            <nav class="menu_li">
                <div class="list_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4 text-gold-trust">
                        <circle cx="12" cy="12" r="10" stroke="#F4B625" fill="none" stroke-width="2px"></circle>
                        <polyline points="12 6 12 12 16 14" stroke="#F4B625" fill="none" stroke-width="2px"></polyline>
                    </svg>
                    <div><?php the_field('li_text'); ?></div>
                </div>

                <?php
                $phone_call = get_field('header_phone');
                if ($phone_call && !empty($phone_call['url'])) :

                    // Remove http/https if added by ACF
                    $phone = preg_replace('#^https?://#', '', $phone_call['url']);

                    // Keep only numbers and +
                    $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
                ?>
                    <div class="btn_icon">
                        <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="btn_link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <p>
                                <?php echo esc_html($phone_call['title']); ?>

                            </p>
                        </a>
                    </div>
                <?php endif; ?>

            </nav>
        </div>


    </header>
    <!-- Header End -->

    <!-- Body start -->

    <div class="body-container">
        <?php
        $banner = get_field('banner_image');
        $bg = $banner ? esc_url($banner['url']) : '';
        ?>
        <div class="hero_section" style="background-image: url('<?php echo $bg; ?>');">
            <div class="main">
                <div class="inner_w">
                    <div class="red_is"><?php the_field('banner_title'); ?></div>
                    <h1><?php the_field('banner_subtitle'); ?></h1>
                    <p><?php the_field('banner_copy'); ?></p>
                    <div class="box_li">
                        <div class="list_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-gold-trust">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div class="li_text"><?php the_field('list_text_1'); ?></div>
                        </div>
                        <div class="list_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-gold-trust">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div class="li_text"><?php the_field('list_text_2'); ?></div>
                        </div>
                        <div class="list_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-gold-trust">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div class="li_text"><?php the_field('list_text_3'); ?></div>
                        </div>
                    </div>
                    <div class="two_btn">

                        <?php
                        $cta_group = get_field('banner_cta_group');
                        $cta_link  = $cta_group['phone_number'];

                        if ($cta_link && !empty($cta_link['url'])) :

                            // Remove http/https if added by ACF
                            $phone = preg_replace('#^https?://#', '', $cta_link['url']);

                            // Keep only numbers and +
                            $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
                        ?>

                            <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="btn_red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>

                                <?php echo esc_html($cta_link['title']); ?>
                            </a>

                        <?php endif; ?>

                        <?php $cta_group = get_field('banner_cta_group');
                        $cta_link = $cta_group['contact_link'];
                        if ($cta_link) : ?>
                            <a href="<?php echo $cta_link['url']; ?>" class="btn_white"><?php echo $cta_link['title']; ?></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>



        <!-- -------------------------------------------  box iocn list ------------------------------------------------ -->



        <div class="li_section">
            <div class="li_section_inner">
                <div class="li_section_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 text-gold-trust">
                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                        <circle cx="12" cy="8" r="6"></circle>
                    </svg>
                    <div class="li_text"><?php the_field('icon_text_1'); ?></div>
                </div>
                <div class="li_section_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-gold-trust">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                    <div class="li_text"><?php the_field('icon_text_2'); ?></div>
                </div>
                <div class="li_section_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-5 h-5 text-gold-trust">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                    </svg>
                    <div class="li_text"><?php the_field('icon_text_3'); ?></div>
                </div>
                <div class="li_section_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale w-5 h-5 text-gold-trust">
                        <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                        <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                        <path d="M7 21h10"></path>
                        <path d="M12 3v18"></path>
                        <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                    </svg>
                    <div class="li_text"><?php the_field('icon_text_4'); ?></div>
                </div>

            </div>
        </div>



        <!-- ------------------------------------------- Pre footer section ------------------------------------------------ -->
        <section class="panel-3 bg-red" id="pre-footer">
            <div class="container">
                <div class="columns">
                    <div class="column-50 block">
                        <p class="eyebrow"><?php the_field('p3_subtitle', 387); ?></p>
                        <h2><?php the_field('p3_title', 387); ?></h2>
                        <?php the_field('p3_copy', 387); ?>
                        <a title="call <?php the_field('phone_number', 'options'); ?>" href="tel:<?php the_field('phone_number', 'options'); ?>" class="btn"><?php the_field('phone_number', 'options'); ?></a>
                    </div>
                    <div class="column-50 block">
                        <div class="form-title-wrapper">
                            <h4 class="form-title"><?php the_field('p3_form_title', 387); ?></h4>
                            <?php echo do_shortcode(get_field('p3_form_embed', 387)); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------- second section ------------------------------------------------ -->

        <div class="second_section">
            <div class="second_inner">
                <div class="red_is"><?php the_field('matters_title'); ?></div>
                <h2><?php the_field('matters_subtitle'); ?></h2>
                <div class="grid_section">

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>

                        <?php $single_matters = get_field('single_matters_1');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>

                    </div>

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-6 h-6 text-primary-foreground">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <?php $single_matters = get_field('single_matters_2');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-6 h-6 text-primary-foreground">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <?php $single_matters = get_field('single_matters_3');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-6 h-6 text-primary-foreground">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            </svg>
                        </div>
                        <?php $single_matters = get_field('single_matters_4');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-6 h-6 text-primary-foreground">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                        </div>
                        <?php $single_matters = get_field('single_matters_5');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="second_box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-6 h-6 text-primary-foreground">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <?php $single_matters = get_field('single_matters_6');
                        $sm_heading = $single_matters['sub_heading'];
                        $sm_description = $single_matters['sub_description'];
                        if ($sm_heading && $sm_description) : ?>
                            <h3><?php echo $sm_heading; ?></h3>
                            <p><?php echo $sm_description; ?></p>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

        </div>


        <!-- ------------------------------------------- Third section ------------------------------------------------ -->


        <div class="third_red">
            <div class="third_inner">
                <div class="left_section">
                    <?php $single_matters = get_field('single_matters_7');
                    $sm_heading = $single_matters['sub_heading'];
                    $sm_description = $single_matters['sub_description'];
                    if ($sm_heading && $sm_description) : ?>
                        <h3><?php echo $sm_heading; ?></h3>
                        <p><?php echo $sm_description; ?></p>
                    <?php endif; ?>
                </div>

                <?php
                $phone_call = get_field('phone_call');
                if ($phone_call && !empty($phone_call['url'])) :

                    // Remove http/https if added by ACF
                    $phone = preg_replace('#^https?://#', '', $phone_call['url']);

                    // Keep only numbers and +
                    $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
                ?>

                    <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="third_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>

                        <?php echo esc_html($phone_call['title']); ?>
                    </a>

                <?php endif; ?>
            </div>
        </div>


        <!-- ------------------------------------------- section ------------------------------------------------ -->



        <div class="profile">
            <?php
            $getCurentAuthor = get_field('attorney-author');

            if (!empty($getCurentAuthor)) :

                $author_id = $getCurentAuthor[0];

                $first_name = get_field('first_name', $author_id);
                $last_name  = get_field('last_name', $author_id);

                $author_title = trim($first_name . ' ' . $last_name);
                $author_position = get_field('position', $author_id);
                $author_intro_copy = get_field('intro_copy', $author_id);
                $author_image = get_the_post_thumbnail_url($author_id);
            ?>
                <div class="profile_inner">
                    <img src="<?php echo esc_url($author_image); ?>" alt="<?php echo esc_attr($author_title); ?>" class="men_p" />
                    <div class="men_info">
                        <h2><?php echo esc_html($author_title); ?></h2>
                        <div class="red_is"><?php echo esc_html($author_position); ?></div>
                        <p><?php echo wp_kses_post($author_intro_copy); ?></p>
                        <a href="#pre-footer" class="btn_red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <p>Contact <?php echo esc_html($author_title); ?></p>
                        </a>
                    </div>

                </div>
            <?php endif; ?>
        </div>


        <!-- ------------------------------------------- section ------------------------------------------------ -->




        <div class="fourth_section">
            <div class="fourth_inner">
                <div class="red_is"><?php the_field('p6_title'); ?></div>
                <h2><?php the_field('p6_subtitle'); ?></h2>
                <?php if (have_rows('p6_steps')) : $count = 0; ?>
                    <div class="fourth_grid_section">
                        <?php while (have_rows('p6_steps')) : the_row();
                            $count++; ?>
                            <div class="fourth_box">
                                <div class="icon">
                                    <p><?php echo $count; ?></p>
                                </div>
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('copy'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>


    </div>



    <!-- ------------------------------------------- section ------------------------------------------------ -->


    <div class="fifth_section">
        <div class="fifth_inner">
            <div class="red_is"><?php the_field('p7_title'); ?></div>
            <h2><?php the_field('p7_subtitle'); ?></h2>

            <?php $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-gold-trust text-gold-trust">
                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
            </svg>'; ?>

            <div class="fifth_grid_section">

                <div class="fifth_box">
                    <?php
                    $testimonials = get_field('testimonial_1');
                    $rating = $testimonials['rating'];
                    $testimonial = $testimonials['testimonial'];
                    $author = $testimonials['author'];
                    ?>
                    <div class="icon">
                        <?php for ($i = 0; $i < $rating; $i++) : ?>
                            <?php echo $svg; ?>
                        <?php endfor; ?>
                    </div>

                    <p>"<?php echo $testimonial; ?>"</p>
                    <h5>— <?php echo $author; ?></h5>
                </div>
                <div class="fifth_box">
                    <?php
                    $testimonials = get_field('testimonial_2');
                    $rating = $testimonials['rating'];
                    $testimonial = $testimonials['testimonial'];
                    $author = $testimonials['author'];
                    ?>
                    <div class="icon">
                        <?php for ($i = 0; $i < $rating; $i++) : ?>
                            <?php echo $svg; ?>
                        <?php endfor; ?>
                    </div>

                    <p>"<?php echo $testimonial; ?>"</p>
                    <h5>— <?php echo $author; ?></h5>
                </div>
                <div class="fifth_box">
                    <?php
                    $testimonials = get_field('testimonial_3');
                    $rating = $testimonials['rating'];
                    $testimonial = $testimonials['testimonial'];
                    $author = $testimonials['author'];
                    ?>
                    <div class="icon">
                        <?php for ($i = 0; $i < $rating; $i++) : ?>
                            <?php echo $svg; ?>
                        <?php endfor; ?>
                    </div>

                    <p>"<?php echo $testimonial; ?>"</p>
                    <h5>— <?php echo $author; ?></h5>
                </div>

            </div>
        </div>

    </div>


    <!-- ------------------------------------------- section ------------------------------------------------ -->



    <div class="third_red">
        <div class="third_inner">
            <div class="left_section">
                <?php $single_matters = get_field('single_matters_7');
                $sm_heading = $single_matters['sub_heading'];
                $sm_description = $single_matters['sub_description'];
                if ($sm_heading && $sm_description) : ?>
                    <h3><?php echo $sm_heading; ?></h3>
                    <p><?php echo $sm_description; ?></p>
                <?php endif; ?>
            </div>

            <?php
            $phone_call = get_field('phone_call');
            if ($phone_call && !empty($phone_call['url'])) :

                // Remove http/https if added by ACF
                $phone = preg_replace('#^https?://#', '', $phone_call['url']);

                // Keep only numbers and +
                $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
            ?>

                <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="third_btn_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>

                    <?php echo esc_html($phone_call['title']); ?>
                </a>

            <?php endif; ?>
        </div>
    </div>

    <!--------------------------------------------------------------------------- FAQ -------------------------------------------------------->
    <div class="sixth_section">
        <div class="sixth_inner">
            <div class="red_is"><?php the_field('p9_title'); ?></div>
            <h2><?php the_field('p9_subtitle'); ?></h2>

            <div class="sixth_section_accordion">

                <?php if (have_rows('p7_faqs')) : ?>
                    <div class="accordion">
                        <?php while (have_rows('p7_faqs')) : the_row(); ?>
                            <div class="accordions">

                                <details>
                                    <summary><?php the_sub_field('title'); ?></summary>
                                    <p> <?php the_sub_field('copy'); ?> </p>
                                </details>

                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>





    <!-- ------------------------------------------- section ------------------------------------------------ -->

    <div class="seventh_section">
        <div class="seventh_inner">
            <div class="red_is">
                <?php
                $logo = get_field('logo');

                if ($logo) : ?>
                    <img src="<?php echo esc_url($logo['url']); ?>"
                        alt="<?php echo esc_attr($logo['alt']); ?>">
                <?php endif; ?>
            </div>
            <h2><?php the_field('p10_title'); ?></h2>
            <p class="p_text"><?php the_field('p10_subtitle'); ?></p>

            <div class="box_li">
                <div class="list_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-gold-trust">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                    <div class="li_text"><?php the_field('p10_li_text_1'); ?></div>
                </div>
                <div class="list_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-gold-trust">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <div class="li_text"><?php the_field('p10_li_text_2'); ?></div>
                </div>
            </div>

            <div class="two_btn">

                <?php
                $cta_group = get_field('p10_contact_buttons');
                $cta_link  = $cta_group['p10_phone'];

                if ($cta_link && !empty($cta_link['url'])) :

                    // Remove http/https if added by ACF
                    $phone = preg_replace('#^https?://#', '', $cta_link['url']);

                    // Keep only numbers and +
                    $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
                ?>

                    <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="btn_red">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>

                        <?php echo esc_html($cta_link['title']); ?>
                    </a>

                <?php endif; ?>

                <?php $cta_group = get_field('p10_contact_buttons');
                $cta_link = $cta_group['p10_contact_us'];
                if ($cta_link) : ?>
                    <a href="<?php echo $cta_link['url']; ?>" class="btn_white"><?php echo $cta_link['title']; ?></a>
                <?php endif; ?>

            </div>

            <p class="op_text"><?php the_field('p10_copy'); ?></p>


        </div>
    </div>









    </div>
    <!-- Body End -->

    <!-- footer start -->
    <footer>

        <div class="footor">
            <div class="footor_inner">
                <?php
                $logo = get_field('logo');

                if ($logo) : ?>
                    <img class="footor_log" src="<?php echo esc_url($logo['url']); ?>"
                        alt="<?php echo esc_attr($logo['alt']); ?>">
                <?php endif; ?>
                <p>
                    © <time datetime="<?php echo date('Y'); ?>">
                        <?php echo date('Y'); ?>
                    </time>
                    <?php the_field('p11_title'); ?>
                </p>
            </div>
        </div>


        <div class="footor_stikey">
            <div class="stikey_inner">
                <p class="f_text"><?php the_field('sticky_title'); ?></p>
                <!-- <a href="tel:9189849424" class="third_btn_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <p>Call (918) 984-9424</p>
                </a> -->
                <?php
                $phone_call = get_field('sticky_phone');
                if ($phone_call && !empty($phone_call['url'])) :

                    // Remove http/https if added by ACF
                    $phone = preg_replace('#^https?://#', '', $phone_call['url']);

                    // Keep only numbers and +
                    $phone_clean = preg_replace('/[^0-9+]/', '', $phone);
                ?>

                    <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="third_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>

                        <?php echo esc_html($phone_call['title']); ?>
                    </a>

                <?php endif; ?>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <?php wp_footer(); ?>
</body>

</html>