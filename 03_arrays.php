<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
echo $numbers[0];
echo '<br>';
echo $numbers[3] + $numbers[4];
echo '<br>';

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);
echo '<br>';

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];

// echo $colors[1];

// Strings as keys
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'];
echo '<br>';

var_dump($hex);
echo '<br>';


/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
];

// Array of people
$people = [
    $person1, //   [...$person1]
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com',
    ],
];

var_dump($people);
echo '<br>';

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo '<br>';

echo $people[2]['email'];
echo '<br>';

// Encode to JSON
var_dump(json_encode($people));
echo '<br>';

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
echo '<br>';

/*
1
9
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
#f00
array(3) { ["red"]=> string(4) "#f00" ["green"]=> string(4) "#0f0" ["blue"]=> string(4) "#00f" }
array(3) { [0]=> array(3) { ["first_name"]=> string(4) "Brad" ["last_name"]=> string(8) "Traversy" ["email"]=> string(14) "brad@gmail.com" } [1]=> array(3) { ["first_name"]=> string(4) "John" ["last_name"]=> string(3) "Doe" ["email"]=> string(14) "john@gmail.com" } [2]=> array(3) { ["first_name"]=> string(4) "Jane" ["last_name"]=> string(3) "Doe" ["email"]=> string(14) "jane@gmail.com" } }
Brad
jane@gmail.com
string(201) "[{"first_name":"Brad","last_name":"Traversy","email":"brad@gmail.com"},{"first_name":"John","last_name":"Doe","email":"john@gmail.com"},{"first_name":"Jane","last_name":"Doe","email":"jane@gmail.com"}]"
object(stdClass)#1 (3) { ["first_name"]=> string(4) "Brad" ["last_name"]=> string(8) "Traversy" ["email"]=> string(14) "brad@gmail.com" }
*/

