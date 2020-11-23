<?php
/**
 * final
 * 
 * 【解説】
 * ・正規表現を用いて結果を出力
 * ・時間の繰り上げ処理について
 * 　①：ガード節を使い可読性を向上させ繰り上げ時間を加算
 * 　②：60で割った余りを用いることで分を調整
 */
$inputCount = trim(fgets(STDIN));
    
$format = "%02s:%02s\n";

$i = 0;
while ($i < $inputCount) {
	[$baseTime, $addHour, $addMin] = explode(" ", trim(fgets(STDIN)));
	[$baseHour, $baseMin] = explode(":", $baseTime);
	$checkMin = $baseMin + $addMin;
	
	if ($checkMin >= 60) $addHour++;
	
	$resultHour = ($baseHour + $addHour) % 24;
	$resultMin = $checkMin % 60;
	echo sprintf($format, $resultHour, $resultMin);
	$i++;
}