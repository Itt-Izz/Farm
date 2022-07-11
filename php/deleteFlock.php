<?php
include 'DatabaseConnection.php';
include 'DatabaseFunctions.php';

 if(isset($_GET['id'])){
 //get the id into php variable like below
 try {
    deleteFlock($pdo, $_GET['id']);
    header("Location: ../index.php");
 } catch (PDOException $e) {
    echo $e;
 }

 }
 ?>