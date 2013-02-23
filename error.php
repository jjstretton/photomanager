<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
	<head>
		<title>Error</title>
	</head>
	<body>
		<div>
		<p> There was an error proccessing the request. </p>
		<dl>
			<dt>Error Number</dt>
			<dd><?php echo $_POST['errornum']; ?></dd>
			<dt>Error String</dt>
			<dd><?php echo $_POST['errstr']; ?></dd>
			<dt>Error File</dt>
			<dd><?php echo $_POST['errfile']; ?></dd>
			<dt>Error Line Number</dt>
			<dd><?php echo $_POST['errline']; ?></dd>
			<dt>Error Context</dt>
			<dd><?php echo $_POST['errcontext']; ?></dd>
		</dl>
		<p> Last error: <br /> <pre><?php print_r(error_get_last()); ?></pre> </p>
		<p> POST: <br /> <pre><?php print_r($_POST); ?></pre> </p>
		</div>
	</body>
</html>

