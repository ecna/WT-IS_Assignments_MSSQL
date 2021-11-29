<?php
require_once 'db_connectie.php';

// maak verbinding met de database (zie db_connection.php)
$db = maakVerbinding();

// haal alle genres op en tel het aantal films van dat genre
$query = 'select * from Genre';

$data = $db->query($query);

$genre_table = "";

while($rij = $data->fetch()) {
  $genre = $rij['genrenaam'];
  $genre_table = $genre_table . $genre . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie genres</title>
</head>
<body>
  <h1>Muziek genres</h1>
  <?php 
  echo ($genre_table);
  ?>
</body>
</html>