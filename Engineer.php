<?php
class Engineer extends Person {
	private $skill;
	
	function Engineer($name,$address,$age,$skill,$telephone) {
		$this->setName($name);
		$this->setAddress($address);
		$this->setAge($age);
		$this->setSkill($skill);
		$this->setTelephone($telephone);
	}
	
	function dataPrint() {
		echo "氏名：{$this->getName()}\n";
		echo "住所：{$this->getAddress()}\n";
		echo "年齢：{$this->getAge()}\n";
		echo "保有技術：{$this->getSkill()}\n";
		echo "電話番号：{$this->getTelephone()}\n";
	}
	
	function setSkill($skill) {
		$this->skill=$skill;
	}
	
	function getSkill() {
		return $this->skill;
	}
}
?>