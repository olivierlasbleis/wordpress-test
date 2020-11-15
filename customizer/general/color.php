<?php
$section  = 'color-config';
$priority = 1;
$prefix   = 'general_';
$show = esc_html__( 'Show', 'lusion' );
$hide = esc_html__( 'Hide', 'lusion' );

/*--------------------------------------------------------------
# Color
--------------------------------------------------------------*/
Lusion_Kirki::add_field( 'theme', array(
    'type'     => 'custom',
    'settings' => $prefix . 'group_color' . $priority ++,
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '<div class="big_title">' . esc_html__( 'Color', 'lusion' ) . '</div>',
) );

Lusion_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => 'primary_color',
	'label'       => esc_html__( 'Primary Color', 'lusion' ),
	'description' => esc_html__( 'If you select a color, there is only one main color, while two colors change it to a gradient.', 'lusion' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => '',
) );

/*--------------------------------------------------------------
# Body background
--------------------------------------------------------------*/

Lusion_Kirki::add_field( 'theme', array(
    'type'     => 'custom',
    'settings' => $prefix . 'group_bg' . $priority ++,
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '<div class="big_title">' . esc_html__( 'Body background', 'lusion' ) . '</div>',
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'background',
    'settings'    => $prefix . 'image_body',
    'label'       => esc_html__( 'Background', 'lusion' ),
    'description' => esc_html__( 'Controls background of the outer background area in boxed mode.', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
	'transport'   => 'auto',
    'default'     => array(
        'background-color'      => 'rgba(255,255,255,0)',
        'background-image'      => '',
        'background-repeat'     => 'no-repeat',
        'background-size'       => 'contain',
        'background-attachment' => 'scroll',
        'background-position'   => 'center center',
    ),
    'output'      => array(
        array(
            'element' => 'html body',
        ),
    ),
) );

/*--------------------------------------------------------------
# Button Color
--------------------------------------------------------------*/

Lusion_Kirki::add_field( 'theme', array(
    'type'     => 'custom',
    'settings' => $prefix . 'group_title_button' . $priority ++,
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '<div class="big_title">' . esc_html__( 'Button', 'lusion' ) . '</div>',
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'toggle',
    'settings' => 'btn_custom',
    'label'    => esc_html__( 'Enable Custom', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'color-alpha',
    'settings'    => 'btn_primary_color',
    'label'       => esc_html__( 'Button Primary', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport'   => 'auto',
    'default'     => '',
    'required'  => array(
        array(
            'setting'  => 'btn_custom',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'color-alpha',
    'settings'    => 'btn_dark_color',
    'label'       => esc_html__( 'Button Dark', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport'   => 'auto',
    'default'     => Lusion::HEADING_COLOR,
    'required'  => array(
        array(
            'setting'  => 'btn_custom',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'color-alpha',
    'settings'    => 'btn_light_color',
    'label'       => esc_html__( 'Button Light', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'transport'   => 'auto',
    'default'     => '#ebeeee',
    'required'  => array(
        array(
            'setting'  => 'btn_custom',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );