<?php
$data=array("1","2","3","4","5","6","7","8","9","10");				//今回使用する配列
print_r($data);														//配列を出力
print("<br/>");														//改行
shuffle($data);														//配列のデータをランダムにする
print("ソート前:");
print_r($data);
print("<br/>");

$cor=array("1","2","3","4","5","6","7","8","9","10");				//配列のデータが昇順で入っている

print("<br/>");

$count=0;
for($i=0;$i<count($data)-1;$i++){						//配列のデータ数だけ繰り返す
	$min=$i;											//iの値を最小の数にする
	for($j=$i+1;$j<count($data);$j++){					//iと比較するjの値の配列のデータ数だけ繰り返す
		if($data[$min]>$data[$j]){						//iの値よりjの値のほうが小さかった場合
			$min=$j;									//最小の値を更新する
		}
	}
	if($min!=$i){										//最小値が更新された場合ソートする
		$count++;
		$swap=$data[$min];								//最小値を格納
		$data[$min]=$data[$i];							//データの入れ替え
		$data[$i]=$swap;								//格納された最小値を入れる
		if($cor===$data){								//ソートが完了した場合
			print("<br/>");
			print("ソート後:");
			print_r($data);								//配列を出力する
		}
		else											//ソートが完了しない場合
		{
			print($count."回目のソート:");
			print_r($data);								//現時点でのソート結果を出力
			print("<br/>");
		}
	}
}

?>