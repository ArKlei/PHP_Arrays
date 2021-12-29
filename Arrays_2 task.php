<?php

// 2 užduotis


$masyvas = [];

for($i = 0; $i < 30; $i++) {

    $skaicius = rand(5, 25);

    $masyvas[] = $skaicius;

}


// a) užduotis

/*Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;*/

echo '<h2>2 užduoties a) dalis</h2>';

$reiksmes = 0;

foreach($masyvas as $skaicius) {

    if($skaicius > 10)
        $reiksmes++;

}

echo $reiksmes;


// b) dalis

/*Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;*/


echo '<h2>2 užduoties b) dalis</h2>';

$didziausios_reiksmes_indeksas = array_keys($masyvas, max($masyvas));

//count() - grazina skaiciu kiek turime reiksmiu masyve

foreach($didziausios_reiksmes_indeksas as $indeksas) {

    echo 'Reiksme: ' . $masyvas[$indeksas] . ' Indeksas:'. $indeksas . '<br />';

}


// c) dalis

/*Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
*/

echo '<h2>2 užduoties c) dalis</h2>';

$reiksmiu_suma = 0;

foreach($masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0)
        $reiksmiu_suma += $reiksme;

}

echo $reiksmiu_suma;

// d) dalis

/*Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;*/

echo '<h2>2 užduoties d) dalis</h2>';

$naujas_masyvas=[];

for($i = 0; $i < 30; $i++) {

    $skaicius = $masyvas[$i]-$i;

    $naujas_masyvas[] = $skaicius;

}

print_r($masyvas);
echo '<p>';
print_r($naujas_masyvas);


// e) dalis

/* Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, 
kad bendras masyvas padidėtų iki indekso 39;*/

$papildomas_skaicius=0;

for($i = 0; $i < 10; $i++) {

    $papildomas_skaicius = rand(5,25);

    $naujas_masyvas[] = $papildomas_skaicius;

}

print_r($naujas_masyvas);

// f) dalis

/*Iš masyvo elementų sukurkite du naujus masyvus. 
Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;*/

echo '<h2>2 užduoties f) dalis</h2>';

$nelyginis_masyvas=[];
$lyginis_masyvas=[];

echo 'Pirminis masyvas:<br>';
print_r($naujas_masyvas);

foreach ($naujas_masyvas as $indeksas => $reiksme) {
	
	if ($indeksas % 2 == 0) {
		$lyginis_masyvas[]=$reiksme;
	} else {
		$nelyginis_masyvas[]=$reiksme;
	}
}

echo '<p>';
echo 'Nelyginių indeksų masyvas:<br>';
print_r($nelyginis_masyvas);
echo '<p>';
echo 'Lyginių indeksų masyvas:<br>';
print_r($lyginis_masyvas);

// g) dalis

/*Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;*/

echo '<h2>2 užduoties g) dalis</h2>';

$lygines_reiksmes=[];

echo 'Pirminis masyvas:<br>';
print_r($naujas_masyvas);
$nulis=0;

foreach ($naujas_masyvas as $indeksas => $reiksme) {
	
	if ($indeksas % 2 == 0 && $reiksme > 15) {
		$lygines_reiksmes[]=0;
	} else {
    	$lygines_reiksmes[]=$reiksme;
    }
}

echo '<p>';
echo 'Lyginių  indeksų reikšmės:<br>';
print_r($lygines_reiksmes);

// h) dalis

/*Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10*/

echo '<h2>2 užduoties h) dalis</h2>';

echo 'Pirminis masyvas:<br>';
print_r($naujas_masyvas);

foreach ($naujas_masyvas as $indeksas => $reiksme) {
	
	if ($reiksme > 10) {
		echo '<p>'.$reiksme;
		break;
	}
}

// i) dalis

/*Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/

echo '<h2>2 užduoties i) dalis</h2>';

echo 'Pirminis masyvas:<br>';
print_r($naujas_masyvas);

foreach ($naujas_masyvas as $indeksas => $reiksme) {
	
	if ($indeksas % 2 == 0) {
		unset($naujas_masyvas[$indeksas]);
	}
}
echo '<p>Be lyginių  indeksų elementų:<br>';
print_r($naujas_masyvas);

?>


