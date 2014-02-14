<?php

if ($argc < 2) throw new Exception('Gimme a sentence!');

$sentence = $argv[1];

$words = explode(' ', $sentence);

foreach ($words as &$word) {
    // get first letter
    $char = substr($word, 0, 1);
    $nextChar = substr($word, 1, 1);

    // get rest of word
    $word = substr($word, 1);

    $charUpper = false;
    if (preg_match('/[A-Z]/', $char)) {
        $charUpper = true;
        $char = strtolower($char);
    }

    if (($char == 's' && in_array($nextChar, array('w', 't', 'p', 'h', 'k', 'l', 'c', 'v', 'n', 'm')))
        || ($char == 't' && $nextChar == 'h')
        || ($char == 'p' && $nextChar == 'r')
        || ($char == 'f' && $nextChar == 'r')
        || ($char == 'c' && $nextChar == 'h')
        || ($char == 'q' && $nextChar == 'u')
        || ($char == 'b' && $nextChar == 'r')) {
        $char .= $nextChar;
        $word = substr($word, 1);
    }

    if (in_array($char, array('a', 'e', 'i', 'o', 'u'))) {
        $word = $char.$word;
    }

    $punct = '';
    if (!preg_match('/[a-z]$/', $word)) {
        $punct = substr($word, -1);
        $word = substr($word, 0, -1);
    }

    $word = "$word{$char}ay$punct";

    if ($charUpper) $word = ucfirst($word);
}

echo implode(' ', $words);
