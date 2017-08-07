<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>CAPTURAS</title>
</head>
<body>
 <!-- estructura del form -->
	<form action="../../index.php">
		<h2>DESCRIPCIÓN DEL REGUARDO</h2>
		<label><input type="radio" name="usuario" value="ayuntamiento">AYUNTAMIENTO</label>
		<label><input type="radio" name="usuario" value="odas">ODAS</label>
		<label><input type="radio" name="usuario" value="dif">DIF</label>
		<label><input type="radio" name="usuario" value="otras">OTRAS</label>
		<label>MUNICIPIO:</label><input type="text" name="municipio" placeholder="MUNICIPIO">
		<label>DEPENDENCIA GENERAL O AUXILIAR:</label><input type="text" name="dependencia" placeholder="DEPENDENCIA">
		<label>NOMBRE DEL BIEN:</label><input type="text" name="bien" placeholder="NOMBRE DEL BIEN">
		<label>NÚMERO DE INVENTARIO:</label><input type="text" name="numInventario" placeholder="NÚM INVENTARIO">
		<label>NÚMERO DE SERIE:</label><input type="text" name="numSerie" placeholder="NÚM DE SERIE">
		<label>COLOR:</label><input type="text" name="color" placeholder="COLOR">
		<label>NOMBRE DEL PROVEEDOR:</label><input type="text" name="proveedor" placeholder="PROVEEDOR">
		<label>FECHA DE ADQUISICIÓN:</label><input type="date" name="adquisicion" placeholder="ADQUISICION">
		<label>OBSERVACIONES:</label><textarea></textarea>
		<label>MARCA:</label><input type="text" name="marca" placeholder="MARCA">
		<label>NÚMERO DE MOTOR:</label><input type="text" name="motor" placeholder="MOTOR">
		<label>ESTADO DE USO:</label><input type="text" name="uso" placeholder="USO">
		<label>VALOR DE ADQUISICION:</label><input type="text" name="costo" placeholder="COSTO">
		<label>CLAVE:</label><input type="text" name="clave" placeholder="CLAVE">
		<label>GRUPO DE ACTIVO:</label><input type="text" name="grupoActivo" placeholder="GRUPO DE ACTIVO">
		<label>MODELO:</label><input type="text" name="modelo" placeholder="MODELO">
		<label>MATERIAL:</label><input type="text" name="material" placeholder="MATERIAL">
		<label>NO. FACTURA:</label><input type="text" name="numFact" placeholder="NO. FACTURA">
		<label>FECHA DE ELAVORACIÓN:</label><input type="date" name="elavora" placeholder="ELAVORACIÓN">
		<label>SELECCIONE LA FOTO DEL RESGUARDO:</label><input type="FILE" name="evidencia">
		<label>SELECCIONE EL DOCUMENTO DEL RESGUARDO:</label><input type="FILE" name="documento">
		<input type="submit" name="boton" value="ELIMINAR">
		<div class="boton3"><a href="menu.php">REGRESAR</a></div>

	</form>
 <!-- estructura del form -->
</body>
</html>