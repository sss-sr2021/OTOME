<?php
session_start();
require_once 'function.php';
$dbh = dbInit();
?>
<?php include_once('header.php')?>

    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>ユーザ登録情報</h2>
        <div class="form_contents">
        <form action="" method="post" class="userInf">
        <p>名前：<input type="text" name ="name" value="<?= $_SESSION['name']?>" readonly><br/></p>
        <p>メールアドレス：<input type="email" name ="mail" value="<?= $_SESSION['email']?>" readonly><br/></p>
        <p>パスワード：<input type="password" maxlength='16' pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="<?= $_SESSION['password']?>"readonly ><br/></p>
        <p>生年月日：<input type="date" name ="birthday" value="<?= $_SESSION['birthday']?>" readonly><br/></p>
        <p>身長：<input type="number"  step="0.1" name ="height" value="<?= $_SESSION['height']?>" readonly>&nbsp;&nbsp;cm<br/></p>  <!-- numberだけど値の型はstring-->
        <p>体重：<input type="number" name ="weight" value="<?= $_SESSION['weight']?>" readonly>&nbsp;&nbsp;kg<br/></p>
        <p>目標体重：<input type="number" name ="target_weight" value="<?= $_SESSION['target_weight']?>" readonly>&nbsp;&nbsp;kg<br/></p>
        </form>
        <a id="link_button" href="userInf_change.php">変更ページへ</a>
        </div>
        
    </main>

<script>
    document.getElementById('title').innerHTML="登録情報";
    $("meta[name='description']").attr('content','登録情報');
    $("meta[property='og:title']").attr('content','登録情報');
    $("meta[name='twitter:site']").attr('content','登録情報');
</script>

<!-- フッター -->
<?php include_once('footer.php')?>