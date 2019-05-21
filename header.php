<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132817336-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-132817336-1');
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K5LPH9F');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="1MMUlv2cWEHosYuhe9YPz_SPbhhYC2ar1AbDlPp_jCY" />
    <meta name="google-site-verification" content="63PwlZNaXV2YIN8JoJTgiBnWayu1g2P76-2QEgYAKY8" />
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <?php wp_head();?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?=get_option('sherpa_schema')?>

    <?php endif;?>

    <!-- Default Statcounter code for Arsa Distributing
https://www.arsaimports.com/ -->
    <script type="text/javascript">
    var sc_project = 11930565;
    var sc_invisible = 1;
    var sc_security = "44b52145";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https:/statcounter.com/" target="_blank"><img class="statcounter"
                    src="https://c.statcounter.com/11930565/0/44b52145/1/" alt="Web Analytics Made Easy -
StatCounter"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->

</head>

<body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5LPH9F" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <div class="landing-bg">
        <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">

            <div class="container-fluid">
                <div class="v-align row">
                    <div class="col navbar-button text-center">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
            'description'
            ); ?>" /></a>
                        <div class="navbar-right d-xl-none navbar-nav">
                            <ul class="nav">
                                <li class="nav-item menu-item directions">
                                    <a href="<?=SITEURL?>/contact-us/"><span
                                            class="nav-link"><em><?=get_option('sherpa_business_address')?></em></span></a>
                                </li>
                                <li class="nav-item menu-item contact"><a
                                        href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"
                                        class="nav-link"><span><?php printPhone(); ?></span></a>
                                </li>
                                <?php if(!is_front_page()) : ?>
                                <li><?php
        $sm = new SocialMedia(array('facebook', 'twitter', 'linkedin'));
        $sm->setSize('sm');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="navbar-right d-none d-xl-flex navbar-nav">
                            <ul class="nav">

                                <li>
                                    <p><strong>Mon - Fri:</strong> 8am - 5pm<br />
                                        <strong>Sat - Sun:</strong> Closed</p>
                                </li>
                                <li class="dir">
                                    <p>500 W. Overland <span class="brand"><strong>Ste. 250-N</strong></span><br />
                                        El Paso, Texas 79901</p>
                                </li>
                                <li>
                                    <p><a href="tel:9158429676"><span><strong>P:</strong>
                                                (915) 842-9676</span></a>
                                        <a
                                            href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><span><strong>P:</strong>
                                                <?php printPhone(); ?></span></a></p>
                                </li>

                                <li><a href="<?=SITEURL?>/contact-us/">
                                        <button class="btn btn-primary">CONTACT US</button>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(is_front_page()) : ?>
        <section class="home-module-1">

            <div class=" navbar-button text-center">
                <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
            </div>
            <div class="bg-jumbo">

                <div class="jumbotron">
                    <?php
            $sm = new SocialMedia(array('facebook', 'twitter', 'linkedin'));
            $sm->setSize('sm');
            $sm->showNetworkButtons();
            $sm->setColorType('singleColor');
            ?>

                    <div class="jumbo-content">
                        <h1>
                            <span>Health</span>
                            <div>Product Distributor</div>
                            <em>Bringing Quality Mexican Products To U.S. Customers.</em>
                        </h1>

                        <div>

                            <a href="<?=SITEURL?>/contact-us/">
                                <button class="btn btn-primary">CONTACT US</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php else: ?>
        <section class="home-module-1">
            <div class=" navbar-button text-center">
                <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
            </div>
        </section>
        <?php endif; ?>