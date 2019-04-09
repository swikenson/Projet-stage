<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('widgets');


// Register Style
function custom_styles() {

    wp_deregister_style( 'font-awesome' );
    wp_register_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '4.1.0' );
    wp_enqueue_style( 'font-awesome' );

    wp_deregister_style( 'bootstrap' );
    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', false, '3.2.0' );
    wp_enqueue_style( 'bootstrap' );

    wp_enqueue_style('blog_styles', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Register Script
function custom_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', false );
    wp_enqueue_script( 'jquery' );

    wp_deregister_script( 'popper' );
    wp_register_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ), '1.14.7', false );
    wp_enqueue_script( 'popper' );

    wp_deregister_script( 'midnight.jquery' );
    wp_register_script('midnight.jquery', get_template_directory_uri() . '/js/midnight.jquery.min.js','' ,'' ,'', true);
    wp_enqueue_script('midnight.jquery');

    wp_register_script('burger', get_template_directory_uri() . '/js/burger.js','' ,'' ,'', true);
    wp_enqueue_script('burger');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js','' ,'' ,'', true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});


/*-----définir une taille pour the_excerpt()-----*/

function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*--------Mise en place d'un widget---------*/

function footer_widgets_init()
{

    register_sidebar(array(

        'name' => 'Ma nouvelle zone de widget',
        'id' => 'new-widget-area',
        'before_widget' => '<div class="nwa-widget ">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ));
}
add_action( 'widgets_init', 'footer_widgets_init' );

/*-------Emplacement des menus-------*/

function register_my_menus(){
    register_nav_menus(
        array(
            'main'  => 'Main menu DetD',
            'footer'  => 'Footer menu DetD'
        ));
}

add_action('init', 'register_my_menus');

/*------Pagination---------*/
function bongo_wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_action('init', 'bongo_wp_pagination');

/*-----Commentaires--------*/




