<?php
$panel    = 'portfolio';
$priority = 1;
Lusion_Kirki::add_section( 'portfolio_archive', array(
    'title'    => esc_html__( 'Portfolio Archive', 'lusion' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );
Lusion_Kirki::add_section( 'portfolio_single', array(
    'title'    => esc_html__( 'Portfolio Single', 'lusion' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );