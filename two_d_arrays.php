<?php

$seats = [
    ["A1", "A2", "A3"], 
    ["B1", "-", "B3"], 
    ["C1", "C2", "C3"],
];

for($row = 0; $row < count($seats); $row++){
    // print row number before each loop
    echo("Row: " . $row + 1 . "\n");
    for($single_seat = 0; $single_seat < count($seats[$row]); $single_seat++) {
        $seat_per_row = $seats[$row][$single_seat];
        if($seat_per_row == "-") {
            $seat_per_row = " X";
        }
        echo($seat_per_row . "\t");
    }
    // start a new line after each loop
    echo "\n";
}