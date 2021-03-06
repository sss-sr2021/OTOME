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
        logout();?>
    <script>
    alert('パスワードが間違っています');
</script>
        
<?php }
}

?>
<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>ログイン</h2>
        <div class="form_contents">
        <form action="" method="post">
        <p>メールアドレス：<input type="email" name ="mail" value="" required><br/></p>
        <p>パスワード：<input type="password" name ="password" value="" required><br/></p>
        <input id="link_button" type="submit" name ="submit" value="ログイン">
        </form>
        </div>
    </main>
 

<script>
    document.getElementById('title').innerHTML="ログイン";
    $("meta[name='description']").attr('content','ログイン');
    $("meta[property='og:title']").attr('content','ログイン');
    $("meta[name='twitter:site']").attr('content','ログイン');
</script>

<!-- フッター -->
<?php include_once('footer.php')?>