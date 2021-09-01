<?php
/**
 * Register style and script
 */
function add_style_and_scrips() {
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), false, true );
    // add bootstrap
    wp_enqueue_script( 'bootstrap.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_style( 'bootstrap.css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style( 'slick.css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_style( 'slick.theme.css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');

    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.min.js', array(), false, true );
    wp_enqueue_style( 'app.css', get_template_directory_uri() . '/assets/css/app.min.css');
    if( is_page('12') ){
        wp_enqueue_script( 'booking.js', get_template_directory_uri() . '/assets/js/booking.js', array(), false, true );
    }

    //libraries
    wp_enqueue_script( 'slick.js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), false, true );
    wp_enqueue_script( 'moments.js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js', array(), false, true );
    wp_enqueue_script( 'lightpick.js', 'https://unpkg.com/lightpick@latest/lightpick.js', array(), false, true );
    wp_enqueue_style( 'lightpick.css', get_template_directory_uri() . '/assets/css/lightpick.css');

    //register Ajax
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    wp_localize_script( 'ajax-script', 'MyAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
}
add_action( 'wp_enqueue_scripts', 'add_style_and_scrips' );

/**
 * Register menu
 **/
register_nav_menus(array(
    'header_menu'    => 'Menu header'
));



/**
 * Activate post thumbnail
 **/
add_theme_support('post-thumbnails');



/**
 * Disable Gutenberg
 **/
if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
}
else {
    add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
}


/**
 * ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}



/**
 * Redirect to https
 **/
function force_https () {
    if ( !is_ssl() ) {
        wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
        exit();
    }
}
//add_action ( 'template_redirect', 'force_https', 1 );


/**
 * Hide admin bar
 */
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}

add_action('rev', 'send_email');




add_action("wp_ajax_frontend_action_without_file" , "frontend_action_without_file");
add_action("wp_ajax_nopriv_frontend_action_without_file" , "frontend_action_without_file");

function frontend_action_without_file(){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    $cottage = $_POST['cottage'];
    $dates = $_POST['dates'];

    $to = 'lazar2007@gmail.com';
    $subject = 'Бронирование коттеджа '.$cottage;
    $body = 'Бронь на даты: '.$dates.'. Имя контакта: '.$name.'. Телефон: '.$phone.'. Почта:  '.$email.'. Коментарий: '.$comment;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    if(wp_mail( $to, $subject, $body, $headers )){
        return 'success';
    }

    wp_die();
}


/**
 * Add Shortcodes
 */
include 'shortcodes/orange_wave_shortcode.php'

?>