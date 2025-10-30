<?php

$animales = array("Perro"=>2,"Gato"=>5,"Conejo"=>7,"Tortuga"=>10,"Loro"=>12,"Hamster"=>15,"Caballo"=>17,"Pez"=>20,"Serpiente"=>23,"Erizo"=>25);

array_push($animales, "Perro");
array_push($animales, "Gato");
array_push($animales, "Conejo");
array_push($animales, "Tortuga");
array_push($animales, "Loro");
array_push($animales, "Hamster");
array_push($animales, "Caballo");
array_push($animales, "Pez");
array_push($animales, "Serpiente");
array_push($animales, "Erizo");

$animal = array_pop($animales);

echo"El animal mas longevo es: " .$animal;


?>

