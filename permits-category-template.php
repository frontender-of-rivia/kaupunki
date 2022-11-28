<?php
/*
Template Name: permits category template
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- category heading -->
<?php get_template_part('template-parts/category-heading'); ?>
<!-- singlecom -->
<div class="layout--def singlecom">
    <div class="container">
        <div class="layout--def__wrapper">
            <div class="layout--def__left">
                <div class="pagenav">
                    Tapahtumajärjestäjälle > Viestintä ja markkinointi > Markkinoinnin suunnittelu
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
</div>
<!-- footer -->
<?php get_footer(); ?>