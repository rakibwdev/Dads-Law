<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">        
        <div class="columns row-1">
            <div class="column-33 block">
                <a href="/">
                    <?php if( get_field('footer_logo', 'options') ) { $footer_logo = get_field('footer_logo', 'options'); echo wp_get_attachment_image( $footer_logo['ID'], 'full' );} ?>
                </a>
            </div>
            <?php if( !is_page_template('page-ppc.php') ) : ?>
            <div class="column-66">
                <div class="footer-links-wrapper">
                    <?php 
                    $footer_menu_1 = get_field('footer_link_list_1', 'options');
                    $menu_object_1 = wp_get_nav_menu_object($footer_menu_1);
                    $footer_menu_2 = get_field('footer_link_list_2', 'options');
                    $menu_object_2 = wp_get_nav_menu_object($footer_menu_2);
                    ?>
                    <div class="outer-menu">
                        <p class="footer-menu-title"><?php echo $menu_object_1->name; ?></p>
                        <?php wp_nav_menu( array( 'menu' => $footer_menu_1 ) ); ?>
                    </div>
                    <div class="outer-menu">
                        <p class="footer-menu-title"><?php echo $menu_object_2->name; ?></p>
                        <?php wp_nav_menu( array( 'menu' => $footer_menu_2 ) ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( !is_page_template('page-ppc.php') ) : ?>
        <div class="columns row-2">
            <div class="column-25 block">
                <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today"><?php the_field('phone_number','options'); ?></a>
                <a href="mailto:<?php the_field('email_address','options'); ?>" title="Email Today"><?php the_field('email_address','options'); ?></a>
                <div class="footer-social">
                    <?php if(get_field('social_facebook','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_facebook','options'); ?>" title="Facebook" target="blank"><span class="icon-social-facebook"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_instagram','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_instagram','options'); ?>" title="Instagram" target="blank"><span class="icon-social-instagram"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_linkedin','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_linkedin','options'); ?>" title="LinkedIn" target="blank"><span class="icon-social-linkedin"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_twitter','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_twitter','options'); ?>" title="Twitter" target="blank">
                            <style>
                                footer .social-link span {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    color: #112d61;
                                    &:hover {
                                        color: #bc0c0c;
                                    }
                                }
                            </style>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16" id="Twitter-X--Streamline-Bootstrap" height="16" width="16">
                                    <path d="M12.6 0.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867 -5.07 -4.425 5.07H0.316l5.733 -6.57L0 0.75h5.063l3.495 4.633L12.601 0.75Zm-0.86 13.028h1.36L4.323 2.145H2.865z" stroke-width="1"></path>
                                </svg>
                            </span>
                        </a>
                    <?php } ?>
                    <?php if(get_field('social_youtube','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_youtube','options'); ?>" title="YouTube" target="blank"><span class="icon-social-youtube"></span></a>
                    <?php } ?>
                </div>    
            </div>

            <div class="column-25">
                <div class="footer-address">
                    <a class="directions-link" href="<?php the_field('driving_directions','options'); ?>" title="Driving directions" target="blank">
                        <?php the_field('address','options'); ?>
                    </a>
                    
                    <?php if( have_rows('office_hours', 'options') ) : ?>
                        <div class="office-hours-wrapper">
                            <p class="hours-label">Office Hours</p>
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

            <div class="column-50 address-map">
                <?php if( get_field('map_embed','options') ) : ?>
                <div class="footer-map">
                    <iframe title="dads.law office location" src="<?php the_field('map_embed','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="columns row-3">
            <div class="column-full block">
                <div class="footer-utility">
                    <div class="disclaimer">
                        <p class="small"><?php the_field('disclaimer_text','options'); ?></p>
                    </div>
                </div>
            </div>
            <div class="column-full">
                <div class="left-col"> 
                    <div class="utility">
                        <p>©<?php echo date('Y') . ' ' . get_bloginfo('name') . ' All Rights Reserved.'; ?></p>
                        <?php if ( have_rows('utility_links','options') ): ?>
                            <div class="link-wrapper">
                            <?php while ( have_rows('utility_links','options') ): the_row(); ?>  
                                <a href="<?php the_sub_field('utility_page_link'); ?>"><?php the_sub_field('utility_link_text'); ?></a>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div> 
        <?php endif; ?>
    </section>
</footer>

<!-- Add JSON Schema here -->
    <?php 
    // Global Schema
    $global_schema = get_field('global_schema', 'options');
    if ( !empty($global_schema) ) :
        echo '<script type="application/ld+json">' . $global_schema . '</script>';
    endif;

    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; ?>
<?php wp_footer(); ?>

</body>
</html>


