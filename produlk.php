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
require __DIR__ . '/configuration/required-plugins.php';
require __DIR__ . '/configuration/post-type.php';
require __DIR__ . '/configuration/metabox.php';

if(is_single() && get_post_type() == 'produlk'){
	
}
?>