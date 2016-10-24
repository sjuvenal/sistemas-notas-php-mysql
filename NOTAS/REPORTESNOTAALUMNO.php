<?
session_start();
?>
<?php
include 'conexion.php';

$dni=$_SESSION["dni"];
$datos=$_SESSION["datos"];
//realizamos la consulta para mostrar los datos de la tabla pelicula
//$usuario=$_POST['$usuario'];
//$usuario="87654321";
$sql="select n.nocodigo,n.nota1,n.nota2,n.nota3,n.nopromedio,n.nocondicion,m.mturno,a.alunombre,a.alupaterno,a.aluclave,a.aludni,a.alumaterno,g.granombre,s.senombre,c.curnombre from matricula as m,grado as g, seccion as s,alumno as a,curso as c,nota as n where c.curcodigo=n.curcodigo and m.nmatricula=n.nmatricula and s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo and a.aludni='$dni' ";
//echo $fila[1].$fila[2];
//ejecutamos el $sql y la vez lo recogemos el resultado en la variable $rs  like '%$buscar' ORDER BY nocodigo DESC
$rs=mysql_query($sql, $con);
//conulta para sacar el grado y la seccion...
$sqll="select g.granombre,s.senombre from matricula as m
inner join grado as g on m.gracodigo=g.gracodigo
inner join seccion as s on g.secodigo=s.secodigo
inner join alumno as a on m.alucodigo=a.alucodigo
where a.aludni='$dni'";
$rss=mysql_query($sqll,$con) or die (mysql_error().$sqll);
$row=mysql_fetch_array($rss);

?>
<?
$nombres=$_SESSION["nombre"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="main_content">
		<div id="top_banner">
       	<div>
                    <ul class="menu">
                        <li><a href="index.html" class="nav" >INICIO</a></li>
                        <li><a href="INDEX.html" class="nav" style="background-color:#F30">REPORTE</a></li>
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
                	<span style="color:#7B0E10; font-weight:bold; font-size:14px; padding:10px;">INGRESE CUENTA DE USUARIO</span>
                    <img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/>--------------------------------------------<img src="images/user-icon.png" width="37" height="27" alt="user" title="user"/>
                    	<div id="login">
                        <form id="form1" name="form1" method="post" action="login.php">
                        <? $_SESSION["codigoalumno"]=$row['alucodigo'];
$_SESSION["nombre"]=$row['alunombre'];
$_SESSION["appaterno"]=$row['alupaterno'];
$_SESSION["apmaterno"]=$row['alumaterno'];?>
                        <label>Usuario:</label>
		      			 <input type="text" name="usuario"  id="usuario" class="input" />
		       			<div class="clear">
		       			  
		       			</div>
		       			<label>Tipo: : : :</label>
		      		 	<input type="text" name="tipo" id="tipo" class="input"/>
                        <div class="clear">
		       			  
		       			</div>
                        <label>Clave : :</label>
		      		 	<input type="password" name="clave" id="clave" class="input"/>
                        
                         <input type="reset" name="submit" value="Limpiar" class="submit"/>
                         <input type="submit" name="submit" value="Entrar" class="submit"/>
                      
		       		
		       			<div class="clear"></div>
                        
                        </form>
                        </div>
                    </div> 
                </div>
            
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic1.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="index.html">INSTITUCION EDUCATIVA</a></div>
                    <div class="content">instucion con altos niveles estudiantiles, que el alumno este dispuesto a estudiar en cualquier parte del mundo,fuese un profecional de exito.</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic2.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="estudios.html">ESTUDIOS</a></div>
                    <div class="content"> lograr una formación integral de la persona humana.conociendo y aplicando las   innovaciones que coadyuven a la   transformación de nuestra realidad.</div>	
                    </div> 
                </div>
                
                <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="vacaciones.html">VACACIONES</a></div>
                    <div class="content">Preparate mas, Aprende mas, estudia mas, en estas vacaciones aprendiendo todos los cursos que llevaras el proximo año, </div>	
                    </div> 
                    
                </div>
            <div class="left_box_border">
                	<div class="left_box">
					<img src="images/pic3.png" width="53" height="62" alt="pic" title="pic" class="pic"/>
                    <div class="title"><a href="ubicacion.html">UBICACION</a></div>
                    <div class="content">Esta ubicado en la ciudad de jaen, visitanos en la calle iquitos 1210, encuentra tu futuro del mañana</div>	
                    </div> 
                    
                </div>
            
            
            
            </div>
            
            <div id="right_section">
            	
                <div class="right_box">
               		<div class="title">REPORTE POR ALUMNO</div>
                    <div class="content">valido para usuario que estan en registro de la institucion y son personal encargado para el registro de notas</div>
                </div>
                <div class="left_box_borde">
                  <div align="left"> 
                  <hr />
                  <form name="form1" method="post" action="">
                    
                    <table width="565" border="1" bordercolor="#99FF00"> 
                    
    <tr>
      <td height="26" bgcolor="#99FF00">ALUMNO:</td>
      <td colspan="4" bgcolor="#99FF00"><input type="text"  value="<?php echo $datos   ?>"  size="30" name="codmatricula2" id="codmatricula2" /></td>
      <td bgcolor="#99FF00">&nbsp;</td>
      <td align="center" bgcolor="#99FF00">&nbsp;</td>
    </tr>
    <tr>
      <td height="26" align="right" bgcolor="#99FF00">GRADO:</td>
      <td colspan="3" bgcolor="#99FF00"><input type="text" value="<?php echo $row[0]  ?>" size="15" name="codmatricula3" id="codmatricula3" /></td>
      <td bgcolor="#99FF00">SECCION:</td>
      <td bgcolor="#99FF00"><input type="text" value="<?php echo $row[1]  ?>" size="3" name="codmatricula4" id="codmatricula4" /></td>
      <td align="center" bgcolor="#99FF00">&nbsp;</td>
    </tr>
    <tr> 
      <td width="143" height="26" bgcolor="#99FF00">CURSO</td> 
      <td width="49" bgcolor="#99FF00">NOTA 01</td> 
      <td width="47" bgcolor="#99FF00">NOTA 02</td> 
      <td width="52" bgcolor="#99FF00">NOTA 03</td> 
      <td width="60" bgcolor="#99FF00">PROMEDIO</td> 
 
   
      <td width="83" bgcolor="#99FF00">CONDICION</td> 

      <td width="85" align="center" bgcolor="#99FF00">ACCION</td>  
    </tr> ´
    
   <?php
while ($fila=mysql_fetch_array($rs)){?>
	 
    <tr> 
      <td><input type="text" value="<?php echo $fila['curnombre']  ?>" size="15" name="codmatricula" id="codmatricula"></td>
      <td>
        <input type="text" value="<?php echo $fila['nota1']  ?>" size="6" name="nombre" id="nombre"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nota2']  ?>" size="6" name="paterno" id="paterno"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nota3']  ?>" size="6" name="materno" id="materno"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nopromedio']  ?>" size="7" name="textfield4" id="textfield4"></td> 
      
      
      <td>
        <input type="text" value="<?php echo $fila['nocondicion']  ?>" size="6" name="textfield7" id="textfield7"></td>
       <td align="center"><a href="notas.php?codmatricula=<?=$row['nmatricula'];?>">IMPRIMIR</a></td> 
      
    </tr> <?php } ?>
  </table> 
</form>
</div>
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