<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Student Verification</title>
<link rel="icon" href="images\dbit_logo_output_400.png"> <!-- start linking -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    p{
        text-align: justify;
    }
    table{
        border: 3px solid black;
        text-align: center;
    }
</style>
</head>
<body>
<?php 
    
?>
<?php include ('header.php'); ?>
<br><br>
<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4>Documents to be downloaded</h4>	
		</div>
		<div class="panel-body">
			<table class="table table-default">
				<thead>
					<tr>
						<th>Sr.No</th>
						<th>Document</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Transcript</td>
						<td><a href="#">View</a></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Leaving Certificate</td>
						<td><a href="images/LC-application.pdf">View</a></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Bonafide Certificate Application</td>
						<td><a href="images/Bonafide.pdf">View</a></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>No Dues Form</td>
						<td><a href="images/NoDues.pdf">View</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<?php include ('footer.php'); ?>