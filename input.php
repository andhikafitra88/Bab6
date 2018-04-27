<?php
include ("perhitungan.php");

class input{
public function miring1(){
    
    @$a = $_REQUEST['a'];
    @$b = $_REQUEST['b'];
    
?>

	<!DOCTYPE html>
<hmtl>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi A (Vertikal)</td>
                    <td>=</td>
                    <td><input type="text" name="a" value="<?php echo $a; ?>"/>cm<br/></td>
                </tr>
            </table>
            </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi B (Horizontal)</td>
                    <td>=</td>
                    <td><input type="text" name="b" value="<?php echo $b; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submitc" value="HITUNG!"/><br/><br/>


<?php
$perh = new perhitungan;
$perh->miring();

    }
}

class inputvertikal{
function __construct(){
    
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
                    <td><input type="text" name="b1" value="<?php echo $b1; ?>"/>cm<br/></td>
                </tr>
            </table>
            </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Sisi C (Miring)</td>
                    <td>=</td>
                    <td><input type="text" name="c1" value="<?php echo $c1; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submita" value="HITUNG!"/><br/><br/>

<?php
$perh = new perhitungan;
$perh->horver();  

    }
}
?>