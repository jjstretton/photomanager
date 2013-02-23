<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
		<link rel="stylesheet" type="text/css" href="/style/main.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		<?php 
		require_once 'globals.php'; 
		function handleError($errno, $errstr, $errfile, $errline, $errcontext) {
			
			switch($errno) {
				case E_WARNING      :
				case E_USER_WARNING :
				case E_STRICT       :
				case E_NOTICE       :
				case E_USER_NOTICE  :
					$type = 'warning';
					$fatal = false;
					break;
				default             :
					$type = 'fatal error';
					$fatal = true;
					break;
			}
			
			$trace = array_reverse(debug_backtrace());
			//array_pop($trace);
			
			if($fatal) {
				while (ob_get_level()) {
					ob_end_clean();
				}
				echo "<html>"."\n";
				echo "\t"."<head>"."\n";
				echo "\t"."\t".'<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">'."\n";
				echo "\t"."\t".'<link rel="stylesheet" type="text/css" href="/style/main.css" />'."\n";
				echo "\t"."</head>"."\n"."\t"."<body>";
			}
			
			echo '<div class="errordiv">' . "\n";
			echo '    <h1>Error</h1>';
			echo '    Backtrace from ' . $type . ' \'' . $errstr . '\' at ' . $errfile . ' ' . $errline . ':' . "\n";
			echo '    <ol>' . "\n";
			foreach($trace as $item)
				echo '        <li>' . (isset($item['file']) ? $item['file'] : '<unknown file>') . ' ' . (isset($item['line']) ? $item['line'] : '<unknown line>') . ' calling ' . $item['function'] . '()</li>' . "\n";
			echo '    </ol>' . "\n";
			echo '</div>';
			
			if($fatal) {
				echo "</body>"."\n";
		        echo "</html>";
		        exit(1);
			}
		}
		set_error_handler("handleError");
		register_shutdown_function("handleError");
		?>
		
		<title><?php 
			if($pageTitle) {
				print $pageTitle;
			} else {
				print "Photo Manager";
			}
		?></title>
	</head>
    <body>
    	<div class='loginbar'>
    		<a href='#'>Login</a>
    	</div>
