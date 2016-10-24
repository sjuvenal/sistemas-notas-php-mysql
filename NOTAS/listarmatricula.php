<?php
include 'conexion.php';
//realizamos la consulta para mostrar los datos de la tabla pelicula
$sql="select m.nmatricula,m.mturno,m.mfecha,m.pagomat,a.alunombre,a.alupaterno,a.alumaterno,g.granombre,s.senombre from matricula as m,grado as g, seccion as s,alumno as a where s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo";
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
                    <div class="title"><a href="notamatricula.php" style="background-color:#6CF"> MATRICULAS..... </a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td align="left"><a href="notamatricula.php">REGISTRAR MATRICULA</a></td>
    </tr>
  <tr>
    <td align="center" bgcolor="#FFFF99"><a href="listarmatricula.php">- &lt; LISTA MATRICULA &gt; -</a></td>
    </tr>
</table>.</div>	
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
               		<div class="title">MATRICULAS DE ALUMNOS DEL COLEGIO SANTO TOMAS</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde">
                  <form id="form1" name="form1" method="post" action="grabamatricula.php">
                <center>
                  
                  <table width="628" border="1" bordercolor="#D9DAD5" align="left">
                    <tr>
                      
                      <td width="24" bgcolor="#FF9900">N mat</td>
                       <td width="102" bgcolor="#FF9900">Alumno</td>
                      <td width="94" bgcolor="#FF9900">Apellidos</td>
                      <td width="38" bgcolor="#FF9900">Grado</td>
                      <td width="27" bgcolor="#FF9900">Sec</td>
                      <td width="35" bgcolor="#FF9900">Turno</td>
                      <td width="64" bgcolor="#FF9900">Fcha Mt</td>
                      <td width="49" bgcolor="#FF9900">Pago Mt</td>
                      <td width="69" bgcolor="#FF9900">Accion</td>
                    </tr>
                    <?php
while ($fila=mysql_fetch_array($rs)){?>
                    <tr>
                    
    				<td><?php echo $fila['nmatricula']  ?></td>
   				 	<td align="left"><?php echo $fila['alunombre']  ?></td>
    				<td align="left"><?php echo $fila['alupaterno']  ?>-<?php echo $fila['alumaterno']  ?></td>
    				<td><?php echo $fila['granombre']  ?></td>
    				<td><?php echo $fila['senombre']  ?></td>
    				<td><?php echo $fila['mturno']  ?></td>
                    <td><?php echo $fila['mfecha']  ?></td>
    				<td>S/.<?php echo $fila['pagomat']  ?>.00</td>
    				<td align="center" bgcolor="#66FFCC"><a href="modificaalumno.php?codigoalumno=<?php echo $fila[0]  ?>"><img src="images/modificar.gif" border="1" width="32" height="21" /></a><a href="eliminarmatricula.php?nummatricula=<?php echo $fila['nmatricula']  ?>"><img src="images/eliminar.gif" width="32" border="1" height="21" /></a></td>
                    </tr><?php } ?>
                    <tr>
                      <td colspan="10"><marquee>Formulario de lista de alumnos matriculados</marquee></td>
                    </tr>
                    
                  </table>
                
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