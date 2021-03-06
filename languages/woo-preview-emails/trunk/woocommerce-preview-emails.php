<?php
/*
Plugin Name: Woo Preview Emails
Description: An Extension for WooCommerce that lets you Preview Emails, without having to send them.
Plugin URI: http://www.digamberpradhan.com.np/woocommerce-preview-e-mails/
Author: Digamber Pradhan
Author URI: http://digamberpradhan.com.np/
Version: 1.0
License: http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
Text Domain: woo-preview-emails
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( !function_exists('is_woocommerce_active') ){
	require_once('includes/woo-functions.php');
}

if( is_woocommerce_active() ){
	require_once('classes/class-woocommerce-preview-emails.php');
}