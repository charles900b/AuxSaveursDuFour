<?php include 'header.php'; ?>
<?php
    session_start();
    if (($_SERVER['HTTP_REFERER'] != "http://boulangerie/panierNM.php")) { 
        header('Location: panier.php');
    }
    $_SESSION['PanierRef'] = array();
    $_SESSION['PanierQte'] = array();
    $_SESSION['PanierImg'] = array();
    $_SESSION['PanierNom'] = array();
    $_SESSION['PanierPrix'] = array();
    $_SESSION['PanierCat'] = array();
    echo "Votre commande a bien été prise en compte et un mail vous a été envoyé à l'adresse mail suivante ".$_SESSION['email'].".<br>";
    echo "Appuyez <a href='index.php'>ici</a> pour retourner à l'accueil.";
    mail(
        $_SESSION['email'],
        "Commande Fresh Home",
        "Veuillez consulter votre facture ci-joint.\n En espérant vous revoir bientôt chez Fresh Home",
        $_SESSION['file']
    );
?>
<?php include 'footer.php'; ?>