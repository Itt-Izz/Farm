<?php

    // Listing All the flocks
    function totalflocks($db) {
            $stmt = $db->prepare('SELECT COUNT(*) FROM `flock`');
            $stmt->execute();
            $row = $stmt->fetch();
        return $row[0];
       }
    // Listing All retired flocks
    function totalRetired($db) {
            $stmt = $db->prepare('SELECT COUNT(*) FROM `flock` WHERE `retired`= 1');
            $stmt->execute();
            $row = $stmt->fetch();
        return $row[0];
       }
       
      

    //Fetch a certain flock From The Database
    function getflock($pdo, $id) {
            $stmt = $pdo->prepare('SELECT * FROM `flock` WHERE `id` =:id');
            $values = ['id' => $id ];
            $stmt->execute($values);
        return $stmt->fetch();
        }

    //Inserting a new record to flock table
    function insertFlock($pdo, $name, $entryDate, $number, $currentNo, $entryAge, $typeId, $retired, $retireDate, $costPerchick, $source, $expenditure) {
        $stmt = $pdo->prepare('INSERT INTO `flock` (`name`,`entryDate`, `number`, `currentNo`,`entryAge`, `typeId`, `retired`, `retireDate`, `costPerchick`,`source`, `expenditure`)
            VALUES (:name, :entryDate, :number, :currentNo, :entryAge, :typeId, :retired, :retireDate, :costPerchick, :source, :expenditure)');
                $values = [
                ':name' => $name,
                ':entryDate' => $entryDate,
                ':number' => $number,
                ':currentNo' => $currentNo,
                ':entryAge' => $entryAge,
                ':typeId' => $typeId,
                ':retired' => $retired,
                ':retireDate' => $retireDate,
                ':costPerchick' => $costPerchick,
                ':source' => $source,
                ':expenditure' => $expenditure];
            $stmt->execute($values);
        }

  //Fetching all flocks
  function allFlocks($pdo) {
    $stmt = $pdo->prepare('SELECT `flock`.`id`, `name`, `number`,`entryAge`, `entryDate`, `retired`, `type`FROM `flock` INNER JOIN `flocktype`ON `typeid` = `flocktype`.`id`');
     $stmt->execute();
    return $stmt->fetchAll();
    }
    
        //Fetching all flocks
function types($pdo) {
    $stmt = $pdo->prepare('SELECT  `id`,`type`, `description` FROM `flocktype`');
     $stmt->execute();
    return $stmt->fetchAll();
    }




        

    //Update records in the db
    function updateFlock($pdo, $name, $entryDate, $number, $currentNo, $entryAge, $typeId, $retired, $retireDate, $costPerchick, $source, $expenditure) {
       $stmt = $pdo->prepare('INSERT INTO `flock` (`name`,`entryDate`, `number`, `currentNo`,`entryAge`, `typeId`, `retired`, `retireDate`, `costPerchick`,`source`, `expenditure`)
        VALUES (:name, :entryDate, :number, :currentNo, :entryAge, :typeId, :retired, :retireDate, :costPerchick, :source, :expenditure)');
            $values = [
            ':name' => $name,
            ':entryDate' => $entryDate,
            ':number' => $number,
            ':currentNo' => $currentNo,
            ':entryAge' => $entryAge,
            ':typeId' => $typeId,
            ':retired' => $retired,
            ':retireDate' => $retireDate,
            ':costPerchick' => $costPerchick,
            ':source' => $source,
            ':expenditure' => $expenditure];
        $stmt->execute($values);
    }

    

    //Delete a specific Flock
    function deleteFlock($pdo, $id) {
            $stmt = $pdo->prepare('DELETE FROM `flock` WHERE `id` = :id');
            $values = [':id' => $id];
            $stmt->execute($values);
        }

          