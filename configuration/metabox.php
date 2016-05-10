<?php
/**
 * Register main meta box for Produlk
 *
 * @package Produlk
 */
 
add_action( 'cmb2_admin_init', 'produlk_meta_basic_detail' );
add_action( 'cmb2_admin_init', 'produlk_meta_product_option' );
 
function produlk_meta_basic_detail(){
	$prefix = "produlk_";
	 
	$metabox = new_cmb2_box(array(
		'id' => $prefix . 'box_basic',
		'title' => __('Basic details', 'produlk'),
		'object_types' => array('produlk'),
		'context' => 'normal',
		'priority' => 'high',
		'show_name' => true
 	));
	  
	$metabox->add_field(array(
		'name' => __('Price', 'produlk'),
		'id' => $prefix . 'price',
		'type' => 'text'
	));
	
	$metabox->add_field(array(
		'name' => __('Product Options', 'produlk'),
		'desc' => __('Check this to enable product variations or options', 'produlk'),
		'id' => $prefix . 'enable_option',
		'type' => 'checkbox'
	));
}

function produlk_meta_product_option(){
	$prefix = "produlk_";
	
	$metabox = new_cmb2_box(array(
		'id' => $prefix . 'box_option',
		'title' => __('Product Options', 'produlk'),
		'object_types' => array('produlk'),
		'context' => 'normal',
		'priority' => 'high',
		'show_name' => true
 	));
	 
	$productOptions = $metabox->add_field(array(
		'id' => $prefix . 'options',
		'type' => 'group',
		'description' => __('Specify options for this product, like available color, size, or quantity', 'produlk'),
		'options' => array(
			'group_title' => __('Product Options', 'produlk'),
			'add_button' => __('Add New Option', 'produlk'),
			'remove_button' => __('Remove Option', 'produlk'),
			'sortable' => true
		)
	));

	$metabox->add_group_field($productOptions, array(
		'name' => __('Option', 'produlk'),
		'id' => $prefix . 'option_name',
		'type' => 'text'
	));

	$metabox->add_group_field($productOptions, array(
		'name' => __('Available Values', 'produlk'),
		'id' => $prefix . 'option_value',
		'type' => 'textarea_small',
		'description' => 'A value per line'
	));
	
}
?>