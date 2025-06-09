<?php 
	
	echo "Seus doces favoritos são:";
	if(isset($_POST ["torta"])){
		echo "Torta<br>";
	}
	if(isset($_POST ["brigadeiro"])){
		echo "Brigadeiro<br>";
	}
	if(isset($_POST ["quindim"])){
		echo "Quindim<br>";
	}
	if(isset($_POST ["brownie"])){
		echo "Brownie<br>";
	}
	if(isset($_POST ["bolo"])){
		echo "Bolo<br>";
	}
	
	echo "Seu estado civil é:<br>";
	if(isset($_POST ["estado_civil"])){
		echo $_POST ["estado_civil"]."<br>";
	}

	echo "Recuperando valores das inputs escondidas<br>";

	$user = $_POST['user'];
	$nivel = $_POST['nivel'];

	echo "<br>Seu usuário é $user e o seu nível é $nivel<br>";

	?>