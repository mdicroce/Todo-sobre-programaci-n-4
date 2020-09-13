<?php 

$allowedUsername = 'Cosme Fulanito';
$allowedPassword = 'strongPassword!';
$error;

if(isset($_POST)){
	$userName = $_POST['username'];
	$password = $_POST['password'];

	if($userName == $allowedUsername){
		if($password == $allowedPassword){
			header("location: ./add-bill.php");
		}else{
			$error = 'Contraseña incorrecta';
            include('./index.php');
		}
	}else{
        $error = 'Nombre de usuario incorrecto';
        include('./index.php');
	}
}else{
	$error = 'Nombre de usuario incorrecto';
    include('./index.php');
}
?>	