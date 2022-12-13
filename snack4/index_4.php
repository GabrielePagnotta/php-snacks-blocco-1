<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php 
$numeri=[];

for ($i=0; $i < 15; $i++) { 
    $random = rand(1,20);
    

    if(!in_array($random,$numeri)){
        echo $numeri[]=$random ."<br>";
        
    };
    
}

?>