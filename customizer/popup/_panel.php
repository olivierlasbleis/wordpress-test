<?php
$panel    = 'popup';
$priority = 1;
Lusion_Kirki::add_section( 'popup_newsletter', array(
	'title'    => esc_html__( 'Newsletter', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'popup_account', array(
	'title'    => esc_html__( 'Account', 'lusion' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );