<?php 
session_start();
error_reporting(0);

  include("database.php");
  $producto = $_GET['skills'];
  $query = $database->prepare("SELECT * from yara.producto where Nombre = '".$producto."' or Codigo = '".$producto."' ");
  $query->execute();
  $resultado = $query->fetchall();
  $flag = 0 ;
  foreach ($resultado as $key => $value) {
    # code...
    $codigo = $value[0];
    $nombre = $value[1];
    $precio = $value[2];
    $flag = 1;
  }

if($flag==1){
  $query = $database->prepare("SELECT * from yara.Carrito where Nombre = '".$producto."' or Codigo = '".$producto."' ");
  $query->execute();
  $resultado = $query->fetchall();
  $bandera = 0;
    foreach ($resultado as $key => $value) {
      $bandera = 1 ;
      $cantidad = $value[3];
    }
  if($cantidad > 1 ){
    $actualizar = $database->prepare("UPDATE yara.Carrito set Cantidad = ? where Codigo = ? ");
    $actualizar->execute(array(($cantidad-1),$codigo));
  }
  if($cantidad == 1){
    $actualizar = $database->prepare("DELETE FROM yara.carrito WHERE Codigo=?;");
    $actualizar->execute(array($codigo));
  }


}


  if($flag < 1 ){
    echo "<script type='text/javascript'>alert('No existe el elemento');</script>";
  }

  include("index.php");
  //header("location: index.php");


   ?>
  