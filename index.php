    <!DOCTYPE html>
    <head>
    <title>Phytagoras</title>
    </head>

<?php
try{

include ("input.php");


echo "Program perhitungan sisi-sisi segitiga siku siku<br/>";
echo "<br/>";

echo "Penghitung sisi miring<br/>";
echo "<br/>";
$inp = new input;
$inp->miring1();

echo "<br/>";
echo "Penghitung sisi vertikal dan horizontal<br/>";
echo "<br/>";
$inp1 = new inputvertikal();
 	echo "<br/>";
 	echo "Dibuat oleh :<br/>";
    echo "Andhika Fitra Setyawan    - 21120117130052<br/>";
    echo "kurniasari                - 21120117130072<br/>";
    echo "Kelompok 12               - Shift 1<br/>" ;

        }catch (Exception $e5s) {
     echo 'Ada Error: ',  $e->getMessage(), "\n";
   }   
/* iki opo to? -> commit muslim , hizkia juga bros*/
?>