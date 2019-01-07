<?php
$bdd = bdd();
//insert.php

//$connect = new PDO('mysql:host=localhost; dbname=eval_fin; charset=utf8', 'root', 'toor');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events
 (title, start, end)
 VALUES (:title, :start, :end)
 ";
 $statement = $bdd->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start' => $_POST['start'],
   ':end' => $_POST['end']
  )
 );
}


?>
