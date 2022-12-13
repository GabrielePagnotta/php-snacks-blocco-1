<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php 
    $posts=[
        
       "26/07/1998"=>[
        ["title"=> "post1",
          "author"=>"Marco Rossi",
          "text"=>"ciao come va",
        
       ],

       [  "title"=> "post2",
          "author"=>"Giulio Verdi",
          "text"=>"Mi piace il gelato",
        
       ]
    ],

    "25/12/2022"=>[
    
        [
            "title"=> "post3",
            "author"=>"Gennaro Esposito",
            "text"=>"Programmare è un lavoro duro",
        ],
        [
            "title"=> "post4",
            "author"=>"Andrea Bocelli",
            "text"=>"Non ci vedo piu dalla fame",
        ]

    
],

];

for ($i=0; $i < count($posts); $i++) { 
    echo "<br>";
    $dates = array_keys($posts)[$i];
    echo $dates;

    for ($n=0; $n < count($posts[$dates][$i]) ; $n++) { 
        
        echo "<h3>" . "<br>" . $posts[$dates][$n]["title"] ."<br>" . "</h3>";
        echo "<br>" . $posts[$dates][$n]["author"] ."<br>";
        echo "<br>" . $posts[$dates][$n]["text"] ."<br>";
        
    }
    
}


?>

    

      
