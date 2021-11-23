
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    include "connection_database.php";
    $sql = "DELETE FROM `news` WHERE `news`.`Id` = ?";
    $tmp = $conn -> prepare($sql)->execute([$_POST['id']]);
    echo "id = ".$_POST['id'];
}
?>