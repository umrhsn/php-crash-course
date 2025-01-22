<?php
$fruits = ['apple', 'orange', 'pear'];

// Get length
echo count($fruits); // 3
echo '<br>';

// search array

var_dump(in_array('apple', $fruits)); // bool(true)
echo '<br>';

// add to array

$fruits[] = 'grape';
print_r($fruits);
echo '<br>';
// Array ( [0] => apple [1] => orange [2] => pear [3] => grape )

// add to the end
array_push($fruits, 'blueberry', 'strawberry');
print_r($fruits);
echo '<br>';
// Array ( [0] => apple [1] => orange [2] => pear [3] => grape [4] => blueberry [5] => strawberry )

// add to the beginning
array_unshift($fruits, 'cherry', 'banana');
print_r($fruits);
echo '<br>';
// Array ( [0] => cherry [1] => banana [2] => apple [3] => orange [4] => pear [5] => grape [6] => blueberry [7] => strawberry )

// remove from the end
array_pop($fruits);
print_r($fruits);
echo '<br>';
// Array ( [0] => cherry [1] => banana [2] => apple [3] => orange [4] => pear [5] => grape [6] => blueberry )

// remove from the beginning
array_shift($fruits);
print_r($fruits);
echo '<br>';
// Array ( [0] => banana [1] => apple [2] => orange [3] => pear [4] => grape [5] => blueberry )

// removes an entire index and its element
unset($fruits[2]);
print_r($fruits);
echo '<br>';
// Array ( [0] => banana [1] => apple [3] => pear [4] => grape [5] => blueberry )

// split into two chuncks
$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray);
echo '<br>';
// Array ( [0] => Array ( [0] => banana [1] => apple ) [1] => Array ( [0] => pear [1] => grape ) [2] => Array ( [0] => blueberry ) )

// merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// by using array_merge()
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo '<br>';
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

// or by using spread operator ...
$arr4 = [...$arr1, ...$arr2, ...$arr3];
print_r($arr4);
echo '<br>';
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 1 [7] => 2 [8] => 3 [9] => 4 [10] => 5 [11] => 6 )

// array_combine() merges two arrays into one associative array
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);
echo '<br>';
// Array ( [green] => avocado [red] => apple [yellow] => banana )

// get array keys only
$keys = array_keys($c);
print_r($keys);
echo '<br>';
// Array ( [0] => green [1] => red [2] => yellow )

// flips key and values
$flipped = array_flip($c);
print_r($flipped);
echo '<br>';
// Array ( [avocado] => green [apple] => red [banana] => yellow )

// makes an array from a range of numbers
$numbers = range(1, 20);
print_r($numbers);
echo '<br>';
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 [10] => 11 [11] => 12 [12] => 13 [13] => 14 [14] => 15 [15] => 16 [16] => 17 [17] => 18 [18] => 19 [19] => 20 )

// Applies the callback to the elements of the given arrays
$newNumbers = array_map(function ($number) {
  return "Number $number<br>";
}, $numbers);
print_r($newNumbers);
echo '<br>';
/*
Array ( [0] => Number 1
[1] => Number 2
[2] => Number 3
[3] => Number 4
[4] => Number 5
[5] => Number 6
[6] => Number 7
[7] => Number 8
[8] => Number 9
[9] => Number 10
[10] => Number 11
[11] => Number 12
[12] => Number 13
[13] => Number 14
[14] => Number 15
[15] => Number 16
[16] => Number 17
[17] => Number 18
[18] => Number 19
[19] => Number 20
)
*/

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);
echo '<br>';
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
echo '<br>';
// int(210)