<?php
class perhitungan{
function __construct(){

	@$a = $_REQUEST['a'];
	@$b = $_REQUEST['b'];
	@$c= (pow($a,2)) + (pow($b,2));
	@$c= sqrt($c);
    
  	echo "Panjang sisi miring = ".$c." cm<br/>";

     }
  }