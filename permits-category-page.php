<?php
/*
Template Name: Permits category page
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- body color -->
<?php get_template_part('template-parts/body-color'); ?>
<!-- category heading -->
<?php get_template_part('template-parts/category-heading'); ?>
<!-- сategory permits -->
<section class="layout--def">
    <div class="page-design">
      <img src="<?php echo get_template_directory_uri(); ?>/app/images/dist/page-design.svg">
    </div>
    <div class="container container--fluid">
        <div class="layout--def__wrapper">
            <div class="layout--def__left">
                <div class="pagenav">
                    <?php
                        /* breadcrumb Yoast */
                        if ( function_exists( 'yoast_breadcrumb' ) ) :
                        yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
                        endif;
                    ?>
                </div>
                <div class="layout--def__body">
                    <div class="singlecom__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="layout--def__content">
                        the content
                    </div>
                </div>
            </div>
            <div class="layout--def__right">
                <?php get_template_part('template-parts/posts-list'); ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php get_footer(); ?>
</section>
