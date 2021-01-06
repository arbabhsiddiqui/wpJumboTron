<?php
// Add Scripts function
function jb_add_scripts()
{
    // add main css
    wp_enqueue_style('jb-main-style', plugins_url() . '/youtubesubs/css/styles.css');
    // add main js 
    wp_enqueue_script('jb-main-script', plugins_url() . '/youtubesubs/js/main.js');


    // load external script
    wp_register_style('bootstrapstyle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_register_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrapstyle');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrapjs');
}


// wp hooks
add_action('wp_enqueue_scripts', 'jb_add_scripts');
