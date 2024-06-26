<?php
/*
Plugin Name: CI Distance formula calculator
Plugin URI: https://www.calculator.io/distance-formula-calculator/
Description: Distance formula calculator finds the distance between two points on a plane based on their coordinates. The calculator uses the Euclidean distance formula.  
Version: 1.0.0
Author: Distance Formula Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_distance_formula_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Distance Formula Calculator by www.calculator.io";

function display_calcio_ci_distance_formula_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Distance Formula Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_distance_formula_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_distance_formula_calculator', 'display_calcio_ci_distance_formula_calculator' );