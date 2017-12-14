
<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$leeftijd = $_POST['leeftijd'];
$geslacht = $_POST['geslacht'];
$hobby = $_POST['hobby'];

echo 'Hallo ' . $voornaam . ' ' . $achternaam . ' Hoe gaat het met jou?' . '<br>';
echo 'I see that you are a  ' . $geslacht . ' How nice' . '<br>';
echo 'So your hobby is: ' . $hobby . ' That is pretty damn cool' . '<br>';

if ($leeftijd >= 18){
    echo "You are old enogh to drink." ;
}
else {
    echo "You are not old enough to drink, you child";
}







