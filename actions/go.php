<html>
<body>
	Redirecting...
	<?php
	require_once "../include/globals.php";
	
	echo "Yes it gets here";
	$returnAddress = baseURL()."/";
	echo "Location:".$returnAddress;
	echo "<pre>";
	print_r($_POST);
	echo "</pre>\n";
	if($_POST['doAction'])
	{
		echo $_POST['doAction'].'.php';
		require $_POST['doAction'].'.php';
		$returnAddress = performAction();
	}
	echo "Location:$returnAddress";
	header("Location:$returnAddress");
	?>
</body>
</html>

