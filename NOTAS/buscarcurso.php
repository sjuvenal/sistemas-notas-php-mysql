
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quartz iStorage</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script language="JavaScript" type="text/javascript">
 
function validarEntero(valor){ 
      //intento convertir a entero. 
     //si era un entero no le afecta, si no lo era lo intenta convertir 
     valor = parseInt(valor) 
 
      //Compruebo si es un valor numérico 
      if (isNaN(valor)) { 
            //entonces (no es numero) devuelvo el valor cadena vacia 
            return "" 
      }else{ 
            //En caso contrario (Si era un número) devuelvo el valor 
            return valor 
      } 
} 
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
	if (!isNaN(document.fvalida.grado.value)){
		alert("Tiene que escribir el GRADO")
		document.fvalida.grado.focus()
		return false;
	}
	if (!isNaN(document.fvalida.seccion.value)){
		alert("Tiene que escribir la SECCION")
		document.fvalida.seccion.focus()
		return false;
	}
	
	if (document.fvalida.curso.value.length==0){
		alert("Tiene que seleccionar el CURSO")
		document.fvalida.curso.focus()
		return false;
	}
	//valido NOTA1. tiene que ser entero mayor que 18
	nota1 = document.fvalida.nota1.value
	nota1 = validarEntero(nota1)
	document.fvalida.nota1.value=nota1
	if (nota1==""){
		alert("Tiene que introducir un número entero en NOTA 1.")
		document.fvalida.nota1.focus()
		return 0;
	}else{
		if (nota1>20){
			alert("Debe ser menor que 20.")
			document.fvalida.nota1.focus()
			return 0;
		}
	}
	//valido NOTA2. tiene que ser entero mayor que 18
	nota2 = document.fvalida.nota2.value
	nota2 = validarEntero(nota2)
	document.fvalida.nota2.value=nota2
	if (nota2==""){
		alert("Tiene que introducir un número entero en NOTA 2.")
		document.fvalida.nota2.focus()
		return 0;
	}else{
		if (nota2>20){
			alert("Debe ser menor que 20.")
			document.fvalida.nota3.focus()
			return 0;
		}
	}
	//valido NOTA3. tiene que ser entero mayor que 18
	nota3 = document.fvalida.nota3.value
	nota3 = validarEntero(nota3)
	document.fvalida.nota3.value=nota3
	if (nota3==""){
		alert("Tiene que introducir un número entero en NOTA 3.")
		document.fvalida.nota3.focus()
		return 0;
	}else{
		if (nota3>20){
			alert("Debe ser menor que 20.")
			document.fvalida.nota3.focus()
			return 0;
		}
	}

	//el formulario se envia
	alert("El Registro de NOTAS Es Exitoso");
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
                    <div class="title"><a href="notas.html" style="background-color:#6CF">NOTAS.....</a></div>
                    <div class="content"><table width="169" border="1">
  <tr>
    <td><a href="notas.php">REGISTRAR CURSO</a></td>
    </tr>
    <tr>
    <td align="center" bgcolor="#FFFF99"><a href="buscarcurso.php">- &lt; REGISTRAR NOTAS &gt; -</a></td>
    </tr>
  <tr>
    <td align="left"><a href="listarnotas.php">LISTA NOTAS</a></td></tr>
     <tr>
    <td ><a href="reportarnotas.php">REPORTAR NOTAS</a></td>
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
                  <form id="form1" name="fvalida" method="post" action="registronota.php">
                <center>
                  <table width="581" border="0">
                    <tr>
                      <td width="133" height="33" align="right" bgcolor="#FFFF66">Grado</td>
                      <td width="164" align="left"><select name="grado" id="grado">
                           <?
					  include'conexion.php';
					  $sql="select * from grado";
					  $consulta=mysql_query($sql,$con);
					  while($fila=mysql_fetch_array($consulta)){;
                      ?>
                        <option value="<? echo $fila[0]?>"><? echo $fila[2]?></option>
                          <? }?>
                      </select>&nbsp;</td>
                      <td width="108" align="right" bgcolor="#FFFF99">Seccion:</td>
                      <td colspan="2"><select name="seccion" id="seccion">
                           <?
					  include'conexion.php';
					  $sql="select* from seccion";
					  $consulta=mysql_query($sql,$con);
					  while($fila=mysql_fetch_array($consulta)){;
                      ?>
                        <option value="<? echo $fila[0]?>"><? echo $fila[1]?></option>
                          <? }?>
                      </select>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="33" align="right" bgcolor="#FFFF66">CURSO:</td>
                      <td align="left"><select name="curso" id="curso">
                        <?
					  include'conexion.php';
					  $sql="select* from curso";
					  $consulta=mysql_query($sql,$con);
					  while($fila=mysql_fetch_array($consulta)){;
                      ?>
                        <option value="<? echo $fila[0]?>"><? echo $fila[2]?></option>
                        <? }?>
                      </select></td>
                      <td align="right" bgcolor="#FFFF99">TURNO:</td>
                      <td colspan="2"><select name="turno" id="turno">
                        <option>Elegir</option>
                        <option>Mañana</option>
                        <option>Tarde</option>
                        <option>Noche</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td height="16" colspan="4" align="right">&nbsp;</td>
                      <td width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td width="144" align="left"><input type="submit" name="button"  id="button" value="Registra Nota" /></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left"><input type="reset" name="button2" id="button2" value="Limpiar" /></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="12" colspan="4" align="right" bgcolor="#FF0000">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4"><marquee>Formulario de Registro de Alumnos</marquee></td>
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