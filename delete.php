
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    include "connection_database.php";
    $sql = "DELETE FROM `news` WHERE `news`.`Id` = ?";
    echo "zapros = ".$sql;
    if (isset($dbh)) {
        $dbh->prepare($sql)->execute([$_POST['id']]);
        echo "id = " . $_POST['id'];
    }
}
?>