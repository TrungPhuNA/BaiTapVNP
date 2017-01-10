<!DOCTYPE html>
<html>
<head>
	<title>Tạo mảng bằng vòng lặp</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<style type="text/css">
		.container{
			margin-top: 100px;
		}
	</style>
	
	<div class="container" >
		<p class="text-warning">Tạo bảng bằng vòng For</p>
		<?php 
			
			for($i = 0 ;  $i < 10 ; $i ++) {
				$newArr1[$i] = random_int(1, 100);
			}
			sort($newArr1);
			echo "Sắp xếp tăng dần";
			print_r('<pre>');
			print_r($newArr1);

			echo "Sắp xếp giảm dần" . "<br/>";
			rsort($newArr1);
			print_r($newArr1);
		?>
	</div>
	<div class="container" >
		<p class="text-warning">Tạo mảng bằng while</p>
		<?php 
			
			$i = 0;
			while( $i < 5) {
				$newArr2[$i] = random_int(1, 100);
				$i++;
			}
			sort($newArr2);
			echo "Sắp xếp tăng dần";
			print_r('<pre>');
			print_r($newArr2);

			echo "Sắp xếp giảm dần" . "<br/>";
			rsort($newArr2);
			print_r($newArr2);
			
		 ?>
	</div>

	<div class="container" >
		<p class="text-warning">Tạo mảng bằng do while</p>
		<?php 
			
			$i = 0;
			do {
				$newArr3[$i] = random_int(1, 100);
				$i++;
			} while ( $i < 5);
			sort($newArr3);
			echo "Sắp xếp tăng dần";
			print_r('<pre>');
			print_r($newArr3);

			echo "Sắp xếp giảm dần" . "<br/>";
			rsort($newArr3);
			print_r($newArr3);
			
		 ?>
	</div>
</body>
</html>