<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table tr,td{
            border : 1px solid black ;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nom : </td> <td><?php echo $_GET['Nom'] ?></td>
        </tr>
        <tr>
            <td>Prenom : </td><td><?php echo $_GET['Prenom'] ?></td>
        </tr>
        <tr>
            <td>pays : </td><td><?php echo $_GET['Pays'] ?></td>
        </tr>
        <tr>
            <td>Cour : </td><td><?php foreach($_GET['Cour']as $v) echo "<ul><li>$v</li></ul>" ?></td>
        </tr>
    </table>
</body>
</html>