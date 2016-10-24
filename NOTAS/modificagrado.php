<?php
include 'conexion.php';
//recibimos el codigo de la pelicula a modificar
$codigogrado=$_REQUEST['codigogrado'];
//realizamos la consulta en la tabla pelicula
$sql="select * from grado where gracodigo=$codigogrado";
$rs=  mysql_query($sql,$con);
$fila=  mysql_fetch_array($rs);
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
                    <div class="title"><a href="notaalumno.html" >ALUMNOS</a></div>
                    <div class="content">Preparate mas, Aprende mas, estudia mas, en estas vacaciones aprendiendo todos los cursos que llevaras el proximo año, </div>	
                    </div> 
                    
                </div>
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notacurso.php">CURSOS</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana, para.</div>	
                    </div> 
                    
                </div>
            
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notagrado.php"  style="background-color:#6CF">GRADOS..... </a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td><a href="notagrado.php">REGISTRAR GRADO</a></td>
    </tr>
  <tr>
    <td><a href="listargrado.php">LISTA GRADO</a></td>
    </tr>
</table></div>	
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
               		<div class="title">REGISTRO DE GRADOS DEL COLEGIO SANTO TOMAS</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde">
                  <form id="form1" name="form1" method="post" action="actualizagrado.php">
                <center>
                  <table width="526" border="0">
                    <tr>
                      <td height="27" align="right" bgcolor="#FFFF66">CODIGO:</td>
                      <td align="left"><input type="text" name="codigogrado" id="codigogrado" value="<?php echo $fila[0]  ?>" /></td>
                      <td align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="127" height="27" align="right" bgcolor="#FFFF66">NOMBRE</td>
                      <td width="155" align="left"><input type="text" name="nombre" id="nombre" value="<?php echo $fila[2]  ?>" /></td>
                      <td width="62" align="right" bgcolor="#FFFF99">SECCION</td>
                      <td width="151" align="left"><select name="seccion" id="seccion">
                        <?php
    $sql="select * from seccion";
    $rs=mysql_query($sql,$con);
    while($row=mysql_fetch_array($rs)){
    ?>
                        <option value="<?php echo $row['secodigo'] ?>"><?php echo $row['senombre'] ?></option>
                        <?php } ?>
                      </select></td>
                      <td width="9">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="16" align="right" bgcolor="#FFFF66">NOMBRE DEL AULA</td>
                      <td align="left"><input name="descripcion" value="<?php echo $fila[3]  ?>" type="text" id="descripcion"size="34" /></td>
                      <td align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="top">&nbsp;</td>
                      <td colspan="2" align="left">&nbsp;</td>
                      <td colspan="2" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2" align="center" bgcolor="#FF9900"><input type="reset" name="button" id="button" value="Limpiar" />                        
                        <input type="submit" name="button2" id="button2" value="Registrar Grado" /></td>
                      <td align="center">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4"><marquee>
                        Formulario de Registro de GRADOS
                      </marquee></td>
                      <td>&nbsp;</td>
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
                        <li><a href="notas.php" class="nav2">Notas</a></li>
                        <li><a href="notamatricula.php" class="nav2">Matriculas</a></li>
                        <li><a href="notaalumno.html" class="nav2">Alumnos</a></li>
                        <li><a href="notacurso.php" class="nav2">Curso</a></li>
                        <li><a href="notagrado.php" class="nav2" style="background-color:red">Grado</a></li>
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