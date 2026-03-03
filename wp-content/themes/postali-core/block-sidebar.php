<?php if( is_singular(['attorneys']) ) : 
    $phone_number = get_field('personal_phone_number') ?? get_field('phone_number', 'options');
    $email = get_field('personal_email') ?? get_field('email_address', 'options');
    ?>
    <div class="attorney-contact-block">
        <p class="eyebrow">Contact <?php the_field('position'); ?> <?php the_field('first_name'); ?> <?php the_field('last_name'); ?></p>
        <a href="tel:<?php echo $phone_number; ?>" class="phone"><?php echo $phone_number; ?></a>
        <a href="mailto:<?php echo $email; ?>" class="email"><?php echo $email; ?></a>
    </div>
<?php endif; ?> 

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

<?php if(get_field('add_practice_area_menu','options')) { ?>
    <?php if( !is_singular(['attorneys']) ) : ?>
    <div class="sidebar-menu">
        <p class="eyebrow">Practice Areas</p>
        <?php the_field('practice_area_menu','options'); ?>	
    </div>
    <?php endif; ?>
<?php } ?>