<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
if (file_exists("../document_csv/" . $_FILES["file"]["name"]))
{
      echo $_FILES["file"]["name"] . " already exists. ";
}
    else
 {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../document_csv/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "document_csv/" . $_FILES["file"]["name"];
      
      
      
      include '../database/ajoute.php';
      $inserer=new Ajoute();

      $file = "../document_csv/" . $_FILES["file"]["name"];
      $myfile = fopen($file,'r');
      $info_eudutant = fgets($myfile);
      $array_info_etudiant = explode(";;;;;;;;",$info_eudutant);
      $array_info_etudiant_final = array();
      $id = explode(";",$array_info_etudiant[0]);
      $numero=$id[1];

        $label_cursus = fgets($myfile);
        $array_label_cursus = array();
        $array_label_cursust = explode(";",$label_cursus);
        $les_cours = array();
        while (!feof($myfile)){
       $les_cours [] = fgets($myfile);
        }
        for($i=0;$i<count($les_cours)-1;$i++){
         $ligne = explode (";",$les_cours[$i]);
         $ligne[0]=$numero;
        $inserer->insererUECsv($ligne);
        }  
 } 



echo "<meta http-equiv='refresh' content='2;url=../page_admi/page_admi.php'> ";

