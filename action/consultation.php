<?php
session_start();
$_SESSION['num']=$_POST['numero'];
echo "<meta http-equiv='refresh' content='1;url=../Environnement numerique de travail - UTT_files/cursus.php'> ";
?>
