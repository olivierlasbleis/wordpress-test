<?php
$theme = wp_get_theme();
define('LUSION_CSS', get_template_directory_uri() . '/css');
define('LUSION_JS', get_template_directory_uri() . '/assets/js');
define('LUSION_THEME_NAME', $theme['Name']);
define('LUSION_THEME_VERSION', $theme->get('Version'));
define('LUSION_THEME_DIR', get_template_directory());
define('LUSION_THEME_URI', get_template_directory_uri());
define('LUSION_THEME_IMAGE_URI', get_template_directory_uri() . '/assets/images');
define('LUSION_CHILD_THEME_URI', get_stylesheet_directory_uri());
define('LUSION_CHILD_THEME_DIR', get_stylesheet_directory());
define('LUSION_FRAMEWORK_DIR', get_template_directory() . '/inc');
define('LUSION_ADMIN', get_template_directory() . '/inc/admin');
define('LUSION_FRAMEWORK_FUNCTION', get_template_directory() . '/inc/functions');
define('LUSION_FRAMEWORK_PLUGIN', get_template_directory() . '/inc/plugins');
define('LUSION_CUSTOMIZER_DIR', LUSION_THEME_DIR . '/customizer');

require_once LUSION_FRAMEWORK_PLUGIN . '/functions.php';
require_once LUSION_FRAMEWORK_FUNCTION . '/function.php';
$options = get_option('arrowpress_active');
$keyValue = isset($options['license_key']) ? $options['license_key'] : '';
if((isLocalhost() == 1 && $keyValue =='') || (class_exists('WooCommerce') && $keyValue)){
	require_once LUSION_FRAMEWORK_FUNCTION . '/woocommerce.php';
}
require_once LUSION_FRAMEWORK_FUNCTION . '/ajax_search/ajax-search.php';
require_once LUSION_FRAMEWORK_FUNCTION . '/menus/menu.php';
require_once LUSION_FRAMEWORK_FUNCTION . '/menus/class-edit-menu-walker.php';
require_once LUSION_FRAMEWORK_FUNCTION . '/menus/class-walker-nav-menu.php';
require_once LUSION_FRAMEWORK_FUNCTION . '/ajax-account/custom-ajax.php';
require_once LUSION_FRAMEWORK_DIR . '/class-customize.php';
require_once LUSION_FRAMEWORK_DIR . '/class-functions.php';
require_once LUSION_FRAMEWORK_DIR . '/class-helper.php';
require_once LUSION_FRAMEWORK_DIR . '/class-kirki.php';
require_once LUSION_FRAMEWORK_DIR . '/class-static.php';
require_once LUSION_FRAMEWORK_DIR . '/class-templates.php';
require_once LUSION_FRAMEWORK_DIR . '/class-aqua-resizer.php';
require_once LUSION_FRAMEWORK_DIR . '/class-global.php';
require_once LUSION_FRAMEWORK_DIR . '/class-widgets.php';
require_once LUSION_FRAMEWORK_DIR . '/class-wpml.php';
require_once LUSION_FRAMEWORK_DIR . '/class-post-type-blog.php';
require_once LUSION_FRAMEWORK_DIR . '/class-post-type-portfolio.php';
require_once LUSION_FRAMEWORK_DIR . '/class-actions-filters.php';
require_once LUSION_FRAMEWORK_DIR . '/class-enqueue.php';
require_once LUSION_FRAMEWORK_DIR . '/class-custom-style.php';
require_once LUSION_FRAMEWORK_DIR . '/class-minify.php';
if (!isset($content_width)) {
    $content_width = 1170;
}

function lusion_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support(
        'custom-logo',
        array(
            'flex-width' => false,
            'flex-height' => false,
        )
    );
}
function isLocalhost() {
	$whitelist = array(
		'127.0.0.1',
		'127.0.0.1:8080',
		'localhost',
		'localhost:8080',
		'::1'
	);
	
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

add_action('after_setup_theme', 'lusion_theme_setup');