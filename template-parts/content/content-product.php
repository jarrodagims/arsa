<div class="col product">
    <?php    remove_filter( 'the_content', 'wpautop' );
                        if(current_user_can('edit_pages')) {
                            $edit_url = get_edit_post_link();
                            $edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit Page','sherpa') . "</a></small>";
                        } else {
                            $edit_link = NULL;
                        }
                  ?>

    <div>
        <a href="<?php the_permalink(); ?>">

            <?php if ( has_post_thumbnail() ) : ?>

            <div class="product-image">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php endif; ?>
            <?php
                            
                            //if(current_user_can('edit_pages')) {
                              //echo $edit_link; }
                               ?>
            <h2><?php the_title_attribute(); ?></h2>
            <ul>
                <li><strong>BRAND:</strong> <?php echo get_field('brand'); ?></li>
                <li><strong>FAMILY:</strong> <?php $terms = get_the_terms( $post->ID , 'family' ); 
                    foreach ( $terms as $term ) {
                    echo $term->name;
                    } ?></li>
                <li><strong>CLASSIFICATION:</strong> <?php echo get_field('classification'); ?></li>
            </ul>
            <p>
                <?php the_content(); ?>
            </p>

            <ul>
                <li><strong>SIZE:</strong> <?php echo get_field('size'); ?> TEA BAGS</li>
            </ul>
        </a>
    </div>
</div>