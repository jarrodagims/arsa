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

            <div class="container">
                <div class="v-align row">
                    <div class="col navbar-button text-center">

                        <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                                src="<?= IMGURL; ?>logo.svg" alt="<?php echo get_bloginfo(
            'description'
            ); ?>" /></a>
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>

                        <div class="navbar-right d-none d-lg-flex">


                            <ul class="nav navbar-nav navbar-right">
                                <li><?=get_option('sherpa_business_address')?></li>
                                <li><a href="<?php printPhone(); ?>"><?php printPhone(); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="home-module-1">

            <div class="bg-jumbo">

                <div class="jumbotron">
                    <?php
            $sm = new SocialMedia(array('facebook', 'twitter'));
            $sm->setSize('sm');
            $sm->showNetworkButtons();
            $sm->setColorType('singleColor');
            ?>

                    <div class="jumbo-content">
                        <h1>
                            <span>915 Siteworks</span>

                            <div>
                                Spray Foam Insulation
                            </div>
                            <em>Installing The Most Energy-Efficient Insulation</em>
                        </h1>

                        <div>

                            <a href="">
                                <button class="btn btn-primary">GET A QUOTE</button>
                            </a>

                            <a href=""><button class="btn btn-outline">CALL US <?php printPhone(); ?></button></a>
                        </div>
                    </div>


                </div>
            </div>
        </section>