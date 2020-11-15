<?php
$panel    = 'blog';
$priority = 1;
Lusion_Kirki::add_section( 'blog_general', array(
	'title'    => esc_html__( 'General', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'blog_archive', array(
	'title'    => esc_html__( 'Blog Archive', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'blog_single', array(
	'title'    => esc_html__( 'Blog Single Post', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );