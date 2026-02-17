
<?php
 if (isset($_POST['calcular'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

   
        $nombreCompleto = $n1 . " " . $n2;

        $longitud = strlen($nombreCompleto);
        $nombre2 = strlen($n2);
        $nombre1 = strlen($n1);

        if (str_contains(strtolower($n2), 'a')) {
        $n2f=$nombre2+15;
        } 
        else {
        $n2f=$nombre2;
        }
        if (str_contains(strtolower($n1), 'a')) {
        $n1f=$nombre1+15;
        } 
        else {
        $n1f=$nombre1;
        }
    }
        $porcentaje=$n1f+$n2f+random_int(0,30);

        
    $ship1 = substr($n1, 0, 2);
    $ship2 = substr($n2, 0, 2); 
    $ship = $ship1 . $ship2; 

   echo "$n1<br>";
   echo "$n2<br>";
   echo "$porcentaje<br>";
   echo "$ship<br>";
    ?>
