<?php 
$pageTitle = "Query the Database";
require '../include/header.php';
?>

<div>
	<h1><?php print $pageTitle?></h1>
	<form action='../actions/go.php' method='post'>
		<input type='hidden' name='doAction' value='doQuery' />
		Query:<br />
		<textarea name='query' rows='4' cols='30'><?php if(array_key_exists('query', $_POST)) print $_POST['query'];?></textarea><br />
		<input type='submit' />
	</form>
</div>

<?php
require '../include/footer.php';
?>