<?php
    $is_parent;
    global $post;
    if ( is_page() && $post->post_parent ) {
        $is_parent = false;
    } else {
        $is_parent = true;
    }
?>

<?php
    if($is_parent == true){
    ?>
        <style>
            .footer, section{
                background: <?php the_field('category_page_color'); ?>;
            }
        </style>
    <?php } else { ?>
        <style>
            .footer, section{
                background: <?php the_field('category_page_color', $post->post_parent); ?>;
            }
        </style>
<?php } ?>