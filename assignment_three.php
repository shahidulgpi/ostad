<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. 
$array = ['allah', 'bangla', 'cat', 'ccc', 'alam', 'ertre'];

usort($array, function($a, $b){
   return strlen($a) > strlen($b);
});

echo "<pre>";
print_r($array);
echo "<pre>";
echo <br>;

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

$array = array("Hellow","how are you?");

echo implode(" ",$array);
echo "<br>";

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

$array = array("cat","dog","caw","goat");
$firstElementRemove = array_shift($array);
$lastElementRemove = array_pop($array);
$output = $array;
echo "<pre>";
print_r($output);
echo "<pre>";

// 4.Write a PHP function to check if a string contains only letters and whitespace.

?> 
