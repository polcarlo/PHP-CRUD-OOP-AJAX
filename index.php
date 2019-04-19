<!DOCTYPE html>
<html>
<head>
	<title>CRUD OOP AJAX</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>
<body>
	<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin-left:auto; margin-right:auto; padding:auto; width:70%;">
		<span style="font-size:25px; color:blue"><strong>CRUD OOP AJAX</strong></span>	
		<span class="pull-right"><a id="add" style="cursor:pointer;" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:15px;"></div>
		<div id="table"></div>
		<div id="alert" class="alert alert-success" style="display:none;">
			<center><span id="alerttext"></span></center>
		</div>
	</div>

	<?php include('modal.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="custom.js"></script>


</div>
</body>
</html>