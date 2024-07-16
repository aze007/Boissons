<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
// Vérifiez que le fichier est appelé dans un contexte WordPress
if (!defined('ABSPATH')) {
    exit; // 
}



// Accrochez la fonction au hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_dans_menu', 10, 2);