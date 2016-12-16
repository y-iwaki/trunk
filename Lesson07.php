<?php
require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

$dataLesson=array();
$addNo=0;
while($addNo<4){
	echo "Person�F1\nEmployee�F2\nEngineer�F3\nchancel�F4\n";
	echo "�ǉ�����N���X��I�����Ă��������B\n";
	$addNo = trim(fgets(STDIN));
	echo "\n";
	switch ($addNo){
		case 1:
			echo "Person�N���X�ɒǉ����܂��B";
			echo "���O����͂��Ă��������B";
			$name=trim(fgets(STDIN));
			echo "�Z������͂��Ă��������B";
			$address=trim(fgets(STDIN));
			echo "�N�����͂��Ă��������B";
			$age=trim(fgets(STDIN));
			echo "�d�b�ԍ�����͂��Ă��������B";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Person($name,$address,$age,$telephone);
			array_push($dataLesson,$data);
			$addNo=1;
			break;
		case 2:
			echo "Employee�N���X�ɒǉ����܂��B";
			echo "���O����͂��Ă��������B";
			$name=trim(fgets(STDIN));
			echo "�N�����͂��Ă��������B";
			$age=trim(fgets(STDIN));
			echo "�����ԍ�����͂��Ă��������B";
			$section=trim(fgets(STDIN));
			echo "�d�b�ԍ�����͂��Ă��������B";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Employee($name,$age,$section,$telephone);
			array_push($dataLesson,$data);
			$addNo=2;
			break;
			
		case 3:
			echo "Engineer�N���X�ɒǉ����܂��B";
			echo "���O����͂��Ă��������B";
			$name=trim(fgets(STDIN));
			echo "�Z������͂��Ă��������B";
			$address=trim(fgets(STDIN));
			echo "�N�����͂��Ă��������B";
			$age=trim(fgets(STDIN));
			echo "�ۗL�Z�p����͂��Ă��������B";
			$skill=trim(fgets(STDIN));
			echo "�d�b�ԍ�����͂��Ă��������B";
			$telephone=trim(fgets(STDIN));
			echo "\n";
			$data=new Engineer($name,$address,$age,$skill,$telephone);
			array_push($dataLesson,$data);
			$addNo=3;
			break;
			
		case 4:
			echo "�ǉ��@�\���I�����܂��B";
			echo "\n";
			$addNo=4;
			break;
	}
}

echo "�ꗗ�\�����܂��B\n";
foreach ($dataLesson as $printData){
	$printData->dataPrint();
	echo "\n";
}

echo "�������܂��B\n";
$searchName="search";
while($searchName != ""){
	echo "�������閼�O����͂��Ă��������B";
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
			echo "��v���閼�O�͂���܂���ł����B\n";
		}
	}
}
echo "�������I�����܂��B\n";
?>