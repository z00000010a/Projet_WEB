<?php
class CoursInfo{
        private $sigle;
        private $categorie;
        private $credit;

        public function __construct($sigle){
		require("db_config.php"); //包含配置信息.
		$sql = "select * from cours where sigle='$sigle'"; //information d'étudiant
		$link= mysqli_connect($host,$user,$password,$database)or
                    die('Impossible de se connecter a MySQL : ' + mysqli_connect_error());
                
                $result = mysqli_query($link,$sql);
                $this->coursInfo = mysqli_fetch_assoc($result); //返回查询结果到数组
                $this->getInfo();
                mysqli_close($link);
	}
        
	// 获取信息传递给属性的方法
	private function getInfo(){
		$this->sigle = $this->coursInfo["sigle"];
		$this->categorie = $this->coursInfo["categorie"];
		$this->credit = $this->coursInfo["credit"];
	}
        function getSigle() {
            return $this->sigle;
        }

        function getCategorie() {
            return $this->categorie;
        }

        function getCredit() {
            return $this->credit;
        }


            
       
}
?>
