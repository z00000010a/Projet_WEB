<?php

session_start();
require_once("../database/StuInfo.php");
require_once '../database/CoursInfo.php';
$regle="actuel";
$num = $_SESSION['num'];
$user = new UserInfo($num);
$nombre_semestre = 0;
$semestre = array();
$p_tcbr = 0;
$p_fil = 0;
$pCS_tcbrEtFli = 0;
$pTM_tcbrEtFli = 0;
$sumCS = 0;
$sumTM = 0;
$sumST = 0;
$sumEC = 0;
$sumME = 0;
$sumCT = 0;
$sumHP = 0;
$SUM = 0;
$sumMECT=0;
$sumCSTM=0;
$filiere_arr=array();


$nom = $user->getNom();
$prenom = $user->getPrenom();
$numero = $user->getNumero();
$seq=$user->getSem_seq();
$ls_sem = $user->getSemestre();
$branch=$user->getSem_label();
$ls_cours = $user->getCours();
$ls_res = $user->getResuldat();
$filiere = $user->getFiliere();
$cursus = $user->getCursus();

foreach ($ls_sem as $value) {
    if ($value > $nombre_semestre) {
        $nombre_semestre = $value;
    }
}
for ($i = 1; $i <= $nombre_semestre; $i++) {
    $CS = array();
    $TM = array();
    $ME = array();
    $CT = array();
    $ST = array();
    $EC = array();
    foreach ($ls_sem as $cle => $value) {
        if ($value == $i) {
            $cours = new CoursInfo($ls_cours[$cle]);
            if ($cours->getCategorie() == "CS") {
                $CS[$cours->getSigle()] = $ls_res[$cle];
            } else if($cours->getCategorie() == "TM"){
                $TM[$cours->getSigle()] = $ls_res[$cle];
            }else if($cours->getCategorie() == "ST"){
                $ST[$cours->getSigle()] = $ls_res[$cle];
            }else if($cours->getCategorie() == "EC"){
                $EC[$cours->getSigle()] = $ls_res[$cle];
            }else if($cours->getCategorie() == "ME"){
                $ME[$cours->getSigle()] = $ls_res[$cle];
            }else if($cours->getCategorie() == "CT"){   
                $CT[$cours->getSigle()] = $ls_res[$cle];
            }
        }
    }$semestre[$i] = array($CS,$TM,$ST,$EC,$ME,$CT);
}
foreach ($cursus as $value) {
    $SUM = $SUM + $value["credit"];
    if ($value["affectation"] == "TCBR") {
        $sumCSTM=$sumCSTM+$value["credit"];
        if ($value["categorie"] == "CS") {
            $p_tcbr = $p_tcbr + $value["credit"];
            $sumCS = $sumCS + $value["credit"];
            $pCS_tcbrEtFli = $pCS_tcbrEtFli + $value["credit"];
        }
        if ($value["categorie"] == "TM") {
            $p_tcbr = $p_tcbr + $value["credit"];
            $sumTM = $sumTM + $value["credit"];
            $pTM_tcbrEtFli = $pTM_tcbrEtFli + $value["credit"];
        }
    }
    if ($value["affectation"] == "FCBR") {
        $filiere_arr[]=$value["sigle"];
        $p_fil = $p_fil + $value["credit"];
        $sumCSTM=$sumCSTM+$value["credit"];
        if ($value["categorie"] == "CS") {
            $sumCS = $sumCS + $value["credit"];
            $pCS_tcbrEtFli = $pCS_tcbrEtFli + $value["credit"];
        }
        if ($value["categorie"] == "TM") {
            $sumTM = $sumTM + $value["credit"];
            $pTM_tcbrEtFli = $pTM_tcbrEtFli + $value["credit"];
        }
    }
        if ($value["affectation"] == "BR") {}

        if ($value["categorie"] == "ST") {
            $sumST = $sumST + $value["credit"];
        }
        if ($value["categorie"] == "EC") {
            $sumEC = $sumEC + $value["credit"];
        }
        if ($value["categorie"] == "ME") {
            $sumME = $sumME + $value["credit"];
            $sumMECT=$sumMECT+$value["credit"];
        }
        if ($value["categorie"] == "CT") {
            $sumCT = $sumCT + $value["credit"];
            $sumMECT=$sumCT+$value["credit"];
        }
        if ($value["categorie"] == "HP") {
            $sumHP = $sumHP + $value["credit"];
        }
    }

$credit = array($p_tcbr, $p_fil, $pCS_tcbrEtFli, $pTM_tcbrEtFli, $sumCS
    , $sumTM, $sumST, $sumEC, $sumME, $sumCT, $sumHP, $SUM,$sumCSTM,$sumMECT);
?>

