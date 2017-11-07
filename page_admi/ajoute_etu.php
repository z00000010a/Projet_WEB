<?php
require_once("../database/ajoute.php");
$ls_etu=new Ajoute();
$numero=array();
$etu_inf=array();
foreach ($_POST['numero'] as $cle=>$value){
    if($_POST['numero'][$cle]!=NULL){
        $numero[]=$value;
    }
}
foreach ($numero as $cle=>$value){
    $etu=array();
    $etu[]=$numero[$cle];
    $etu[]=$_POST['nom'][$cle];
    $etu[]=$_POST['prenom'][$cle];
    $etu[]=$_POST['ademission'][$cle];
    $etu[]=$_POST['filiere'][$cle];
    $etu[]=$_POST['semestre'][$cle];
    $etu[]=$_POST['branch'][$cle].$_POST['semestre'][$cle];
    $etu[]=$_POST['mdp'][$cle];
    $etu_inf[]=$etu;
}
print_r($etu_inf);
foreach ($etu_inf as $value){
    $ls_etu->insererEtuCsv($value);
}
echo "<meta http-equiv='refresh' content='2;url=page_admi.php'> ";


?>