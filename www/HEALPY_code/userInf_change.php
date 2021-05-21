<?php
/*** 
*userInf_change.php : 登録情報変更
*
*Author : 豊島・畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.21
*
*/
session_start();
require_once 'function.php';
$dbh = dbInit();
?>

<?php
if (isset($_POST['submit'])){
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'mail');
    $birthday = filter_input(INPUT_POST, 'birthday');
    $height = filter_input(INPUT_POST, 'height');
    $weight = filter_input(INPUT_POST, 'weight');
    $target_weight = filter_input(INPUT_POST, 'target_weight');
    $change = compact('password','name','email','birthday','height','weight','target_weight');
    foreach ($change as $key => $val){
        $sth = $dbh->prepare(            
            "UPDATE users SET {$key} = :{$key} WHERE id=:id"
        );
        $ret = $sth->execute([
            $key => $val,
            'id' => $_SESSION['id']
        ]);
        $_SESSION[$key] = $val;
    }
}
?>
<?php include_once('header.php')?>
    <!-- メインコンテンツ -->
    <main>
        <h3>ページタイトル</h3>
        <form action="" method="post">
        名前：<input type="text" name ="name" value="<?= $_SESSION['name']?>" required><br/>
        メールアドレス：<input type="email" name ="mail" value="<?= $_SESSION['email']?>" required><br/>
        パスワード：<input type="password" maxlength='16' pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="" required><br/>
        生年月日：<input type="date" name ="birthday" value="<?= $_SESSION['birthday']?>" required><br/>
        身長：<input type="number"  step="0.1" name ="height" value="<?= $_SESSION['height']?>"><br/>  <!-- numberだけど値の型はstring-->
        体重：<input type="number" name ="weight" value="<?= $_SESSION['weight']?>"><br/>
        目標体重：<input type="number" name ="target_weight" value="<?= $_SESSION['target_weight']?>"><br/>
        <input type="submit" name ="submit" value="変更する" onclick=userInf_change() >
        </form>
    </main>
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="登録情報変更";
    function userInf_change(){
        alert("変更しました。");
        location.href = 'userInf.php';
    }
</script>