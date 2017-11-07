<?php
require_once("../database/StuInfo.php");
require_once '../database/CoursInfo.php';

$compte=$_POST['compte'];
$mdp=$_POST['mdp'];

$user = new UserInfo($compte); //创建一个user对象.
$username = $user->getPrenom(); //分别调用方法取得数据
$mdpt=$user->getMdp();
$numUser=$user->getNumero();

if($compte=='adm'){
    if($mdp=='123456'){
        echo "<meta http-equiv='refresh' content='1;url=../page_admi/page_admi.php'> ";
    } else {
      include "../fond/erreur.html";
      echo "<meta http-equiv='refresh' content='2;url=../index.html'> ";
    }
}
else {
   if($mdp==$mdpt&&$compte!=0){
       session_start();
       $_SESSION['num']=$numUser;
       echo "<meta http-equiv='refresh' content='1;url=../Environnement numerique de travail - UTT_files/cursus.php'> ";
    } else {
      include '../fond/erreur.html';
      echo "<meta http-equiv='refresh' content='2;url=../index.html'> ";}
}
?>
