<?php
//Person�N���X
class Person{
	private $name;		//����
	private $address;		//�Z��
	private $age;		//�N��
	private $telephone;		//�d�b�ԍ�
	
	//Person���\�b�h
	function Person($name,$address,$age,$telephone){
		$this->setName($name);
		$this->setAddress($address);
		$this->setAge($age);
		$this->setTelephone($telephone);
	}
	
	//dataPrint���\�b�h
	function dataPrint(){
		echo "�����F{$this->getName()}\n";
		echo "�Z���F{$this->getAddress()}\n";
		echo "�N��F{$this->getAge()}\n";
		echo "�d�b�ԍ��F{$this->getTelephone()}\n";
		echo "\n";
	}
	
	function setName($name){
		$this->name=$name;
	}
	function getName(){
		return $this->name;
	}
	function setAddress($address){
		$this->address=$address;
	}
	function getAddress(){
		return $this->address;
	}
	function setAge($age){
		$this->age=$age;
	}
	function getAge(){
		return $this->age;
	}
	function setTelephone($telephone){
		$this->telephone=$telephone;
	}
	function getTelephone(){
		return $this->telephone;
	}
}
?>