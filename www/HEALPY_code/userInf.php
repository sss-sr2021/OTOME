<?php
session_start();
require_once 'function.php';
$dbh = dbInit();
?>
<?php include_once('header.php')?>

    <!-- メインコンテンツ -->
    <main  class="contents">
        <h3>ユーザ登録情報</h3>
        <div class="form_contents">
        <form action="" method="post" class="userInf">
        <p>名前：<input type="text" name ="name" value="<?= $_SESSION['name']?>" readonly><br/></p>
        <p>メールアドレス：<input type="email" name ="mail" value="<?= $_SESSION['email']?>" readonly><br/></p>
        <p>パスワード：<input type="password" maxlength='16' pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="<?= $_SESSION['password']?>" readonly><br/></p>
        <p>生年月日：<input type="date" name ="birthday" value="<?= $_SESSION['birthday']?>" readonly><br/></p>
        <p>身長：<input type="number"  step="0.1" name ="height" value="<?= $_SESSION['height']?>" readonly><br/></p>  <!-- numberだけど値の型はstring-->
        <p>体重：<input type="number" name ="weight" value="<?= $_SESSION['weight']?>" readonly><br/></p>
        <p>目標体重：<input type="number" name ="target_weight" value="<?= $_SESSION['target_weight']?>" readonly><br/></p>
        </form>
        <a id="link_button" href="userInf_change.php">変更する</a>
        </div>
        
    </main>

    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="登録情報";
</script>