<footer class="footer footer--main">
    <div class="footer__left">
        <a href="<?php get_site_url(); ?>" class="footer__logo">
            <img src="<?php the_field('footer_logo_light', 'options'); ?>">
        </a>
        <div class="footer__roots">
            © Kaupunkitapahtumat Espoo
        </div>
    </div>
    <div class="footer__info">
        <span>
            Yhteystiedot:
        </span>
        <a href="<?php the_field('footer_email', 'options'); ?>">
            <?php the_field('footer_email', 'options'); ?>
        </a>
        <a href="tel:<?= str_replace(['+', ' ', '(', ')', '-'], '', get_field('footer_phone', 'option'));?>">
            Puh: <?php the_field('footer_phone', 'options'); ?>
        </a>
        <a href="<?php the_field('footer_address', 'options'); ?>">
            <?php the_field('footer_address', 'options'); ?>
        </a>
    </div>
    <div class="footer__right">
        <?php $footerSocials = get_field('footer_socials', 'options'); ?>
        <?php foreach($footerSocials as $footerSocialsItem): ?>
            <a href="<?= $footerSocialsItem['footer_socials_link']; ?>">
                <?= $footerSocialsItem['footer_socials_icon']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</footer>

<?php
    wp_footer();
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/8c42e03d5f.js" crossorigin="anonymous"></script>
</body>

</html>