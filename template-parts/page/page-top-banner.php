<?php if(is_page('products')): ?>
<div class="internal-banner">

    <div class="bg-jumbo">

        <div class="jumbotron">

            <div class="jumbo-content">
                <h1>Infusion Herbs Teas</h1>

                <div>
                    <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="icon-row">
    <div class="container">
        <div class="no-gutters row">
            <div id="box-one" class="col flex-col">
                <a href="<?= SITEURL ?>/other-natural-supplements-el-paso/" class="icon-button" data-target="#link-one">


                    <div class="box-bottom"><?php get_template_part('template-parts/icons/icon', '1'); ?>

                        <span>NATURAL SUPPLEMENTS</span></div>
                </a>
            </div>

            <div id="box-two" class="col flex-col">
                <a href="<?= SITEURL ?>/products/" class="icon-button" data-target="#link-two">


                    <div class="box-bottom"><?php get_template_part('template-parts/icons/icon', '2'); ?>
                        <span>NATURAL TEAS</span></div>
                </a>
            </div>

            <div id="box-three" class="col flex-col">
                <a href="<?= SITEURL ?>/therbal-tea-el-paso/" class="icon-button" data-target="#link-three">

                    <div class="box-bottom"><?php get_template_part('template-parts/icons/icon', '3'); ?>
                        <span>NATURAL HERBAL TEAS</span></div>
                </a>
            </div>

            <div id="box-three" class="col flex-col">
                <a href="<?= SITEURL ?>/beauty-products-el-paso/" class="icon-button" data-target="#link-three">

                    <div class="box-bottom"><?php get_template_part('template-parts/icons/icon', '4'); ?>
                        <span>HEALTH & BEAUTY</span></div>
                </a>
            </div>

            <div id="box-three" class="col flex-col">
                <a href="<?= SITEURL ?>/therbal-tea-el-paso/" class="icon-button" data-target="#link-three">

                    <div class="box-bottom"><?php get_template_part('template-parts/icons/icon', '5'); ?>
                        <span>OTC FIRST AID</span></div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>