<?php
require 'MyListItem.php';

class MyListManager {
	private $firstItem;

	function add($o) {
		$item  = new MyListItem($o);
		$num = new MyListItem();
		$firstItem = null;
		for($item = $firstItem ; $num->getNext() != null ; $item = $num->getNext()) {
			echo "{$num->getItem()}\n";
		}
		$c = new MyListItem();
		$num->setNext($c);
		$c->setItem($o);
		echo "���X�g�̍Ō����{$o}��ǉ����܂��B\n";
	}
	
	function add2($o, $i) {
		$item  = new MyListItem($o);
		$num = new MyListItem();
		$firstItem = null;
		$count1 = 0;
		for($item = $firstItem ; $num->getNext() != null ; $item = $num->getNext()) {
			if($count1 === $i) {
				break;
			}
			$count1 = $count1 + 1;
		}
		
		if($count1 < $i) {
			echo "�f�[�^��ǉ��ł��܂���B\n";
		}
		else {
			$c1 = new MyListItem($o, $num->getNext());
			$num->setNext($c1);
			echo "���X�g��{$o}���ǉ�����܂����B\n";
		}
	}
	
	function remove($i) {
		$item = new MyListItem($i);
		$num = new MyListItem();
		$firstItem = null;
		$count2 = 0;
		for($item = $firstItem ; $num->getNext() != null ; $item = $num->getNext()) {
			if($count2 === $i) {
				break;
			}
			$count2 = $count1 + 1;
		}
		
		if($count2 < $i) {
			echo "�폜�ł��܂���B\n";
		}
		else {
			$item->setNext($item->getNext()->getNext());
			echo "�폜���܂����B\n";
		}
	}
	
	function printList() {
		$item = new MyListItem();
		$num = new MyListItem();
		$firstItem = null;
		for($item = $firstItem ; $num->getNext() != null ; $item = $num->getNext()) {
			echo "{$num->getNext()->getItem}\n";
		}
		if($num->getItem() == null) {
			echo "���X�g�Ƀf�[�^�͂���܂���B\n";
		}
	}
}

?>