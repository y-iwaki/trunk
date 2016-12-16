<?php
require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

$per1 = new Person("佐藤太郎","東京都",20,"0303123456");
$per2 = new Person("山田花子","青森県",80,"0170123456");
$per3 = new Person("木村 次郎","京都府",38,"0750123456");
$per4 = new Person("鈴木大翔", 27, "3", "0980123456");
$per5 = new Person("小林葵", 24, "5", "0934123456");
$per6 = new Person("田村蓮", 38, "1", "0690123456");
$per7 = new Person("松田結衣", "岐阜県", 51, "簿記3級", "036123456");
$per8 = new Person("渡辺大和", "大阪府", 42, "英検2級", "0189123456");
$per9 = new Person("加藤凛", "福岡県", 36, "漢検準1級", "0927123456");


list($perList1,$perList2,$perList3,$perList4,$perList5,$perList6,$perList7,$perList8,$perList9) = array($per1,$per2,$per3,$per4,$per5,$per6,$per7,$per8,$per9);
$perList1->dataPrint();
$perList2->dataPrint();
$perList3->dataPrint();
$perList4->dataPrint();
$perList5->dataPrint();
$perList6->dataPrint();
$perList7->dataPrint();
$perList8->dataPrint();
$perList9->dataPrint();

?>