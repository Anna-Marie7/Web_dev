<?php
//proměnné a datové typy
//1.
$name = "Maya";
$age = 25;
$height = 182.5;

echo "$name\n  \n $age \n $height";
//2.
$firstname = "Anna-Marie ";
$lastname = "Drietomská";


$fullname = $firstname . $lastname;
echo "<p>$fullname</p>";
//3.
$x = 3.14;
$type = gettype($x);

echo $type;
//4.
$number = "42";
$integer_number = (int) $number + 8;
echo "<p>$integer_number</p>";
//5.
$colours = ["violet", "orange", "navy blue"];
echo $colours[1];

// podmínky a logika
//6.
echo "<p></p>";
$score = 92;
if ($score >= 90) {
    echo "Výborně";
} elseif ($score = 60-89) {
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}
//7.



//funkce
//11.
echo "<p></p>";
function greet ($name) {
echo "Ahoj, $name!";
}
greet ("Maya");
//12.
//funkce add neexistuje
echo "<p></p>";
$a = 8;
$b = 7;
$sum = $a + $b;
echo $sum;
//13.
//14.
echo "<p></p>";
function average($pole) {
  
  if (count($pole) > 0) {
    return array_sum($pole) / count($pole);
  } else {
    return 0; 
  }
}

$numbers = array(10, 20, 30, 40, 50);
$average = average($numbers);

echo "Průměr pole je: " . $average;
//15.
echo "<p></p>";

//stringy
//16.
$text = "ahoj";
echo "<p style='transform: rotate(180deg);'>" . $text . "</p>";
//17.
echo "<p></p>";
$word = "php";
$big__first_letter = ucfirst($word);
echo $big__first_letter;
//18.
echo "<p></p>";
$pocet_a = substr_count("sentence", "a");
echo $pocet_a;
//19.
echo "<p></p>";
$sentence = "Vůbec nevím, co to je Laravel!!";
$slovo = "Laravel";

if (strpos($sentence, $slovo)  !== false) {
    echo "Věta obsahuje slovo Laravel";
} else {
    echo "Věta neobsahuje slovo Laravel";
}
//20.
echo "<p></p>";
$main_letter = "e";
$náhrada = "3";

$new_sentence = str_replace($main_letter, $náhrada, $sentence);
echo $new_sentence;

//Práce s poli a logikou
//21.
echo "<p></p>";
$numbers_2 = [1, 2, 3, 4, 5];
$doubled = array_map(function($num) {
    return $num * 2;
}, $numbers_2);

print_r($doubled);
//22.
echo "<p></p>";
$names = [
    "0" => "Eva",
    "1" => "Jan",
    "2" => "Eva",
    "3" => "Petr",

];
$unique = array_unique($names);

print_r($unique);
//23.
echo "<p></p>";
$a = [1, 2];
$b = [3, 4];

$together = array_merge($a, $b);
print_r($together);
//24.
echo "<p></p>";
$searched_value = "Jan";

if (in_array($searched_value, $names)) {
    echo "Jan se nachází v poli.";
} else {
    "Jan se nenachází v poli.";
}
//25.
echo "<p></p>";
$numbers_3 = [9, 3, 5, 1];
sort($numbers_3);
print_r($numbers_3);

//logické a algoritmické funkce 
echo "<p></p>";
$words = ["dovolená", "ryba", "kočka", "tužka"];
