<?php
class input{
function __construct(){
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
            <input type="submit" name="submit" value="HITUNG!"/><br/><br/>

<?php
}
}
?>