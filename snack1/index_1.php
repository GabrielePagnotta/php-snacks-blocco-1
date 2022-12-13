<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->.
<?php 
$basket=[
[
    "squadra di casa" => "Milano",
    "squadra ospiti"=> "sardegna",
    "punti casa" => "80",
    "punti ospiti" => "100",
],
[
    "squadra di casa" => "puglia",
    "squadra ospiti"=> "palermo",
    "punti casa" => "30",
    "punti ospiti" => "50",
],
[
    "squadra di casa" => "genova",
    "squadra ospiti"=> "venezia",
    "punti casa" => "30",
    "punti ospiti" => "200",
],


];


for($i = 0; $i < count($basket); $i++){
   echo $basket[$i]["squadra di casa"] . $basket[$i]["punti casa"] . "-" . $basket[$i]["punti ospiti"];
};
?>