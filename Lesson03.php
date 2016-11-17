<?php
$data=array("1","2","3","4","5","6","7","8","9","10");				//今回使用する配列
shuffle($data);														//配列のデータをランダムにする
print("ソート前:");
print_r($data);
print("<br/>");

$cor=array("1","2","3","4","5","6","7","8","9","10");				//ソートした結果この順番にしたい

$count=0;
for($i=0;$i<count($data)-1;$i++){									//ソートするために繰り返す
	if($cor==$data){												//配列dataがソートする前に配列corと同じ順番の場合
		print("ソート後:");
		print_r($data);												//ソートした結果を表示
		break;														//corとdataが等しい時はソートを終了する
	}
	else															//ソート前の配列と配列corが異なる場合
	{
		for($k=0;$k<count($data)-1;$k++){							//隣接交換法を行う
			if($data[$k]>$data[$k+1]){
				$swap=$data[$k+1];
				$data[$k+1]=$data[$k];
				$data[$k]=$swap;
			}
		}
		if($cor==$data){											//ソートした結果を表示する
			print("ソート後:");
			print_r($data);
			break;													//ソートを終了する
		}
		else														//ソートした配列と配列corが一致しない場合
		{
			$count++;
			print($count."回目のソート:");							//ソートの途中経過
			print_r($data);
		}
	}
	print("<br/>");
}	
?>