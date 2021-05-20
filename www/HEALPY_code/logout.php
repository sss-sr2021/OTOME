<?php
/*** 
*logout.php : ログアウト
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.10
*
*/

session_start();
require_once 'function.php';
/***
* 関数呼び出し : ログアウト
*/
logOut();
// header('Location:index.php');
print_r($_SESSION);
?>