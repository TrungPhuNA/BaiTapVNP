"use strict";
window.onload = function () {
	var inputname = document.getElementById("inputname");
	var downicon  = document.getElementById("down-icon");
	var but       = document.getElementById('but');
	
	
	inputname.onkeydown = function(e) {
		if(e.keyCode == 13) {
			addinput(e);
		}
	}

	//function remove parent
	function removeMe(item){
	  	var parent = item.parentElement;
	  	parent.parentElement.removeChild(parent);
	}

	function addinput(e) {
		e.preventDefault();
		if(inputname.value !="") {
			downicon.style.display = 'inline-block';
			but.style.display      = 'block';

			//create li
			var li_todu = document.createElement("li");


			var input = document.createElement("input");
			input.type = "checkbox";
			input.id = "checkb";
			li_todu.appendChild(input);

			var node = document.createTextNode(inputname.value);
			li_todu.appendChild(node);
		
			

			var i_x = document.createElement("i");
			i_x.classList = "fa fa-times";
			li_todu.appendChild(i_x);


			// add the li la con  ul
			var element = document.getElementById("list-sk");
			element.appendChild(li_todu);
			
			var i_close  = document.getElementsByClassName("fa-times");
			document.getElementById('count_li').innerHTML = i_close.length + " item left";
			
			for( var i = 0 ; i < i_close.length ; i++) {
				i_close[i].onclick = function(e) {
					removeMe(this);
					document.getElementById('count_li').innerHTML = i_close.length + " item left";
					if( i_close.length == 0) {
						but.style.display      = 'none';
					}	
				}
			}

			
		}
	}
}