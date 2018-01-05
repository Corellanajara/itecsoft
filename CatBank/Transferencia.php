<?php

include("style.css");
echo "";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

</head>
<body>

<div class="container">
  <h2>Haz Tu Transferencia aquí</h2>
  <form action="Transferir.php" method="post">
    <div class="form-group" >
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Ingresa Email">
    </div>

    <div class="form-group">
      <label for="id">Destinatario:</label>
      <input type="text" class="form-control" name="id" placeholder="Ingresa rut del destinatario">
    </div>
    <div class="form-group">
      <label for="Comentario">Comentarios</label>
      <input type="text" class="form-control" name="comentario" placeholder="Comentarios?">
    </div>
    <div class="form-group">
      <label for="monto">Monto</label>
      <input type="number" class="form-control" name="monto" placeholder="Ingrese el monto a Transferir">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
