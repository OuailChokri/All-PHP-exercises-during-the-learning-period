<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Résultat</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Ville</th>
            <th>Spécialité</th>
        </tr>
        <tr>
            <td><?php echo $_POST['nom']; ?></td>
            <td><?php echo $_POST['prenom']; ?></td>
            <td><?php echo $_POST['age']; ?></td>
            <td><?php echo $_POST['ville']; ?></td>
            <td><?php echo $_POST['specialite']; ?></td>
        </tr>
    </table>
</body>
</html>
