<?php $pre_footer_data = $args['data'][0];?>

<section id="pre-footer">
    <div class="columns">
        <div class="column-50 block">
            <p class="eyebrow"><?php echo $pre_footer_data['pre_footer_subtitle']; ?></p>
            <h2><?php echo $pre_footer_data['pre_footer_title']; ?></h2>
            <?php the_field('pre_footer_copy'); ?>
            <a href="tel:<?php the_field('phone_number', 'options') ?>" class="btn">Call <?php the_field('phone_number', 'options'); ?></a>
        </div>
        <div class="column-50">
            <div class="form-title-wrapper">
                <h4>Request A Consultation Today</h4>
                <?php echo do_shortcode($pre_footer_data['pre_footer_form_embed']); ?>
            </div>
        </div>
        
    </div>
</section>