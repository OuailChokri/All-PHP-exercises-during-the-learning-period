<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        td {
            border: 2px solid black;
        }
        tr:first-child {
            background-color: red;
        }
        td:first-child {
            background-color: green;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Nombre de lignes : </label>
        <input type="number" name="l"/>
        <label>Nombre de colonnes :</label>
        <input type="number" name="c" />
        <input type="submit" value="Afficher" name="af" />
    </form>
    <?php 
    if (isset($_POST['af'])) {
        $i;
        $j;
        echo "<table>";
        for ($i = 1; $i <= (int)$_POST['l']; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= (int)$_POST['c']; $j++) {
                echo "<td>" . $j * $i . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
