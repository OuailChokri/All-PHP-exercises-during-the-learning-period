<?php
// Vérifier si le cookie des visites existe déjà
if (isset($_COOKIE['visites'])) {
    $visites = unserialize($_COOKIE['visites']);
} else {
    $visites = array();
}

// Vérifier si c'est la première visite sur la page
$premiereVisitePage = empty($visites);

// Ajouter l'heure actuelle à la liste des visites
$heureVisite = date('d:m:Y H:i:s');
$visites[] = $heureVisite;

// Sauvegarder les visites dans le cookie pendant 24 heures
$expiration = time() + 24 * 60 * 60; // 24 heures
setcookie('visites', serialize($visites), $expiration);

// Afficher le détail des visites et le message personnalisé
$nbVisites = count($visites);

if ($premiereVisitePage) {
    echo "C'est votre première visite sur cette page.\n";
} else {
    echo "Détails des visites :\n";
    echo "<ul>";
    foreach ($visites as $visite) {
        echo "<li>$visite</li>";
    }
    echo "</ul>";
    echo "Vous avez visité cette page $nbVisites fois.";
}
?>
