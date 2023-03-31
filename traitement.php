<?php
// Start the session
session_start();

if (isset($_POST['tache1']) && isset($_POST['debut1']) && isset($_POST['fin1'])
    && isset($_POST['tache2']) && isset($_POST['debut2']) && isset($_POST['fin2'])
    && isset($_POST['tache3']) && isset($_POST['debut3']) && isset($_POST['fin3'])
    && isset($_POST['tache4']) && isset($_POST['debut4']) && isset($_POST['fin4'])) {

    $taches = array(
        array("nom" => $_POST['tache1'], "debut" => $_POST['debut1'], "fin" => $_POST['fin1']),
        array("nom" => $_POST['tache2'], "debut" => $_POST['debut2'], "fin" => $_POST['fin2']),
        array("nom" => $_POST['tache3'], "debut" => $_POST['debut3'], "fin" => $_POST['fin3']),
        array("nom" => $_POST['tache4'], "debut" => $_POST['debut4'], "fin" => $_POST['fin4']),
    );

    // Stockage des résultats dans une variable de session
    $_SESSION['mpm'] = $taches;

    // Affichage du résultat
    header("Location: affichage_mpm.php");
    exit();

} else {
    // Rediriger vers la page du formulaire avec un message d'erreur
    $_SESSION['erreur'] = "Veuillez remplir tous les champs.";
    header("Location: affichage_mpm.php");
    exit();
}
?>
