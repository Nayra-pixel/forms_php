<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - Estados</title>
</head>
<body>
	<form action="respodatelementos.php" method="POST">
	<h1>Escolha um estado:</h1><br>

	<select name="estados">
		<option value="BA">Bahia</option>
		<option value="SP">São Paulo</option>
		<option value="RJ">Rio Janeiro</option>
		<option value="MG">Minas Gerais</option>
	</select><br><br>

	<h1>Deixe Sua Mensagem</h1>
	<textarea name="msg" cols="50" rows="8">
		
	</textarea>

	<input type="submit" value="Enviar">

	</form>

</body>
</html>