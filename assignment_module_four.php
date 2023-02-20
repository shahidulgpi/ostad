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

//Option:1
$array = array("cat","dog","caw","goat");
$firstElementRemove = array_shift($array);
$lastElementRemove = array_pop($array);
$output = $array;
echo "<pre>";
print_r($output);
echo "<pre>";
echo "<br>";

//Option:2
$a=array("red","green","blue","yellow","brown");
$output=(array_slice($a,1,-1));
echo "<pre>";
print_r($output);
echo "<pre>";
echo "<br>";

// 4.Write a PHP function to check if a string contains only letters and whitespace.

$input = "abcD aqwe ";

if(preg_match('/^[a-zA-Z\s]+$/', $input))
{
    
    echo 'True';
}

else{

    echo 'False';
}
echo "<br>";

// 5.Write a PHP function to find the second largest number in an array of numbers.

//Option:1

function secondHighest(array $arr) {
    
    sort($arr);   
    
    echo "The Array Second Highest Number is: ".$arr[sizeof($arr)-2];
} 
 
secondHighest(array( 4, 9, 15, 2, 8, 0, 3, 22));

echo "<br>";

//Option:2
$num = array(10, 20, 52, 75);
$max = $num[0];
$smax;
for($i=1; $i<count($num); $i++){
	if($num[$i]>$max){
		$smax = $max;
		$max = $num[$i];
	}else if($smax<$num[$i] && $smax < $max){
		$smax = $num[$i];
	}
}
echo "The Array Second Highest Number is: " .$smax;

?> 
