<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->
<?php 
$frase="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam deleniti ipsa voluptatem vel deserunt? Minima praesentium illum. delectus. eius nostrum?";

echo"<pre>";
echo $paragrafo= print_r(explode(".", $frase));
echo"</pre>";




?>

<