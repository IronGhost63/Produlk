<?php
/**
 * Functions relate to template handling
 *
 * @package Produlk
 */

if(function_exists("is_template_exists")){
	function is_template_exists($name){
		$template = locate_template($name);
		if(!empty($template)){
			return true;
		}else{
			return false;
		}
	}
}
?>