<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$opt_prefix = 'resido_';
$opt_name   = 'resido_options';

Redux::set_field( $opt_name, 'resido_header', array(
    'id'       => $opt_prefix . 'sticky-select-image',
    'required' => array(
		array( $opt_prefix . 'header_type', '=', '1' ),
		array( $opt_prefix . 'header_default_style', '=', '1' ),
	),
    'type'     => 'media', 
    'url'      => true,
    'title'    => esc_html__('Select Sticky Image', 'resido'),
    'default'  => array(
        'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
    ),
) );

?>