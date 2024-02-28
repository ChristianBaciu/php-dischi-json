<?php

// andiamo a prendere le info presenti dal file json e lo trasformiamo in una stringa
$string = file_get_contents("todo-list.json");   // nome del file
// // controllo
// var_dump($string);


// rendiamo la stringa in un array, il true serve per renderlo in un array associativo
$stringInArray = json_decode($string, true);
// // controllo
// var_dump($stringInArray);


// questo permette al browser di interpretarlo come un formato json
header('Content-Type: application/json');

echo json_encode($stringInArray);