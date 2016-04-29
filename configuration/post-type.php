<?php
// Register Custom Post Type
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
add_action( 'init', 'produlk_post_type', 0 );
?>