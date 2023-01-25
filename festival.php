<?php

/**
 * Plugin Name: le Festival
 * Plugin URI:
 * Description: Plugin pour le Festival
 * Version: 1.0.0.0
 * Author: Agathe Dufour
 * Author URI: https://github.com/AgatheTheCode
 */

//chargement des scripts
function add_js_scripts()
{
    wp_enqueue_style('festival-css', plugins_url('/style/styles.css', __FILE__), false);
    wp_enqueue_script('script', plugins_url('/script/script.js',  __FILE__), true);
}
add_action('wp_enqueue_scripts', 'add_js_scripts');

//chargement du shortcode
function Festival()
{
    ob_start();
    include_once dirname(__FILE__) . '/templates/block-head.php';
    include_once dirname(__FILE__) . '/templates/block-card.php';
    include_once dirname(__FILE__) . '/templates/block-cta.php';

    return ob_get_clean();
}
add_shortcode('festival', 'festival');
