<!DOCTYPE html>
<html>
<head>
	<title>Enviar SMS</title>
</head>
<body>
	<h1>Enviar SMS</h1>
	<form method="POST" action="enviar_sms.php">
		<label for="numero">Número de telefone:</label>
		<input type="text" name="numero" id="numero">
		<br><br>
		<label for="mensagem">Mensagem:</label>
		<textarea name="mensagem" id="mensagem"></textarea>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
