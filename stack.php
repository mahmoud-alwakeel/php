<?php

$books_stack = ["book1", "book2", "book3", "book4", "book5"];

function push($element){
    global $books_stack;
    array_unshift($books_stack, $element);
}

function pop(){
    global $books_stack;
    array_shift($books_stack);
}

push("book6");
pop();
pop();
pop();

print_r($books_stack);
