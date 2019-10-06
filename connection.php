<?php
try
{
$dsn = "mysql:host=localhost; dbname=intohj";
$db = new PDO ($dsn, "phpUser", "phpPass");
//print ("connected\n");
}
catch (PDOExeption $e)
{
  print ("Cannot connect to server \n");
  print ("Error code: ". $e->getCode () . "\n");
  print ("Error message: " . $e->getMessage () . "\n");
}
 ?>
