<?php

function awesome_create_cpt_book() {
    $labels = array(
        'name'               => _x( 'Books', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Book', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Books', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Add New Book', 'portfolio', 'textdomain' ),
        'add_new_item'       => __( 'Add New Book', 'textdomain' ),
        'new_item'           => __( 'New Book', 'textdomain' ),
        'edit_item'          => __( 'Edit Book', 'textdomain' ),
        'view_item'          => __( 'View Book', 'textdomain' ),
        'all_items'          => __( 'All Books', 'textdomain' ),
        'search_items'       => __( 'Search Books', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Books:', 'textdomain' ),
        'not_found'          => __( 'No Books found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No Books found in Trash.', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'            => array( 'slug' => 'book' ),
        'show_ui'            => true,
        'menu_icon'          => 'dashicons-book',
    );

    register_post_type( 'book', $args );
}

add_action( 'init', 'awesome_create_cpt_book' );
