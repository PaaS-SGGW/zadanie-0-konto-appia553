<?php
$host = "ec2-54-246-117-62.eu-west-1.compute.amazonaws.com";
$user = "ltixefeuayazns";
$password = "1229e5533cbcfa27ed791b471c979f000d70c588c1c1437495ea6e0a992a14cd";
$dbname = "de5uvm3q0hdp3r";
$port = "5432";
try{
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>