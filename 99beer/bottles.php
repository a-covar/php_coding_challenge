<?php

for ($i = 99; $i >= 0; $i--) {
    $bottles = 'bottles';
    $nextI = $i - 1;

    if ($i == 1) {
        $bottles = 'bottle';
        $nextI = 'no more';
    }

    if ($i == 0) $i = 'No more';

    echo "$i $bottles of beer on the wall, $i $bottles of beer.\n";

    if ($i > 2) {
        echo "Take one down and pass it around, $nextI bottles of beer on the wall.\n";
    } elseif ($i == 2) {
        echo "Take one down and pass it around, $nextI bottle of beer on the wall.\n";
    } else {
        echo "Go to the store and buy some more, 99 bottles of beer on the wall.\n";
        break;
    }
}
