<?php
$name = "Maya";
$age = 25;
$height = 182.5;

$together = $name . " " . $age . " " . $height;
echo $together;


$firstname = "Anna-Marie";
$lastname = " Drietomská";
$fullname = $firstname . $lastname;

echo "<p>$fullname<p/>";

$x = 3.14;
$y = 25;

echo gettype($x);
echo "<p></p>";
echo gettype($y);
echo "<p></p>";
echo gettype($name);

$number = "42";
$integer = (int) $number;
$plus_8 = $integer + 8;

echo "<p></p>";
echo gettype($integer);
echo "<p></p>";
echo $plus_8;

$colors = ["volet", "orange", "blue", "green", "pink"];
echo "<p></p>";
echo $colors[1];
echo "\n $colors[4]";

$score = 50;
echo "<p></p>";
if ($score >= 90) {
    echo "Výborně";
} elseif ($score >= 60 && $score <= 89) {
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}

$value = 149;
echo "<p></p>";
if ($value >= 200) {
    echo "Ano";
} elseif ($value >= 150 && $value <= 199) {
    echo "Možná";
} else {
    echo "Špatně";
}

$number = 8;

echo "<p></p>";
if ($number % 2 == 0) {
   echo "Číslo je sudé";
} else {
    echo "Číslo je liché";
}

echo "<p></p>";
if (str_starts_with($firstname, "A")) {
    echo "Jméno začíná písmenem A.";
} else {
    echo "Jméno nezačíná písmenem A.";
}

echo "<p></p>";
$married = true;

echo $married ? "Congratulations" : "Loser";

echo "<p></p>";
$vaccinated = false;

echo $vaccinated ? "Ewwww" : "Hooray";

echo "<p></p>";
$gender_girl = false;

echo $gender_girl ? "Congratulations" : "Disappointment";


echo "<p></p>";
$items = ["tomato"];

if (empty($items)) {
    echo "Empty basket";
} else {
    echo "View basket";
}
echo "<p></p>";
 function greet($name) {
   echo "Ahoj, $name!";
 }

greet($name);

echo "<p></p>";

function add($a, $b) {
    return $a + $b;
}
echo add(67, 33);

echo "<p></p>";
function multiply($a, $b) {
    return $a * $b;
}
echo multiply(4, 4);

echo "<p></p>";
function divide($a, $b) {
    return $a / $b;
}
echo divide(88, 8);

echo "<p></p>";
function substract($a, $b) {
    return $a - $b;
}
echo substract(100, 88);
