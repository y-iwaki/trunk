<?php
require 'MyListItem.php';

class MyListManager {
	private $firstItem;
	
	function MyListManager() {
		$firstItem = null;
	}

	//最後尾に追加する
	function add($num) {
		$mylistitem = new MyListItem($num);
		$ichi = $this->firstItem;
		//リストにデータが入っているとき
		if ($ichi != null) {
			//最後尾に移動する
			while($ichi->getNext() != null) {
				$ichi = $ichi->getNext();
			}
			$ichi->setNext($mylistitem);
		}
		//リストにデータが入っていないとき
		else {
			$this->firstItem = $mylistitem;
		}
		echo "最後尾に「{$num}」を追加\n";
		echo "\n";
	}
	//指定した位置に追加する
	function add2($num, $i) {
		$mylistitem = new MyListItem($num);
		$ichi = $this->firstItem;
		$j = 0;
		//リストにデータが入っているとき
		while ($ichi != null) {
			$ichi = $ichi->getNext();
			$j++;
		}
		if ($i > $j && $i != 0) {
			$i = $i + 1;
			echo "削除に失敗しました。\n";
			echo "\n";
			return;
		}
		else if ($i < 0) {
			echo "指定した位置が0より小さいので追加できません。\n";
			echo "\n";
			return;
		}
		else if ($i == 0) {
			$ichi = $this->firstItem;
			$mylistitem->setNext($ichi);
			$this->firstItem = $mylistitem;
		}
		else {
			$ichi = $this->firstItem;
			for ($k = 0; $k < $i - 1; $k++) {
				$ichi = $ichi->getNext();
			}
			$mylistitem->setNext($ichi->getNext());
			$ichi->setNext($mylistitem);
		}
		$i = $i + 1;
		echo "｢{$i}｣番目に｢{$num}｣を追加\n";
		echo "\n";
	}
	//指定した位置のデータを削除する
	function remove($i) {
		$nextichi = $this->firstItem;
		$ichi = $this->firstItem;
		$j = 0;
		//リストにデータが入っているとき
		while ($ichi != null) {
			$ichi = $ichi->getNext();
			$j++;
		}
		if ($i >= $j) {
			echo "削除に失敗しました。\n";
			echo "\n";
			return;
		}
		else if ($i < 0) {
			echo "指定した位置が0より小さいので削除できません。\n";
			echo "\n";
			return;
		}
		else if ($i == 0) {
			$nextichi = $this->firstItem->getNext();
			$this->firstItem = $nextichi;
		}
		else {
			$ichi = $this->firstItem;
			for ($k = 0; $k <= $i; $k++) {
				$nextichi = $nextichi->getNext();
			}
			for ($k = 0; $k < $i - 1; $k++) {
				$ichi = $ichi->getNext();
			}
			$ichi->setNext($nextichi);
		}
		$i = $i + 1;
		echo "｢{$i}｣番目を削除\n";
		echo "\n";
	}
	//データを出力する
	function printList() {
		$ichi = $this->firstItem;
		if ($ichi != null) {
			echo "データ出力\n";
			while($ichi != null) {
				echo "{$ichi->getItem()}\n";
				$ichi = $ichi->getNext();
			}
		}
		else {
			echo "リストにデータが登録されていません\n";
		}
		echo "\n";
	}
}

?>
