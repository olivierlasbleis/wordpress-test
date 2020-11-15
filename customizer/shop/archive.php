<?php
$section  = 'shop_archive';
$priority = 1;
$prefix   = 'shop_archive_';
$registered_sidebars = Lusion_Helper::get_registered_sidebars();
Lusion_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'General', 'lusion' ) . '</div>',
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'shop_layout',
    'label'       => esc_html__( 'Shop Layout', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'full_width',
    'choices'     => array(
        'wide' => esc_html__( 'Wide', 'lusion' ),
        'full_width'   => esc_html__( 'Full Width', 'lusion' ),
        'boxed'   => esc_html__( 'Boxed', 'lusion' )
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'select',
    'settings'    => 'shop_sidebar_left',
    'label'       => esc_html__( 'Sidebar Left', 'lusion' ),
    'description' => esc_html__( 'Select sidebar left.', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
    'choices'     => $registered_sidebars,
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'select',
    'settings'    => 'shop_sidebar_right',
    'label'       => esc_html__( 'Sidebar Right', 'lusion' ),
    'description' => esc_html__( 'Select sidebar right.', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
    'choices'     => $registered_sidebars,
) );
Lusion_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Toolbar', 'lusion' ) . '</div>',
) );
Lusion_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'shop_archive_toolbar',
	'label'       => esc_html__( 'Show/Hide Toolbar', 'lusion' ),
	'description' => esc_html__( 'Turn on to show toolbar', 'lusion' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Lusion_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'shop_archive_catalog_ordering',
	'label'       => esc_html__( 'Show/Hide Catalog Ordering', 'lusion' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
	'required'  => array(
        array(
            'setting'  => 'shop_archive_toolbar',
            'operator' => 'contains',
            'value'    => 1,
        ),
    ), 
) );

Lusion_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'shop_archive_filter',
	'label'       => esc_html__( 'Show/Hide Filter', 'lusion' ),
    'description' => esc_html__( 'Works when selecting the left sidebar or right sidebar', 'lusion' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
	'required'  => array(
        array(
            'setting'  => 'shop_archive_toolbar',
            'operator' => 'contains',
            'value'    => 1,
        ),
    ), 
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'toggle',
    'settings'    => 'shop_archive_filter_top',
    'label'       => esc_html__( 'Filter Top', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
    'required'  => array(
        array(
            'setting'  => 'shop_archive_toolbar',
            'operator' => 'contains',
            'value'    => 1,
        ),
        array(
            'setting'  => 'shop_archive_filter',
            'operator' => 'contains',
            'value'    => 1,
        ),
    ),
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'product_column',
    'label'       => esc_html__( 'Product Column', 'lusion' ),
    'description' => esc_html__( 'Option 4 col not for cases where the page has 2 sidebars (left and right)', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '3',
    'choices'     => array(
        '1' => esc_html__( '1', 'lusion' ),
        '2' => esc_html__( '2', 'lusion' ),
        '3' => esc_html__( '3', 'lusion' ),
        '4' => esc_html__( '4', 'lusion' ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'select',
    'settings'    => 'product_layout',
    'label'       => esc_html__( 'Product Layout', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '7',
    'choices'     => array(
        'default' => esc_html__( 'Default', 'lusion' ),
        '1' => esc_html__( 'Style 1', 'lusion' ),
        '2' => esc_html__( 'Style 2', 'lusion' ),
        '3' => esc_html__( 'Style 3', 'lusion' ),
        '4' => esc_html__( 'Style 4', 'lusion' ),
        '5' => esc_html__( 'Style 5', 'lusion' ),
        '6' => esc_html__( 'Style 6', 'lusion' ),
        '7' => esc_html__( 'Style 7', 'lusion' ),
    ),
    'required'  => array(
        array(
            'setting'  => 'product_column',
            'operator' => '!==',
            'value'    => '1',
        ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'pagination_type',
    'label'       => esc_html__( 'Pagination Type', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'number',
    'choices'     => array(
        'number' => esc_html__( 'Number', 'lusion' ),
        'infinite_scrolling' => esc_html__( 'Infinite Scrolling', 'lusion' ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'number',
    'settings'    => 'shop_archive_number_item',
    'label'       => esc_html__( 'Number items', 'lusion' ),
    'description' => esc_html__( 'Controls the number of products display on the shop archive page', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 6,
    'choices'     => array(
        'min'  => 1,
        'max'  => 30,
        'step' => 1,
    ),
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'toggle',
    'settings'    => 'show_hide_banner',
    'label'       => esc_html__( 'Show/Hide Banner', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'select',
    'settings'    => 'product_banner',
    'label'       => esc_html__( 'Select Banner', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
    'choices'     => lusion_get_template(),
    'required'  => array(
        array(
            'setting'  => 'show_hide_banner',
            'operator' => 'contains',
            'value'    => 1,
        ),
    ),
) );