<?php

try 
{
  $conn = new PDO('mysql:host=localhost;dbname=shop','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE);
}
catch (PDOException $e)
{
  echo 'Error: '.$e->getMessage();
}

?>
