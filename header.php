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
</head>

<body <?php body_class();?>>
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
                        <div class="navbar-right d-lg-flex navbar-nav">
                            <ul class="nav">
                                <li class="nav-item menu-item directions">
                                    <a href="<?=SITEURL?>/contact-us/"><span
                                            class="nav-link"><em><?=get_option('sherpa_business_address')?></em></span></a>
                                </li>
                                <li class="nav-item menu-item contact"><a
                                        href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"
                                        class="nav-link"><span><?php printPhone(); ?></span></a>
                                </li>
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
        <?php endif; ?>
        <?php if(!is_front_page()) : ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col"><?php
        $sm = new SocialMedia(array('facebook', 'twitter'));
        $sm->setSize('sm');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?></div>
            </div>
        </div>
        <?php endif; ?>