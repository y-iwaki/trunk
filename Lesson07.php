<?php
require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

$dataLesson=array();
$addNo=0;
while($addNo<4){
	echo "Person：1\nEmployee：2\nEngineer：3\nchancel：4\n";
	echo "追加するクラスを選択してください。\n";
	$addNo = trim(fgets(STDIN));
	echo "\n";
	switch ($addNo){
		case 1:
			echo "Personクラスに追加します。";
			echo "名前を入力してください。";
			$name=trim(fgets(STDIN));
			echo "住所を入力してください。";
			$address=trim(fgets(STDIN));
			echo "年齢を入力してください。";
			$age=trim(fgets(STDIN));
			echo "電話番号を入力してください。";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Person($name,$address,$age,$telephone);
			array_push($dataLesson,$data);
			$addNo=1;
			break;
		case 2:
			echo "Employeeクラスに追加します。";
			echo "名前を入力してください。";
			$name=trim(fgets(STDIN));
			echo "年齢を入力してください。";
			$age=trim(fgets(STDIN));
			echo "所属番号を入力してください。";
			$section=trim(fgets(STDIN));
			echo "電話番号を入力してください。";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Employee($name,$age,$section,$telephone);
			array_push($dataLesson,$data);
			$addNo=2;
			break;
			
		case 3:
			echo "Engineerクラスに追加します。";
			echo "名前を入力してください。";
			$name=trim(fgets(STDIN));
			echo "住所を入力してください。";
			$address=trim(fgets(STDIN));
			echo "年齢を入力してください。";
			$age=trim(fgets(STDIN));
			echo "保有技術を入力してください。";
			$skill=trim(fgets(STDIN));
			echo "電話番号を入力してください。";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Engineer($name,$address,$age,$skill,$telephone);
			array_push($dataLesson,$data);
			$addNo=3;
			break;
			
		case 4:
			echo "追加機能を終了します。";
			echo "\n";
			$addNo=4;
			break;
	}
}

echo "一覧表示します。\n";
foreach ($dataLesson as $printData){
	$printData->dataPrint();
	echo "\n";
}

echo "検索します。\n";
$searchName="search";
while($searchName != ""){
	echo "検索する名前を入力してください。";
	$searchName=trim(fgets(STDIN));
	$match=0;
	if($searchName !== ""){
		foreach ($dataLesson as $printData){
			
			if(strpos($printData->getName(),$searchName) !== false){
				$printData->dataPrint();
				echo "\n";
				$match=1;
			}
		}
		if($match==0){
			echo "一致する名前はありませんでした。\n";
		}
	}
}
echo "検索を終了します。\n";
?>