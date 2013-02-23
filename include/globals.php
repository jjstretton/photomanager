<?php
set_error_handler("errorHandler");
register_shutdown_function("shutdownHandler");

function errorHandler($error_level, $error_message, $error_file, $error_line, $error_context)
{
	$error = array(
		"type" => $error_level,
		"message" => $error_message,
		"file" => $error_file,
		"line" => $error_line);
		
	switch ($error_level) {
		case E_ERROR:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
		case E_PARSE:
			display_error($error, "FATAL");
			break;
		case E_USER_ERROR:
		case E_RECOVERABLE_ERROR:
			display_error($error, "ERROR");
			break;
		case E_WARNING:
		case E_CORE_WARNING:
		case E_COMPILE_WARNING:
		case E_USER_WARNING:
			display_error($error, "WARNING");
			break;
		case E_NOTICE:
		case E_USER_NOTICE:
			display_error($error, "INFO");
			break;
		case E_STRICT:
			display_error($error, "DEBUG");
			break;
		default:
			display_error($error, "WARNING");
	}
}

function shutdownHandler()
{
	$lasterror = error_get_last();
	switch ($lasterror['type'])
	{
		case E_ERROR:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
		case E_USER_ERROR:
		case E_RECOVERABLE_ERROR:
		case E_CORE_WARNING:
		case E_COMPILE_WARNING:
		case E_PARSE:
			$error = $lasterror;
			display_error($error, "FATAL", true);
	}
}

function display_error($error, $errlvl, $shutdown = false)
{		
	if($shutdown) {
		while (ob_get_level()) {
			ob_end_clean();
		}
		echo "<html>"."\n";
		echo "\t"."<head>"."\n";
		echo "\t"."\t".'<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">'."\n";
		echo "\t"."\t".'<link rel="stylesheet" type="text/css" href="/style/main.css" />'."\n";
		echo "\t"."</head>"."\n"."\t"."<body>";
		echo "<div class='errordiv'><h1>Error</h1>" . "\n";
	}
	else {
		echo "<div class='warningdiv'><h1>Warning</h1>" . "\n";
	}
	
	echo "    <ul>" . "\n";
	echo "        <li>Error type: " . $error['type'] . " (" . $errlvl . ($shutdown ? " - SHUTDOWN" : "") . ")\n";
	echo "        <li>Error message: <b>" . $error['message'] . "</b>\n";
	echo "        <li>Error file: " . $error['file'] . "\n";
	echo "        <li>Error line: " . $error['line'] . "\n";
	echo "    </ul>" . "\n";
	echo "</div>" . "\n";
	
	if($shutdown) {
		echo "</body>"."\n";
		echo "</html>";
		exit(1);
	}
}

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