<?php
    $is_parent;
    global $post;
    if ( is_page() && $post->post_parent ) {
        $is_parent = false;
    } else {
        $is_parent = true;
    }
?>


<?php $this_title = get_the_title(); ?>
<?php
    $query = new WP_Query(array(
        'post_type' => 'page',
        'post_parent' => $post->post_parent
    )
    );
    ?>
    <div class="posts-list">
        <?php
            if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
                ?>
                    <?php
                        $i_title = get_the_title();
                        if($i_title == $this_title){
                            ?>
                            <span class="posts-list__item posts-list__item--this">
                                <?php the_title(); ?>
                            </span>
                        <?php } else {
                            ?>
                            <a href="<?php the_permalink(); ?>" class="posts-list__item">
                                <?php the_title(); ?>
                            </a>
                        <?php }
                    ?>
            <?php endwhile;
            endif; wp_reset_query(); ?>
    </div>