<?php
include("database.php");
require_once 'jpgraph/src/jpgraph.php';

//para una grafica de barras
require_once 'jpgraph/src/jpgraph_bar.php';

//para una grafica circular
require_once 'jpgraph/src/jpgraph_pie.php';

//para una grafica de lineas
require_once 'jpgraph/src/jpgraph_line.php';

$check = $database->prepare(" SELECT Magnitud FROM Medicion WHERE Id=1" );
$check->execute();
$result = $check->fetchall();

$enero[] = $result;

$consult = $database->prepare(" SELECT Magnitud FROM Medicion WHERE Id=2" );
$consult->execute();

$info = $consult->fetchall();

$febrero[] = $info;




 ?>
