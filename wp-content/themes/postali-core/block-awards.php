<section class="awards">
    <div class="container">
        <div class="columns">
            <div id="awards" class="slide">
                <?php $n=1 ?>
                <?php if( have_rows('awards','options') ): ?>
                    <?php while( have_rows('awards','options') ): the_row(); ?>  
                        <?php $image = get_sub_field('award_image'); ?>  
                        <?php if( !empty( $image ) ): ?>
                            <?php 
                                if($image['description']){
                                    $open = "a href='" . esc_url($image['description']) . "' target='_blank'" . " style='margin:0px !important;'";
                                    $close = "a";
                                }else{
                                    $open = "div";
                                    $close = "div";
                                }
                            ?>
                            <<?php echo $open; ?> class="column-20" id="award_<?php echo $n; ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </<?php echo $close; ?>>
                        <?php endif; ?>
                        <?php $n++; ?>
                    <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
</section>