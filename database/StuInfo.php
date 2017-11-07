<?php

class UserInfo {
    private $link;
    private $numero;
    private $nom;
    private $prenom;
    private $mdp;
    private $admission;
    private $filiere;
    private $sem_seq;
    private $sem_label;
    private $nombre_etu=0;
    private $list_etu=array();
    private $cours = array();
    private $resuldat = array();
    private $semestre = array();
    private $cursus = array();
    
    
    public function __construct($numero) {
        require("db_config.php"); //包含配置信息.
        $sql = "select * from etudiant where numero='$numero'"; //information d'étudiant
        $link = mysqli_connect($host, $user, $password, $database)or
                die('Impossible de se connecter a MySQL : ' + mysqli_connect_error());
        $this->link=$link;
        $result = mysqli_query($link, $sql);
        $this->userInfo = mysqli_fetch_assoc($result); //返回查询结果到数组
        $this->getInfo();
        $sqlCours = "select sem_seq,sem_label,sigle,categorie,affectation,utt,profil,credit,resultat from cursus where num_etu='$this->numero'order by sem_seq"; // information de cours
        $resultCours = mysqli_query($link, $sqlCours);
        while ($this->coursInfor = mysqli_fetch_assoc($resultCours)) {
            $this->cours[] = $this->coursInfor["sigle"];
            $this->resuldat[] = $this->coursInfor["resultat"];
            $this->semestre[] = $this->coursInfor["sem_seq"];
            $this->cursus[] = $this->coursInfor;
        }
        
        $sql_etu = "select * from etudiant"; 
        $resultetu = mysqli_query($link, $sql_etu);
        while ($ligne = mysqli_fetch_array($resultetu, MYSQLI_NUM)) {
        $numero=$ligne[0];
        $nom=$ligne[1];
        $prenom=$ligne[2];
        $formation=$ligne[6];
        $etudiant[]=array($numero,$nom,$prenom,$formation);
        $this->list_etu[]=$etudiant;
        $this->nombre_etu= $this->nombre_etu+1;
        }
        mysqli_close($link);
    }
    

    // 获取信息传递给属性的方法
    private function getInfo() {
        $this->numero = $this->userInfo["numero"];
        $this->nom = $this->userInfo["nom"];
        $this->prenom = $this->userInfo["prenom"];
        $this->admission = $this->userInfo["admission"];
        $this->filiere = $this->userInfo["filiere"];
        $this->sem_seq = $this->userInfo["sem_seq"];
        $this->sem_label = $this->userInfo["sem_label"];
        $this->mdp = $this->userInfo["mdp"];
    }
    
        public function insererEtudiantCsv($array_info_etudiant_finalt)
        {
              $sql_etu_csv = "insert into etudiant value (".$array_info_etudiant_finalt[0].",'".$array_info_etudiant_finalt[1]."','".$array_info_etudiant_finalt[2]."','".$array_info_etudiant_finalt[3]."','".$array_info_etudiant_finalt[4]."')";
              $etu_csv = mysqli_query($this->link, $sql_etu_csv);
              if(!$etu_csv)
              {
                   echo "Il exite deja cet etudiant dans la systeme!!!";
              }
              else
              {
                   
                   echo "Il n'y a pas cet etudiant dans la systeme, mais on l'a ajoute!";
                   
              }
        }
        public function insererUECsv($numero,$GET)
        {
              $sql_uv_csv = "insert into cursus value (".$numero.",'".$GET[3]."','".$GET[1]."','".$GET[2]."','".$GET[4]."','".$GET[5]."','".$GET[6]."','".$GET[7]."','".$GET[8]."','".$GET[9]."')";
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

    function getCours() {
        return $this->cours;
    }

    function getResuldat() {
        return $this->resuldat;
    }

    function getSemestre() {
        return $this->semestre;
    }

    function getNumero() {
        return $this->numero;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdmission() {
        return $this->admission;
    }

    function getFiliere() {
        return $this->filiere;
    }

    function getSem_seq() {
        return $this->sem_seq;
    }

    function getSem_label() {
        return $this->sem_label;
    }

    function getMdp() {
        return $this->mdp;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }
    function getCursus(){
        return $this->cursus;
    }

}

?>
