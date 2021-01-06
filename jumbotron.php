<?php
/*
Plugin Name: jumbotron        
Plugin URI: https://aework.in
Description: jumbotron
Version: 0.1.0
Author: Arbab Hussain   
Author URI: https://github.com/arbabhsiddiqui
*/


// exit if directly access
if (!defined('ABSPATH')) {
    exit;
}



// load css and js 
require_once(plugin_dir_path(__FILE__) . '/includes/jumbotron-scripts.php');

// load class


// short code function
function Jumbotron_Shortcode($arg)
{
    $title = $arg['title'];
    $sub_title = $arg['sub_title'];
    $page_url = $arg['page_url'];


    $output = '
    <div class="jumbotron ">
        <h1 class="display-3">' . $title . '</h1>
        <p class="lead">' . $sub_title . '</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="' . $page_url . '" role="button">' . $title . '</a>
        </p>
    </div>';
    return $output;
}






// Hook in function
add_shortcode('jumbotron', 'Jumbotron_Shortcode');
