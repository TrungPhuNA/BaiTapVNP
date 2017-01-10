<!DOCTYPE html>
<html>
<head>
	<title>Mảng</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
		$sinhvien = array(
	            [
	            	'name' 	=> 'Phan Trung Phú',
		            'birth' => '15-09-1994',
		            'gender'=> 'Nam',
		            'add'   => 'Nghệ An'
	            ],
	            [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
             	[
		            'name'	 => 'Nguyễn Tuấn Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	            [
		            'name'	 => 'Trần Hà Anh',
		            'birth'	 => '04-12-1994',
		            'gender' => 'Nữ',
		            'add'    => 'Hà Nội'
	            ],
	             [
		            'name'	 => 'Trần   Anh Duy',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	             [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	             [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	             [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	             [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ],
	             [
		            'name'	 => 'Nguyễn  Hoàng Anh',
		            'birth'	 => '04-12-1990',
		            'gender' => 'Nam',
		            'add'    => 'Nghệ AN'
	            ]
		);
		
	?>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Birth</th>
					<th>gender</th>
					<th>add</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($sinhvien as $key => $value) {
						?>
							<tr>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['birth']; ?></td>
								<td><?php echo $value['gender']; ?></td>
								<td><?php echo $value['add']; ?></td>
							</tr>
						<?php
					}
				 ?>
				
			</tbody>
		</table>
	</div>
</body>
</html>