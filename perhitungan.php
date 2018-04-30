<?php

class perhitungan{
public function miring(){
  try{
    @$a = $_REQUEST['a'];
    @$b = $_REQUEST['b'];
	@$c= sqrt(abs((pow($a,2)) + (pow($b,2))));
	
  	echo "Panjang sisi miring = ".$c." cm<br/>";
    }catch (Exception $e1) {
     echo 'Ada Error: ',  $e->getMessage(), "\n";
   }
    }
 public function horver(){
  try{
 	@$b1 = $_REQUEST['b1'];
    @$c1 = $_REQUEST['c1'];
    @$a1= sqrt(abs((pow($c1,2)) - (pow($b1,2))));
    echo "Panjang sisi vertikal/horizontal = ".$a1." cm<br/>"; 
    }catch (Exception $e1) {
     echo 'Ada Error: ',  $e->getMessage(), "\n";
   }   
 }
}
?>