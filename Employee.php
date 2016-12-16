<?php
class Employee extends Person {
	private $section;
	
	function Employee($name,$age,$section,$telephone) {
		$this->setName($name);
		$this->setAge($age);
		$this->setSection($section);
		$this->setTelephone($telephone);
	}
	
	function dataPrint() {
		echo "氏名：{$this->getName()}\n";
		echo "年齢：{$this->getAge()}\n";
		echo "所属番号：{$this->getSection()}\n";
		echo "電話番号：{$this->getTelephone()}\n";
	}
	
	function setSection($section) {
		$this->section=$section;
	}
	
	function getSection() {
		return $this->section;
	}
}
?>