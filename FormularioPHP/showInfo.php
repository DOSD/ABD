<!DOCTYPE html>
<html>
<head>
	<title>MostrarInfo</title>
</head>
<body>
	<fieldset>
	<b>Datos del cliente: </b><br>
	- Nombre: <?php echo $_POST['nom'] . " " . $_POST['ap'];?> <br>
	- Teléfono: <?php echo $_POST['tel'];?> <br>
	- E-mail: <?php echo $_POST['mail'];?> <br>
	- Dirección: <?php echo $_POST['dir'];?> <br>
	</fieldset>
	<fieldset>
	<b>Datos del pedido:</b> <br>
	- Primer plato:
	<?php echo $_POST['primero'];?> <br>
	- Segundo plato:
	<?php echo $_POST['segundo'];?> <br>
	- Bebida:
	<?php 
		if($_POST['cafeote'] == 'T') 
			echo "Té";
		else
			echo "Café";
	?><br>
	- Observaciones:
	<?php if($_POST['obs'] != '') echo $_POST['obs'];?> <br>
	</fieldset>
	<fieldset class="fieldset-auto-width">
	<?php 
		if($_POST['condi'] == 'ok')
			echo "<b> ACEPTA LAS CONDICIONES </b>";
		else
			echo "<b> NO ACEPTA LAS CONDICIONES </b>";
	?> <br>
	</fieldset>
</body>
</html>