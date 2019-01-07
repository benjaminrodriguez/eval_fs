<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=eval_fin', 'root', 'toor');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events
 SET title=:title, start=:start, end=:end
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start' => $_POST['start'],
   ':end' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>
