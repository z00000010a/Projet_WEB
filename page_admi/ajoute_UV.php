<?php
require "../database/CoursInfo.php";
require "../database/ajoute.php";
require "../database/StuInfo.php";
session_start();
$numero=$_SESSION['num'];
$ls_cursus=new Ajoute();
$sigle=array();
$cursus_inf=array();

foreach ($_POST["sigle"] as $cle=>$value){
    if($_POST['sigle'][$cle]!=NULL){
        $sigle[]=$value;
    }
}
foreach ($sigle as $cle=>$value){
    $cursus=array();
    $cursus[]=$numero;
    $cursus[]=$_POST['semestre'][$cle];
    
    $etu=new UserInfo($numero);
    $branch = substr($etu->getSem_label(),0,strlen($etu->getSem_label())-1);
    $sem_label=$branch.$_POST['semestre'][$cle];
    $cursus[]=$sem_label;
    $cursus[]=$_POST['sigle'][$cle];
    
    $cours=new CoursInfo($_POST['sigle'][$cle]);
    $cat=$cours->getCategorie();
    $credit=$cours->getCredit();
    $cursus[]=$cat;
    $cursus[]=$_POST['affectation'][$cle];
    $cursus[]=$_POST['utt'][$cle];
    $cursus[]=$_POST['profil'][$cle];
    $cursus[]=$credit;
    $cursus[]=$_POST['resultat'][$cle];
    $cursus_inf[]=$cursus;
}
foreach ($cursus_inf as $value){
    $ls_cursus->insererUECsv($value);
}
echo "<meta http-equiv='refresh' content='2;url=page_admi.php'> ";
