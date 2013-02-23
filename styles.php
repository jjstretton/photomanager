<?php 
$pageTitle = "Styles";
require "include/header.php";
?>

<div>
<h1> This is the heading. </h1>
This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
	<div>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	<h2>This is a sub-heading</h2>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
		<div>
		This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
		This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
		This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
		<br/>
		This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
		</div>
	</div>
</div>
<div>
This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
<br/>
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
	<div>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	<br/>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
	</div>
</div>
<div><p>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
	<p>
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. 
	This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.
</div>
<div>
	<table>
		<tr>
			<th> Heading 1 </th>
			<th> Heading 2 </th>
			<th> Heading 3 </th>
			<th> Heading 4 </th>
		</tr>
		<tr>
			<td>Data</td>
			<td>Data</td>
			<td colspan=2>Data</td>
		</tr>
		<tr>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
		</tr>
		<tr>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
		</tr>
	</table>
</div>
<div style='width:50em; float:left; margin-top:0px' >
	<h2>Ordered List:</h2>
	<ol>
		<li>Item</li>
		<li> Another item
		<li> This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		<li> This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item.
		<li> Item
	</ol>
</div>

<div style='width:50em; float:left; margin-top:0px; margin-left:0px' >
	<h2>Unordered List:</h2>
	<ul>
		<li> Item
		<li> Another item
		<li> This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		<li> This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. This is a longer item. 
		This is a longer item. This is a longer item. This is a longer item.
		<li> Item
	</ul>
</div>
<div style='clear:both' >
	After lists
</div>
<div>
	<h1>My Form</h1>
	<form>
		<table>
			<tr>
				<td>First name:</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr>
				<td>Last name:</td>
				<td><input type="text" name="lastname">
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd">
			</tr>
			<tr>
				<td style='vertical-align:top; padding-top:0.5em'>Sex:</td>
				<td>
					<input type="radio" name="sex" id="sex_m" value="male"><label for='sex_m'>Male</label><br />
					<input type="radio" name="sex" id="sex_f" value="female"><label for='sex_f'>Female</label>
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<fieldset>
						<legend>Options:</legend>
						<input type="checkbox" name="options" id="op_1" value="one"><label for='op_1'>Option One</label>
						<input type="checkbox" name="options" id="op_2" value="two"><label for='op_2'>Option Two</label>
						<input type="checkbox" name="options" id="op_3" value="three"><label for='op_3'>Option Three</label>
					</fieldset>
				</td>
			</tr>
			<tr>
				<td style='vertical-align:top; padding-top:0.5em'>Options:</td>
				<td>
					<table>
						<tr>
							<td style='padding:0'><input type="checkbox" name="options" id="op_1a" value="one"><label for='op_1a'>Option One</label></td>
							<td style='padding:0'><input type="checkbox" name="options" id="op_2a" value="two"><label for='op_2a'>Option Two</label></td>
						</tr>
						<tr>
							<td style='padding:0'><input type="checkbox" name="options" id="op_3a" value="three"><label for='op_3a'>Option Three</label></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr><td colspan=2><input type='submit' /></td></tr>
		</table>
	</form>
</div>

<?php
require "include/footer.php";
?>