<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>ユーザ登録情報</h3>
        <form>
        <!-- 後でnameを決める -->
        名前：<input type="text" name ="name" value="ああああ" readonly ><br/>
        メールアドレス：<input type="email" name ="mail" value="<?php ?>" readonly><br/>
        パスワード：<input type="password" name ="password" value="<?php ?>" readonly><br/>
        生年月日：<input type="text" name ="" value="<?php ?>" readonly ><br/>
        身長：<input type="text" name ="" value="<?php ?>" readonly ><br/>
        体重：<input type="text" name ="" value="<?php ?>" readonly ><br/>
        目標体重：<input type="text" name ="" value="<?php ?>" readonly ><br/>
        </form>
        <a id="link_button" href="userInf_change.php">変更する</a>
        
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="登録情報";
</script>