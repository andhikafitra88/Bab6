<?php
include ("perhitungan.php");

class input{
public function miring1(){
    
    @$a = $_REQUEST['a'];
    @$b = $_REQUEST['b'];
try{    
?>

	<!DOCTYPE html>
<hmtl>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi A (Vertikal)</td>
                    <td>=</td>
                    <td><input type="float" name="a" value="<?php echo $a; ?>"/>cm<br/></td>
                </tr>
            </table>
            </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi B (Horizontal)</td>
                    <td>=</td>
                    <td><input type="float" name="b" value="<?php echo $b; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submitc" value="HITUNG!"/><br/><br/>


<?php
if (is_numeric($a)){
$perh = new perhitungan;
$perh->miring();
}
else { 
echo ("Ingat untuk hanya masukkan angka!!<br><br>");
     }
} catch (Exception $e)
{
    echo 'Ada Error: ',  $e->getMessage(), "\n";
}
    }
}

class inputvertikal{
function __construct(){
    try{
    @$b1 = $_REQUEST['b1'];
    @$c1 = $_REQUEST['c1'];
    
?>

    <!DOCTYPE html>
<hmtl>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi B/C (Horizontal/Vertikal)</td>
                    <td>=</td>
                    <td><input type="float" name="b1" value="<?php echo $b1; ?>"/>cm<br/></td>
                </tr>
            </table>
            </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi C (Miring)</td>
                    <td>=</td>
                    <td><input type="float" name="c1" value="<?php echo $c1; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submita" value="HITUNG!"/><br/><br/>

<?php
if (is_numeric($b1)){
$perh = new perhitungan;
$perh->horver();
}
else { 
echo ("Ingat untuk hanya masukkan angka!!<br><br>");
}
    }catch (Exception $e1) {
     echo 'Ada Error: ',  $e->getMessage(), "\n";
   }  

    }
}
?>