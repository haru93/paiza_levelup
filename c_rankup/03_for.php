<?php
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