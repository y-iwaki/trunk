<?php
require 'Person.php';

$per1 = new Person("�������Y","�����s",20,"0303123456");
$per2 = new Person("�R�c�Ԏq","�X��",80,"0170123456");
$per3 = new Person("�ؑ� ���Y","���s�{",38,"0750123456");

list($perList1,$perList2,$perList3) = array($per1,$per2,$per3);
$perList1->dataPrint();
$perList2->dataPrint();
$perList3->dataPrint();
?>