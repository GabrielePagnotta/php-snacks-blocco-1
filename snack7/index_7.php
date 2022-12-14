<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe=[
    [
        "nome"=> "Gabriele",
        "cognome"=> "Pagnotta",
        "voti"=>[2,8,7,9,5],
    ],
    [
        "nome"=> "Gennaro",
        "cognome"=> "Esposito",
        "voti"=>[5,7,6,3,4,],
    ],

];

for ($i=0; $i < count($classe); $i++) { 
    $mediavoti= array_sum($classe[$i]["voti"]) / count($classe[$i]["voti"]);
    echo $classe [$i]["nome"] . "-" . $classe[$i]["cognome"] . " la media dei voti è : " . $mediavoti;
    echo"<br/>";
}

?>
