<?php 

include("database.php");
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];

if($n2 < $n1){
	?>
	<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Imposible!</h4>
                No hay dinero suficiente para hacer la transaccion!.
              </div>
      <?php
      $limpiar =
      include("index.php");
}else{
	?>
	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Bien, una más!</h4>
                Venta realizada con exito!.
              </div>
      <?php
      $query = $database->prepare("SELECT * from yara.carrito");
      $query->execute();
      $resultado = $query->fetchall();
      foreach ($resultado as $key => $value) {
      		$codigo = $value[0];
      		$nombre = $value[1];
      		$precio = $value[2];
      		$cantidad = $value[3];
      		
      		$insertar = $database->prepare("INSERT INTO yara.ventas values(?,?,now())");
      		$insertar->execute(array($codigo,$precio) );
      		

      }
      $delete = $database->prepare("DELETE from yara.carrito where Codigo!='' ");
      $delete->execute();
      include("index.php");
}





 ?>