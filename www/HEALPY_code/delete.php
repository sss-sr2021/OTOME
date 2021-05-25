<?php
session_start();
require_once 'function.php';
if(isset($_POST['submit'])){
    $dbh = dbInit();
    $sth = $dbh->prepare(
        'DELETE FROM users WHERE id = :id'
    );
    $ret = $sth->execute(['id' => $_POST['id']]);

    $sth = $dbh->prepare(
        'DELETE FROM point WHERE user_id = :user_id'
    );
    $ret = $sth->execute(['user_id' => $_POST['id']]);


}
header('Location:admin.php');

?>