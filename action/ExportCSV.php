<?php

session_start();
require_once("../database/StuInfo.php");
require_once '../database/CoursInfo.php';
$num = $_SESSION['num'];
$user = new UserInfo($num);
$nom=$user->getNom();
$prenom=$user->getPrenom();
$numero=$user->getNumero();
$admission=$user->getAdmission();
$filiere=$user->getFiliere();
$cursus=$user->getCursus();

$filename = "../document_csv/" . $nom . "_" . $prenom . ".csv";
$filen= $nom . "_" . $prenom . ".csv";

$file = fopen($filename, "w");  

$ligne1 = "ID;" . $numero . ";;;;;;;;NO;" . $nom . ";;;;;;;;PR;" . $prenom. ";;;;;;;;AD;" . $admission . ";;;;;;;;FI;" . $filiere . ";;;;;;;;\r\n";

$ligne2 = "==;s_seq;s_label;sigle;categorie;affectation;utt;profil;credit;resultat\r\n";
$ligne = $ligne1 . $ligne2;


foreach ($cursus as $cle=>$value) {
    $ligne .= "EL";
    foreach ($value as $cle => $value) {
        $ligne .= ";" . $value;
    }
    $ligne .= "\r\n";
}


    $handle = fopen("$filename", 'r');
    $content = '';
    while(!feof($handle)){
        $content .= fread($handle, 8080);
    }
    echo $content;

    
    export_csv($filen,$ligne);

fwrite($file, $ligne);
fclose($file);
//html结尾和js文件导入

function export_csv($filename,$data) { 
    header("Content-type:text/csv"); 
    header("Content-Disposition:attachment;filename=".$filename); 
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0'); 
    header('Expires:0'); 
    header('Pragma:public'); 
    echo $data; 
} 

