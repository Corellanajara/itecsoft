<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

  
</body>
</html>
<form name="form1" method="post" action="">
  <label>T&iacutetulo
  <input name="titulo" type="text" id="titulo" size="60">
  </label>
  <p>
    <label>Categor&iacutea
    <select name="categoria" id="categoria">
      <option>Deporte</option>
      <option>Ciencia</option>
      <option>Entretenimiento</option>
    </select>
    </label>
  </p>
  <p>
    <label>Noticia <br>
    <textarea name="noticia" cols="60" rows="5" id="noticia"></textarea>
    </label>
  </p>
  <p>
    <label>
    <input name="guardar" type="submit" id="guardar" value="Agregar">
    </label>
  </p>
</form>
<a href="noticias.php">ir a inicio</a>
<?php 
include 'config.php';
?>

<?php 
error_reporting(0);

if ($_POST['guardar'] && $_POST['titulo']) {
$enviar = "INSERT INTO noticias (titulo,categoria,fecha,noticia) values ('".$_POST['titulo']."','".$_POST['categoria']."','".time()."','".$_POST['noticia']."')";

if (@mysql_query($enviar)) { echo "La noticia fue publicada con éxito"; }else{
  echo " no salio bien la wea";
}
}
?>