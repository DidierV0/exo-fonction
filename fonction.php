<?php

function exo($exo){

    return "<br>"."<br>*******************<br>". "exo". $exo. "<br>". "<br>";

}

function helloWorld(){
    return "Hello World !";
}


function quiEstLeMeilleurProf(){
    return "le prof de programmation web";
}

function jeRetourneMonArgument($monArgument){
    return $monArgument;
}
    
function concatenation($argumentUn, $argumentDeux){
    return $argumentUn. $argumentDeux;
}

function concatenationAvecEspace($argumentUn, $argumentDeux){
    return $argumentUn. " ". $argumentDeux;
}

function somme($argumentUn, $argumentDeux){
    return $argumentUn + $argumentDeux;
}

function soustraction($argumentUn, $argumentDeux){
    return $argumentUn - $argumentDeux;
}

function multiplication($argumentUn, $argumentDeux){
    return $argumentUn * $argumentDeux;
}

function estIlMajeur($age){
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}


function plusGrand($argumentUn, $argumentDeux){
    if ($argumentUn > $argumentDeux) {
        return $argumentUn;
    } else { 
        return $argumentDeux;
    }
    
}

function plusPetit($argumentUn, $argumentDeux){
    if ($argumentUn < $argumentDeux) {
        return $argumentUn;
    } else { 
        return $argumentDeux;
    }
    
}

function plusPetitTrois($argumentUn, $argumentDeux, $argumentTrois){
    if ($argumentUn < $argumentDeux && $argumentUn < $argumentTrois) {
        return $argumentUn;
    } elseif($argumentDeux < $argumentUn && $argumentDeux < $argumentTrois) { 
        return $argumentDeux;
    } else return $argumentTrois;   
}

function premierTableau($monTableau){


    if (count($monTableau) > 0) {
        return $monTableau[0];
    } else {
        return "null";
    }
}

function dernierTableau($monTableau){

    $derniereIndice = count($monTableau) - 1;
    
    if (count($monTableau) > 0) {
        return $monTableau[$derniereIndice];
    } else {
        return "null";
    }
}

function plusGrandTab($monTableau){

    $tailleTableau = count($monTableau);

    if (count($monTableau) > 0) {

        $memoPlusGrand = 0;

        for ($tours = 0; $tours < $tailleTableau ; $tours++) 
        {
            if ($monTableau[$tours] > $memoPlusGrand){
                $memoPlusGrand = $monTableau[$tours];
            }
        }
        return $memoPlusGrand;
    } else {
        return "null";
    }
}

function plusPetitTab($monTableau){

    $tailleTableau = count($monTableau);

    if (count($monTableau) > 0) {

        $memoPlusPetit = $monTableau[0];

        for ($tours = 0; $tours < $tailleTableau ; $tours++) 
        {
            if ($monTableau[$tours] < $memoPlusPetit){
                $memoPlusPetit = $monTableau[$tours];
            }
        }
        return $memoPlusPetit;
    } else {
        return "null";
    }
}

function verificationPasword($pasword){

    if (strlen($pasword) < 8) {
        return false;
    } else {
        return true;
    }
}

function verificationPaswordStrong($pasword){

    if (strlen($pasword) > 8 && strpbrk($pasword, "0123456789") == true && strpbrk($pasword, "AZERTYUIOPQSDFGHJKLMWXCVBN") == true) {
        return true;
    } else {
        return false;
    }
}

function capital($pays){

    switch ($pays) {
        case 'France':
            return "Paris" ;
            break;

        case 'Allemagne':
            return "Berlin" ;
            break;

        case 'Italie':
            return "Rome" ;
            break;

        case 'Maroc':
            return "Rabat" ;
            break;

        case 'Espagne':
            return "Madrid";
            break;
        
        case 'Portugal':
            return "Lisbonne" ;
            break;

        case 'Angleterre':
            return "Londres";
            break;
        
        default:
        return "Inconnu" ;
        break;
    }

}

function listHTML($nomListe, $elementListe){

    if (empty($nomListe) == true || empty($elementListe) == true) {
        echo "null";
    } else {

        echo "<h3>".$nomListe."</h3>". "<ul>";

        for ($tours=0; $tours < count($elementListe) ; $tours++) { 
            echo "<li>". $elementListe[$tours]. "</li>";
            } 
    
        echo "</ul>";
    }
}



?>