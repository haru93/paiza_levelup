<?php
/**
 * step3
 */
$inputCount = trim(fgets(STDIN));

$nums = [];
for ($i = 0; $i < $inputCount; $i++) {
	$nums[] = trim(fgets(STDIN));
}

$checkNum = trim(fgets(STDIN));

$turn = 1;
foreach ($nums as $num) {
	if ($num === $checkNum) {
		echo $turn;
		break;
	}
	$turn++;
}

/**
 * step4
 * 
 * 【解説】
 * ・strpos関数を使い文字が含まれているかを判定
 * 　判定結果は文字の先頭からの相対位置を指すことから、0が入力されること（先頭位置の場合）もあるため演算子 !== を使うことで厳格化
 */
$inputStrCountNum = trim(fgets(STDIN));
    
$strings = [];
for ($i = 0; $i < $inputStrCountNum; $i++) {
	$strings[] = trim(fgets(STDIN));
}

$inputCharCountNum = trim(fgets(STDIN));
for ($i = 0; $i < $inputCharCountNum; $i++) {
	$characters[] = trim(fgets(STDIN));
}

foreach ($strings as $string) {
	foreach ($characters as $character) {
		if (strpos($character, $string) !== false) {
			echo "YES" . PHP_EOL;
		} else {
			echo "NO" . PHP_EOL;
		}
	}
}

/**
 * final
 */
[$inputCountNum, $countNum, $scoreNum] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $inputCountNum; $i++) {
	$peopleNums = explode(" ", trim(fgets(STDIN)));
	
	$resultScore = 0;
	foreach ($peopleNums as $peopleNum) {
		if ($scoreNum === $peopleNum) $resultScore++;
	}
	echo $resultScore . PHP_EOL;
}