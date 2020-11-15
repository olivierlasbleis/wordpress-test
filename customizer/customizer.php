<?php
/**
 * Theme Customizer
 *
 * @package APR Lusion
 * @since   1.0
 */
/**
 * Setup configuration
 */
Lusion_Kirki::add_config( 'theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );
/**
 * Add sections
 */
$priority = 1;
Lusion_Kirki::add_panel( 'general', array(
	'title'    => esc_html__( 'General', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'header', array(
	'title'    => esc_html__( 'Header', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'footer', array(
	'title'    => esc_html__( 'Footer', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_panel( 'blog', array(
	'title'    => esc_html__( 'Blog', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_panel( 'portfolio', array(
	'title'    => esc_html__( 'Portfolio', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_panel( 'shop', array(
	'title'    => esc_html__( 'Shop', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_panel( 'popup', array(
	'title'    => esc_html__( 'Popup', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'sidebars', array(
	'title'    => esc_html__( 'Sidebars', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_panel( 'error_comingsoon', array(
	'title'    => esc_html__( '404 Page & Coming Soon', 'lusion' ),
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'advanced', array(
	'title'    => esc_html__( 'Advanced', 'lusion' ),
	'priority' => $priority ++,
) );

/* Custom field height logo */
Lusion_Kirki::add_field( 'theme', array(
    'type'      => 'slider',
    'settings'  => 'logo_size',
    'label'     => esc_html__( 'Width Logo', 'lusion' ),
    'description' => esc_html__('Select max width for your logo','lusion'),
    'section'   => 'title_tagline',
    'priority'  => 9,
    'default'   => '100',
    'transport' => 'refresh',
    'choices'   => array(
        'min'  => 30,
        'max'  => 200,
        'step' => 1,
    ),
    'output'    => array(
        array(
            'element'     => '.custom-logo',
            'property'    => 'max-width',
            'units'       => 'px',
        ),
    ),
) );

/**
 * Load panel & section files
 */
/* General */
require_once LUSION_CUSTOMIZER_DIR .'/general/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/general/typography.php';
require_once LUSION_CUSTOMIZER_DIR .'/general/color.php';
require_once LUSION_CUSTOMIZER_DIR .'/general/layout.php';
require_once LUSION_CUSTOMIZER_DIR .'/general/preloader.php';
require_once LUSION_CUSTOMIZER_DIR .'/general/breadcrumb.php';;
/* Header */
require_once LUSION_CUSTOMIZER_DIR .'/header/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/header/general.php';
/* Footer */
require_once LUSION_CUSTOMIZER_DIR .'/section-footer.php';
/* Advanced */
require_once LUSION_CUSTOMIZER_DIR .'/section-advanced.php';
/* Blog */
require_once LUSION_CUSTOMIZER_DIR .'/blog/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/blog/general.php';
require_once LUSION_CUSTOMIZER_DIR .'/blog/archive.php';
require_once LUSION_CUSTOMIZER_DIR .'/blog/single.php';
/* Portfolio */
require_once LUSION_CUSTOMIZER_DIR .'/portfolio/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/portfolio/archive.php';
require_once LUSION_CUSTOMIZER_DIR .'/portfolio/single.php';
/* Shop */
require_once LUSION_CUSTOMIZER_DIR .'/shop/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/shop/general.php';
require_once LUSION_CUSTOMIZER_DIR .'/shop/archive.php';
require_once LUSION_CUSTOMIZER_DIR .'/shop/single.php';
require_once LUSION_CUSTOMIZER_DIR .'/shop/cart.php';
require_once LUSION_CUSTOMIZER_DIR .'/section-sidebars.php';
/* Popup */
require_once LUSION_CUSTOMIZER_DIR .'/popup/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/popup/account.php';
require_once LUSION_CUSTOMIZER_DIR .'/popup/newsletter.php';

/* errorcomingsoon */
require_once LUSION_CUSTOMIZER_DIR .'/error_comingsoon/_panel.php';
require_once LUSION_CUSTOMIZER_DIR .'/error_comingsoon/error.php';
require_once LUSION_CUSTOMIZER_DIR .'/error_comingsoon/comingsoon.php';
