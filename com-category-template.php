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
                            <?php while(have_rows('content_page_editor') ): the_row(); ?>
                                <!-- title with icon -->
                                <?php if (get_row_layout() == 'title_with_icon'):?>
                                    <div class="title_with_icon">
                                        <div class="title_with_icon-icon">
                                            <img src="<?= get_sub_field('title_with_icon_icon'); ?>">
                                        </div>
                                        <div class="title_with_icon-title">
                                            <?= get_sub_field('title_with_icon_title'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- title without icon -->
                                <?php if (get_row_layout() == 'title_without_icon'):?>
                                    <div class="title_without_icon">
                                        <?= get_sub_field('title_without_icon_text'); ?>
                                    </div>
                                <?php endif; ?>
                                <!-- spacer -->
                                <?php if (get_row_layout() == 'spacer'):?>
                                    <div class="spacer" style="height: <?= get_sub_field('spacer'); ?>px;">
                                    </div>
                                <?php endif; ?>
                                <!-- info -->
                                <?php if (get_row_layout() == 'info_block'):?>
                                    <div class="info_block_title">
                                        <?= get_sub_field('info_title'); ?>
                                    </div>
                                    <div class="info_block_content">
                                        <?php if(have_rows('info_content')) : ?>
                                            <?php while(have_rows('info_content') ): the_row(); ?>
                                                <!-- info block - phone -->
                                                <?php if (get_row_layout() == 'info_content_phone'):?>
                                                    <a href="tel:<?= str_replace(['+', ' ', '(', ')', '-'], '', get_sub_field('info_content_phone_phone')); ?>" class="info_content_phone_text">
                                                        <?= get_sub_field('info_content_phone_text'); ?>
                                                    </a>
                                                <?php endif; ?>
                                                <!-- info block - mail -->
                                                <?php if (get_row_layout() == 'info_content_mail'):?>
                                                    <a href="mailto:<?= str_replace(['+', ' ', '(', ')', '-'], '', get_sub_field('info_content_mail_mail')); ?>" class="info_content_mail_mail">
                                                        <?= get_sub_field('info_content_mail_text'); ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endwhile;?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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