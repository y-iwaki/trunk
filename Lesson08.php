<?php

$num = array();
for($i = 1 ; $i < count($argv) ; $i++){
	$match = is_numeric($argv[$i]);
	if(preg_match("/^[0-9]+$/", $match)){
		;
		array_push($num , $argv[$i]);
	}
}

//ソート前
for($j = 0 ; $j < count($num) ; $j++){
	$print = $num[$j];
	echo "$print ";
}

echo "\n";

for($l=0;$l<count($num)-1;$l++){
	for($k=0;$k<count($num)-1;$k++){
			if($num[$k]>$num[$k+1]){
				$swap=$num[$k+1];
				$num[$k+1]=$num[$k];
				$num[$k]=$swap;
			}
	}
}

//ソート後
for($m = 0 ; $m < count($num) ; $m++){
	$print = $num[$m];
	echo "$print ";
}

?>