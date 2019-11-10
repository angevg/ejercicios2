<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <m
    eta charset="utf-8">
    <title>Conversor de Monedas</title>
    <style media="screen">

    </style>
    <form action="conversormonedas.php" method="post">
    <input type="text" size="30" name="monto" />
    <input type="submit" name="submit" value="convertir" />
   </form>
  </head>
  <body>
 <?php        
    // averiguamos si se ingresó un motno
    if (isset($_POST['monto'])) {
      define ("cantidad", $_POST['monto']);
    } else {
      define ("cantidad", 0);
    }
    //paises
    $paises = array ("Peso Dominicanos","Euros");
    // definimos el tipo de cambio por cada pais
    $tasacambios = array (52.80,0.90);
    // imprimimos el monto ingresado
    echo "<b>".cantidad." Dolar</b> convertidos a las siguientes monedas:<br><br>";                                                
    //imprimir cambio de cada pais
    for ($i=0;$i<count($paises);$i++){
           echo "$paises[$i] ";
           // calculamos el cambio
           $cambio=$tasacambios[$i]*cantidad;
           // Imprimir con formato de moneda
           echo   number_format($cambio,3,".",".");
           echo "<br>";
    }

?>
    <header>
    </header>

  </body>
</html>