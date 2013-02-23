<?php
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function baseURL() {
	$baseURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$baseURL .= "s";}
	$baseURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$baseURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
	} else {
		$baseURL .= $_SERVER["SERVER_NAME"];
	}
	return $baseURL;
}
?>