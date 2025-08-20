<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulario d registro </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/responsiveslides.css">
	<link rel="stylesheet" type="text/css" href="css/themes.css">
</head>
<body>
<header>
		<img src="img/descarga.jpg">
		<h1>agripac</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.html">INICIO</a></li>
			<li><a href="servicio.html">SERVICIO</a></li>
			<li><a href="contacto.html">CONTACTO</a></li>
			<li><a href="registrarse.html">REGISTRARSE</a></li>
		</ul>
	</nav>
	<?php
    //Configurar requisitos de conexion
$host="localhost";//Servidor
$user="root";//Usuario
$password="";
$database="db_usuarios..";
//crear la conexion
$conexion=new mysqli($host,$user,$password,$database);
//verificar la conexion
if($conexion->conect_error){
 die("Error en la conexion".$conexion->conect_error);
}
	//obtener los datos del formulario
	$cedula=$_POST["txtcedula"];
    $nombre=$_POST["txtnombre"];
    $apellido=$_POST["txtapellido"];
    $usuario=$_POST["txtususario"];
    $password=$_POST["txtpassword"];
//preparar la consulta e insertar los registros
    $consulta=$conexion->prepare["Insert into"Tb_USUARIOS"(CEDULA,NOMBRE,APELLIDO,USUARIO,COMTRASEÑA,)$values(?,?,?,?,?)");
	$consulta->bind_param("sssss",$cedula,$nombre, $apellido,$usuario,$password);
	//ejecutar la conexion 
		if($consultar->execute()){
			echo"datos guardados correctamente";
		}
		else{
			echo "Error:".$consulta->error;
		}
	
	
    
    ?>
	<form id="Formulario"action="" method="POST">
		<fieldset>
			<legend>Datos de usuario</legend>
			<p>
			<span class="etiquetas">CEDULA:</span>
			<input type="text" name="textcedula" class="texto"maxlength="10">
			</p>
			<p>
			<span class="etiquetas">NOMBRES</span>
			<input type="text" name="textnombres" class="texto">
		</p>
		  <p>
			<span class="etiquetas">APELLIDO</span>
			<input type="text" name="textapellidos" class="texto">
		</p>
		<p>
			<span class="etiquetas">USUARIO</span>
			<input type="text" name="textusuario" class="texto">
		</p>
		   <p>
			<span class="etiquetas">PASSWORD</span>
			<input type="text" name="textpassword" class="texto">
		</p>
		<input type="submit" name="btnEnviar" value="GUARDAR USUARIO">
		</fieldset>

	</form>
	</main>
	<footer>
		  <footer style="background:  #283747 ; color: #00ffff; padding: 30px 20px; text-align: center; font-family: 'Orbitron', sans-serif; box-shadow: 0 -2px 20px #00ffff; border-top: 2px solid #00ffff;">
  
  <h2 style="margin-bottom: 10px; color: #00eaff; text-shadow: 0 0 10px #00eaff;"> ZONA DE CONTACTO </h2>
  
  <p style="margin: 6px 0; font-size: 16px;">  Guayaquil - Ecuador</p>
  <p style="margin: 6px 0; font-size: 16px;"> +593 123 456 789</p>
  <p style="margin: 6px 0; font-size: 16px;"> banchonpedro1@gmail.com</p>
  
  <div style="margin-top: 20px;">
    <a href="https://www.facebook.com/Agripac/?locale=es_LA" target="_blank" style="margin: 0 12px;">
      <img src="https://cdn-icons-png.flaticon.com/32/733/733547.png" alt="Facebook" width="32" style="filter: drop-shadow(0 0 4px #00eaff);">
    </a>
    <a href="https://www.instagram.com/agripacsa/?hl=es" target="_blank" style="margin: 0 12px;">
      <img src="https://cdn-icons-png.flaticon.com/32/733/733558.png" alt="Instagram" width="32" style="filter: drop-shadow(0 0 4px #ff00c3);">
    </a>
    <a href="https://www.instagram.com/agripacsa/?hl=es" target="_blank" style="margin: 0 12px;">
      <img src="img/tikitiki.png" alt="Tik tok" width="32" style="filter: drop-shadow(0 0 4px #00ff98);">
    </a>
  </div>

  <p style="margin-top: 25px; font-size: 13px; color: #888;">&copy; DESARROLLADO POR BANCHON Y SOTO 🚀</p>
  </a>
  </nav>
  </nav>

		</footer>

		</footer>
</body>
</html>




