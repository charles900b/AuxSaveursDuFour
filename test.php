<?php
session_start();
$Json = file_get_contents("../data/donnees.json");
$myarray = json_decode($Json, true);
if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    for ($i=0 ; $i<=5 ; $i++) {
        if ($myarray[$i]['Pseudo'] == 'cycy' && $myarray[$i]['Mdp'] == 'abc' ) {
            echo $myarray[$i]['Adresse'];
            echo 'ici';
        }
    }
}
?>