<?php
 if(isset($_GET['id'])){
 try {
    echo $_GET['id'];
 } catch (PDOException $e) {
    echo $e;
 }

 }