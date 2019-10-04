<?php
session_start();
setcookie("username","alejandro",time()+10);
?>
<html>
  <head>
    <title> Inicia sesion <?php 
    echo $_GET['favsong'];
    ?></title>
    
  </head>
<body>
<form method="post" action="NF3PAC01ArrebolaAlejandroSec.php">
    <p>Introduce tu usuario:
        <input type="text" name="user"/>
    </p>
    <p>Introduce tu contrasenya:
        <input type="password" name="pass"/>
    </p>
    <p>Introduce tu edad:
        <input type="text" name="age"/>
    </p>
    
    <p> Enter your fav color <input type="color" name="color"/></p>
    <p> Enter your fav font family <input type="font-family" name="font"/></p>
    <p> Enter your fav font size <input type="font-size" name="size"/></p>
    <p> Quieres guardar los datos almacenados en una cookie? </p>
    <p><input type="radio" name="opcion" value="recordar">Si</p>
    <p><input type="submit" value="Enviar datos"></p>
   
    </form>
     
   
   

    <?php
 
    echo "You saw this page ";
    if ( !isset( $_SESSION['count'] ) ) 
     $_SESSION['count'] = 1; else $_SESSION['count']++;
     echo  $_SESSION['count'];
    echo "times";
    ?>
   

    
    <?php
function dias_restantes($fecha_final) {  
    $fecha_actual = date("Y-m-d");  
    $s = strtotime($fecha_final)-strtotime($fecha_actual);  
    $d = intval($s/86400);  
    $diferencia = $d;  
    return $diferencia;  
}  




?>


    
    <?php
function meses_restantes($fecha_final) {  
    
    
}  


?>
    
    
    
   <?php
        echo "Yesterday was :";
        echo date("l",strtotime($fecha_actual."- 1 days")); 
        echo "The previous month was ";
        echo date("F",strtotime($fecha_actual."- 1 month")); 
        echo "There are ";
        echo dias_restantes("2019-09-30");
        echo "days left in this month";
     
     ?>
  
    
   <?php
    $mesActual= date('m');
    $mesFinal=12;
    $resultado=$mesFinal-$mesActual;
    echo "<p>There are  $resultado months left in the current year. </p> ";  
    
   
   ?>
   
   
   
   
   
   
   
   
   
    <?php

echo "Mi cancion favorita es ";
echo $_GET ['favsong']; 

echo "Mi gmail es "

?>
 

<?php
    include 'Autor.php';
    echo "<h1><p><strong>$autor</strong></p></h1>";

?>
<?php
date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo 'Good winter'  ; }
if ($month ==  2) { echo 'Good winter' ; }
if ($month ==  3) { echo 'Good winter'; }
if ($month ==  4) { echo 'Alejandro cumple este mes jeje '; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo 'Good Summer'; }
if ($month ==  8) { echo 'Good Summer'; }
if ($month ==  9) { echo 'Good Summer'; }
if ($month == 10) { echo ' Estamos en Octubre'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo 'Good winter'; }
?>



</body>
</html>
