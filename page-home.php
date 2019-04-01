<?php get_header();

/*
Template Name: Home
 */?>
</div>


<?php echo get_template_part('template-parts/icon', 'row'); ?>

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

<section class="home-module-3">
    <div class="container">

        <div class="row">

            <div class="col">
            </div>

            <div class="col">
                <div class="extra-padding">
                    <h2>What is Arsa Distributing?</h2>

                    <p class="blurb">We are a health product distributor, bringing well-loved and traditional products
                        from
                        Mexico to the United States.
                    </p>

                    <p>Our interest lies in improving the quality of life through fine beauty products, natural health
                        products, and dietary supplements. It’s why we only distribute the best and well-known brands
                        from
                        Mexico that have withstood the test of time and generations. Our products range from digestive
                        health products, health supplements, infusion teas, natural soaps, shampoos, lotions, cough
                        syrups,
                        and more.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col">
            </div>


            <div class="col badge">
                <img src="<?=IMGURL ?>badge.svg" alt="Serving the Whole United States">
            </div>

        </div>

        <div class="row">
            <div class="col dark">
                <div class="extra-padding">
                    <h2>Located in El Paso, Serving the Whole United States</h2>


                    <p>
                        Arsa Distributing has its headquarters by the border between Mexico and the United States. We
                        are located on the border town of El Paso, Texas but we serve the entire United States.
                    </p>

                    <p>
                        Although our headquarters are on the Southwest, we get these products from coast to coast to
                        stores like Walmart, Lowes, and dozens of local chains, so people everywhere can have access to
                        the finest Mexican health products.
                    </p>
                </div>


            </div>

            <div class="col">

            </div>

        </div>
    </div>

</section>


<section class="home-module-4">
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="box">
                    <img src="<?=IMGURL?>health-product-distributor.svg" alt="Health Product Distributor" />
                </div>
            </div>

            <div class="col col-md-1"></div>

            <div class="col">
                <h2>
                    What We Do
                </h2>

                <p class="blurb">
                    We specialize in importing the products and distributing them through major and smaller retailers
                    and supermarkets across the U.S.
                </p>

                <p>
                    We also sell to local shops and family owned stores. While we also sell to the individual consumer,
                    we focus on getting our products on the shelves of your favorite local store so you can have easy
                    access to these wonderful items at your convenience.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <h2>
                        Value Proposition
                    </h2>

                    <p>As a health product distributor, we believe in the power of every one of these products to change
                        people’s live for the better. We know that traditional Mexican products have a special meaning
                        for
                        people and often a cultural significance. Many of these products have been around for
                        generations
                        and form part of the classical canon of
                        household products.</p>

                    <h2>
                        See What We Have To Offer
                    </h2>

                    <p>
                        Find out more about the signature products we carry and import: the Eucalin Cough Syrups, Fiber,
                        and
                        Natural Teas. Visit our over the counter pages, health and beauty section, or natural
                        supplements
                        page. You will find an array of products for different conditions, illnesses, or nutritional
                        needs.
                        Find something for the needs of your entire family, from speciality creams and shampoos, to cold
                        medicine, to infused teas, and soaps.
                    </p>
                </div>


            </div>

            <div class="col col-md-1"></div>

            <div class="col">
                <img src="<?=IMGURL?>aisle.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="home-module-6">

    <div class="container">

        <div class="row">
            <div class="col">

                <h2>
                    Contact Us For All Your Health Product Needs
                </h2>

                <p>
                    Arsa Distributing is a health product distributor that delivers across the U.S. Questions about how
                    it all works? Want to know more about how to get traditional Mexican products into your store?
                    Looking to buy some of these products directly? Contact us today. We are located in El Paso, Texas
                    at 500 West Overland Suite 250N 79901. Contact us for more information at <?php printPhone(); ?>.
                </p>

            </div>

        </div>
    </div>
</section>

<?php get_footer();?>