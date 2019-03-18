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

<?php get_footer();?>