<?php 
$budget = 53.89;
$achats = 54.76;
if($budget >=$achats){
    echo 'La somme ('.$budget.'DH) permet de payer 
    tous les achats ('.$achats.'DH).';
}
else{
    echo 'La somme ('.$budget.'DH) ne permet pas 
    de payer les achats ('.$achats.'DH).';
}
?><br><br>
<?php
$heure = 14;
if ($heure < 0 || $heure >= 24) {
    echo "Cette heure est incorrecte !";
} elseif ($heure >= 0 && $heure < 12) {
    echo "Bonne matinée !";
} elseif ($heure >= 12 && $heure < 18) {
    echo "Bonne après-midi !";
} else {
    echo "Bonne soirée !";
}
?><br><br>
<?php
for ($i=1;$i<=5;$i++){
    for($k=1;$k<=$i;$k++){
        echo $i;
    }
    echo '<br>';
}
?><br><br>

<?php 
$i = 70;
while($i<=99){
    echo $i.'<br>';
    $i+=9;
}
?><br><br>
<?php
$Data = array('fes',"nador","casa","safi");
echo $Data[1].'<br>';
for($i=0;$i<count($Data);$i++){
    echo $Data[$i].'</br>';
}
?><br><br>

<?php
$tableau = [
    'Maroc'=>'Rabat',
    'Palastine'=>"Qods",
    'italie'=>'Roma'
];
foreach($tableau as $t=> $v){
    echo $t.':'.$v."<br>";
}
?>
<?php
// count : lentgh ;
$miArray = array(1, 2, 3, 4, 5);
$numeroElementos = count($miArray);
echo "El número de elementos en el array es: " . $numeroElementos;
?>
<?php 
$tb = ['MAROC','FRANCE','SPAIN','ALEMAGNE'];
//array_push($tb,'BELGUIME');  // يضيف عنصرًا واحدًا أو أكثر إلى نهاية المصفوفة.
//$tb['PAY-BASE'] = 'AJAX';     
//array_pop($tb);   // يزيل ويعيد العنصر الأخير في المصفوفة. return dakshi limha 
//array_shift($tb);  // يزيل ويعيد العنصر الأول من المصفوفة.
//array_unshift($tb,'ITALIE');  // يضيف عنصرًا واحدًا أو أكثر إلى بداية المصفوفة.
//array_slice($tb,2,2) ;  //تُرجع جزءًا من المصفوفة المحددة بواسطة فهرس البداية والنهاية.
var_dump($tb);
?>


