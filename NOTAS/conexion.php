<?php
$con=  mysql_connect("Localhost","root","root") or die ("no hay conexion al sevidor");
mysql_select_db("notas", $con) or die("no se encontro la bd");
?>
