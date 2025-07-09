<?php
// associative array (dictionary, map)
$persons = [
    [
        "name" => "Mahmoud",
        "age" => 20,
        "gender" => "male",
    ],
    [
        "name" => "Ahmed",
        "age" => 21,
        "gender" => "male",
    ],
];

foreach($persons as $person){
    echo $person["name"] . "\n";
}

$student = [
    "name" => "Mahmoud",
    "age" => 20,
    "gender" => "male",
    "subject" => "PHP",
];

$student["grade"] = "A+";
echo $student["grade"] . "\n";

// prints keys
$keys = array_keys($student);

foreach($keys as $key){
    echo "Key: " . $key . "\n";
}

$values = array_values($student);
// prints values
foreach($values as $value){
    echo "Value: " . $value . "\n";
}