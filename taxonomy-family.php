<?php get_header();
$taxonomy     = 'family';
$orderby      = 'name'; 
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;

$args = array(
'taxonomy'     => $taxonomy,
'orderby'      => $orderby,
'show_count'   => $show_count,
'pad_counts'   => $pad_counts,
'hierarchical' => $hierarchical,
'title_li'     => $title
);

$cat_slug = get_queried_object()->slug;
$cat_name = get_queried_object()->name;
?>
<?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-xs-12">
                <div class="product-sidebar"><strong>Families</strong>
                    <ul>
                        <?php wp_list_categories( $args ); ?>
                    </ul>
                </div>

                <div class="product-sidebar">
                    <strong>Products</strong>
                    <ul>
                        <?php $query2 = new WP_Query( array('order' => 'ASC', 'post_type' => 'product', 'posts_per_page' => -1 ) );
if ( $query2->have_posts() ) : ?>
                        <?php while ( $query2->have_posts() ) : $query2->the_post(); 
                    ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></li>
                        <?php endwhile;  wp_reset_postdata(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col">
                <div class="container-fluid">
                    <?php wp_reset_postdata();
                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                        if ( get_query_var('page') ) $paged = get_query_var('page');

                        $tax_post_args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'family',
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
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if( ( ++$post_counter % $posts_per_row ) == 1  || $posts_per_row == 1 ) :
                                if( $post_counter > 1 ) :
                                    echo '</div>';
                                endif;
                            echo '<div class="columns products row">';
                            endif;
                            ?>
                    <?php get_template_part('template-parts/content/content','product'); ?>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </div>
                <div class="pagination">

                </div>


                <!-- show pagination here -->
                <?php else :   ?>

                <!-- show 404 error here -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer();?>