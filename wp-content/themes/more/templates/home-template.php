<?php
/**
 * Template Name: Home Page
 */

get_header('home');
?>

<section class="main-section">
    <div class="white-bg"></div>
    <div class="container d-flex">
        <div class="left text-center">
            <img src="/wp-content/uploads/2021/01/Line-8.png" alt="" class="wave">
            <img src="<?= get_field('main_butterfly')?>" alt="" class="butterfly">
            <img src="<?= get_field('main_logo')?>" alt="" class="logo">
             <h1><?= get_field('main_title')?></h1>
            <p><?= get_field('main_subtitle')?></p>
            <div class="contacts">
                <div class="phone">
                    <img src="<?= get_field('main_phone_img')?>" alt="">
                    <?= get_field('main_phone')?>
                </div>
                <div class="location">
                    <img src="<?= get_field('main_location_img')?>" alt="">
                    <?= get_field('main_location')?>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>
</section>

<?= do_shortcode('[orange_wave title = "'.get_field("services_title").'"]'); ?>

<section class="services">
    <div class="container">
        <div class="row banner">
            <img src="<?= get_field('services_banner')?>" alt="">
        </div>
        <div class="row service d-flex">
            <div class="left">
                <img src="<?= get_field('services_left_side_image')?>" alt="">
            </div>
            <div class="right d-flex">
                <h3><?= get_field('services_subtitle')?></h3>
                <div class="description-wrap">
                    <ul>
                        <?php if(have_rows('services_repeater')):?>
                            <?php while(have_rows('services_repeater')): the_row();?>
                                <li><img src="/wp-content/uploads/2021/01/shell-2.svg" alt=""> <?= get_sub_field('title')?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="left">
            <?= get_field('about_first_text')?>
            <div class="icons d-flex">
                <?php if(have_rows('about_repeater')):?>
                    <?php while(have_rows('about_repeater')): the_row();?>
                        <div class="single">
                            <img src="<?= get_sub_field('image')?>" alt="">
                            <p><?= get_sub_field('title')?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?= get_field('about_second_text')?>
        </div>
        <div class="right"></div>
    </div>
</section>
<div class="top-waves"></div>
<section class="slides">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <p class="text"><?= get_field('slides_description')?></p>
            </div>
            <div class="col-lg-6 iframeVideo">
                <?= get_field('slides_video')?>
            </div>
        </div>
        <h3><?= get_field('slides_3d_tour')?></h3>
        <div id="idtour">
            <script>
                function show3d() {
                    document.getElementById('idtour').innerHTML="<iframe src='https://kirillovka.ks.ua/misc/tour/line/' style='width:1020px;height:575px;border:solid 1px #ffc000;box-shadow:1px 1px 10px #ccc;' allowfullscreen></iframe>";
                }
            </script><br>
            <img src="/wp-content/uploads/2021/02/line-3dtour.jpg" alt="3D-тур коттеджей Лайн в Кирилловке" style="border:solid 1px #ffc000;box-shadow:1px 1px 10px #ccc; cursor:pointer;width:1020px;" onclick="show3d();">
        </div>
    </div>

    <div class="container">
        <?= do_shortcode('[modula id="66"]'); ?>
        <div class="gallery-link text-center">
            <a href="<?= get_field('slides_link')?>">
                <p><?= get_field('slides_link_text')?></p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/line.png" alt="">
            </a>
        </div>
    </div>
</section>
<div class="bottom-waves"></div>
<section class="apartments">
    <div class="container text-center">
        <h3><?= get_field('apartments_title')?></h3>
        <img class="wave" src="<?php echo get_template_directory_uri() ?>/assets/img/line_blue.png" alt="">
        <div class="row justify-content-center">
            <?php if(have_rows('apartments_repeater')):?>
                <?php while(have_rows('apartments_repeater')): the_row();?>
                    <div class="col-lg-4 col-md-6">
                        <div class="apartment-wrap">
                            <div class="header-wrap">
                                <h5><?= get_sub_field('title')?></h5>
                                <img src="<?= get_sub_field('image')?>" alt="">
                                <div class="description"><?= get_sub_field('description')?></div>
                            </div>
                            <div>
                                <div class="cost <?= get_sub_field('color')?>">
                                    <b>Вартість проживання в <?= get_field('apartments_year')?>р:</b><br>
                                    травень - <?= get_sub_field('may')?> грн. за номер;<br>
                                    червень - <?= get_sub_field('june')?> грн. за номер;<br>
                                    липень - серпень - <?= get_sub_field('july_august')?> грн. за номер.
                                </div>
                                <a href="<?= get_sub_field('link')?>" class="apartment-link <?= get_sub_field('color')?>">Детальніше</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="review" id="feedback">
    <div class="container text-center">
        <h3>Відгуки</h3>
        <div class="row text-left">
            <?php echo do_shortcode('[WPCR_INSERT]'); ?>
        </div>
    </div>
</section>
<div class="scroll-top">
    <img src="/wp-content/uploads/2021/02/Group-21.svg" alt="">
</div>
<?php get_footer(); ?>
