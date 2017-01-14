<?php 
	$sokw = 1000;
	//cách 1
	if ( $sokw <= 100 ){
		echo "Tien dien la : " .$sokw *450 . "đ";
	} else if ( $sokw > 100 && $sokw <= 150) {
		echo "Tien dien la : " .$sokw *750 . "đ";
	} else {
		echo "Tien dien la : " .$sokw *950 . "đ";
	}
 ?>