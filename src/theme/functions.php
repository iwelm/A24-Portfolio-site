<?php

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}


add_action('init', 'pw_creer_menu');

// page d'options ACF
if( function_exists('acf_add_options_page')){

	// on ajoute une page d'option
	acf_add_options_page(array(
		'page_title' => 'Options générales',
		'menu_title' => 'Options générales',
		'menu_slug' => 'pw-theme-options-generales',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}

// CPT projet
// Register Custom Post Type
function cpt_projet() {

	$labels = array(
		'name'                  => _x( 'Projets', 'Post Type General Name', 'wl' ),
		'singular_name'         => _x( 'Projet', 'Post Type Singular Name', 'wl' ),
		'menu_name'             => __( 'Projets', 'wl' ),
		'name_admin_bar'        => __( 'Post Type', 'wl' ),
		'archives'              => __( 'Item Archives', 'wl' ),
		'attributes'            => __( 'Item Attributes', 'wl' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wl' ),
		'all_items'             => __( 'All Items', 'wl' ),
		'add_new_item'          => __( 'Add New Item', 'wl' ),
		'add_new'               => __( 'Ajouter un projet', 'wl' ),
		'new_item'              => __( 'Nouveau projet', 'wl' ),
		'edit_item'             => __( 'Éditer un projet', 'wl' ),
		'update_item'           => __( 'MAJ d\\\'un projet', 'wl' ),
		'view_item'             => __( 'voir le projet', 'wl' ),
		'view_items'            => __( 'Voir tous les projets', 'wl' ),
		'search_items'          => __( 'Chercher un projet', 'wl' ),
		'not_found'             => __( 'Projet non trouvé', 'wl' ),
		'not_found_in_trash'    => __( 'Projet non trouvé dans la corbeille', 'wl' ),
		'featured_image'        => __( 'Image en avant', 'wl' ),
		'set_featured_image'    => __( 'Placer l\\\'image mise en avant', 'wl' ),
		'remove_featured_image' => __( 'Enlever l\\\'image mise en avant', 'wl' ),
		'use_featured_image'    => __( 'Use as featured image', 'wl' ),
		'insert_into_item'      => __( 'Insert into item', 'wl' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wl' ),
		'items_list'            => __( 'Items list', 'wl' ),
		'items_list_navigation' => __( 'Items list navigation', 'wl' ),
		'filter_items_list'     => __( 'Filter items list', 'wl' ),
	);
	$args = array(
		'label'                 => __( 'Projet', 'wl' ),
		'description'           => __( 'Post Type Description', 'wl' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projet', $args );

}
add_action( 'init', 'cpt_projet', 0 );








