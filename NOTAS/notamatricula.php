<?
session_start();
?>
<?
include 'conexion.php';
$codigoalumno=$_REQUEST['codigoalumno'];
$sql="select * from alumno where alucodigo=$codigoalumno";
?>
<?
session_destroy();
$alumno=$_SESSION["codigoalumno"];
$nombres=$_SESSION["nombre"];
$paterno=$_SESSION["appaterno"];
$materno=$_SESSION["apmaterno"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quartz iStorage</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script language="JavaScript" type="text/javascript">
function valida_envia(){
	//valido el nombre
	if (!isNaN(document.fvalida.nombre.value)){
		alert("Tiene que buscar el nombre del ALUMNO")
		document.fvalida.nombre.focus()
		return false;
	}
	if (!isNaN(document.fvalida.paterno.value)){
		alert("Tiene que escribir el apellidos PATERNO del Alumno")
		document.fvalida.paterno.focus()
		return false;
	}
	if (!isNaN(document.fvalida.materno.value)){
		alert("Tiene que escribir el apellido MATERNO del Alumno")
		document.fvalida.materno.focus()
		return false;
	}
	
	if (document.fvalida.pago.value.length==0){
		alert("Tiene que Registrar en COSTO de la matricula")
		document.fvalida.pago.focus()
		return false;
	}
	if (document.fvalida.periodo.selectedIndex==0){
		alert("Debe seleccionar el PERIODO de matricula.")
		document.fvalida.periodo.focus()
		return 0;
	}
	if (document.fvalida.turno.selectedIndex==0){
		alert("Debe seleccionar el TURNO a matricular el Alumno.")
		document.fvalida.turno.focus()
		return 0;
	}
	if (document.fvalida.grado.selectedIndex==0){
		alert("Debe seleccionar el GRADO y SECCION a matricular.")
		document.fvalida.grado.focus()
		return 0;
	}
	//el formulario se envia
	alert("El Registro del Alumno Es Exitoso");
	document.fvalida.submit();
}
</SCRIPT>
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
    <td align="center" bgcolor="#FFFF99"><a href="notamatricula.php">- &lt; REGISTRAR MATRICULA &gt; -</a></td>
    </tr>
  <tr>
    <td><a href="listarmatricula.php">LISTA MATRICULA</a></td>
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
                  <form id="form1" name="fvalida" method="post" action="grabamatricula.php">
                <center>
                  <table width="581" border="0">
                    <tr>
                      <td height="24" align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="133" height="35" align="right" bgcolor="#FFCC00">FECHA MATRICULA:</td>
                      <td width="177" align="left"><input type="text" name="fecha" id="fecha" value="<?php
echo date("Y-m-d")
?>" /></td>
                      <td width="95" align="right" bgcolor="#FFCC00">HORA ACTUAL</td>
                      <td width="144" align="left"><input type="hora" name="hora" id="hora" /></td>
                      <td width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="16" align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" align="right" bgcolor="#FFFF66">Nombre Alumno</td>
                      <td colspan="2" align="left">
                       
                        <input type="text" name="nombre" value="<?=$nombre;?>" size="40" id="nombre" /></td>
                      <td align="left"><a href="buscaralumno.php"><span class="left_box"><img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/></span></a>
                      <input type="hidden" name="alumno" value="<?=$alumno;?>" size="2" id="alumno" /></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="33" align="right" bgcolor="#FFFF66">Apellido Paterno</td>
                      <td align="left"><input type="text" name="paterno" value="<?=$paterno;?>" id="paterno" /></td>
                      <td align="right" bgcolor="#FFFF99">Apellido Materno</td>
                      <td colspan="2"><input type="text" name="materno" value="<?=$materno;?>" id="materno" /></td>
                    </tr>
                    <tr>
                      <td height="16" align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="16" align="right" bgcolor="#FFFF66">PAGO DE MATRICULA</td>
                      <td align="left"><input type="text" name="pago" id="pago" /></td>
                      <td align="right" bgcolor="#FFFF66">PERIODO ACADEMICO</td>
                      <td align="left"><select name="periodo" id="periodo">
                      	<option>Elegir</option>
                        <option>2012-II</option>
                        <option>2012-I</option>
                        <option>2011-II</option>
                        <option>2011-I</option>
                        <option>2010-II</option>
                        <option>2010-I</option>
                        <option>2009-II</option>
                        <option>2009-I</option>
                      </select></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="16" align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" align="right" bgcolor="#FFFF66">TURNO:</td>
                      <td align="left"><select name="turno" id="turno">
                      	<option>Elegir</option>
                        <option>Mañana</option>
                        <option>Tarde</option>
                        <option>Noche</option>
                      </select></td>
                      <td align="right" bgcolor="#FFFF99">GRADO-SECCION</td>
                      <td align="left"><select name="grado" id="grado">
                      <option>Elegir</option>
                        <?php
    $sql="select g.gracodigo,g.granombre,g.gradescripcion,s.senombre from grado as g, seccion as s where s.secodigo=g.secodigo order by g.granombre desc";
    $rs=mysql_query($sql,$con);
    while($row=mysql_fetch_array($rs)){
    ?>
                        <option value="<?php echo $row['gracodigo'] ?>"><?php echo $row['granombre'] ?> <?php echo "-"?> <?php echo $row['senombre'] ?></option>
                        <?php } ?>
                      </select></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="26" align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="right" bgcolor="#FF9900"><input type="reset" name="button2" id="button2" value="Limpiar" /></td>
                      <td align="left" bgcolor="#FF9900"><input type="button" name="button" id="button" value="Matricular Alumno" onclick="valida_envia()" /></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4"><marquee>
                      Formulario de Registro de Matriculas
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