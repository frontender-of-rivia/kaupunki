<?php
/*
Template Name: home page
*/
?>
<!-- header -->
<?php get_header(); ?>
<!-- face -->
<div class="face">
    <div class="face__slider swiper">
        <div class="face__wrapper swiper-wrapper">
            <?php $faceSlides = get_field('face_slider'); ?>
			<?php foreach($faceSlides as $faceSlide): ?>
                <div class="face__slider swiper-slide" style="background-image: url(<?= $faceSlide['face_slider_background']; ?>)">
                    <div class="face__title">
                        <?= $faceSlide['face_slider_title']; ?>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>
<!-- main -->
<div class="main">
    <div class="container">
        <h2 class="main__title">
            <?php the_field('main_section_title'); ?>
        </h2>
        <div class="main__content">
            <div class="main__subtitle">
                <?php the_field('main_section_subtitle'); ?>
            </div>
            <div class="main__text">
                <p>Tervetuloa tutustumaan tapahtumien järjestämiseen Espoossa. Tältä sivustolta löydät Espoon kaupungin ohjeita ja inspiraatiota tapahtumien toteuttamsieen.</p>
                <p>Ole rohkeasti yhteydessä Kaupunkitapahtumat Espoon tiimiin tapahtumiin liittyvissä kysymyksissä ja uusissa tapahtumaideoissa.</p>
            </div>
            <a href="#" class="main__btn">
                Tapahtumaopas
            </a>
        </div>
    </div>
</div>
<!-- events -->
<div class="events">
    <div class="container">
        <h2 class="event__title">
            Tulevat tapahtumat
        </h2>
        <div class="events__box">
            <?php
                $query = new WP_Query([
                    'post_type' => 'events',
                ]);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        ?>
                        <div class="events__item">
                            <div class="events__item-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="events__item-content">
                                <div class="events__item-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="events__item-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                }
            ?>
        </div>
    </div>
</div>
<!-- footer -->
<?php get_footer(); ?>