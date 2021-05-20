<?php
/*** 
*sign_up.php : 新規登録
*
*Author : 豊島、畑本
*Version : 0.0.1
*Created : 2021.05.19
*Update : 2021.05.20（畑本）※alert処理はまだ
*
*/

require_once 'function.php';

/*
* データベースへの接続
*/
$dbh = dbInit();

/*
* ユーザー情報の追加
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
    echo '登録されました';
}
?>
<?php include_once('header.php')?>

    <!-- メインコンテンツ -->
    <main>
        <h3>新規登録</h3>
        <form action="" method="post">
        名前：<input type="text" name ="name" value="" required><br/>
        メールアドレス：<input type="email" name ="mail" value="" required><br/>
        パスワード：<input type="password" maxlength='16' pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="" required><br/>
        生年月日：<input type="date" name ="birthday" value="" required><br/>
        身長：<input type="number"  step="0.1" name ="height" value=""><br/>  <!-- numberだけど値の型はstring-->
        体重：<input type="number" name ="weight" value=""><br/>
        目標体重：<input type="number" name ="target_weight" value=""><br/>
        <input type="submit" name ="submit" value="登録">
        </form>
    </main>

    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="新規登録";
</script>