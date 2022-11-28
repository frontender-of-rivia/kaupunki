<?php
    // определение на родительскую или дочернюю страницу
    $is_parent;
    global $post;
    if ( is_page() && $post->post_parent ) {
        $is_parent = false;
    } else {
        $is_parent = true;
    }
    // получение заголовка данного поста
    $this_title = get_the_title();
    // получения ID данной страницы
    $this_page_ID = get_the_ID();
?>
<?php
    $parent_args = [
        'post_type' => 'page',
        'post_parent' => $this_page_ID
    ];
    $children_args = [
        'post_type' => 'page',
        'post_parent' => $post->post_parent
    ];
    if($is_parent == true){
        $query = new WP_Query($parent_args);
    } else {
        $query = new WP_Query($children_args);
    }
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