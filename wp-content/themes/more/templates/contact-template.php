<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<div class="mobile-padding" xmlns="http://www.w3.org/1999/html"></div>
<?= do_shortcode('[orange_wave title = "Контакти"]'); ?>

<section class="contacts">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 contact-us">
                <p>Адреса: Запорізька область, смт. Кирилівка, <br>Коса Пересип, 104<br>
                    котеджне містечко “Sun City”</p>
                <p>Телефон: 068 90 90 505</p>
                <p>E-mail: olga_fl@i.ua</p>
                <p>Або скористуйтеся формою нижче:</p>
                <?= do_shortcode('[contact-form-7 id="472" title="Contact-Us"]')?>
            </div>
            <div class="col-lg-7 map">
                <?= do_shortcode('[wpgmza id="1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
