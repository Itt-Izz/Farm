<?php
if(isset($_POST['name'])){
try {
insertFlock($pdo, $_POST['name'], $_POST['date_in'], $_POST['initial_stock'], $_POST['current_stock'], $_POST['age'],
$_POST['flock_type_id'], $_POST['status'], $_POST['date_retirement'], $_POST['chickCost'], $_POST['source'],
$_POST['ex']);

} catch(PDOException $e) {
echo $e;
}
}
?>