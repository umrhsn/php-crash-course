<?php
$string = 'hello world';

// get the length of a string
echo strlen($string); // 11
echo '<br>';

// find the position of the first occurrence of a substring in a string
echo strpos($string, 'lo'); // 3
echo '<br>';

// find the position of the last occurrence of a substring in a string
echo strrpos($string, 'lo'); // 10
echo '<br>';

// reverse a string
echo strrev($string); // dlrow olleh
echo '<br>';

// convert a string to uppercase
echo strtoupper($string); // HELLO WORLD
echo '<br>';

// convert a string to lowercase
echo strtolower($string); // hello world
echo '<br>';

// uppercase the first character of each word
echo ucwords($string); // Hello World
echo '<br>';

// string replace
$newString = str_replace('world', 'PHP', $string);
echo $newString; // hello PHP
echo '<br>';

// returns portion of a string specified by the offset and length
$substring = substr($string, 0, 5);
echo $substring; // hello
echo '<br>';
echo substr($string, 5); // world
echo '<br>';

// remove whitespace (spaces, tabs, and newlines) from the beginning and end of a string
$trimmedString = trim($string);
echo $trimmedString; // hello world
echo '<br>';

// explode a string into an array
$words = explode(' ', $string);
print_r($words); // Array ( [0] => hello [1] => world )
echo '<br>';

// starts with
if (strpos($string, 'hello') === 0) {
  echo 'String starts with "hello"';
} else {
  echo 'String does not start with "hello"';
}
echo '<br>';
// String starts with "hello"

if (str_starts_with($string, 'Hello')) {
  echo 'YES';
} else {
  echo 'NO';
}
echo '<br>';
// NO

// ends with
if (str_ends_with($string, 'world')) {
  echo 'YES';
} else {
  echo 'NO';
}
echo '<br>';
// YES

// repeat a string
$repeatedString = str_repeat('hello ', 3);
echo $repeatedString; // hello hello hello
echo '<br>';

// pad a string to a specified length with another string
$paddedString = str_pad($string, 20, '-');
echo $paddedString; // hello world--------------
echo '<br>';

// truncate a string
$truncatedString = substr($string, 0, 10) . '...';
echo $truncatedString; // hello w...
echo '<br>';

// compare two strings
$string1 = 'hello';
$string2 = 'world';

if ($string1 === $string2) {
  echo 'Strings are equal';
} else {
  echo 'Strings are not equal';
}
echo '<br>';
// Strings are not equal

$dangerousString = '<script>alert(1)</script>';
// echo $dangerousString; // the browser parses the html and this opens us to attacks.
// instead
$safeString = htmlspecialchars($dangerousString);
echo $safeString; // <script>alert(1)</script>
echo '<br>';

// HTML Entities
$str = '<h1>Hello World</h1>';
echo htmlentities($str); // <h1>Hello World</h1>
echo '<br>';

// specifiers
printf('%s likes to %s<br>', 'Brad', 'code'); // Brad likes to code
printf('1 + 1 = %d<br>', 1 + 1); // 1 + 1 = 2
printf('1 + 1 = %f<br>', 1 + 1); // 1 + 1 = 2.000000
