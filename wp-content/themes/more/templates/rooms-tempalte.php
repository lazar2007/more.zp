<?php
/**
 * Template Name: Rooms Page
 */

get_header();
?>

<div class="mobile-padding" xmlns="http://www.w3.org/1999/html"></div>
<?= do_shortcode('[orange_wave title = "'.get_field("page_title").'"]'); ?>
<section class="rooms">
    <div class="container">
        <div class="notification d-flex">
            <img src="<?= get_field('banner_left_image')?>" alt="" class="left">
            <div class="description text-center">
               <?= get_field('banner_description')?>
            </div>
            <img src="<?= get_field('banner_right_image')?>" alt="" class="right">
        </div>

        <div class="lux-houses" id="cottage1">
            <div class="single-house <?= get_field('cottage_1_2_color')?>">
                <div class="row align-items-center">
                    <div class="slider-for left">
                        <?php if(have_rows('cottage_1_2_photos')):?>
                            <?php while(have_rows('cottage_1_2_photos')): the_row();?>
                                <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4 class="house-name text-center <?= get_field('cottage_1_2_color')?>"><?= get_field('cottage_1_2_title')?></h4>
                        <div class="desc">
                            <?= get_field('cottage_1_2_description')?>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="cost <?= get_field('cottage_1_2_color')?>">
                                <b>Вартість проживання в <?= get_field('cottage_year')?>р:</b><br>
                                травень - <?= get_field('cottage_1_2_may_cost')?> грн. за номер;<br>
                                червень - <?= get_field('cottage_1_2_june_cost')?> грн. за номер;<br>
                                липень - серпень - <?= get_field('cottage_1_2_july_august_cost')?> грн. за номер.
                            </div>
                            <div class="booking-block">
                                <h6 class="<?= get_field('cottage_1_2_color')?>">запит на бронювання</h6>
                                <input type="text" id="book1" class="form-control form-control-sm">
                                <input type="hidden" id="result1" class="result">

                                <a id="book-btn1" class="booking <?= get_field('cottage_1_2_color')?>" href="#">Забронювати</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav">
                    <?php if(have_rows('cottage_1_2_photos')):?>
                        <?php while(have_rows('cottage_1_2_photos')): the_row();?>
                            <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="blue-wave">
            <div class="container row text-center">
                <img src="/wp-content/uploads/2021/02/wave-2.png" alt="">
            </div>
        </div>
        <div class="lux-houses" id="cottage3">
            <div class="single-house <?= get_field('lux_3_4_color')?>">
                <div class="row align-items-center">
                    <div class="slider-for2 left">
                        <?php if(have_rows('lux_3_4_photos')):?>
                            <?php while(have_rows('lux_3_4_photos')): the_row();?>
                                <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4 class="house-name text-center <?= get_field('lux_3_4_color')?>"><?= get_field('lux_3_4_title')?></h4>
                        <div class="desc">
                            <?= get_field('lux_3_4_description')?>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="cost <?= get_field('lux_3_4_color')?>">
                                <b>Вартість проживання в <?= get_field('cottage_year')?>р:</b><br>
                                травень - <?= get_field('lux_3_4_may_cost')?> грн. за номер;<br>
                                червень - <?= get_field('lux_3_4_june_cost')?> грн. за номер;<br>
                                липень - серпень - <?= get_field('lux_3_4_july_august_cost')?> грн. за номер.
                            </div>
                            <div class="booking-block">
                                <h6 class="<?= get_field('lux_3_4_color')?>">запит на бронювання</h6>
                                <input type="text" id="book2" class="form-control form-control-sm">
                                <input type="hidden" id="result2" class="result">

                                <a id="book-btn2" class="booking <?= get_field('lux_3_4_color')?>" href="#">Забронювати</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav2">
                    <?php if(have_rows('lux_3_4_photos')):?>
                        <?php while(have_rows('lux_3_4_photos')): the_row();?>
                            <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="blue-wave">
            <div class="container row text-center">
                <img src="/wp-content/uploads/2021/02/wave-2.png" alt="">
            </div>
        </div>
        <div class="white-houses-title">
            <div class="text-center">
                <h3 id="cottage-white">Білі будиночки для відпочинку</h3>
            </div>
        </div>
        <div class="lux-houses">
            <div class="single-house <?= get_field('house_5_8_color')?>">
                <div class="row align-items-center">
                    <div class="slider-for3 left">
                        <?php if(have_rows('house_5_8_photos')):?>
                            <?php while(have_rows('house_5_8_photos')): the_row();?>
                                <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4 class="house-name text-center <?= get_field('house_5_8_color')?>"><?= get_field('house_5_8_title')?></h4>
                        <div class="desc">
                            <?= get_field('house_5_8_description')?>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="cost <?= get_field('house_5_8_color')?>">
                                <b>Вартість проживання в <?= get_field('cottage_year')?>р:</b><br>
                                травень - <?= get_field('house_5_8_may_cost')?> грн. за номер;<br>
                                червень - <?= get_field('house_5_8_june_cost')?> грн. за номер;<br>
                                липень - серпень - <?= get_field('house_5_8_july_august_cost')?> грн. за номер.
                            </div>
                            <div class="booking-block">
                                <h6 class="<?= get_field('house_5_8_color')?>">запит на бронювання</h6>
                                <input type="text" id="book3" class="form-control form-control-sm">
                                <input type="hidden" id="result3" class="result">

                                <a id="book-btn3" class="booking <?= get_field('house_5_8_color')?>" href="#">Забронювати</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav3">
                    <?php if(have_rows('house_5_8_photos')):?>
                        <?php while(have_rows('house_5_8_photos')): the_row();?>
                            <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="lux-houses">
            <div class="single-house <?= get_field('house_9_color')?>">
                <div class="row align-items-center">
                    <div class="slider-for4 left">
                        <?php if(have_rows('house_9_photos')):?>
                            <?php while(have_rows('house_9_photos')): the_row();?>
                                <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4 class="house-name text-center <?= get_field('house_9_color')?>"><?= get_field('house_9_title')?></h4>
                        <div class="desc">
                            <?= get_field('house_9_description')?>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="cost <?= get_field('house_9_color')?>">
                                <b>Вартість проживання в <?= get_field('cottage_year')?>р:</b><br>
                                травень - <?= get_field('house_9_may_cost')?> грн. за номер;<br>
                                червень - <?= get_field('house_9_june_cost')?> грн. за номер;<br>
                                липень - серпень - <?= get_field('house_9_july_august_cost')?> грн. за номер.
                            </div>
                            <div class="booking-block">
                                <h6 class="<?= get_field('house_9_color')?>">запит на бронювання</h6>
                                <input type="text" id="book4" class="form-control form-control-sm">
                                <input type="hidden" id="result4" class="result">

                                <a id="book-btn4" class="booking <?= get_field('house_9_color')?>" href="#">Забронювати</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav4">
                    <?php if(have_rows('house_9_photos')):?>
                        <?php while(have_rows('house_9_photos')): the_row();?>
                            <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="lux-houses">
            <div class="single-house <?= get_field('house_10_color')?>">
                <div class="row align-items-center">
                    <div class="slider-for5 left">
                        <?php if(have_rows('house_10_photos')):?>
                            <?php while(have_rows('house_10_photos')): the_row();?>
                                <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4 class="house-name text-center <?= get_field('house_10_color')?>"><?= get_field('house_10_title')?></h4>
                        <div class="desc">
                            <?= get_field('house_10_description')?>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="cost <?= get_field('house_10_color')?>">
                                <b>Вартість проживання в <?= get_field('cottage_year')?>р:</b><br>
                                травень - <?= get_field('house_10_may_cost')?> грн. за номер;<br>
                                червень - <?= get_field('house_10_june_cost')?> грн. за номер;<br>
                                липень - серпень - <?= get_field('house_10_july_august_cost')?> грн. за номер.
                            </div>
                            <div class="booking-block">
                                <h6 class="<?= get_field('house_10_color')?>">запит на бронювання</h6>
                                <input type="text" id="book5" class="form-control form-control-sm">
                                <input type="hidden" id="result5" class="result">

                                <a id="book-btn5" class="booking <?= get_field('house_10_color')?>" href="#">Забронювати</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav5">
                    <?php if(have_rows('house_10_photos')):?>
                        <?php while(have_rows('house_10_photos')): the_row();?>
                            <div class="item"><img src="<?= get_sub_field('image')?>" alt=""></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pop-up-wrap">
    <div class="pop-up text-center">
        <div class="close position-relative">
            <span class="first"></span>
            <span class="second"></span>
        </div>
        <h4 class="mb-5">Оформити заявку на бронювання</h4>
        <p class="text-left">Ви обрали: <span class="cottage-name"></span></p>
        <p class="text-left">Дати перебування: <span class="cottage-date"></span></p>
        <form action="post" id="send_booking">
            <div class="d-flex align-items-start text-left mb-3">
                <label for="name">Iм'я</label><input type="text" name="name" id="name" required />
            </div>
            <div class="d-flex align-items-start text-left mb-3">
                <label for="phone">Телефон</label><input type="phone" name="phone" id="phone" required />
            </div>
            <div class="d-flex align-items-start text-left mb-3">
                <label for="email">E-mail</label><input type="email" name="email" id="email" required />
            </div>
            <div class="d-flex align-items-start text-left mb-3">
                <label for="comment">Коментар</label><textarea name="comment" id="comment" cols="30" rows="2"></textarea>
            </div>
            <button type="button" id="submit">Надiслати</button>
        </form>
    </div>
</div>

<?php get_footer();?>
