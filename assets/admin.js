/**
 * Javascript handling metabox in admin area
 * 
 * @package Produlk
 */

jQuery(document).ready(function(){
	console.log("Produlk Admin JS has been loaded.");
	
	jQuery("input#produlk_enable_option").change(function(){
		if(jQuery(this).is(":checked")){
			jQuery("div#produlk_box_option").show();
		}else{
			jQuery("div#produlk_box_option").hide();
		}
	}).change();
});