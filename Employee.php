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
		echo "�����F{$this->getName()}\n";
		echo "�N��F{$this->getAge()}\n";
		echo "�����ԍ��F{$this->getSection()}\n";
		echo "�d�b�ԍ��F{$this->getTelephone()}\n";
	}
	
	function setSection($section) {
		$this->section=$section;
	}
	
	function getSection() {
		return $this->section;
	}
}
?>