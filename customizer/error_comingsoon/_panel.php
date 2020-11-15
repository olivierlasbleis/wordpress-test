<?php
$panel    = 'error_comingsoon';
$priority = 1;
Lusion_Kirki::add_section( 'error404_page', array(
    'title'    => esc_html__( '404 Page', 'lusion' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'comingsoon', array(
    'title'    => esc_html__( 'Coming Soon', 'lusion' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );