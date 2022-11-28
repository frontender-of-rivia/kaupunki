<?php
/*
Template Name: com category page
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- category heading -->
<?php get_template_part('template-parts/category-heading'); ?>
<!-- сategory communication and marketing -->
<div class="catcom">
    <div class="catcom__box">
        <?php
           $query = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' => get_the_ID()
            )
          );
          if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
                ?>
                <a href="<?= get_the_permalink(); ?>" class="catcom__item">
                    <?= get_the_title(); ?>
                </a>
            <?php endwhile;
          endif; wp_reset_query();
        ?>
    </div>
</div>
<!-- footer -->
<?php get_footer(); ?>