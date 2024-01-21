<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'my_custom_init' );
function my_custom_init() {

	register_post_type( 'case-studio', array(
		'labels'             => array(
			'name'              => 'Case studio', // Основное название типа записи
			'singular_name'     => 'Case studio', // отдельное название записи типа Book
			'add_new'           => __( 'Case studio' ),
			'add_new_item'      => __( 'Case studio' ),
			'edit_item'         => __( 'Case studio' ),
			'new_item'          => __( 'Case studio' ),
			'view_item'         => __( 'Vedi' ),
			'search_items'      => __( 'Cerca' ),
			'parent_item_colon' => '',
			'menu_name'         => 'Case studio'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => get_template_directory_uri() . '/assets/img/icons/post.png',
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
	) );

}
