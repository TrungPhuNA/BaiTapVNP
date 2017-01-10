<!DOCTYPE html>
<html>
<head>
	<title>Tạo mảng sinh viên và đưa ra màn hình (sắp xếp ) </title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
	<body>
		<?php 
			$sinhvien = array(
            	'name' 	=> 'Phan Trung Phú',
	            'birth' => '15-09-1994',
	            'gender'=> 'Nam',
	            'add'   => 'Nghệ An'
	        );
		 ?>
		 <div class="container">
		 		<table class="table table-hover">
		 			<thead>
		 				<tr>
		 					<th>Name</th>
		 					<th>Birth</th>
		 					<th>Gender</th>
		 					<th>Add</th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<tr>
		 					<td><?php echo $sinhvien['name']; ?></td>
		 					<td><?php echo $sinhvien['birth']; ?></td>
		 					<td><?php echo $sinhvien['gender']; ?></td>
		 					<td><?php echo $sinhvien['add']; ?></td>
		 					
		 				</tr>
		 			</tbody>
		 		</table>
		 </div>
	</body>
</html>