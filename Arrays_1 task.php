<?php

// 1 užduotis

/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.*/


echo '<h2>Pirma užduotis</h2>';

$masyvas = [];

for($i = 0; $i < 30; $i++) {

    $skaicius = rand(5, 25);

    $masyvas[] = $skaicius;

}

print_r($masyvas);

?>