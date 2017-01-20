<?php

require 'MyListManager.php';

$list = new MyListManager();
$list->add(1);
$list->add(2);
$list->printList();
$list->add2(4, 0);
$list->printList();
$list->add2(8, -3);
$list->printList();
$list->add2(1, -1);
$list->printList();
$list->add2(4, 0);
$list->printList();
$list->add2(10, 2);
$list->printList();

?>