<?php include 'main/conecta.php'; 
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
	header("location: aplicacion1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">>
	<title>Inicio de sistema</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.5.1.min.js"></script>
</head>
	<?php include 'main/nabvar.php'; ?>
<body>
	<div class="container">
		<h4 class="text-center">S I S T E M A G E S T O R D E B A S E D E D A T O S</h4>
	</div>
	<script type="js/bootstrap.min.js"></script>
</body>
</html>
