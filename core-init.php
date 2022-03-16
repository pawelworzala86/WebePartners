<?php 
/*
*
*	***** WebePartners *****
*
*	This file initializes all W Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('W_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('W_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('W_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('W_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function w_register_core_css(){
wp_enqueue_style('w-core', W_CORE_CSS . 'w-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'w_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function w_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('w-core', W_CORE_JS . 'w-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'w_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( W_CORE_INC . 'w-core-functions.php' ) ) {
	require_once W_CORE_INC . 'w-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( W_CORE_INC . 'w-ajax-request.php' ) ) {
	require_once W_CORE_INC . 'w-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( W_CORE_INC . 'w-shortcodes.php' ) ) {
	require_once W_CORE_INC . 'w-shortcodes.php';
}