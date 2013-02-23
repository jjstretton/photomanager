<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
		<link rel="stylesheet" type="text/css" href="/style/main.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		<?php require_once 'globals.php'; ?>
		
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
