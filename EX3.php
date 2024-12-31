<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <?php 
    $T=[];
    for($i=0;$i<10;$i++){
        $T[$i] = rand(40,60);
    }
    //var_dump($T);

    foreach($T as $S){
        echo $S.' '; 
    }
    /*$v = true;
    for ($i=0;$i<10;$i++){
        if ($T[$i]==55){
            echo 'existe';
            $v = false;
        }
    }
    if($v == true){
        echo "n'existe pas";
    }*/
    $existe = in_array(55,$T);
    if($existe)
    echo "existe ";
    else
    echo "n'existe pas";

    ?>
</body>
</html>