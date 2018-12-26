<?php
include("head.php");
?>

<title> Query </title>
<script src = "javascriptfunctions.js"></script>
<hr>
	<div id = AdHocSection class = "section">
	<h1 style="text-align:center;">Jobwalks.tk-Online job portal</h1><br>
	<strong><h4 style="text-align: center;"> Enter your Query </h4></strong>
	<div class="abc" style="background-color: coral">
	<form action = "runQuery.php" method="post" target = "_blank">
		<strong>Please enter your query below: </strong> <br/> 
		<textarea name="queryBox" class="form-control" rows="5" cols="100" id = "queryBox"></textarea><br/></div>
		<button class = "btn btn-info" type = "button" onClick="clearTextArea();">Clear</button>
		<input class = "btn btn-success" type = "submit">
	</form>
	</div>
	<hr>
	</body>
</html>
