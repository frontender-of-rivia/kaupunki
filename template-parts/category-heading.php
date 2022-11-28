<?php
    $is_parent;
    global $post;
    if ( is_page() && $post->post_parent ) {
        $is_parent = false;
    } else {
        $is_parent = true;
    }
?>
<div class="navhead" style="background-image: url(<?php ($is_parent == true) ? the_field('category_head_background') : the_field('category_head_background', $post->post_parent); ?>)">
    <div class="container navhead__container">
        <div class="navhead__content">
            <div class="navhead__icon">
                <img src="<?php ($is_parent == true) ? the_field('category_icon') : the_field('category_icon', $post->post_parent); ?>">
            </div>
            <h2 class="navhead__title">
                <?php
                    ($is_parent == true) ? the_title() : print_r(get_the_title($post->post_parent));
                ?>
            </h2>
        </div>
    </div>
</div>