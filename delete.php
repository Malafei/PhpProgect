<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    include "connection_database.php";
    $sql = "DELETE FROM `news` WHERE `news`.`Id` = ?";
    $sqlDeletePhoto = "SELECT `image` FROM `news` WHERE `news`.`Id` = ?";
    //echo "zapros = ".$sqlDeletePhoto;
    if (isset($dbh)) {
        $basedir = '/images';
        $file_to_delete = $dbh->query($sqlDeletePhoto);
        $path = realpath($basedir."/".$file_to_delete);
        if (substr($path, 0, strlen($basedir)) != $basedir)
            die ("Access denied");
        unlink($path);

        $dbh->prepare($sql)->execute([$_POST['id']]);
        echo "id = " . $_POST['id'];
    }
}
?>