<?php

include ('db.php');

echo "Error 404, no pancakes found<br>";

 $sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  echo "<br>Users: <br>";
  print_r ($details->name);
  echo " ";
  print_r ($details->email);
?>