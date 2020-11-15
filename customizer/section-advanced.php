<?php
$section = 'advanced';
$priority = 1;
$prefix = 'advanced_';

Lusion_Kirki::add_field('theme', array(
    'type' => 'custom',
    'settings' => $prefix . 'group_title_' . $priority++,
    'section' => $section,
    'priority' => $priority++,
    'default' => '<div class="big_title">' . esc_html__('Go to top', 'lusion') . '</div>',
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'toggle',
    'settings' => 'scroll_top_enable',
    'label' => esc_html__('Go To Top Button', 'lusion'),
    'description' => esc_html__('Turn on to show go to top button.', 'lusion'),
    'section' => $section,
    'priority' => $priority++,
    'default' => 1,
));
Lusion_Kirki::add_field('theme', array(
    'type' => 'custom',
    'settings' => $prefix . 'group_title_' . $priority++,
    'section' => $section,
    'priority' => $priority++,
    'default' => '<div class="big_title">' . esc_html__('Purchase theme', 'lusion') . '</div>',
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'toggle',
    'settings' => 'purchase_theme_enable',
    'label' => esc_html__('Purchase theme Button', 'lusion'),
    'description' => esc_html__('Turn on to show purchase theme button.', 'lusion'),
    'section' => $section,
    'priority' => $priority++,
    'default' => 0,
));
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'text',
    'settings'    => 'price_theme',
    'label'       => esc_html__( 'Price Theme', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => esc_html__( '19', 'lusion' ),
    'required'  => array(
        array(
            'setting'  => 'purchase_theme_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'text',
    'settings'    => 'link_theme',
    'label'       => esc_html__( 'Link', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => esc_html__( '', 'lusion' ),
    'required'  => array(
        array(
            'setting'  => 'purchase_theme_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );
Lusion_Kirki::add_field('theme', array(
    'type' => 'custom',
    'settings' => $prefix . 'group_title_' . $priority++,
    'section' => $section,
    'priority' => $priority++,
    'default' => '<div class="big_title">' . esc_html__('Style', 'lusion') . '</div>',
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'toggle',
    'settings' => 'custom_css_enable',
    'label' => esc_html__('Custom CSS', 'lusion'),
    'description' => esc_html__('Turn on to enable custom css.', 'lusion'),
    'section' => $section,
    'priority' => $priority++,
    'default' => 1,
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'code',
    'settings' => 'custom_css',
    'section' => $section,
    'priority' => $priority++,
    'default' => 'body{background-color:#fff;}',
    'choices' => array(
        'language' => 'css',
        'theme' => 'monokai',
    ),
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '#lusion-style-inline-css',
            'function' => 'html',
        ),
    ),
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'toggle',
    'settings' => 'custom_js_enable',
    'label' => esc_html__('Custom Javascript', 'lusion'),
    'description' => esc_html__('Turn on to enable custom javascript', 'lusion'),
    'section' => $section,
    'priority' => $priority++,
    'default' => 0,
));

Lusion_Kirki::add_field('theme', array(
    'type' => 'code',
    'settings' => 'custom_js',
    'section' => $section,
    'priority' => $priority++,
    'default'  => '
		(function ($) {
			"use strict";
		})(jQuery);',
	'choices'  => array(
		'language' => 'javascript',
		'theme'    => 'monokai',
	),
));