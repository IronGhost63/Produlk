<?php
/**
 * Register main meta box for Produlk
 *
 * @package Produlk
 */
 
 add_action( 'cmb2_admin_init', 'produlk_basic_detail' );
 
 function produlk_basic_detail(){
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
 }
?>