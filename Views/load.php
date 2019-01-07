<?php

//load.php
$bdd = bdd();

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $bdd->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start"],
  'end'   => $row["end"]
 );
}

echo json_encode($data);

?>
