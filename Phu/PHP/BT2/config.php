<?php 

	$link = mysqli_connect("localhost","root","","vnp");
	if (mysqli_connect_errno()) {
		echo "Lỗi kết nối CSDL : " . mysqli_connect_error();
  	}
 ?>