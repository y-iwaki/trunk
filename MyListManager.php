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
		echo "リストの最後尾に{$o}を追加します。\n";
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
			echo "データを追加できません。\n";
		}
		else {
			$c1 = new MyListItem($o, $num->getNext());
			$num->setNext($c1);
			echo "リストに{$o}が追加されました。\n";
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
			echo "削除できません。\n";
		}
		else {
			$item->setNext($item->getNext()->getNext());
			echo "削除しました。\n";
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
			echo "リストにデータはありません。\n";
		}
	}
}

?>