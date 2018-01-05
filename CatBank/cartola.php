<?php
  include("comprobar.php");
  echo "<h1>CatBank</h1>";
  $cartola = $database->prepare("select * from Cartola where Cuenta_Ncuenta = '".$_SESSION['NCUENTA']."'");
  $cartola->execute();

  $mostrar = $cartola->fetchall();
  echo " <table border = '1' class='table table-hover'> \n";
  echo "<tr><td>Fecha</td><td>Abono</td><td>Cargo</td></tr> \n";
  foreach ($mostrar as $key => $value) {
    echo "<tr><td>$value[0]</td><td>$value[4]</td><td>$value[5]</td></tr> \n" ;
    # code...
  }
  echo "</table> \n";

 ?>
