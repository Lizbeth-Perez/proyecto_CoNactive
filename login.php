<?php 
 session_start();
 include 'conecta.php';
 $usuario = $_POST['usuario'];
 $password = md5($_POST['password']);
 echo $usuario;
 echo $password;

 $consulta = "SELECT * FROM alumnos WHERE Usuariio = '$usuario' and Password = '$password'";
 if ($resultado = $conecta->query($consulta)) {
 	while ($row = $resultado->fetch_array()) {
 		$userok = $row['Usuario'];
 		$passwordok = $row['Password'];
 	}
 	$resulatdo->close();
 }
 $conecta->close();
 if (isset($usuario) && isset($password)) {
 	if ($usuario == $userok && $password == $passwordok) {
 		$_SESSION['login'] = TRUE;
 		$_SESSION['Usuario'] = $usuario;
 		header("locaction:../principal.php");
 	}
 	else{
 		header("location:../aplicacion1.php");
 	}
 }		else{
 		header("location:../aplicacion1.php");
 }
}
?>
