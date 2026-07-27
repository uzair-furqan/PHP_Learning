<?php

print "<h1>ARRAY</h1>";

echo "<h1> INDEXED ARRAY </h1>";

$fruits = ["banana" , "mango" , "grapes"];

print_r($fruits);
echo "<br>";
// $fruits[] = "peach";
array_push($fruits , "peach");

$fruits[0] = "lemon";
print_r($fruits);

echo "<h1> ASSOCIATIVE ARRAY </h1>";

$user = [
    "name" => "uzair",
    "age" => 20,
    "city" => "karachi"
];

print_r($user);
echo $user["age"];
echo "<br>";

$user["country"] = "pakistan";
$user["name"] = "shariq";
print_r($user);

?>