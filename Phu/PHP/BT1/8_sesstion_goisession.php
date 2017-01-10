<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	
			<table class="table table-hover">
				<thead>
					<tr>
						<th>name</th>
						<th>age</th>
						<th>address</th>
						<th>phone</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> <?php echo  $_SESSION['name']; ?> </td>
						<td> <?php echo  $_SESSION['age'] ; ?> </td>
						<td> <?php echo  $_SESSION['address']; ?> </td>
						<td> <?php echo  $_SESSION['phone'] ;  ?> </td>
					</tr>
				</tbody>
			</table>
		
	</div>
</body>
</html>
