<?php
session_start();

$_SESSION['username'] = $_POST ['user'];
$_SESSION['userpass'] = $_POST ['pass'];
$_SESSION['userage'] = $_POST ['age'];
$_SESSION['authuser'] = 0;

if (($_SESSION['username'] == 'alejandro')and
    ($_SESSION['userpass'] == '123')and
    ($_SESSION['userage'] == '19')
    ){
    $_SESSION['authuser'] = 1;
    }
    else {
        echo 'No tienes permisos';
        exit();
    }

?>

<?php if ($_POST['opcion']=="recordar")
  setcookie("username","user",time()+60);
  setcookie("color","color",time()+60);
  setcookie("font-family","font",time()+60);
  setcookie("size",$_POST['size'],time()+10);

?>



<html>
    <head>
        <title>My song site <?php echo $_GET['favsong'];?></title>
    </head>
    <body>
    


<?php
$myfavsong = urlencode ("Demons");
$mygmail = urlencode ("Alejandroarrebola17@gmail.com");
echo "<a href='NF3PAC01ArrebolaAlejandro.php?favsong=$myfavsong'>";
echo "Bienvenido a la pagina,";
echo $_COOKIE["username"];
 echo $_COOKIE ["size"];
echo $_SESSION["username"];
echo "! <br/>";

?>
<?php

$nombre_usuario = $_GET['user'] ?? 'nadie';
$nombre_usuario = $_GET['user'] ?? $_POST['user'] ?? 'nadie';
echo $nombre_usuario;
 
?>

<?php

$color= $_POST['color'];
$font= $_POST['font'];
$size= $_POST['size'];
echo '<div style="color:' .$color. '; font-family:' .$font.'; font-size:' .$size.';">Hola</div>';

?>
<?php
    include 'Autor.php';
    echo "<h1><p><strong>$autor</strong></p></h1>";

?>

    </body>
</html>