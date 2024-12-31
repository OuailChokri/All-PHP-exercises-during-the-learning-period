<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div {
            margin-top: 15px;
        }
        form {
            margin-left: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Filière :</label>
        <input type="text" name="f" value="<?php echo isset($_POST['f']) ? $_POST['f'] : ''; ?>">
        <?php 
        $text = strtoupper($_POST['f']);
        ?>
        <button type="submit" name="ok">Vérifier</button>
        <div style="display: <?php echo isset($_POST['ok']) ? 'block' : 'none'; ?>">
            <label>Cette Filière : </label>
            <input type="radio" name="c" <?php if ($text == "DD" || $text == "ID") echo "checked"; ?> /><label>Existe.</label>
            <input type="radio" name="c" <?php if ($text != "DD" && $text != 'ID') echo "checked"; ?> /><label>N'existe pas</label>
            <?php if ($text != 'DD' && $text != 'ID' && isset($_POST['ok'])) echo "<script> alert('this filier nest pas '); </script>" ?>
        </div>
        
    </form>
</body>
</html>
