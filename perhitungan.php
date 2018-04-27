<?php

class perhitungan{
public function miring(){
    @$a = $_REQUEST['a'];
    @$b = $_REQUEST['b'];
	@$c= (pow($a,2)) + (pow($b,2));
	@$c= sqrt($c);
    
  	echo "Panjang sisi miring = ".$c." cm<br/>";
    
     }
 public function horver(){
 	@$b1 = $_REQUEST['b1'];
    @$c1 = $_REQUEST['c1'];
    @$a1= (pow($c1,2)) - (pow($b1,2));
    @$a1= sqrt($a1);
    
    echo "Panjang sisi vertikal/horizontal = ".$a1." cm<br/>";    
 }
}
?>