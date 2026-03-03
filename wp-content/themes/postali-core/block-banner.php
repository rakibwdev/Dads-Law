<?php if (!empty(get_field('banner_background_image'))) { 
    $bg_image = get_field('banner_background_image');
} else { 
    $bg_image = get_field('default_background_image','options');
} ?>

<?php if( is_page_template(['page-landing.php', 'page-contact.php']) || is_home() || is_archive(['reviews']) || is_search() ) : ?>
    <section class="banner no-bg">
<?php else : ?>
    <section class="banner" style="background-image:url('<?php echo $bg_image; ?>');">
<?php endif; ?>
    <div class="container">
    <?php if(is_single()) { ?>
        <p id="breadcrumbs"><span><span><a href="/">Home</a> <span class="separator"></span> <a href="/blog/">Blog</a> <span class="separator"></span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
    <?php } elseif (is_home()) { ?>
        <p id="breadcrumbs"><span><span><a href="/">Home</a> <span class="separator"></span> <span class="breadcrumb_last" aria-current="page">Blog</span></span></span></p>
    <?php } elseif( !is_page_template(['page-contact.php', 'page-ppc.php'])) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
    <?php } ?>
    <?php if( is_page_template(['page-ppc.php'] ) ) : ?>
        <div class="spacer-60"></div>
    <?php endif; ?>
        <div class="columns">
            <?php if(is_post_type_archive('reviews')) { ?> <!-- for testimonials -->
                <div class="column-50">
                    <h1><?php the_field('testimonials_header_banner_title','options'); ?></h1>
                    <p><?php the_field('testimonials_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a title="call <?php the_field('phone_number','options'); ?>" href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <div class="contact-block-right">
                            <p><a href="/contact-us/" title="Stand Up for Your Rights">Stand Up for Your Rights</a></p>
                        </div>
                    </div>
                </div>

                <?php if(get_field('featured_review_content','options')) { ?>
                <div class="column-50 featured">
                    <div class="stars"></div>
                    <p><?php the_field('featured_review_content','options'); ?></p>
                    <p class="reviewer"><?php the_field('featured_review_author','options'); ?></p>
                    <?php 
                    $logo = get_field('featured_review_source','options');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php } ?>

            <?php } elseif(is_post_type_archive('results')) { ?> <!-- for results -->

                <div class="column-50">
                    <h1><?php the_field('results_header_banner_title','options'); ?></h1>
                    <p><?php the_field('results_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a title="call <?php the_field('phone_number','options'); ?>" href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <div class="contact-block-right">
                            <p><a href="/contact-us/" title="Stand Up for Your Rights">Stand Up for Your Rights</a></p>
                        </div>
                    </div>
                </div>

                <?php if(get_field('featured_result_headline','options')) { ?>
                <div class="column-50 result">
                    <div class="result-main">
                        <p class="eyebrow">NOTABLE RESULT</p>
                        <h3><?php the_field('featured_result_headline','options'); ?></h3>
                        <p><?php the_field('featured_result_content', 'options') ?></p>
                    </div>
                </div>
                <?php } ?>

            <?php } elseif( is_page_template(['page-contact.php'])) { ?>

                <div class="column-50">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1><?php the_field('page_title_h1'); ?></h1>
                    <p><?php the_field('banner_value_proposition'); ?></p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a href="tel:<?php echo get_field('phone_number', 'options'); ?>" class="phone"><?php echo get_field('phone_number', 'options'); ?></a>
                            <a href="mailto:<?php echo get_field('email_address', 'options'); ?>" class="email"><?php echo get_field('email_address', 'options'); ?></a>
                        </div>
                        <div class="contact-block-right">
                        <a class="directions-link" href="<?php the_field('driving_directions','options'); ?>" title="Driving directions" target="blank">
                            <?php the_field('address','options'); ?>
                        </a>            
                        <?php if( have_rows('office_hours', 'options') ) : ?>
                            <div class="office-hours-wrapper">
                                <p class="hours-label">Office Hours :</p>
                                <div class="hours-wrapper">
                                    <?php while( have_rows('office_hours', 'options') ) : the_row(); ?>
                                    <div class="date-time">
                                        <p><?php the_sub_field('days'); ?></p>
                                        <p><?php the_sub_field('hours'); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="column-50 main-content">
                    <div class="iframe-cornered-container">
                        <!-- <iframe title="dads.law office location" src="<?php echo get_field('map_embed', 'options'); ?>" frameborder="0"></iframe> -->
                        <div class="form-title-wrapper">
                            <h4 class="form-title">Request A Consultation Today</h4>
                            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                        </div>
                    </div>
                </div>



            <?php } else { ?> <!-- end results -->

            <div class="column-66 block">
                <?php if(is_single()) { ?>
                    <p class="blog-date"><strong><?php the_date(); ?></strong></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <h1><?php the_field('404_header_banner_title','options'); ?></h1>
                <?php } elseif (is_home()) { ?>
                    <h1><?php the_field('blog_header_banner_title','options'); ?></h1>
                <?php } elseif (is_search()) { ?>
                    <h1 class="post-title">Search Results</h1>
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <label for="search-field" class="screen-reader-text">Search</label>
                        <input type="search" id="search-field" class="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Search..." />
                    </form>
                <?php } elseif (is_page_template(['page-practice-parent.php', 'page-interior.php', 'page-ppc.php', 'page-full-width.php' ]) ) { ?>
                    <h1><?php the_field('page_title_h1'); ?></h1>
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>
                <div class="spacer-15"></div>
                <?php if (is_page_template(['page-practice-parent.php', 'page-ppc.php', 'page-full-width.php'])) { ?>
                    <p><?php the_field('value_proposition'); ?></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <p><?php the_field('404_header_banner_subheadline','options'); ?></p>
                <?php } elseif (is_home()) { ?>
                    <p><?php the_field('blog_header_banner_subheadline','options'); ?></p>   
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <p><?php the_field('practice_areas_value_prop','options'); ?></p>                 
                <?php } elseif( !is_search()) { ?>
                    <p><?php the_field('banner_value_proposition'); ?></p>
                <?php } ?>
                <?php if(is_single()) { ?>
                    <p class="cta">Written by <?php the_field('blog_author','options'); ?> </p>
                    <p>Category: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
                <?php } ?>
                <?php if(!is_single()) { ?>
                    
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a title="call <?php the_field('phone_number','options'); ?>"  href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <?php if (!is_page_template(['page-contact.php', 'page-ppc.php'])) { ?>
                        <div class="contact-block-right">
                            <p><a href="/contact-us/" title="Stand Up for Your Rights">Stand Up for Your Rights</a></p>
                        </div>
                        <?php } ?>
                        <?php if( is_page_template(['page-ppc.php']) ) : ?>
                        <div class="contact-block-right">
                            <p><a href="#pre-footer" title="Request a Consultation">Request a Consultation</a></p>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php if(get_field('include_gradient_overlay','options')) { ?>
        <div class="banner-gradient"></div>
    <?php } ?>
</section>
<?php require_once(dirname( __FILE__ ) . '/author-section.php') ?>