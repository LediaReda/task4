<?php
// (1)
$arraySize = 10; 
$numbers = [];
for ($i = 0; $i < $arraySize; $i++) {
    $numbers[] = rand(1, 100); 
}
$sum = array_sum($numbers);
$average = $sum / $arraySize;

echo "The average of the numbers in the array is: " . $average;
// (2)
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$twoDArray = [[], []];

$index = 0;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $twoDArray[$i][$j] = $numbers[$index++];
    }
}

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $twoDArray[$i][$j] . " ";
    }
    echo "\n";
}
// (3)
$array = [1, 10, 5, 2, 11];
$largest = $array[0];
$smallest = $array[0];
foreach($array as $number) {
    if($number > $largest) {
        $largest =$number;
    }
    if($number < $smallest) {
        $smallest = $number;
    }
}    
echo $largest . "\n" . "<br>";
echo $smallest . "\n" . "<br>";
// (4)
$array = [1, 10, 5, 2, 11];
$x = 3;

$greaterThanOrEqualCount = 0;
$smallerThanCount = 0;

foreach ($array as $number) {
    if ($number >= $x) {
        $greaterThanOrEqualCount++;
    } else {
        $smallerThanCount++;
    }
}

echo  $smallerThanCount . "\n" . "<br>" ;
echo  $greaterThanOrEqualCount . "\n" . "<br>";
// (5)
function capitalizeFirstLetter($arrayOfNames) {
    $result = array();
    foreach ($arrayOfNames as $name) {
        $capitalized = ucfirst(strtolower($name));
        $result[] = $capitalized;
    }
    return $result;
}

$names = array("eraasoft", "backend", "group313");
$capitalizedNames = capitalizeFirstLetter($names);
echo "<pre>";
print_r($capitalizedNames);
echo "</pre>";
// (6)
function moveZerosToEnd($nums) {
    $nonZeroIndex = 0;
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] != 0) {
            $nums[$nonZeroIndex] = $nums[$i];
            $nonZeroIndex++;
        }
    }

    while ($nonZeroIndex < count($nums)) {
        $nums[$nonZeroIndex] = 0;
        $nonZeroIndex++;
    }
}

$nums = [0, 1, 0, 3, 12];
moveZerosToEnd($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";
// (7)
function findBobIndex($names) {
    $bobIndex = -1;
    for ($i = 0; $i < count($names); $i++) {
        if ($names[$i] === "Bob") {
            $bobIndex = $i;
            break;
        }
    }
    return $bobIndex;
}

$names = ["Alice", "Bob", "Charlie", "Dave"];
$bobIndex = findBobIndex($names);
echo "Bob's index: " . $bobIndex;

$names = ["Alice", "Charlie", "Dave"];
$bobIndex = findBobIndex($names);
echo "\nBob's index: " . $bobIndex;
// (8)
function secondLargest($numbers) {
    if (count($numbers) < 2) {
        throw new InvalidArgumentException("Array must contain at least two elements");
    }

    // Find the largest number
    $largest = max($numbers);

    // Remove the largest number from the array
    $numbers = array_diff($numbers, [$largest]);

    // Find the largest number in the remaining array
    $secondLargest = max($numbers);

    return $secondLargest;
}

$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$secondLargest = secondLargest($numbers);
echo  $secondLargest;
// (9)
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];

$x = 545;

if (in_array($x, $numbers)) {
    echo "Found\n";

    if ($x >= 0) {
        echo "Positive\n";
    } else {
        echo "Negative\n";
    }

    $digits = strlen((string) abs($x));
    echo "$digits digits\n";

    if (isPrime($x)) {
        echo "Prime\n";
    } else {
        echo "Not prime\n";
    }

    if ($x % 2 == 0) {
        echo "Even\n";
    } else {
        echo "Odd\n";
    }

    $reversed = strrev((string) abs($x));
    if ($x == (int) $reversed) {
        echo "Yes 🡺 read from the right as the left\n";
    } else {
        echo "No 🡒 read from the right is not the same as the left\n";
    }
} else {
    echo "Not found\n";
}

function isPrime($n) {
    if ($n <= 1) {
        return false;
    }

    if ($n <= 3) {
        return true;
    }

    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $n) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    return true;
}