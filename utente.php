<?php
session_start();
$_SESSION["credito"] = $_POST["credito"];
$_SESSION["nome"] = $_POST["nome"];
header("Location: http://localhost:8000/gioca.php");
exit();
?>
