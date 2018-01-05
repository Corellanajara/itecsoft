
<?php 
include ("config.php");
	 ?>

<?php 
$resultado = mysql_query("SELECT * FROM noticias ORDER BY id ASC LIMIT 0,10");
while($row=mysql_fetch_array($resultado))
{

echo $row['titulo']; 
echo "<br>"; 
echo $row['id']; 
echo "<br>"; 
echo $row['categoria']; 
echo "<br>"; 
echo $row['noticia'];
echo "<br>";
echo "<br>";

}

?>
<br>
<a href="agregar.php">agregar noticias</a>