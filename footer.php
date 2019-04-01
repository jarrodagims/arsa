<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
<div id="map" class="map col">

</div>
<footer id="footer">

    <div class="container">


        <div class="row">
            <div class="col flex-zero"><a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                        src="<?= IMGURL; ?>logo.png" alt="<?php echo get_bloginfo(
            'description'
            ); ?>" /></a></div>
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                            <div><span class="title">CONTACT US TODAY</span>
                                <p>
                                    <strong><?php echo get_bloginfo( 'name' ); ?></strong><br />
                                    <?=get_option('sherpa_business_address')?><br />
                                    El Paso, Texas 79901
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="title">
                                    &nbsp;</span>
                                <p> <strong>T:</strong> <a
                                        href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><?php printPhone(); ?></a><br />

                                    <strong>F.</strong> <a href="tel:9158429685">915.842.9685</a><br />

                                    <a href="mailto:ventas@arsaimports.com">ventas@arsaimports.com</a>

                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="title">
                                    OFFICE HOURS</span>
                                <p>MONDAY - FRIDAY:<br />
                                    8:00 AM - 5:00 PM<br />
                                    SATURDAY - SUNDAY: CLOSED</p>
                            </div>
                        </div>

                        <div class="col">
                            <span class="title">&nbsp;</span>
                            <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">CONTACT US</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<section class="sub-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col"><?php
            $sm = new SocialMedia(array('facebook', 'twitter', 'linkedin'));
            $sm->setSize('sm');
            $sm->showNetworkButtons();
            $sm->setColorType('singleColor');
            ?>
            </div>
            <div class="col">
                <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
            </div>
            <div class="col copyright">
                <div>
                    <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> |
                        All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-5ozVWQaaSdI_RbSAiSz4A2p509v1IrY&callback=initMap" async
    defer>
</script>
</body>

</html>