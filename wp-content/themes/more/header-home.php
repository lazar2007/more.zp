<?php
/**
 * The header for Home Page.
 *
 * This is the template that displays all of the <head> section and everything up until main for Home page.
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
<header class="home">
    <div class="container-desc container d-flex">
        <img src="/wp-content/uploads/2021/01/logo.png" alt="" class="mobile-logo">
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
        <div class="social-links d-flex">
            <?php
            if( have_rows('social_links', 'option') ):
                while( have_rows('social_links', 'option') ) : the_row(); ?>
                    <a href="<?= get_sub_field('link'); ?>">
                        <img src="<?= get_sub_field('icon')?>" alt="">
                    </a>
                <?php endwhile;
            endif;
            ?>
        </div>
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
