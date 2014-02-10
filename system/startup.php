<?php
// Error Reporting
error_reporting(E_ALL);

// Check Version
if (version_compare(phpversion(), '5.1.0', '<') == true) {
	exit('PHP5.1+ Required');
}

// Helper

// Engine
require_once ('engine/model.php');
require_once ('engine/view.php');
require_once ('engine/controller.php');

// Common

?>