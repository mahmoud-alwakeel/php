<?php

$name = "Mahmoud, Alwakeel  ";
echo strlen($name) . "\n";

// convert string to array, each name here is an array because of the ","
$names = explode(",", $name);
print_r($names);

$trim_name = trim($name);
echo "Trimed name: " . $trim_name . "\n";

$position = strpos($name, "Alwakeel");
echo "found at postion: " . $position . "\n";

$replace_name = str_replace(",", "", $name);
echo($replace_name) . "\n";

// converting string to array
$name_array = str_split($trim_name);
print_r($name_array);

// in order to get the length of the String here we use strlen instead of count function that we use for the arrays
for($char = 0; $char < strlen(($name)); $char++){
    echo $name[$char] . " ";
}

// also we can't use for each beacuse it needs an array
// foreach($name as $char){
//     echo $char . "\n";
// }