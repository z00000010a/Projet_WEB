<?php
session_start();
$_SESSION['num']=$_POST['numero'];
echo "<meta http-equiv='refresh' content='1;url=../page_admi/ajoute_UV.html'> ";
?>
