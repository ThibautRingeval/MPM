<?php

// Récupérer les valeurs saisies dans les champs de durée
$durees = array($_POST['duree1'], $_POST['duree2'], $_POST['duree3'], $_POST['duree4']);
$debut = array($_POST['duree1'], $_POST['duree2'], $_POST['duree3'], $_POST['duree4']);
$fin = array($_POST['fin1'], $_POST['fin2'], $_POST['fin3'], $_POST['fin4']);
$nom = array($_POST['nom1'], $_POST['nom2'], $_POST['nom3'], $_POST['nom4']);

// Afficher un tableau HTML avec les valeurs de durée
echo "<table>";
echo "<tr><th>Nom</th><th>Durée</th><th>Début</th><th>Fin</th></tr>";
for ($i = 1; $i <= 4; $i++) {
  echo "<tr>";
  echo "<td>".$_POST['nom'.$i]."</td>";
  echo "<td>".$durees[$i-1]."</td>";
  echo "<td>".$_POST['debut'.$i]."</td>";
  echo "<td>".$_POST['fin'.$i]."</td>";
  echo "</tr>";
}
echo "</table>";

?>
