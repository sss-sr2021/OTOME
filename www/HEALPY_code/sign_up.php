<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>新規登録</h3>
        <form>
        名前：<input type="text" name ="name" value="" required><br/>
        メールアドレス：<input type="email" name ="mail" value="" required><br/>
        パスワード：<input type="password" name ="password" value="" required><br/>
        <input type="submit" name ="submit" value="登録">
        </form>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="新規登録";
</script>