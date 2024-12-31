<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=1;$i<=6;$i++){
        for($j=1;$j<=$i;$j++){
            echo '*';
        }
        echo '<br>';
    }
    ?>
    <?php 
    $n = 11;
    if($n % 2 == 0){
        echo 'Le Nombre '.$n." Est paire";
    }
    else{
        echo 'Le Nombre '.$n." Est impaire";
    }
    ?>
    <?php 
    function ajoutMaj($ch1,$ch2,$ch3){
        $resultat = $ch1." ".$ch2." ".$ch3." ";
        return $resultat;
    }
    $r = ajoutMaj("Bounjour","a","tous");
    echo $r;
    ?>

    <?php
$file = fopen('fichier.txt', 'w');
fclose($file);
echo "Le fichier 'fichier.txt' a été créé.";
?>
<?php

$paragraphe = "Avec PHP, la création ou la lecture de fichiers est, une fois de plus, assez simple. Il existe une multitude de fonctions dédiées à l'utilisation des fichiers. La communication entre le script PHP et le fichier est repérée par une variable, indiquant l'état du fichier et que l'on peut passer en paramètre aux fonctions spécialisées pour le manipuler.";
$file = fopen('fichier.txt', 'w');
fwrite($file, $paragraphe);
fclose($file);
$file = fopen('fichier.txt', 'r');
$contenu = fread($file, filesize('fichier.txt'));
fclose($file);
echo $contenu;
?>

</body>
</html>