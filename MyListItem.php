<?php
class MyListItem{
	private $item;
	private $next;
	
	function MyListItem() {
	}
	
	function getItem() {
		return $this->item;
	}
	
	function setItem($item) {
		$this->item = $item;
	}
	
	function getNext() {
		return $this->next;
	}
	
	function setNext($next) {
		$this->next = $next;
	}
}
?>