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
		echo "�����F{$this->getName()}\n";
		echo "�Z���F{$this->getAddress()}\n";
		echo "�N��F{$this->getAge()}\n";
		echo "�ۗL�Z�p�F{$this->getSkill()}\n";
		echo "�d�b�ԍ��F{$this->getTelephone()}\n";
	}
	
	function setSkill($skill) {
		$this->skill=$skill;
	}
	
	function getSkill() {
		return $this->skill;
	}
}
?>