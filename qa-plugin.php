<?php
/*
	Plugin Name: Short URL
	Plugin URI: 
	Plugin Description: Shorten URL to yourmain/number/
	Plugin Version: 1.0
	Plugin Date: 2016-11-27
	Plugin Author: Tiby Wang
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_overrides('qa-q-request-overrides.php');
