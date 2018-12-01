<?php

include ('db.php');

echo "Error 404, no pancakes found<br>";

 $sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  echo "Users: <br>";
  foreach($details as $i) {
	  echo $i['name'] . " ";
	  echo $i['email'] . " <br>";
  }
?>