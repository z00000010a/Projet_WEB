<?php

class Ajoute {
    private $link;
    private $nombre_etu=0;
    private $list_etu=array();
    
    public function __construct() {
        require("db_config.php"); //包含配置信息.
        $link = mysqli_connect($host, $user, $password, $database)or
                die('Impossible de se connecter a MySQL : ' + mysqli_connect_error());
        $this->link=$link;

        $sql_etu = "select * from etudiant"; 
        $resultetu = mysqli_query($link, $sql_etu);
        while ($ligne = mysqli_fetch_array($resultetu, MYSQLI_NUM)) {
        $numero=$ligne[0];
        $nom=$ligne[1];
        $prenom=$ligne[2];
        $formation=$ligne[6];
        $this->list_etu[]=array($numero,$nom,$prenom,$formation);
        $this->nombre_etu= $this->nombre_etu+1;
        }
    }
    
        public function insererUECsv($ligne)
        {
              $sql_uv_csv = "insert into cursus value (".$ligne[0].",'".$ligne[1]."','".$ligne[2]."','".$ligne[3]."','".$ligne[4]."','".$ligne[5]."','".$ligne[6]."','".$ligne[7]."','".$ligne[8]."','".$ligne[9]."')";
              $uv_csv = mysqli_query($this->link, $sql_uv_csv);
              if(!$uv_csv)
              {
                   //echo "votre operation est faux! La sigle d'UE est trop long ou vous avez choisi cet UE dans votre cursus...";
              }
              else
              {
                         echo "votre operation est reussi! Ce cursus est deja ajoute";
                   
              }
        }
        public function insererEtuCsv($ligne)
        {
              $sql_etu_csv = "insert into etudiant value (".$ligne[0].",'".$ligne[1]."','".$ligne[2]."','".$ligne[3]."','".$ligne[4]."','".$ligne[5]."','".$ligne[6]."','".$ligne[7]."')";
              echo $sql_etu_csv;
              $etu_csv = mysqli_query($this->link, $sql_etu_csv);
              if(!$etu_csv)
              {
                   echo "votre operation est faux! La sigle d'UE est trop long ou vous avez choisi cet UE dans votre cursus...";
              }
              else
              {
                         echo "votre operation est reussi! Ce cursus est deja ajoute";
                   
              }
        }
        
        function getNombre(){
        return $this->nombre_etu;
        }
        
        function getEtu(){
        return $this->list_etu;
        }
   }
