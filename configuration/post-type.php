<?php
/**
 * Register custom post type(s) and taxonomy(s) for Produlk
 * Generate by GenerateWP.com
 *
 * @package Produlk
 */
 
function produlk_register_data(){
	produlk_post_type();
	produlk_category();
}
 
function produlk_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'produlk' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'produlk' ),
		'menu_name'             => __( 'Products', 'produlk' ),
		'name_admin_bar'        => __( 'Products', 'produlk' ),
		'archives'              => __( 'Products Archive', 'produlk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'produlk' ),
		'all_items'             => __( 'All Items', 'produlk' ),
		'add_new_item'          => __( 'Add New Item', 'produlk' ),
		'add_new'               => __( 'Add New', 'produlk' ),
		'new_item'              => __( 'New Item', 'produlk' ),
		'edit_item'             => __( 'Edit Item', 'produlk' ),
		'update_item'           => __( 'Update Item', 'produlk' ),
		'view_item'             => __( 'View Item', 'produlk' ),
		'search_items'          => __( 'Search Item', 'produlk' ),
		'not_found'             => __( 'Not found', 'produlk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'produlk' ),
		'featured_image'        => __( 'Featured Image', 'produlk' ),
		'set_featured_image'    => __( 'Set featured image', 'produlk' ),
		'remove_featured_image' => __( 'Remove featured image', 'produlk' ),
		'use_featured_image'    => __( 'Use as featured image', 'produlk' ),
		'insert_into_item'      => __( 'Insert into item', 'produlk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'produlk' ),
		'items_list'            => __( 'Items list', 'produlk' ),
		'items_list_navigation' => __( 'Items list navigation', 'produlk' ),
		'filter_items_list'     => __( 'Filter items list', 'produlk' ),
	);
	$rewrite = array(
		'slug'                  => 'product',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Product', 'produlk' ),
		'description'           => __( 'Product(s) to be shown in catalog', 'produlk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 60,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'produlk', $args );

}

// Register Custom Taxonomy
function produlk_category() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'produlk' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'produlk' ),
		'menu_name'                  => __( 'Categories', 'produlk' ),
		'all_items'                  => __( 'All Categories', 'produlk' ),
		'parent_item'                => __( 'Parent Category', 'produlk' ),
		'parent_item_colon'          => __( 'Parent Category:', 'produlk' ),
		'new_item_name'              => __( 'New Category Name', 'produlk' ),
		'add_new_item'               => __( 'Add New Categoryr', 'produlk' ),
		'edit_item'                  => __( 'Edit Category', 'produlk' ),
		'update_item'                => __( 'Update Category', 'produlk' ),
		'view_item'                  => __( 'View Category', 'produlk' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'produlk' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'produlk' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'produlk' ),
		'popular_items'              => __( 'Popular Categories', 'produlk' ),
		'search_items'               => __( 'Search Categories', 'produlk' ),
		'not_found'                  => __( 'Not Found', 'produlk' ),
		'no_terms'                   => __( 'No categories', 'produlk' ),
		'items_list'                 => __( 'Categories list', 'produlk' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'produlk' ),
	);
	$rewrite = array(
		'slug'                       => 'products/categories/',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'produlk', array( 'produlk' ), $args );

}

add_action( 'init', 'produlk_register_data', 0 );
?>