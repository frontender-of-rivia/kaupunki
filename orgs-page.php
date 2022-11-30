<?php
/*
Template Name: organizer page
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- navhead -->
<div class="navhead" style="background-image: url(<?php the_field('org_first_bg'); ?>)">
    <div class="container navhead__container">
        <div class="navhead__content">
            <h2 class="navhead__title">
                <?php the_field('org_first_title'); ?>
            </h2>
        </div>
    </div>
</div>
<!-- navtext -->
<div class="navtext">
    <div class="container">
        <div class="navtext__wrapper">
            <div class="navtext__left">
                <?php the_field('org_second_title'); ?>
            </div>
            <div class="navtext__right">
                <?php $navtext = get_field('org_second_text'); ?>
                <?php foreach($navtext as $navtextPar): ?>
                    <p>
                        <?= $navtextPar['org_second_par']; ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- navbody -->
<div class="navbody">
    <div class="container">
        <div class="navbody__title">
            <?php the_field('org_category_title'); ?>
        </div>
        <div class="navbody__box">
            <?php
                $query = new WP_Query([
                    'post_type' => 'page',
                ]);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        $iter_ID = get_the_ID();
                        $iter_field = get_field('category_icon', $iter_ID);
                        if($iter_field){
                            ?>
                                <div class="navbody__item">
                                    <div class="navbody__item-icon">
                                        <img src="<?= $iter_field; ?>">
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="navbody__item-text">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                            <?php
                        }
                    }
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- footer -->
<?php get_footer('front'); ?>