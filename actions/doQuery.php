<?php
function performAction() {
	require_once "../include/dbconnection.php";
	
	$results = null;
	if(!$connection)
		$results = pg_last_error();
	else
		$results = "Success!";
	
	$_POST['results'] = $results;
	
	return baseURL()."/admin/dbquery";
}
?>