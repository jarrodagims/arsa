<?php get_header();

/*
Template Name: Products
 */
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
?>
<?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-xs-12">
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

                <div class="product-sidebar"><strong>Families</strong>
                    <ul>
                        <?php wp_list_categories( $args ); ?>
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