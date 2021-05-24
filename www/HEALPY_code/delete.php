<?php
session_start();
require_once 'function.php';
if(isset($_POST['submit'])){
    $dbh = dbInit();
    $sth = $dbh->prepare(
        'DELETE FROM users WHERE id = :id'
    );
    $ret = $sth->execute(['id' => $_POST['id']]);
}
header('Location:admin.php');

?>