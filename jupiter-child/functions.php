<?php



// Fixes the Ability to “Tab” Through Fields in Gravity Forms


add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}



// Remove these brackets to add 
// add_action( 'init', 'grav_custom_post_type_casestudies' );
// function grav_custom_post_type_casestudies()
// {
// 	$single_label = 'MY CUSTOM POST TYPE';
// 	$plural_label = 'MY CUSTOM POST TYPES';
// 	$name = 'case_study';
// 	$slug = str_replace('_', '-', $name);

// 	// Case Studies
// 	register_post_type($name, array(
// 	  'label' => $plural_label,
// 	  'description' => '',
// 	  'public' => true,
// 	  'publicly_queryable'  => true,
// 	  'show_ui' => true,
// 	  'show_in_menu' => true,
// 	  'capability_type' => 'page',
// 	  'map_meta_cap' => true,
// 	  'hierarchical' => false,
// 	  'rewrite' => array('with_front' => false, 'slug' => $slug),
// 	  'query_var' => true,
// 	  'exclude_from_search' => false,
// 	  'can_export'          => true,
// 	  'has_archive'         => true,
// 	  'menu_icon'		=> 'dashicons-portfolio',
// 	  'supports' => array('title','editor','excerpt','thumbnail'),
// 	  'labels' => array (
// 		  'name' => $plural_label,
// 		  'singular_name' => $single_label,
// 		  'menu_name' => $plural_label,
// 		  'add_new' => 'Add '.$single_label,
// 		  'add_new_item' => 'Add New '.$single_label,
// 		  'edit' => 'Edit',
// 		  'edit_item' => 'Edit '.$single_label,
// 		  'new_item' => 'New '.$single_label,
// 		  'view' => 'View '.$single_label,
// 		  'view_item' => 'View '.$single_label,
// 		  'search_items' => 'Search '.$plural_label,
// 		  'not_found' => 'No '.$plural_label.' Found',
// 		  'not_found_in_trash' => 'No '.$plural_label.' Found in Trash',
// 		  'parent' => 'Parent '.$single_label,
// 	)));
// }

