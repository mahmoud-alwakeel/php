<?php

$names_queue = ["Mahmoud", "Ahmed", "Aly"];

function enqueue($array){
    global $names_queue;
    // array push will add the element at the end
    array_push($names_queue, $array);
    return $names_queue;
}

function dequeue(){
    global $names_queue;
    // array shift will remove the first element
    return array_shift($names_queue);
}

print_r($names_queue);

enqueue("x");
dequeue();

print_r($names_queue);
