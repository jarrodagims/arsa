<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <article>
                    <div class="content page-content text-center">
                        <?php if ( has_post_thumbnail( $_post->ID ) ) {
                            echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
                            echo get_the_post_thumbnail( $_post->ID, 'thumbnail' );
                            echo '</a>';
                        } ?>
                        <?php wp_reset_postdata();
                        
                        the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>