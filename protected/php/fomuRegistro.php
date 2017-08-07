<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>FORMULARIO DE REGISTRO</title>
</head>

<body>
 <!-- estructura del form -->
	<form action="../../index.php">
		<h2>ALTA DE USUARIO</h2>
		<input type="text" name="nombre" placeholder="NOMBRE">
		<input type="text" name="apellidoP" placeholder="APELLIDO PATERNO">
		<input type="text" name="apellidoM" placeholder="APELLIDO MATERNO">
		<input type="text" name="numEmp" placeholder="NUMERO DE EMPLEDO">
		<input type="text" name="dependencia" placeholder="* CARGO">
		<input type="text" name="dependencia" placeholder="DEPENDENCIA">
		<input type="mail" name="correo" placeholder="CORREO">
		<input type="text" name="telCel" placeholder="* TELEFONO CELULAR">
		<input type="submit" name="boton" value="INGRESAR">
		<input type="submit" name="boton" value="CANCELAR">		
	</form>
 <!-- estructura del form -->

 	<!-- estructura de la div informacion -->
 		<div class="informacion">
 			<p>NOTA: "LOS CAMPOS CON UN <B>*</B> NO SON NECESARIOS"</p>
 		</div>
 		<!-- estructura de la div informacion -->
 		
</body>
</html>