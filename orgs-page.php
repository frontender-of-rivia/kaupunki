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
        <h2 class="navhead__title">
            <?php the_field('org_first_title'); ?>
        </h2>
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
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <a href="#" class="navbody__item-text">
                    Ympäristö
                </a>
            </div>
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <div class="navbody__item-text">
                    Ympäristö
                </div>
            </div>
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <div class="navbody__item-text">
                    Ympäristö
                </div>
            </div>
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <div class="navbody__item-text">
                    Ympäristö
                </div>
            </div>
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <div class="navbody__item-text">
                    Ympäristö
                </div>
            </div>
            <div class="navbody__item">
                <div class="navbody__item-icon">
                    <img src="images/dist/nav-icon.svg">
                </div>
                <div class="navbody__item-text">
                    Ympäristö
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php get_footer(); ?>