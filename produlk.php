<?php
/*
	Plugin name: Produlk
	Plugin URI: https://github.com/jirayu16563/Produlk
	Description: A Product Catalog plugin for WordPress
	Author: Jirayu Yingthawornsuk
	Version: 0.1
	Author URI: http://jirayu.in.th
	Text Domain: produlk
*/

require __DIR__ . '/vendor/autoload.php'; // Load required packages from composer
require __DIR__ . '/helpers/cmb-field-select2/cmb-field-select2.php';
require __DIR__ . '/configuration/required-plugins.php';
require __DIR__ . '/configuration/post-type.php';
require __DIR__ . '/configuration/metabox.php';

add_action('admin_init', 'produlk_admin_init');

function produlk_admin_init(){
	wp_register_script("produlk-admin", plugin_dir_url( __FILE__ ) . '/assets/admin.js', array('jquery'));
	
	wp_enqueue_script('produlk-admin');
}

if(is_single() && get_post_type() == 'produlk'){
	
}
?>