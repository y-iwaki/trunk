<?php
//Personクラス
class Person{
	private $name;		//氏名
	private $address;		//住所
	private $age;		//年齢
	private $telephone;		//電話番号
	
	//Personメソッド
	function Person($a,$b,$c,$d){
		$this->name=$a;
		$this->address=$b;
		$this->age=$c;
		$this->telephone=$d;
	}
	
	//dataPrintメソッド
	function dataPrint(){
		echo '氏名：' , $this->name , '<br/>';
		echo '住所：' , $this->address , '<br/>';
		echo '年齢：' , $this->age , '<br/>';
		echo '電話番号：' , $this->telephone , '<br/>';
		echo '<br/>';
	}
}
?>