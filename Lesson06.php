<?php
require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

$per1 = new Person("²‘ΎY","s",20,"0303123456");
$per2 = new Person("RcΤq","ΒX§",80,"0170123456");
$per3 = new Person("ΨΊ Y","s{",38,"0750123456");
$per4 = new Person("ιΨεγΔ", 27, "3", "0980123456");
$per5 = new Person("¬Ρ¨", 24, "5", "0934123456");
$per6 = new Person("cΊ@", 38, "1", "0690123456");
$per7 = new Person("Όcί", "ς§", 51, "λL3", "036123456");
$per8 = new Person("nΣεa", "εγ{", 42, "p2", "0189123456");
$per9 = new Person("Α‘z", "ͺ§", 36, "Ώ1", "0927123456");


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