<?php

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

