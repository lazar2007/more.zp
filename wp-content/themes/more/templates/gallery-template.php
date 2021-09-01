<?php
/**
 * Template Name: Gallery Page
 */

get_header();
?>

<div class="mobile-padding" xmlns="http://www.w3.org/1999/html"></div>
<?= do_shortcode('[orange_wave title = "Галерея"]'); ?>

<section class="gallery">
    <div class="container">
        <div class="title text-center">
            <h2>Територія</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="332"]')?>

        <div class="title text-center">
            <h2>Котедж 1</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="366"]')?>

        <div class="title text-center">
            <h2>Котедж 2</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="384"]')?>

        <div class="title text-center">
            <h2>Котедж 4</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="397"]')?>

        <div class="title text-center">
            <h2>Котедж 6</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="415"]')?>

        <div class="title text-center">
            <h2>Котедж 9</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="431"]')?>

        <div class="title text-center">
            <h2>Котедж 10</h2>
            <img src="/wp-content/uploads/2021/02/Layer-x0020-1.png" alt="">
        </div>
        <?= do_shortcode('[modula id="448"]')?>
    </div>
</section>
<?php get_footer(); ?>
