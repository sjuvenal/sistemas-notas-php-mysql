<?php
include 'conexion.php';
//realizamos la consulta para mostrar los datos de la tabla pelicula
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$curso=$_POST['curso'];
$sql="select m.nmatricula,a.alunombre,a.alupaterno,a.alumaterno,n.nota1,n.nota2,n.nota3,m.mturno,g.granombre,s.senombre,c.curnombre from matricula as m,grado as g, seccion as s,alumno as a,curso as c,nota as n where c.curcodigo=n.curcodigo and m.nmatricula=n.nmatricula and s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo and g.gracodigo like '%$grado' and s.secodigo like '%$seccion' and c.curcodigo like '%$curso' and m.mturno like '%$turno' " ;
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
                    <div class="title"><a href="notas.html" style="background-color:#6CF">NOTAS.....</a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td align="center" bgcolor="#FFFF99"><a href="notas.php">- &lt; REGISTRAR NOTAS &gt; -</a></td>
    </tr>
  <tr>
    <td><a href="listarnotas.php">LISTA NOTAS</a></td></tr>
     <tr>
    <td><a href="renotal.php">REPORTAR NOTAS</a></td>
    </tr>
</table>
</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic2.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notamatricula.php">MATRICULAS</a></div>
                    <div class="content"> lograr una formación integral de la persona humana.conociendo y aplicando las   innovaciones que coadyuven a la   transformación de nuestra realidad.</div>	
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
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana</div>	
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
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana</div>	
                    </div> 
                    
                </div>
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="notadocente.html">DOCENTES</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana, para</div>	
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
               		<div class="title">REGISTRO DE NOTAS DE LOS ALUMNO DEL COLEGIO SANTO TOMAS</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde">
                  <form id="form1" name="fvalida" method="post" action="bd-nota.php">
                <center>
                  <table width="538" border="0" align="center">
                   <tr align="center">
    <td colspan="9" bgcolor="#0066FF" align="right" ><label>
      <input type="submit" name="button" id="button" value="REGISTRAR" />
    </label></td>  
    </tr>
  <tr align="center">
    <td width="31" bgcolor="#CCFF99">Cod</td>
    <td width="244" bgcolor="#CCFF99">Nombre</td>
    <td width="21" bgcolor="#CCFF99">I</td>
    <td width="22" bgcolor="#CCFF99">II</td>
    <td width="23" bgcolor="#CCFF99">III</td>
    <td width="26" bgcolor="#CCFF99"> <input type="hidden"  size="5" name="curso" value="<? echo $_POST['curso']?>" />      </input></td>
  
    </tr>
 <?php
while ($fila=mysql_fetch_array($rs)){?>
  
  <tr>
    <td height="24" bgcolor="#FFFFFF"><input type="text"  size="5" name="codal[]" id="codigo2" value="<? echo $fila[0]?>" />      </input>
  
    </td>
    <td bgcolor="#FFFFFF"><input type="text" size="45" name="codigo" id="codigo" value="<? echo $fila[1]." ". $fila[2]." ".$fila[3] ?>" />      </input></td>
    <td bgcolor="#FFFFFF"><input name="primera[]" type="text" id="I" size="2" value="<? echo $fila[4]?>"></input></td>
    <td bgcolor="#FFFFFF"><input name="segunda[]" type="text" id="II" size="2" value="<? echo $fila[5]?>"></input></td>
    <td bgcolor="#FFFFFF"><input name="tercera[]" type="text" id="III" size="2" value="<? echo $fila[6]?>"></input></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
        
    </tr>
  <? } ?>
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
                        <li><a href="notas.html" class="nav2" style="background-color:red">Notas</a></li>
                        <li><a href="notamatricula.html" class="nav2">Matriculas</a></li>
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