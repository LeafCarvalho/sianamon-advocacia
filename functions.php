<?php



require get_template_directory() . './theme-settings/personalTheme.php';
add_action( 'customize_register', 'panelMultiFunction' );


if ( ! defined( 'WP_ADMIN_DIR' ) ) {
	define( 'WP_ADMIN_DIR', 'restricao' ); 
}

if ( ! defined( 'ADMIN_COOKIE_PATH' ) ) {
	define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR); 
}

// Replace the version number of the theme on each release.
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}
// Clean up wp_head
// Remove Really simple discovery link
remove_action('wp_head', 'rsd_link');
// Remove Windows Live Writer link
remove_action('wp_head', 'wlwmanifest_link');
// Remove the version number
remove_action('wp_head', 'wp_generator');

// Remove curly quotes
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

// Allow HTML in user profiles
remove_filter('pre_user_description', 'wp_filter_kses');

//Optimize Database
function optimize_database(){
  global $wpdb;
  $all_tables = $wpdb->get_results('SHOW TABLES',ARRAY_A);
  foreach ($all_tables as $tables){
    $table = array_values($tables);
    $wpdb->query("OPTIMIZE TABLE ".$table[0]);
  }
}

function simple_optimization_cron_on(){
  wp_schedule_event(time(), 'daily', 'optimize_database');
}

function simple_optimization_cron_off(){
  wp_clear_scheduled_hook('optimize_database');
}
register_activation_hook(__FILE__,'simple_optimization_cron_on');
register_deactivation_hook(__FILE__,'simple_optimization_cron_off');


function personal_options($option_name) {
    return get_theme_mod($option_name);
}


// Logout url link
add_filter( 'login_headerurl', 'custom_logout' );
function custom_logout($url) {
  return home_url('/');
}

// Sidebar
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Sidebar Widgets',
    'id'   => 'sidebar-widgets',
    'description'   => 'These are widgets for the sidebar.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
}

// Menu Register
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Themes Supports
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

//Let WordPress manage the document title. / By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
add_theme_support('title-tag');

// Thumbnail Support and Sizes
add_theme_support('post-thumbnails');

// Image sets
if(isset($content_width)){
  $content_width = 1170; //pixels - Max Bootstrap width
}

function my_custom_admin_styles() {
    wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'my_custom_admin_styles');

// Script Register
function theme_name_scripts() {
  wp_deregister_script('jquery');
  //Bootstrap 5.0.2 
  wp_enqueue_style( 'bootStrapStyle', get_template_directory_uri() . '/css/bootstrap.concat.min.css', array(), _S_VERSION );
  wp_enqueue_style( 'slickSlider', get_template_directory_uri() . '/slick/slick-slider.concat.min.css', array(), _S_VERSION );
  wp_enqueue_style( 'mainStyle', get_template_directory_uri() . '/css/stylesheet.min.css', array(), _S_VERSION );
  //Jquery 3.5.1.min - popper.js 2.9.2 - bootstrap/5.0.2
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/concat.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );