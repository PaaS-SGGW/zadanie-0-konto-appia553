<?php

include ('db.php');

echo "Error 404, no pancakes found<br>"

 $sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  print_r ($details);

?>