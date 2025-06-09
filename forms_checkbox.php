<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="ccs/style.css">
	<title>Formuláro</title>
</head>
<body>
	<form action="respostacheck.php" method="POST">
		<h1>Recuperando Dados - CheckBox ou Radio Button</h1>
		<p>Quais seus doces preferidos?</p>
		<input type="checkbox" name="torta">Torta<br>
		<input type="checkbox" name="brigadeiro">Brigadeiro<br>
		<input type="checkbox" name="quindim">Quindim<br>
		<input type="checkbox" name="brownie">Brownie<br>
		<input type="checkbox" name="bolo">Bolo<br>

		<p>Qual seu estado civil?</p>
		<input type="radio" name="estado_civil" value="Solteiro">Solteiro(a)<br>
		<input type="radio" name="estado_civil" value="Casado">Casado(a)<br>
		<input type="radio" name="estado_civil" value="Divorciado">Divorciado(a)<br>
		<input type="radio" name="estado_civil" value="Viúvo">Viúvo(a)<br>

		<p>Inputs Escondidos</p>
		<input type="hidden" name="user" value="admin"><br>
		<input type="hidden" name="nivel" value="2"><br>

		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">

	</form>

</body>
</html>