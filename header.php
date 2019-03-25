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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130547644-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130547644-1');
</script>
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
	
<!-- Default Statcounter code for 915 Siteworks
https://www.915siteworkselptx.com/ -->
<script type="text/javascript">
var sc_project=11890400; 
var sc_invisible=1; 
var sc_security="47ef2923"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="web counter"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11890400/0/47ef2923/1/" alt="web
counter"></a></div></noscript>
<!-- End of Statcounter Code -->
	
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "name": "915 Siteworks",
  "image": "<?=SITEURL?>/wp-content/themes/915/img/logo.svg",
  "@id": "",
  "url": "https://www.915siteworkselptx.com/",
  "telephone": "(915) 859-3303",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1150 Burgandy Ste B",
    "addressLocality": "El Paso",
    "addressRegion": "TX",
    "postalCode": "79907",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 31.7064923,
    "longitude": -106.29409570000001
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "08:00",
    "closes": "17:00"
  } ,
  "sameAs": [
    "https://www.facebook.com/915-Siteworks-1694474960641691/",
    "https://twitter.com/915Siteworks"
  ]
}
</script>	
	
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

                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.svg"
                                alt="<?php echo get_bloginfo(
            'description'
            ); ?>" /></a>
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>

                        <div class="navbar-right d-lg-flex navbar-nav">
                            <ul class="nav">
                                <li class="nav-item"><span
                                        class="nav-link"><?=get_option('sherpa_business_address')?></span></li>
                                <li class="nav-item">|</li>
                                <li class="nav-item"><a
                                        href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"
                                        class="nav-link"><?php printPhone(); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(is_front_page()) : ?>
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
                            <div>Spray Foam <br class="br-xs">Insulation
                            </div>
                            <em>Installing The Most <br class="br-xs">Energy-Efficient Insulation</em>
                        </h1>

                        <div>

                            <a href="<?=SITEURL?>/contact-us/">
                                <button class="btn btn-primary">GET A QUOTE</button>
                            </a>

                            <a
                                href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><button
                                    class="btn btn-outline btn-outline-dark">CALL
                                    US <?php printPhone(); ?></button></a>
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