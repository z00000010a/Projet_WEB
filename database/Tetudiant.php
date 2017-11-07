<?php

function getListeEtudiant(){
require("db_config.php"); //包含配置信息.

$sql = "select * from etudiant"; //information d'étudiant
$link = mysqli_connect($host, $user, $password, $database)or
        die('Impossible de se connecter a MySQL : ' + mysqli_connect_error());

$result = mysqli_query($link, $sql);
$nbEtudiant=0;
while ($ligne = mysqli_fetch_array($result, MYSQLI_NUM)) {
    $numero=$ligne[0];
    $nom=$ligne[1];
    $prenom=$ligne[2];
    $formation=$ligne[6];
   $etudiant[$nbEtudiant]=array($numero,$nom,$prenom,$formation);
   $nbEtudiant=$nbEtudiant+1;
}

mysqli_close($link);
return $etudiant;
}
/** test **/
/*
$test=getListeEtudiant();
print_r($test);
echo count($test);
 * 
 */
?>