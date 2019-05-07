<div class="testim">
<div class="cycle-slideshow"
     data-cycle-fx="fade"
     data-cycle-timeout="5000"
     data-cycle-slides="> div"
     data-cycle-pager=".pager"
     data-cycle-auto-height="calc"
>

    <?php
    $args = array(
        'post_type'   => 'testimonial'
    );

    $testimonials = new WP_Query( $args );
    if( $testimonials->have_posts() ) :
        ?>
        <?php
        while( $testimonials->have_posts() ) :
            $testimonials->the_post();
            ?>
            <div>
                <p><?php echo get_the_content();  ?></p>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    <?php
    else :
        ?>
    <p>No testimonials yet!</p>
    <?php
    endif;
    ?>

</div>

    <div class="pager"></div>
</div>