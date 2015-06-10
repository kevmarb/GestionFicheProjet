<?php

$counter =0;
/* Convert data to CSV */
if(!empty($_COOKIE["FicheProjectBAP"])){
    setcookie("FicheProjectBAP", $counter,time()+(31536000*3));
}else{
    $counter = $_COOKIE["FicheProjectBAP"];
    setcookie("FicheProjectBAP", $counter,time()+(31536000*3));
}
var_dump($counter);
// variable $_POST du formulaire
$projectName = $_POST["projectName"];
$projectType = $_POST["projectType"];
$description = $_POST["description"];
$context = $_POST["context"];
$constraint = $_POST["constraint"];
$contactFunction = $_POST["contactFunction"];
$contactFirstname = $_POST["contactFirstname"];
$contactLastname  = $_POST["contactLastname"];
$contactAddress = $_POST["contactAddress"];
$contactEmail = $_POST["contactEmail"];
$contactPhone = $_POST["contactPhone"];
$companyContact = $_POST["companyContact"];

// Tableau des data


// On ouvre et crée le fichier
$fp = fopen('FicheProject'.$counter.'.csv', 'w');

//