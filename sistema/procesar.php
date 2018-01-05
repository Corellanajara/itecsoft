<?php 

	include("database.php");

	$codigo  = $_POST['codigo'];
	$nombre  = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$costo = $_POST['costo'];
	$precio = $_POST['precio'];
	$categoria = $_POST['categoria'];	
	$flag = 0;
	
	$revisar = $database->prepare("SELECT * from yara.producto where Codigo = '".$codigo."' ");
	$revisar->execute();
	$r = $revisar->fetchall();
	
	
	foreach ($r as $key => $value) {	
			$flag = 1;
		}
	
if($flag==0){

	$producto = $database->prepare("INSERT INTO yara.producto (Codigo,Nombre,Precio) values (?,?,?)");
	$producto->execute(array($codigo,$nombre,$precio));
	

	$ingreso = $database->prepare("INSERT INTO yara.ingreso (Fecha, Cantidad, Precio, codigo) VALUES 
		( ?, ?, ?, ?)");

	$ingreso->execute(array(date("Y/m/d") ,$cantidad,$costo,$codigo));
	//$ingresar = $ingreso->fetchall();



	$consulta = $database->prepare("SELECT * from yara.inventario where Producto_Codigo='".$codigo."' and Categoria_Id = ".$categoria." ");
	$consulta->execute();
	$c = $consulta->fetchall();
	foreach ($c as $key => $value) {
		$flag = 1 ;
		$cantidad = $cantidad + $value[0];
	}


	if($flag==1){
		$inventario = $database->prepare("UPDATE yara.inventario set Cantidad = '".$cantidad."' where Producto_Codigo='".$codigo."' and Categoria_Id = ".$categoria."");
		$inventario->execute();
	}else{
		$inventario = $database->prepare("INSERT INTO yara.inventario (Cantidad,Producto_Codigo,Categoria_Id) values (?,?,?)");
		$inventario->execute(array($cantidad,$codigo,$categoria));	
	}
	?>

	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Atención!</h4>
                El producto se ha añadido correctamente! 
              </div>
<?php 

}else{
	?>
	
<?php 


	$ingreso = $database->prepare("INSERT INTO yara.ingreso (Fecha, Cantidad, Precio, codigo) VALUES 
		( ?, ?, ?, ?)");

	$ingreso->execute(array(date("Y/m/d") ,$cantidad,$costo,$codigo));
	//$ingresar = $ingreso->fetchall();

	$consulta = $database->prepare("SELECT * from yara.inventario where Producto_Codigo='".$codigo."' and Categoria_Id = ".$categoria." ");
	$consulta->execute();
	$c = $consulta->fetchall();
	foreach ($c as $key => $value) {
		$flag = 1 ;
		$cantidad = $cantidad + $value[0];
	}


	if($flag==1){
		$inventario = $database->prepare("UPDATE yara.inventario set Cantidad = '".$cantidad."' where Producto_Codigo='".$codigo."' and Categoria_Id = ".$categoria."");
		$inventario->execute();
	}else{
		$inventario = $database->prepare("INSERT INTO yara.inventario (Cantidad,Producto_Codigo,Categoria_Id) values (?,?,?)");
		$inventario->execute(array($cantidad,$codigo,$categoria));	
	}

 ?>
	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Atención!</h4>
                El producto se ha añadido correctamente! 
              </div>
              <?php
}


	include("ingresar.php");
 ?>