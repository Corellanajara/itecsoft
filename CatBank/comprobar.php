<?php
  session_start();
 include("database.php");
  // Obtengo los datos cargados en el formulario de login.
 error_reporting(0);
  if($_POST['rut']!=NULL){
    $rut = $_POST['rut'];    
    
    $password = $_POST['password'];
   
    // Esto se puede remplazar por un usuario real guardado en la base de datos.
    $check = $database->prepare(" SELECT * FROM Cliente WHERE Rut = '".$rut."' " );  
    $check->execute();
    $resultado = $check->fetchall();

 
  
  foreach ($resultado as $key => $value) {
    # code...

    if($rut == $value[0] && $password == $value[6]){
     
     $saldo = $database->prepare(" SELECT * FROM Cuenta WHERE Cliente_Rut = '".$rut."'  " ); 
     $saldo->execute();
     $r = $saldo->fetchall();
     foreach ($r as $key => $valor) {
      $_SESSION['NCUENTA'] = $valor[0];
      $_SESSION['BALANCE'] = $valor[1];
       # code...
     }

    // Guardo en la sesión el email del usuario.
    $_SESSION['NAME']=$value[1];
    $_SESSION['LNAME']=$value[2];
    $_SESSION['PW']=$value[6];
    $_SESSION['ID'] = $rut;
    //include("pagina.php");
    // Redirecciono al usuario a la página principal del sitio.
    //header("HTTP/1.1 302 Moved Temporarily");
    header("Location: /CatBank/pagina.php");
   }else{
       echo ' El email o password es incorrecto, <a href="login.php">vuelva a intenarlo</a>.<br/>';
  }
   
  }
   }
  
?>
