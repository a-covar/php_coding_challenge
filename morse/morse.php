<?php

$morseCodes = array(
  array('char'=>'0', 'morse'=>"-----"),
  array('char'=>'1', 'morse'=>".----"),
  array('char'=>'2', 'morse'=>"..---"),
  array('char'=>'3', 'morse'=>"...--"),
  array('char'=>'4', 'morse'=>"....-"),
  array('char'=>'5', 'morse'=>"....."),
  array('char'=>'6', 'morse'=>"-...."),
  array('char'=>'7', 'morse'=>"--..."),
  array('char'=>'8', 'morse'=>"---.."),
  array('char'=>'9', 'morse'=>"----."),

  array('char'=>'A', 'morse'=>".-"),
  array('char'=>'B', 'morse'=>"-..."),
  array('char'=>'C', 'morse'=>"-.-."),
  array('char'=>'D', 'morse'=>"-.."),
  array('char'=>'E', 'morse'=>"."),
  array('char'=>'F', 'morse'=>"..-."),
  array('char'=>'G', 'morse'=>"--."),
  array('char'=>'H', 'morse'=>"...."),
  array('char'=>'I', 'morse'=>".."),
  array('char'=>'J', 'morse'=>".---"),
  array('char'=>'K', 'morse'=>"-.-"),
  array('char'=>'L', 'morse'=>".-.."),
  array('char'=>'M', 'morse'=>"--"),
  array('char'=>'N', 'morse'=>"-."),
  array('char'=>'O', 'morse'=>"---"),
  array('char'=>'P', 'morse'=>".--."),
  array('char'=>'Q', 'morse'=>"--.-"),
  array('char'=>'R', 'morse'=>".-."),
  array('char'=>'S', 'morse'=>"..."),
  array('char'=>'T', 'morse'=>"-"),
  array('char'=>'U', 'morse'=>"..-"),
  array('char'=>'V', 'morse'=>"...-"),
  array('char'=>'W', 'morse'=>".--"),
  array('char'=>'X', 'morse'=>"-..-"),
  array('char'=>'Y', 'morse'=>"-.--"),
  array('char'=>'Z', 'morse'=>"--.."),

  array('char'=>".", 'morse'=>".-.-.-"),
  array('char'=>",", 'morse'=>"--..--"),
  array('char'=>"?", 'morse'=>"..--.."),
  array('char'=>"!", 'morse'=>"-.-.--"),
  array('char'=>"/", 'morse'=>"-..-."),
  array('char'=>"(", 'morse'=>"-.--.-"),
  array('char'=>")", 'morse'=>"-.--.-"),
  array('char'=>"&", 'morse'=>".-..."),
  array('char'=>":", 'morse'=>"---..."),
  array('char'=>";", 'morse'=>"-.-.-."),
  array('char'=>"=", 'morse'=>"-...-"),
  array('char'=>"+", 'morse'=>".-.-."),
  array('char'=>"-", 'morse'=>"-....-"),
  array('char'=>"_", 'morse'=>"..--.-"),
  array('char'=>"\"",'morse'=>".-..-."),
  array('char'=>"$", 'morse'=>"...-..-")
);

if ($argc < 2) throw new Exception('Gimme a sentence!');

$sentence = strtoupper($argv[1]);

$morse = '';
$lookup = array();

foreach ($morseCodes as $value) {
    $lookup[$value['char']] = $value['morse'];
}

$lookup[' '] = '/';

foreach (str_split($sentence) as $char) {
    if (!isset($lookup[$char])) throw new Exception("No morse code translation found for '$char'");
    $morse .= "$lookup[$char] ";
}

echo "$morse\n";

// foreach (str_split($morse) as $dotDash) {
//     switch ($dotDash) {
//         case '.':
//             $say = 'dot';
//             break;
//         case '-':
//             $say = 'dash';
//             break;
//         case '/':
//             $say = 'slash';
//             break;
//     }
//
//     shell_exec("osascript -e 'say \"$say\" using \"Alex\"'");
// }

// asort($lookup);
// print_r($lookup);

// echo "    Morse | Alpha\n";
// echo "--------- | ------\n";
// foreach ($lookup as $char => $morse) {
//     echo ' ' . sprintf('%-8s', "`$morse`") . " | $char \n";
// }
