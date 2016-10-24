<?
session_start();
?>
<?php
include 'conexion.php';
//realizamos la consulta para mostrar los datos de la tabla pelicula
$sql="select * from alumno";
//ejecutamos el $sql y la vez lo recogemos el resultado en la variable $rs
$rs=mysql_query($sql, $con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quartz iStorage</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="main_content">
		<div id="top_banner">
       	<div>
                    <ul class="menu">
                        <li><a href="index.html" class="nav" >INICIO</a></li>
                        <li><a href="usuario.html" class="nav" style="background-color:#F30">USUARIO</a></li>
                        <li><a href="historia.html" class="nav">HISTORIA</a></li>
                        <li><a href="contactenos.html" class="nav">EVENTOS</a></li>
                        <li><a href="#" class="nav">CONTACTENOS</a></li>
                    </ul>
                </div>	
        </div>
        
       
                <div id="center_banner">
					 	<div id="center_banner_content">
                        <h1>&nbsp;</h1>
                        <h1>&nbsp;</h1>	
						</div>
                        <div id="learn_more"></div>
                </div>
                
                
                
        <div id="page_content">
        	<div id="left_section">
            <div class="left_box_border">
                	<div class="left_box">
                	<span style="color:#7B0E10; font-weight:bold; font-size:14px; padding:10px;">***************** <a href="index.html">SALIR</a> *****************</span>
                    <img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/>--------------------------------------------<img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/></div> 
                </div>
        	  <div class="left_box_border">
               	  <div class="left_box">
					<img src="images/pic1.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notas.php">NOTAS</a></div>
                    <div class="content">instucion con altos niveles estudiantiles, que el alumno este dispuesto a estudiar en cualquier parte del mundo,fuese un profecional de exito.</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic2.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notamatricula.php" > MATRICULAS</a></div>
                    <div class="content"> lograr una formación integral de la persona humana.conociendo y aplicando las   innovaciones que coadyuven a la   transformación de nuestra realidad.</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notaalumno.html" style="background-color:#6CF">ALUMNOS..... </a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td><a href="notaalumno.html">REGISTRAR ALUMNO</a></td>
    </tr>
  <tr>
    <td ><a href="listaralumno.php"> LISTA ALUMNO</a></td>
    </tr>
</table></div>	
                    </div> 
                    
                </div>
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notacurso.php">CURSOS</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañanafvffd</div>	
                    </div> 
                    
                </div>
            
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notagrado.php">GRADOS</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana</div>	
                    </div> 
                    
                </div>
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notaseccion.html"> SECCIONES</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañanaknvff</div>	
                    </div> 
                    
                </div>
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notadocente.html">DOCENTES</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana, para.</div>	
                    </div> 
                    
                </div>
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notausuario.html">USUARIOS</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana, para</div>	
                    </div> 
                    
                </div>
            </div>
            
            <div id="right_section">
            	
                <div class="right_box">
               		<div class="title">BUSQUEDA  DE ALUMNOS DEL COLEGIO SANTO TOMAS</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde"><form action="buscaralumno.php" method="post"> 
Busca Por DNIr: 
    <input name="palabra"> 
<input type="submit" name="buscador" value="Buscar"> 
</form> 
<hr />
<div align="left"> 
  <? 
if ($_POST['buscador']) 
{ 
// Tomamos el valor ingresado 
$buscar = $_POST['palabra']; 

// Si está vacío, lo informamos, sino realizamos la búsqueda 
if(empty($buscar)) 
{ 
echo "No se ha ingresado una cadena a buscar"; 
}else{ 


// Conexión a la base de datos y seleccion de registros 
$con=mysql_connect("localhost","root","root"); 
$sql = "SELECT * FROM alumno WHERE aludni like '%$buscar' ORDER BY alucodigo DESC"; 
mysql_select_db("notas", $con); 



$result = mysql_query($sql, $con); 


// Tomamos el total de los resultados 
$total = mysql_num_rows($result); 

// Imprimimos los resultados 
if ($row = mysql_fetch_array($result)){ 
echo "Resultados para: <b>$buscar</b>"; 
$_SESSION["codigoalumno"]=$row['alucodigo'];
$_SESSION["nombre"]=$row['alunombre'];
$_SESSION["appaterno"]=$row['alupaterno'];
$_SESSION["apmaterno"]=$row['alumaterno'];
do { 
?> 
   <form name="form1" method="post" action="">
   
  <table width="606" border="1" bordercolor="#99FF00"> 
    <tr> 
      <td width="20" height="26" bgcolor="#99FF00">id</td> 
      <td width="78" bgcolor="#99FF00">nombre</td> 
      <td width="46" bgcolor="#99FF00">paterno</td> 
      <td width="44" bgcolor="#99FF00">materno</td> 
      <td width="48" bgcolor="#99FF00">sexo</td> 
 
   
      <td width="55" bgcolor="#99FF00">fecha nac</td> 

      <td width="76" bgcolor="#99FF00">dni</td> 
      <td width="76" align="center" bgcolor="#99FF00">ACCION</td>  
    </tr> 
    <tr> 
      <td><input type="text" value="<?=$row['alucodigo'];?>" size="1" name="codigoalumno" id="codigoalumno"></td>
      <td>
        <input type="text" value="<?=$row['alunombre'];?>" size="12" name="nombre" id="nombre"></td> 
      <td>
        <input type="text" value="<?=$row['alupaterno'];?>" size="6" name="paterno" id="paterno"></td> 
      <td>
        <input type="text" value="<?=$row['alumaterno'];?>" size="6" name="materno" id="materno"></td> 
      <td>
        <input type="text" value="<?=$row['alusexo'];?>" size="7" name="textfield4" id="textfield4"></td> 
      
      
      <td>
        <input type="text" value="<?=$row['alufechanac'];?>" size="6" name="textfield7" id="textfield7"></td>
       <td>
        <input type="text" value="<?=$row['aludni'];?>" size="5" name="textfield8" id="textfield8"></td> 
      
      <td><a href="notamatricula.php?codigoalumno=<?=$row['alucodigo'];?>">ACEPTAR</a></td> 
      
    </tr> 
  </table> 
  </form>
</div> 
<? 
} while ($row = mysql_fetch_array($result)); 
echo "<p>Resultados: $total</p>"; 
} else { 


// En caso de no encontrar resultados 
echo "No se encontraron resultados para: <b>$buscar</b>"; 
} 
} 
} 
?>
<hr />
               
 <p></p>          
                
                <form id="form1" name="form1" method="post" action="grabaalumno.php">
                
                  <table width="619" border="1" bordercolor="#FF0000" align="left">
                    <tr>
                      
                      <td width="55" bgcolor="#FF9900">Nombres</td>
                      <td width="51" bgcolor="#FF9900">Paterno</td>
                      <td width="51" bgcolor="#FF9900">Materno</td>
                      <td width="72" bgcolor="#FF9900">F.Nacimiento</td>
                      <td width="45" bgcolor="#FF9900">DNI</td>
                      <td width="105" bgcolor="#FF9900">Direccion</td>
                      <td width="58" bgcolor="#FF9900">Telefono</td>
                      <td width="52" bgcolor="#FF9900">Clave</td>
                      <td width="72" bgcolor="#FF9900">Accion</td>
                    </tr>
                    <?php
while ($fila=mysql_fetch_array($rs)){
    ?>
                    <tr>
                    
    				<td><?php echo $fila[1]  ?></td>
   				 	<td><?php echo $fila[2]  ?></td>
    				<td><?php echo $fila[3]  ?></td>
    				<td><?php echo $fila[7]  ?></td>
                    <td><?php echo $fila[9]  ?></td>
    				<td><?php echo $fila[5]  ?></td>
   				 	<td><?php echo $fila[6]  ?></td>
    				<td><?php echo $fila[8]  ?></td>
    				<td align="center" bgcolor="#66FFCC"><a href="modificaalumno.php?codigoalumno=<?php echo $fila[0]  ?>"><img src="images/modificar.gif" border="1" width="32" height="21" /></a><a href="eliminaralumno.php?codigoalumno=<?php echo $fila[0]  ?>"><img src="images/eliminar.gif" width="32" border="1" height="21" /></a></td>
                    </tr><?php } ?>
                    <tr>
                      <td colspan="10"><marquee>Formulario de lista de alumnos</marquee></td>
                    </tr>
                    
                  </table>
                
                  </form>
                
                
              </div>
                <div class="right_box"></div>
                
                
                
            </div>

            
        </div>
<div id="footer">
<div id="copyrights">
Desarrollado por:JUVENAL QUISPE TAPIA/Programacion Web 2012
</div>
	<div>
                    <ul class="footer_menu">
                        <li><a href="notas.php" class="nav2">Notas</a></li>
                        <li><a href="notamatricula.php" class="nav2">Matriculas</a></li>
                        <li><a href="notaalumno.html" style="background-color:red" class="nav2">Alumnos</a></li>
                        <li><a href="notacurso.php" class="nav2">Curso</a></li>
                        <li><a href="notagrado.php" class="nav2">Grado</a></li>
                        <li><a href="notaseccion.html" class="nav2">Seccion</a></li>
                        <li><a href="notadocente.html" class="nav2">Docentes</a></li>
                    </ul>
    </div>
<div id="madeby">
<a href="http://www.csscreme.com"><img src="images/csscreme.jpg" width="200" height="35"  border="0" alt="csscreme" title="csscreme"/></a><br />
<a href="http://validator.w3.org/check?uri=referer" title="This site is W3C compliant">Xhtml</a> <a href="http://jigsaw.w3.org/css-validator/validator?uri=www.csscreme.com&amp;usermedium=all" title="This site is coded with validate CSS">css</a> 
</div>
</div>


</div>

</body>
</html>