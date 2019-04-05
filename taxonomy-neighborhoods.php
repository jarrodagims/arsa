<?php get_header(); 
/*
    Template Name: Floorplans
*/

$cat_slug = get_queried_object()->slug;
$cat_name = get_queried_object()->name;


?><?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<section id="main" class="floorplans">
    <article>
        <div class="content page-content">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <?php 
                            $taxonomy     = 'neighborhood';
                            $orderby      = 'name'; 
                            $show_count   = false;
                            $pad_counts   = false;
                            $hierarchical = true;
                            $title        = '';
                            
                            $args = array(
                            'taxonomy'     => $taxonomy,
                            'orderby'      => $orderby,
                            'show_count'   => $show_count,
                            'pad_counts'   => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li'     => $title
                            );
                        ?>

                        <ul class="list-inline floorplan-nav">
                            <?php wp_list_categories( $args ); ?>
                        </ul>


                        <?php
                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                        if ( get_query_var('page') ) $paged = get_query_var('page');

                        $tax_post_args = array(
                            'post_type' => 'floorplan',
                            'posts_per_page' => 12,
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'neighborhood',
                                    'field' => 'slug',
                                    'terms' => $cat_slug
                                )
                                ),
                                'paged' => $paged
                        );
                 
                        $query = new WP_Query( $tax_post_args );

                        $posts_per_row = 3;
                        $post_counter = 0;

                        if ( $query->have_posts() ) : ?>

                        <h2 class="text-center"><?php echo $cat_name ?> EL PASO</h2>

                        <div class="floorplan-list">

                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <?php if( ( ++$post_counter % $posts_per_row ) == 1  || $posts_per_row == 1 ) :
                                if( $post_counter > 1 ) :
                                    echo '</div>';
                                endif;
                            echo '<div class="row">';
                            endif;
                            ?>
                            <div class="col entry">

                                <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <div>
                                        <?php the_post_thumbnail(); ?>

                                        <h2 class="title"><?php the_title(); ?></h2>
                                        <div>
                                            <span class="sft"><?php echo get_field('sqft'); ?></span>
                                        </div>

                                        <span class="price"><?php /*echo get_field('price');*/ ?></span>

                                    </div>
                                </a>
                                <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <div class="coming-soon">

                                        <h2><?php the_title(); ?>
                                        </h2>
                                        <h3><?php echo get_field('sqft'); ?></h3>
                                        <p>COMING SOON</p>

                                    </div>
                                </a>
                                <?php endif; ?>

                            </div>
                            <?php endwhile; wp_reset_postdata();  ?>
                        </div>
                        <!-- show pagination here -->
                        <?php else : ?>
                        <!-- show 404 error here -->
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <?php echo get_field('floorplans_bottom'); ?>
                    </div>
                </div>
            </div>

        </div>
        </div>

        </div>
    </article>
</section>
<?php get_footer(); ?>