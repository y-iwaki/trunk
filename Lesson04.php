<?php
require 'Person.php';

$per1 = new Person("佐藤太郎","東京都",20,"0303123456");
$per2 = new Person("山田花子","青森県",80,"0170123456");
$per3 = new Person("木村 次郎","京都府",38,"0750123456");

$per1->dataPrint();		//PersonクラスのdataPrint()メソッドを出力する
$per2->dataPrint();
$per3->dataPrint();

?>