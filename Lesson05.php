<?php
require 'Person.php';

$per1 = new Person("佐藤太郎","東京都",20,"0303123456");
$per2 = new Person("山田花子","青森県",80,"0170123456");
$per3 = new Person("木村 次郎","京都府",38,"0750123456");

list($perList1,$perList2,$perList3) = array($per1,$per2,$per3);
$perList1->dataPrint();
$perList2->dataPrint();
$perList3->dataPrint();
?>