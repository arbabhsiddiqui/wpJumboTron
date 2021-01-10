<?php
/*
Plugin Name: eventscroll        
Plugin URI: https://aework.in
Description: eventscroll
Version: 0.1.0
Author: Arbab Hussain   
Author URI: https://github.com/arbabhsiddiqui
*/


// exit if directly access
if (!defined('ABSPATH')) {
    exit;
}



// load css and js 
require_once(plugin_dir_path(__FILE__) . '/includes/eventscroll-scripts.php');

// load class


// short code function
function eventscroll_Shortcode()
{
 

    $output = '
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link filter-btn active" data-filter="all">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link filter-btn" data-filter="one" >ABC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link filter-btn" data-filter="two">123</a>
        </li>
        <li class="nav-item">
            <a class="nav-link filter-btn" data-filter="three">random</a>
        </li>
    </ul>

   <div class="row ets-row">
   <div class="col-sm-4 ets-col one " >ABC</div>
   <div class="col-sm-4 ets-col one" >DEF</div>
   <div class="col-sm-4 ets-col one" >GHI</div>
   <div class="col-sm-4 ets-col two" >123</div>
   <div class="col-sm-4 ets-col two" >456</div>
   <div class="col-sm-4 ets-col two" >789</div>
   <div class="col-sm-4 ets-col three" >zy</div>
   <div class="col-sm-4 ets-col three" >xy</div>
   <div class="col-sm-4 ets-col three" >xyaa</div>
   </div>
    ';
    return $output;
}






// Hook in function
add_shortcode('eventScroll', 'eventscroll_Shortcode');
