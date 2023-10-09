<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=sivartrips', 'root', '');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>