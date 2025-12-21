<?php

define('THEME_PATH', get_template_directory());

require_once THEME_PATH . '/inc/cpt.php';

function awesome_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), time(), 'all');
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/awesome.js', array(), time(), true);

}


add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup()
{

    add_theme_support('menus');

    register_nav_menu('primary','Primary Menu');
    register_nav_menu('footer-location','Footer Menu');
}

add_action('init', 'awesome_theme_setup');

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','gallery','link','image','quote','status','video','audio','chat'));

function awesome_widget_setup(){

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id'  => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',

        )
    );


     register_sidebar(
        array(
            'name' => 'Sidebar',
            'id'  => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',

        )
    );

    register_sidebar(
        array(
            'name' => 'Sidebar for contact page',
            'id'  => 'sidebar-contact',
            'class' => 'custom',
            'description' => 'These widgets are displayed on contact page',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',

        )
    );

}

add_action('widgets_init', 'awesome_widget_setup');

