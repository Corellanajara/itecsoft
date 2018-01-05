<?php // content="text/plain; charset=utf-8"
include("database.php");
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
$data = $database->prepare("SELECT Magnitud FROM Medicion where Id = 1  ORDER BY Magnitud DESC limit 7");


$data->execute();
$x = $data->fetchall();

$date = $database->prepare("SELECT dayname(hora) FROM medicion WHERE Id=1  ORDER BY Magnitud DESC limit 7");
$date->execute();
$y = $date->fetchall();

foreach ($x as $key => $value) {
  $Temperatura[] = $value[0];
}

foreach ($y as $key => $value) {
  $Dias[] = $value[0];
}

// Setup the graph
// tamaño
$graph = new Graph(1100,450);
// tipo de grafico, eso creo
$graph->SetScale("textlin");
// tema
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
//
// antialiasing aunque no hace mucho
$graph->img->SetAntiAliasing(false);
//titulo
$graph->title->Set('Temperatura');
// cuadricularlo o no
$graph->SetBox(true);

$graph->img->SetAntiAliasing();


$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

//mostrar
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
// cambia la parte de abajo, de numeros a letras en este caso
//$graph->xaxis->SetTickLabels(array('A','B','C','D'));
//puede ser otros valores
$graph->xaxis->SetTickLabels($Dias);
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($Temperatura);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Hoy');


$graph->legend->SetFrameWeight(10);

// Output line
$graph->Stroke();

?>
