<?php get_header();

/*
Template Name: Home
 */?>
</div>


<section class="ribbon">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-inline list-unstyled">
                    <li><a href="">LANDSCAPING</a></li>
                    <li><a href="">INSULATION</a></li>
                    <li><a href="">DUMPSTER RENTAL</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="icon-row">

    <div class="container-fluid">
        <div class="row">

            <div class="col flex-col">
                <a href="" class="icon-button">
                    <?php get_template_part('template-parts/icons/icon', 'landscaping'); ?>
                    <span>LANDSCAPING</span></a>
            </div>

            <div class="col flex-col">
                <a href="" class="icon-button">
                    <?php get_template_part('template-parts/icons/icon', 'insulation'); ?>
                    <span>INSULATION</span></a>
            </div>

            <div class="col flex-col">
                <a href="" class="icon-button">
                    <?php get_template_part('template-parts/icons/icon', 'dumpster-rental'); ?>
                    <span>DUMPSTER RENTAL</span></a>
            </div>
        </div>
    </div>
</section>

<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Who is 915 Siteworks?</h2>

                <h3>We are a young up-and-coming company ready to take El Paso by insulation.</h3>

                <p>Our main initiative is to provide El Paso homebuilders with an innovative and airtight insulation
                    method proven to be the best performing and most eco-friendly on the market. We also provide
                    landscaping services and dumpster rentals for the entire El Paso region.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="home-module-3">
    <h2>Spray Foam Insulation & Landscaping</h2>
    <h3>Services Available</h3>
</section>

<section class="home-module-4">
    <h2>915 Siteworks helps home builders improve the quality of their homes by making them more energy efficient and
        resistant.</h2>

    <p>In today’s world, everyone is concerned about keeping energy costs down and reducing the carbon footprints. Spray
        foam technologies improve a home’s performance, making it more efficient, and saving the owner hundreds of
        dollars in energy bills.
    </p>
</section>

<?php get_footer();?>