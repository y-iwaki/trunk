<?php
$count=0;
for($i= 1;$i<=100;$i++){					//1����100�܂ŌJ��Ԃ�
	if($i%3==0||$i%10==3||$i/10==3){		//3�̔{����3�����l�Ȃ̂�����
		$count++;
		if($count<9){						//���s���Ȃ�
			print($i);						//i�̒l���o��
			print(" ");						//�����̊Ԃ�������
		}
		if($count==9){						//9�ڂ̐����̂Ƃ����s����
			print($i."<br/>");				//���s����
			$count=0;						//�O�ɖ߂�
		}
	}
}
?>