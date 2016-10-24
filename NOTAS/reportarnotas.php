<?
session_start();
?>
<?php
include 'conexion.php';
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
                    <div class="title"><a href="notas.php"  style="background-color:#6CF">NOTAS</a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td><a href="notas.php">REGISTRAR NOTAS</a></td>
    </tr>
  <tr>
    <td><a href="listarnotas.php">LISTA NOTAS</a></td></tr>
     <tr>
    <td align="center" bgcolor="#FFFF99"><a href="reportarnotas.php">- &lt; REPORTAR NOTAS &gt; -</a></td>
    </tr>
</table></div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic2.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notamatricula.php"> MATRICULAS..... </a></div>
                    <div class="content">instucion con altos niveles estudiantiles, que el alumno este dispuesto a estudiar en cualquier parte del mundo,fuese un profecional de exito</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notaalumno.html">ALUMNOS</a></div>
                    <div class="content">Preparate mas, Aprende mas, estudia mas, en estas vacaciones aprendiendo todos los cursos que llevaras el proximo año, </div>	
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
               		<div class="title">BUSCAR ALUMNOS MATRICULADOS DEL COLEGIO SANTO TOMAS</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde">
                 <form action="reportarnotas.php" method="post"> 
Buscar Clave de Alumno:

  <input name="palabra"> 
<input type="submit" name="buscador" value="Buscar"> 
</form>
                 <div align="left"> 
                  <hr />
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
$sql = "select n.nocodigo,n.nota1,n.nota2,n.nota3,n.nopromedio,n.nocondicion,m.mturno,a.alunombre,a.alupaterno,a.aluclave,a.alumaterno,g.granombre,s.senombre,c.curnombre from matricula as m,grado as g, seccion as s,alumno as a,curso as c,nota as n where c.curcodigo=n.curcodigo and m.nmatricula=n.nmatricula and s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo and a.aluclave like '%$buscar' ORDER BY nocodigo DESC"; 
mysql_select_db("notas", $con); 



$result = mysql_query($sql, $con); 


// Tomamos el total de los resultados 
$total = mysql_num_rows($result); 

// Imprimimos los resultados 
if ($row = mysql_fetch_array($result)){ 
echo "Resultados para: <b>$buscar</b>"; 

do { 
?> 
   <form name="form1" method="post" action="">
   
  <table width="606" border="1" bordercolor="#99FF00"> 
    <tr> 
      <td width="78" bgcolor="#99FF00">CURSO</td> 
      <td width="46" bgcolor="#99FF00">NOTA 01</td> 
      <td width="44" bgcolor="#99FF00">NOTA 02</td> 
      <td width="48" bgcolor="#99FF00">NOTA03</td> 
 
   
      <td width="55" bgcolor="#99FF00">PROMEDIO</td> 

      <td width="76" bgcolor="#99FF00">CONDICION</td> 
      
    </tr> 
    <tr> 
      <td>
        <input type="text" value="<?=$row['curnombre'];?>" size="12" name="nombre" id="nombre"></td> 
      <td>
        <input type="text" value="<?=$row['nota1'];?>" size="6" name="paterno" id="paterno"></td> 
      <td>
        <input type="text" value="<?=$row['nota2'];?>" size="6" name="materno" id="materno"></td> 
      <td>
        <input type="text" value="<?=$row['nota3'];?>" size="7" name="textfield4" id="textfield4"></td> 
      
      
      <td>
        <input type="text" value="<?=$row['nopromedio'];?>" size="6" name="textfield7" id="textfield7"></td>
       <td>
        <input type="text" value="<?=$row['nocondicion'];?>" size="5" name="textfield8" id="textfield8"></td> 
      
      
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
?>                <form id="form1" name="form1" method="post" action="grabamatricula.php">
                <center>
                </center>
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
                        <li><a href="notas.html" class="nav2">Notas</a></li>
                        <li><a href="notamatricula.html" class="nav2" style="background-color:red">Matriculas</a></li>
                        <li><a href="notaalumno.html" class="nav2">Alumnos</a></li>
                        <li><a href="notacurso.html" class="nav2">Curso</a></li>
                        <li><a href="notagrado.html" class="nav2">Grado</a></li>
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