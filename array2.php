<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <m
    eta charset="utf-8">
    <title>Impresor</title>
    <style media="screen">

    </style>

<form name="formulario" method="post" action="array2.php">

Ingresa un nombre: <input type="text" name="nombre" value="">

<input type="submit" />
<br> <br>
</form>
  </head>
  <body>
 <?php    
 
 $nombre = $_POST['nombre'];

echo "El nombre ingresado es: $nombre";
    

?>
    <header>
    </header>

  </body>
</html>