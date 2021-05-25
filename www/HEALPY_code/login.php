<?php
/*** 
*login.php : ログイン
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.19
*Update : 2021.05.21(セッションにデータが入っていることを確認)
*
*/
session_start();
require_once 'function.php';
$dbh = dbInit();
if (isset($_POST['submit'])){
    $email = filter_input(INPUT_POST, 'mail');
    $pass = filter_input(INPUT_POST, 'password');
    $logined = getLoginUser(['email'=>$email]);

    if (password_verify($pass,$logined['password'])){

        $_SESSION['name'] = $logined['name'];
        $_SESSION['email'] = $logined['email'];
        $_SESSION['password'] = $logined['password'];
        $_SESSION['birthday'] = $logined['birthday'];
        $_SESSION['height'] = $logined['height'];
        $_SESSION['weight'] = $logined['weight'];
        $_SESSION['target_weight'] = $logined['target_weight'];
        $_SESSION['id'] = $logined['id'];
        header('Location:index.php');

        if($_SESSION['name'] =='管理者' || $_SESSION['email'] =='kannri@otome.jp'){ //管理者がログインしたら
            header('Location:admin.php');
        }
    }
    else{
        echo 'パスワードが間違っています';
        logOut();
        
    }
}

?>
<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h3>ログイン</h3>
        <div class="form_contents">
        <form action="" method="post">
        メールアドレス：<input type="email" name ="mail" value="" required><br/>
        パスワード：<input type="password" name ="password" value="" required><br/>
        <input type="submit" name ="submit" value="ログイン">
        </form>
        </div>
    </main>
 

<script>
    document.getElementById('title').innerHTML="ログイン";
</script>

<!-- フッター -->
<?php include_once('footer.php')?>