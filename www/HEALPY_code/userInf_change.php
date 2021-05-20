<?php include_once('header.php')?>
    <!-- メインコンテンツ -->
    <main>
        <h3>ページタイトル</h3>
        <form>
        <!-- 後でnameを決める -->
        名前：<input type="text" name ="name" value="初期値" required><br/>
        メールアドレス：<input type="email" name ="mail" value="<?php ?>" required><br/>
        パスワード：<input type="password" name ="password" value="<?php ?>" required><br/>
        生年月日：<input type="text" name ="" value="<?php ?>" required><br/>
        身長：<input type="text" name ="" value="<?php ?>"  ><br/>
        体重：<input type="text" name ="" value="<?php ?>"  ><br/>
        目標体重：<input type="text" name ="" value="<?php ?>"  ><br/>
        <input type="submit" name ="change" value="変更する" onclick=userInf_change() >
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