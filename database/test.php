<?php
require_once("StuInfo.php");
require_once 'CoursInfo.php';

$user = new UserInfo("201402"); //创建一个user对象.

$username = $user->getPrenom(); //分别调用方法取得数据
$cours=$user->getCours();

echo "your name is ".$username."<br/>";  //输出数据
foreach ($cours as $value) {
    echo "$value &nbsp<br/>";
    $cours=new CoursInfo("$value");
    $a=$cours->getSigle();
    $b=$cours->getCategorie();
    echo "$a";
    echo "$b<br/>";
}


?>