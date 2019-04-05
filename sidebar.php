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

<section class="home-module-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="extra-padding"><a href="<?=SITEURL?>">
                        <button class="btn-primary btn">LEARN MORE</button>
                    </a></div>
            </div>
            <div class="col">
                <div class="extra-padding"><a href="<?=SITEURL?>">
                        <button class="btn-primary btn">LEARN MORE</button>
                    </a></div>
            </div>
        </div>
    </div>
</section>
<section class="ribbon">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="<?=IMGURL?>therbal.png" alt="Therbal">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>jaloma.png" alt="Jaloma">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>vitacilina.png" alt="Vitacilina">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>grisi.png" alt="Grisi">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>vicks.png" alt="Vicks">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>picot.png" alt="Picot">
            </div>
            <div class="col fibra">
                <img src="<?=IMGURL?>fibra-kania.png" alt="Fibra Kania">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>eucalin.png" alt="Eucalin">
            </div>
            <div class="col">
                <img src="<?=IMGURL?>del-indio-papago.png" alt="Del Indio Papago">
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
</div>