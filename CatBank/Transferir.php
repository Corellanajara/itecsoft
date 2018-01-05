<?php
include("database.php");
include_once("comprobar.php");

	$cuenta_destino=0;
	$comprobar=$database->prepare(" select Ncuenta from Cuenta where Cliente_Rut = '".$_POST['id']."'");
	$comprobar->execute();

	$mostrar = $comprobar->fetchall();
	foreach ($mostrar as $key => $value) {
		$cuenta_destino= $value[0];
	}

if($cuenta_destino!=0){

	$transferencia=$database->prepare("call Transferir(?,?,?,NOW(),?,?)");
	$transferencia->execute(array($_POST['monto'],$_POST['id'],$_SESSION['ID'],$cuenta_destino,$_SESSION['NCUENTA']));
	$_SESSION['BALANCE']=$_SESSION['BALANCE']-$_POST['monto'];
	include("listo.php");
}else {
	echo " no esta en la base de datos, falló";
}



?>
