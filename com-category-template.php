<?php
/*
Template Name: com category template
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- body color -->
<?php get_template_part('template-parts/body-color'); ?>
<!-- category heading -->
<?php get_template_part('template-parts/category-heading'); ?>
<!-- singlecom -->
<section class="layout--def singlecom">
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
                        

                        <?php if(have_rows('content_page_editor')) : ?>
                            <?php while(have_rows('content_page_editor') ): the_row();?>
                                <!-- -->
                                <?php if (get_row_layout() == 'title_with_icon'):?>
                                    <div class="title_with_icon">
                                        <?= get_sub_field('title_with_icon_icon'); ?>
                                        <?= get_sub_field('title_with_icon_title'); ?>
                                    </div>
                                <?php endif; ?>
                                <!-- -->
                                <?php if (get_row_layout() == 'title_without_icon'):?>
                                    <div class="title_without_icon">
                                        <?= get_sub_field('title_without_icon_text'); ?>
                                    </div>
                                <?php endif; ?>
                                <!-- -->
                            <?php endwhile;?>
                        <?php endif; ?>


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