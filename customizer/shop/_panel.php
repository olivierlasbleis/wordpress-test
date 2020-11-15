<?php
$panel    = 'shop';
$priority = 1;
Lusion_Kirki::add_section( 'general_shop', array(
	'title'    => esc_html__( 'General', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'shop_archive', array(
	'title'    => esc_html__( 'Shop Archive', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'shop_single', array(
	'title'    => esc_html__( 'Shop Single', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'shopping_cart', array(
	'title'    => esc_html__( 'Shopping Cart', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );