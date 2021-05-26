<?php
/*** 
*sign_up.php : 新規登録
*
*Author : 豊島、畑本
*Version : 0.0.1
*Created : 2021.05.19
*Update : 2021.05.20（畑本）
*
*/
session_start();
require_once 'function.php';

/*
* データベースへの接続
*/
$dbh = dbInit();

/*
* ユーザー情報の登録
*/
if (isset($_POST['submit'])){
    $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'mail');
    $birthday = filter_input(INPUT_POST, 'birthday');
    $height = filter_input(INPUT_POST, 'height');
    $weight = filter_input(INPUT_POST, 'weight');
    $target_weight = filter_input(INPUT_POST, 'target_weight');
    $sth = $dbh->prepare(            
        'INSERT INTO users (name, email, password, birthday, height, weight, target_weight) VALUES (:name, :email, :password, :birthday, :height, :weight, :target_weight)'
    );
    $ret = $sth->execute([  
        'name' => $name,
        'email' => $email,
        'password' => $hash,
        'birthday' => $birthday,
        'height' => (float)$height,
        'weight' => (float)$weight,
        'target_weight' => (float)$target_weight
    ]);
    ?>
    <script>
        alert('登録しました');
        location.href="login.php";
    </script>
    <?php
}
?>
<?php include_once('header.php')?>

    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>新規登録</h2>
        <div class="form_contents">
        <form action="" method="post">
        <p>名前：<input type="text" name ="name" value="" required><br/></p>
        <p>メールアドレス：<input type="email" name ="mail" value="" placeholder="○○○＠○○○○" required><br/></p>
        <p>パスワード：<input type="password" pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="" placeholder="8桁以上16桁未満"required><br/></p>
        <p>生年月日：<input type="date" name ="birthday" value="" required><br/></p>
        <p>身長：<input type="number"  step="0.1" name ="height" value="">&nbsp;&nbsp;cm<br/></p>  <!-- numberだけど値の型はstring-->
        <p>体重：<input type="number" name ="weight" value="">&nbsp;&nbsp;kg<br/></p>
        <p>目標体重：<input type="number" name ="target_weight" value="" placeholder="登録しない場合は0を入力">&nbsp;&nbsp;kg<br/></p>
        <input id="link_button" type="submit" name ="submit" value="登録">
        </form>
    </main>

    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="新規登録";
    $("meta[name='description']").attr('content','新規登録');
    $("meta[property='og:title']").attr('content','新規登録');
    $("meta[name='twitter:site']").attr('content','新規登録');
</script>