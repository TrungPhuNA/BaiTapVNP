<?php 
	include_once("config.php");
	if(isset($_GET['id'])) {
		$id =  $_GET['id'];
		$sql = "DELETE FROM student WHERE id = $id";
		mysqli_query($link, $sql);
		header($_SERVER['REQUEST_URI']);
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Xoa User</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<style type="text/css">
			td,tr,th{
				text-align: center;
			}
			th{
				color: #333;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="table-responsive  " style="width: 40%;margin: 50px auto;">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>ID</th>
						<th>Tên <i class="fa fa-sort" style="padding-left: 60px"></i></th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					
					$sql = "SELECT * FROM STUDENT" ;
					$result = mysqli_query($link,$sql);
					$i = 1;
					while ($row = mysqli_fetch_assoc( $result ) ) {
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><a href="?id=<?php echo $row['id'] ?>" onclick="return confirm('Bạn có muốn xóa sinh viên này không ?');"><i class="glyphicon glyphicon-trash" style="color: white;padding: 10px;background: #f94e3f;border-radius: 5px;"></i></a></td>
							</tr>
						<?php
						$i ++;
					}
				 ?>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>