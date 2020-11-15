<?php
$section  = 'portfolio_archive';
$priority = 1;
$prefix   = 'portfolio_';
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'text',
    'settings'    =>  $prefix . 'title',
    'label'       => esc_html__( 'Portfolio Title', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => esc_html__( 'portfolio', 'lusion' ),
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => $prefix . 'layout',
    'label'       => esc_html__( 'Portfolio Layout General', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'full_width',
    'choices'     => array(
        'wide' => esc_html__( 'Wide', 'lusion' ),
        'full_width'   => esc_html__( 'Full Width', 'lusion' ),
        'boxed' => esc_html__( 'Boxed', 'lusion' ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => $prefix . 'layout2',
    'label'       => esc_html__( 'Portfolio Layout', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'layout1',
    'choices'     => array(
        'layout1'    => esc_html__( 'Layout 1', 'lusion' ),
        'layout2'    => esc_html__( 'Layout 2', 'lusion' ),
    ),
) );
Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => $prefix . 'columns',
    'label'       => esc_html__( 'Layout Columns', 'lusion' ),
    'description' => esc_html__( 'Select columns for Portfolio.', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '3',
    'choices'     => array(
        '1' => esc_html__( '1 col', 'lusion' ),
        '2'   => esc_html__( '2 col', 'lusion' ),
        '3' => esc_html__( '3 col', 'lusion' ),
        '4' => esc_html__( '4 col', 'lusion' ),
    ),
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => $prefix . 'pagination',
    'label'       => esc_html__( 'Pagination type', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'number',
    'choices'     => array(
        'load_more' => esc_html__( 'Load more', 'lusion' ),
        'next_prev'   => esc_html__( 'Next/Prev', 'lusion' ),
        'number' => esc_html__( 'Number', 'lusion' ),
        'none' => esc_html__( 'None', 'lusion' ),
    ),
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'number',
    'settings'    => $prefix . 'number_cate',
    'label'       => esc_html__( 'Number of categories to show', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '3',
) );

Lusion_Kirki::add_field( 'theme', array(
    'type'        => 'number',
    'settings'    =>   $prefix . 'archive_number_item',
    'label'       => esc_html__( 'Post show per page', 'lusion' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 6,
    'choices'     => array(
        'min'  => 1,
        'max'  => 30,
        'step' => 1,
    ),
) );

