<?php if(is_archive('products') || is_singular('product') || is_taxonomy('family')): ?>
<div class="internal-banner">

    <div class="bg-jumbo">

        <div class="jumbotron">

            <div class="jumbo-content">
                <h1><?php 
                if (is_page() || is_singular('product') || is_single() ) { // PAGE
                    the_title();
                } else if(is_home()) {
                    echo 'Blog';
                }
                else if(is_post_type_archive()) {
                    echo post_type_archive_title( '', false );
                }
                else if(is_taxonomy('family')) {
                    echo single_term_title();
                }
                ?></h1>

                <div>
                    <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="icon-row">
    <div class="container">
        <?php echo get_template_part('template-parts/icon', 'row'); ?>
    </div>
</section>
<?php endif; ?>