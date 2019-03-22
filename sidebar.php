<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>
<?php if (!is_page('contact-us')) : ?>
<div class="sidebar-bottom">
    <section class="icon-row">
        <?php echo get_template_part('template-parts/icon', 'row'); ?>
    </section>
</div>

<img src="<?=IMGURL?>10percentoff.png" alt="10% off" class="ten-percent-off">
<?php endif; ?>
</div>