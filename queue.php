<?php

$names_queue = ["Mahmoud", "Ahmed", "Aly"];

function enqueue($array){
    global $names_queue;
    array_push($names_queue, $array);
    return $names_queue;
}

function dequeue(){
    global $names_queue;
    return array_shift($names_queue);
}

print_r($names_queue);

enqueue("x");
dequeue();

print_r($names_queue);
