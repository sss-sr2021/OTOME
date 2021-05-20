<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>ログイン</h3>
        <form>
        メールアドレス：<input type="email" name ="mail" value="" required><br/>
        パスワード：<input type="password" name ="password" value="" required><br/>
        <input type="submit" name ="submit" value="ログイン">
        </form>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="ログイン";
</script>