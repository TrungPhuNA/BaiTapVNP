<?php
    function snt($n) {  
		if( $n  < 2) {
			return false;
		} else if ( $n == 2) {
			return true;
		} else {
			for($i = 2; $i < $n/2; $i++){  
		  		if($n % $i ==0) {  
			  		return false;  
				}
				return true;  
	   		}
		}
	}
	if( snt(11) == true) {
		echo " là số nguyên tố ";
	} else {
		echo "Không phải số nguyên tố";
	}
?>