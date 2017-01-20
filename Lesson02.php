<?php
$data=array("1","2","3","4","5","6","7","8","9","10");				//今回使用する配列
print_r($data);														//配列を出力
print("<br/>");														//改行
shuffle($data);														//配列のデータをランダムにする
print("ソート前:");
print_r($data);
print("<br/>");

for($i=0;$i<count($data)-1;$i++){						//配列のデータ数だけ繰り返す
	$min=$i;											//iの値を最小の数にする
	for($j=$i+1;$j<count($data);$j++){					//iと比較するjの値の配列のデータ数だけ繰り返す
		if($data[$min]>$data[$j]){						//iの値よりjの値のほうが小さかった場合
			$min=$j;									//最小の値を更新する
		}
	}
		
		$swap=$data[$i];								//最小値を格納
		$data[$i]=$data[$min];							//データの入れ替え
		$data[$min]=$swap;								//格納された最小値を入れる
		
		print_r($data);									//配列を出力する
		print("<br/>");
}
?>