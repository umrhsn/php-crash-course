<?php

// $y = 12;

// function registerUser()
// {
//   global $y; // without this line, we get Warning: Undefined variable $y
//   echo $y;
//   $x = 10;
//   echo 'User registered';
// }
// /*
// 12
// User registered
// */

// // Call the function
// registerUser();

// echo $x;
// /* Warning: Undefined variable $x */

function registerUser($email)
{
  echo $email . ' registered';
}

// registerUser('Brad');
/* Brad registered */

function sum($n1, $n2)
{
  return $n1 + $n2;
}

// echo sum(5, 5); // 10

// $result = sum(5, 5);
// echo $result; // 10

// you can make function parameters with default values

function greet($name = 'Guest')
{
  echo 'Hello ' . $name;
}

// greet(); // Hello Guest


// anonymous function

$multiply = function ($n1, $n2) {
  return $n1 * $n2;
};

// echo $multiply(5, 5); // 25

// a single-line return statement like this can be written with arrow functions

$add = fn($n1, $n2) => $n1 + $n2;

echo $add(5, 5); // 10

// closures