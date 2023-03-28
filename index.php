<?php

include("fonction.php") ;

// exercice 1 

echo exo(1);

echo helloWorld();


// exercice 2 

echo exo(2);

echo quiEstLeMeilleurProf();

// exercice 3

echo exo(3);

echo jeRetourneMonArgument(45632);

// exercice 4 

echo exo(4);

$Antoine = "Antoine";
$Danielle = "Danielle";

echo concatenation($Antoine, $Danielle);

// exercice 5 

echo exo(5);

$Antoine = "Antoine";
$Danielle = "Danielle";

echo concatenationAvecEspace($Antoine, $Danielle);

// exercice 6 

echo exo(6);

echo somme(5, 6);

// exercice 7 

echo exo(7);

echo soustraction(8, 4);

// exercice 8 

echo exo(8);

echo multiplication(2, 7);

// exercice 9

echo exo(9);

echo estIlMajeur(14);

// exercice 10

echo exo(10);

echo plusGrand(28, 18);

// exercice 11

echo exo(11);

echo plusPetit(14,22);

// exercice 12

echo exo(12);

echo plusPetitTrois(50, 200, 35);

// exercice 13

echo exo(13);

$monTableau = [5, 154, 158, 75, 65];

echo premierTableau($monTableau);


// exercice 14

echo exo(14);

echo dernierTableau($monTableau);

// exercice 15

echo exo(15);

echo plusGrandTab($monTableau);

// exercice 16

echo exo(16);

echo plusPetitTab($monTableau);

// exercice 17

echo exo(17);

$pasword = "azertyazert" ;

echo verificationPasword($pasword);

// exercice 18

echo exo(18);

$strongPasword = "Stronger123" ;

echo verificationPaswordStrong($strongPasword);

// exercice 19

echo exo(19);

$pays = "Portugal";

echo capital($pays);

// exercice 20

echo exo(20);

$nomListe = "Capital";
$elementListe = ["Paris", "Berlin", "Moscou"];


listHTML($nomListe, $elementListe);



?>