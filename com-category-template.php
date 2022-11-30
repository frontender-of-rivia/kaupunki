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
                        


                        



                        <?php if(have_rows('page_content_editor')) :?>
                            <?php while(have_rows('page_content_editor') ): the_row();?>
                                <?php if (get_row_layout() == 'text'):?>


                                    <?= get_sub_field('bold_text_paragraph'); ?>
                                                
                                    
                                    
                                <?php endif; ?>
                            <?php endwhile;?>
                        <?php endif; ?>













                    <!-- <?php if(have_rows('all_page')) :?>
                        <?php while(have_rows('all_page') ): the_row();?>
                            <?php if (get_row_layout() == 'inter_section'):?>


                                <?= get_sub_field('inter_undertitle'); ?>
                                            
                                

                            <?php endif; ?>
                        <?php endwhile;?>
                    <?php endif; ?> -->





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