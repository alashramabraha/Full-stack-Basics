<?php

$array[0] = "Sting";

$array[1] = "Mountain Dew";

$array[2] = "Coca-cola";

echo $array[1];

echo "<br> <br>";

$myArray = array(
    "name" => "Horus Morningstar",
    "Age" => "24",
    "email" => "alashramabraha@gmail.com"
);

print_r($myArray);

echo "<br>";

$multidimesnionalArray = array(

array(
      "name" => "Horus Morningstar",
    "Age" => "24",
    "email" => "alashramabraha@gmail.com"
),

array(
      "name" => "Muhammad Ibrahim",
    "Age" => "26",
    "email" => "alashramabraha@gmail.com"
),

array(
      "name" => "Muhammad Ibrahim Rashid",
    "Age" => "24",
    "password" => "123"
)

);

print_r($multidimesnionalArray);

echo "<br>";

echo $multidimesnionalArray[2]["password"];

?>