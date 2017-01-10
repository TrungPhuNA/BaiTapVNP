<!DOCTYPE html>
<html>
<head>
	<title>Ngay Thang nam</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<?php
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			echo date("Y/m/d  h:i:s") . "  Năm  - Tháng - Ngày - Giờ - Phút - Giây"; 
			echo "<br/>";

			echo date(" h:i d /m /Y ") ."  Giờ - Phút - Ngày - Tháng - Năm"; 
			echo "<br/>";

			echo date("Y-m-d") . " - Năm - Tháng - Ngày " . "</br>";

			echo date('Y-m-d H:i:s') . " 23- 23 - 23" ."<br/>";
			echo date('d/m/Y') . " Ngay / Thang / Nam";
	 	?>
	</div>
</body>
</html>