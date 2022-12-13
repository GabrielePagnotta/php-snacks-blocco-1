
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato” -->

 <?php 
 $name=$_GET[name];
 $age=$_GET[age];
 $mail=$_GET[mail];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 
    <form action="" method="get">
    <input type="text" name="name" placeholder="nome">
    <input type="num" name="age" placeholder="età">
    <input type="email" name="mail" placeholder="email">
    <input type="submit"></input>
    </form>
    <p>
    <?php 
        if(strlen($name) > 3 && is_numeric($age) && strpos($mail, ".") != false && strpos($mail, "@") != false ){
            echo "l'account è verificato";
        }else{
            echo "l'account non è verificato";
        };
        ?>  
    </p>
    
    
    
 </body>
 </html>