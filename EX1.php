<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form action="EXX1.php" method="get" >
        <label>Nom : </label><br>
        <input type="text" name="Nom"/><br><br>
        <label>Prenom : </label><br>
        <input type="text"  name="Prenom"/><br><br>
        <label>Pays : </label><br>
        <input type="text" name="Pays" /><br><br>
        <label>Cours : </label>
        <select name="Cour[]" multiple>
            <option value="simple">Simple</option>
            <option value="moyenne">moyenne</option>
            <option value="difficile">difficile</option>
        </select><br><br>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>