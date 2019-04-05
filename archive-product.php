<?php get_header();

/*
Template Name: Products
 */?>
<?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-xs-12">
                <div class="product-sidebar">
                    <strong>Products</strong>
                    <ul>
                        <li><a href="#">Lemongrass</a></li>

                        <li><a href="#">Pineapple Tea</a></li>

                        <li><a href="#">Abango With Propolis</a></li>
                        <li><a href="#">With Echinacea</a></li>

                        <li><a href="#">Artichoke</a></li>

                        <li><a href="#">Arnica</a></li>

                        <li><a href="#">Boldo</a></li>

                        <li><a href="#">Cinnamon</a></li>

                        <li><a href="#">Prume</a></li>

                        <li><a href="#">Horsetail</a></li>

                        <li><a href="#">Damiana de California</a></li>

                        <li><a href="#">Delinea-Yutzil</a></li>

                        <li><a href="#">Passion Fruit-Peach</a></li>

                        <li><a href="#">Linden Flower</a></li>

                        <li><a href="#">St John’s Worth</a></li>

                        <li><a href="#">Eryngo Infusion</a></li>

                        <li><a href="#">Peppermint</a></li>

                        <li><a href="#">Hibiscus</a></li>

                        <li><a href="#">Apple Cinnamon</a></li>

                        <li><a href="#">Chamomile With Anise</a></li>

                        <li><a href="#">Chamomile-Mint</a></li>

                        <li><a href="#">Chamomile</a></li>

                        <li><a href="#">Maternitea</a></li>

                        <li><a href="#">Blueberry-Cherry</a></li>

                        <li><a href="#">Moringa</a></li>

                        <li><a href="#">Samadhi Light</a></li>

                        <li><a href="#">7 Blossoms</a></li>

                        <li><a href="#">Fruit Tea Assortment</a></li>

                        <li><a href="#">Red Tea Pu-Erh</a></li>

                        <li><a href="#">Green Tea</a></li>
                        <li><a href="#">Valeriana</a></li>
                    </ul>
                </div>

                <div class="product-sidebar"><strong>Families</strong>

                    <ul>
                        <li><a href="#">Auxiliary</a></li>
                        <li><a href="#">Fruit</a></li>
                        <li><a href="#">Aromatics</a></li>
                        <li><a href="#">Healthy Blends</a></li>
                        <li><a href="#">Camellia Sinensis</a></li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="container-fluid">

                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; //The magic, ternary if statement
                 
                        $query = new WP_Query( array('order' => 'ASC', 'posts_per_page' => 50, 'post_type' => 'product', 'paged' => $paged ) );

                        $posts_per_row = 3;
                        $post_counter = 0; 

                        if ( $query->have_posts() ) : ?>



                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if( ( ++$post_counter % $posts_per_row ) == 1  || $posts_per_row == 1 ) :
                                if( $post_counter > 1 ) :
                                    echo '</div>';
                                endif;
                            echo '<div class="columns products row">';
                            endif;
                            ?>
                    <div class="col product">
                        <div><a href="#"><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2><?php the_title_attribute(); ?></h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is
                                    the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </a></div>
                    </div>

                    <?php endwhile;  wp_reset_postdata(); ?>
                </div>
                <div class="pagination">
                    <?php pagination_bar( $query );  ?>
                </div>


                <!-- show pagination here -->
                <?php else :   ?>

                <!-- show 404 error here -->
                <?php endif; ?>


                <!-- 
                    <div class="columns products row">
                        <div class="col product">
                            <div><a href="#"><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                    <h2>Lemongrass</h2>
                                    <ul>
                                        <li><strong>BRAND:</strong> THERBAL</li>
                                        <li><strong>FAMILY:</strong> AROMATICS</li>
                                        <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                    </ul>
                                    <p>
                                        <em><strong>About the Product:</strong></em> This exquisite and mild infusion is
                                        the
                                        perfect drink after meals to
                                        unwind and aid the digestion process.
                                    </p>

                                    <ul>
                                        <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                    </ul>
                                </a></div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="columns products row">
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="columns products row">
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="columns products row">
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col product">
                            <div><img src="<?=IMGURL?>products/lemongrass.png" alt="Lemongrass" />
                                <h2>Lemongrass</h2>
                                <ul>
                                    <li><strong>BRAND:</strong> THERBAL</li>
                                    <li><strong>FAMILY:</strong> AROMATICS</li>
                                    <li><strong>CLASSIFICATION:</strong> INFUSION HERBS</li>
                                </ul>
                                <p>
                                    <em><strong>About the Product:</strong></em> This exquisite and mild infusion is the
                                    perfect drink after meals to
                                    unwind and aid the digestion process.
                                </p>

                                <ul>
                                    <li><strong>SIZE:</strong> 25 TEA BAGS</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer();?>