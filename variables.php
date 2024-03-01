#!/usr/local/bin/php
<?php
header('Content-Type: text/plain; charset=utf-8');




/*
Normally, we'll use PHP to inject into HTML.
Here, to demonstrate some basics of how the language works,
we'll inject into a text file instead.
*/
echo 'We are using PHP version ', phpversion(), "\n\n\n";




// VARIABLES
/* All variable names begin with a $.
   There are four scalar types:
   boolean, integer, double, string. */
$b = true;
$i = 7;
$d = 2.7;
$s = 'internet';

echo "VARIABLES\n";
echo "$b $i $d $s\n";
echo gettype($b), ' ', gettype($i), ' ', gettype($d), ' ', gettype($s), "\n";
var_dump($b, $i, $d, $s);
echo "\n\n";




// QUOTES
echo "QUOTES\n";
echo 'With single quotes these are the only escape characters: \', \\', "\n";
echo "With double quotes we have: \", \$, \nand variables are evaluated: $i\n\n\n";




// BOOLEANS
$b1 = true;
$b2 = True;
$b3 = false;
$b4 = False;
echo "BOOLEANS\n";
echo "$b1 $b2 $b3 $b4\n";
echo "true gets echoed as 1\n";
echo "false does not get echoed\n";
echo $b1 === $b2, ' ', $b3 === $b4, "\n";


$s = true;
$t = false;

$r1 = $s && $t; // processed the same as $r1 = ($s && $t);
$r2 = $s and $t; // processed the same as ($r2 = $s) and $t;

if (!$r1) { echo '$r1 is false'; }
echo "\n";

if ($r2) { echo '$r2 is true'; }
echo "\n\n\n";




// NUMBERS
// +, -, *, /, %, ++, --, +=, -=, *=, /=, %=
// all exist.

// / is surprisingly interesting.
$i = 2;
$j = 4;
$k = $i / $j;
$o = $i / $i;

echo "NUMBERS\n";
echo "$k $o \n";
echo gettype($k), ' ', gettype($o), "\n";

// The mod operators % and %=
// coerce their arguments to integers if not already integers.
$d1 = 2.25;
$d2 = 2.75;
echo $d1 % $d2, "\n\n\n";




// STRINGS
echo "STRINGS\n";

$str = 'mathematics';
echo strlen($str), "\n\n";

echo $str[5], "\n";
echo substr($str, 5), "\n\n";

echo strpos($str, 'math'), "\n";
echo strpos($str, 'the'), "\n";

// When strpos fails to find a match, 
// it returns False...
if (strpos($str, 'maths') === false) {
  echo "'maths' is not found in 'mathematics'\n";
}

// 0 and false can be coerced to one another,
// so watch out for using == accidentally
// when === is more appropriate.
if (strpos($str, 'math') == false) {
  echo "using == causes us to say the following nonsense...\n";
  echo "'math' is not found in 'mathematics'\n";
}

$s1 = 'conc';
$s2 = 'ate';
$s3 = 'nate';
$s = $s1 . $s2 . $s3;
echo "\n", $s, "\n";
echo $s1, $s2, $s3;

$orig = 'hello world';
$split = explode(' ', $orig);
$join = implode(' ', $split);

echo "$orig\n$join\n\n";
var_dump($split);

$orig = "hello world\r\n";
echo str_replace("\r\n", "\n", $orig);
// dos2unix must do something like this. 

// As well as arrays, we have objects, NULL, and resources.
echo "\n\n";




// CONST
echo "CONST\n";
const PI = 3.1415926535897932;
echo PI, "\n";

$radius = 7;
$area = PI * $radius * $radius;
echo "radius = $radius, area = $area\n";




?>
