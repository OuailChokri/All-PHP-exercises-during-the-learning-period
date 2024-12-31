<?php
$nombre = 17; 
$note = 14; 

// Vérifier si le nombre est pair ou impair
if ($nombre % 2 == 0) {
    echo "Le nombre $nombre est pair.\n";
} else {
    echo "Le nombre $nombre est impair.\n";
}

// Afficher la catégorie de la note
if ($note < 8) {
    echo "Mauvais";
} elseif ($note < 10) {
    echo "Pas bon";
} elseif ($note >= 10 && $note <= 12) {
    echo "Correct";
} elseif ($note <= 16) {
    echo "Bon";
} else {
    echo "Très Bien";
}
?>
