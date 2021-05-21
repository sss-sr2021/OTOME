<?php
session_start();
require_once 'function.php';
$dbh = dbInit();
?>
<?php include_once('header.php')?>

    <!-- メインコンテンツ -->
    <main>
        <h3>ユーザ登録情報</h3>
        <form action="" method="post" class="userInf">
        名前：<input type="text" name ="name" value="<?= $_SESSION['name']?>" readonly><br/>
        メールアドレス：<input type="email" name ="mail" value="<?= $_SESSION['email']?>" readonly><br/>
        パスワード：<input type="password" maxlength='16' pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="<?= $_SESSION['password']?>" readonly><br/>
        生年月日：<input type="date" name ="birthday" value="<?= $_SESSION['birthday']?>" readonly><br/>
        身長：<input type="number"  step="0.1" name ="height" value="<?= $_SESSION['height']?>" readonly><br/>  <!-- numberだけど値の型はstring-->
        体重：<input type="number" name ="weight" value="<?= $_SESSION['weight']?>" readonly><br/>
        目標体重：<input type="number" name ="target_weight" value="<?= $_SESSION['target_weight']?>" readonly><br/>
        </form>
        <a id="link_button" href="userInf_change.php">変更する</a>
        
    </main>

    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="登録情報";
</script>