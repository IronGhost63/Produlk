<?php
/**
 * Check and install required plugin(s) to run Produlk
 *
 * @package Produlk
 */
 
add_action( 'tgmpa_register', 'get_required_plugin' );

function get_required_plugin(){
	$plugins = array(
		array(
			'name' => "CMB2",
			'slug' => "cmb2",
			'force_activation' => true
		)
	);
	
	$config = array(
		'id' => 'produlk',
		'menu' => 'produlk-install-plugins',
		'is_automatic' => true
	);
	
	tgmpa( $plugins, $confi );
}
?>