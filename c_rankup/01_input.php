<?php
/**
 * step1
 */
echo trim(fgets(STDIN));

/**
 * step2
 */
$count = trim(fgets(STDIN));

for ($i = 0; $i < $count; $i++) {
    echo "paiza\n";
}

/**
 * final
 */
$inputCount = trim(fgets(STDIN));

for ($i = 0; $i < $inputCount; $i++) {
    [$name, $age] = explode(" ", trim(fgets(STDIN)));
    $age++;
    echo "$name $age" . PHP_EOL;
}