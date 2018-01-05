<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'yara';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM Producto WHERE Nombre LIKE '%".$searchTerm."%' ORDER BY Nombre ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['Nombre'];
}
//return json data
echo json_encode($data);
?>