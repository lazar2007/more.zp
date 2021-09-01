<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
    <div class="container-desc container d-flex">
        <div class="main-menu">
            <?php
            wp_nav_menu( array(
                'menu'            => '',
                'container'       => false,
                'theme_location'  => 'header_menu',
                'menu_class'      => 'd-flex'
            ) );
            ?>
        </div>
        <div class="contacts">
            <?php if(have_rows('header_contacts_repeater', 'option')): ?>
                <?php while(have_rows('header_contacts_repeater', 'option')): the_row(); ?>
                    <div class="single-contact">
                        <img src="<?= get_sub_field('icon')?>" alt="">
                        <?= get_sub_field('text')?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="<?= get_bloginfo('url')?>"><img src="/wp-content/uploads/2021/01/logo.png" alt="" class="mobile-logo"></a>
        <div class="nav mobile-menu">
            <div class="closed position-relative">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </div>
        </div>
        <?php wp_nav_menu( array(
            'menu'            => '',
            'container'       => false,
            'theme_location'  => 'header_menu',
            'menu_class'      => 'header-mobile-menu'
        ) ); ?>
    </div>
</header>
<div id="page" class="site">
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
