<?php
$panel    = 'general';
$priority = 1;
Lusion_Kirki::add_section( 'layout-config', array(
    'title'    => esc_html__( 'Layout', 'lusion' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'color-config', array(
	'title'    => esc_html__( 'Color', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'typography-config', array(
	'title'    => esc_html__( 'Typography', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'preloader-config', array(
	'title'    => esc_html__( 'Preloader', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'breadcrumb-config', array(
	'title'    => esc_html__( 'Breadcrumbs & Page Title', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );