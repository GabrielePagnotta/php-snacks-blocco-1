<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti
in un rettangolo grigio e i PM in un rettangolo verde. -->


<?php  

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="square bg_beige">
        <?php 
        for ($i=0; $i < count($db["teachers"]); $i++) { 
            $professori=$db["teachers"][$i];
        ?>
        <p><?php echo $professori['name'];?></p>
        <p><?php echo $professori['lastname']?></p>
        <?php } ?>
    </div>
    <div class="square bg_chocolate">
    <?php 
        for ($i=0; $i < count($db["pm"]); $i++) { 
            $pm=$db["pm"][$i];
        ?>
        <p><?php echo $pm['name'];?></p>
        <p><?php echo $pm['lastname']?></p>
        <?php } ?>
    </div>
</body>
</html>
