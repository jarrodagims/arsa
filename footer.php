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
                        src="<?= IMGURL; ?>footer-logo.svg" alt="<?php echo get_bloginfo(
            'description'
            ); ?>" /></a></div>
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="h2">Get in Touch</div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                            <span class="title">Contact</span>
                            <p>1150 BURGUNDY DR., STE. B.
                                <?php printPhone(); ?></p>
                        </div>
                        <div class="col">
                            <span class="title">
                                Office Hours</span>
                            <p>MONDAY – SATURDAY: 8AM – 5PM
                                SUNDAY: CLOSED</p>
                        </div>

                        <div class="col flex-col">
                            <a href=""><button class="btn btn-primary">GET A QUOTE</button></a>
                            <a href=""><button class="btn btn-outline">CALL US <?php printPhone(); ?></button></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col d-none d-md-flex">
                <?php echo non_responsive_bs_menu('primary', 'left', SITENAME); ?>
            </div>
            <div class="col col-md-3 copyright">
                <p>&copy; Copyright <?php echo date('Y'); ?> |
                    <?php echo get_bloginfo( 'name' ); ?>
                    | Privacy
                    Policy</p>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-5ozVWQaaSdI_RbSAiSz4A2p509v1IrY&callback=initMap" async
    defer>
</script>
</body>

</html>