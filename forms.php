<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="ccs/style.css">
</head>
<body>
	<h1>Formulário PHP</h1>
	<form action="resposta.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Insira seu nome" maxlength="50" size="30" required autocomplete="off">
		<br>
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" placeholder="Insira seu E-mail" maxlength="50" size="30" required autocomplete="off">
		<br>
		<input type="submit" name="enviar" value="Acessar o Sistema">
		
		<input type="reset" name="limpar" value="Limpar">

	</form>
	<a href="">Enviar</a>

</body>
</html>