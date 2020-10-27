<?php 
session_start();
session_unset();
session_destroy();
header ("location:main/aplicacion1.php");
?>
