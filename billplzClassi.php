<?php

/**
 * Plugin Name: Billplz for ClassiPress
 * Plugin URI: https://wordpress.org/plugins-wp/pbe-for-woocommerce/
 * Description:  Billplz Payment Gateway | Accept Payment using all participating FPX Banking Channels. <a href="https://www.billplz.com/join/8ant7x743awpuaqcxtqufg" target="_blank">Sign up Now</a>.
 * Author: Wanzul Hosting Enterprise
 * Author URI: http://www.wanzul-hosting.com/
 * Version: 3.00
 * License: GPLv3
 * Text Domain: classibillplz
 * Domain Path: /languages/
 */

require_once( __DIR__ . '/includes/billplz.php' );
require_once( __DIR__ . '/includes/APP_Billplz_IPN_Listener.php');

add_action('init', 'billplz_plugin_classi', 0);

function billplz_plugin_classi() {
    include __DIR__ . '/includes/class_Billplz_Gateway.php';
}

/**
 * To detect callback signal
 */
add_action('init', 'billplz_callback_classi');

function billplz_callback_classi() {
    $listener = new APP_Billplz_IPN_Listener();
}