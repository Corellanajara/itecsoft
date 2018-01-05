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
	$query = $database->prepare("DELETE from yara.Carrito where Nombre = '".$producto."' or Codigo = '".$producto."' ");
  $query->execute();
  

}


  if($flag < 1 ){
    echo "<script type='text/javascript'>alert('No existe el elemento');</script>";
  }

  include("index.php");
  //header("location: index.php");


   ?>
  