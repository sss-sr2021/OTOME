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
    $password1 = filter_input(INPUT_POST, 'password');
    $con_password = filter_input(INPUT_POST, 'con_password');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'mail');
    $birthday = filter_input(INPUT_POST, 'birthday');
    $height = filter_input(INPUT_POST, 'height');
    $weight = filter_input(INPUT_POST, 'weight');
    $target_weight = filter_input(INPUT_POST, 'target_weight');
    if ($password1 == $con_password && $password1 != '' && $con_password != ''){
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $change = compact('name','email','password','birthday','height','weight','target_weight');
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
    header('Location: userInf.php');
}

?>
<?php include_once('header.php')?>
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>登録情報変更</h2>
        <div class="form_contents">
        <form action="" method="post" id="change_form">
        <p>名前：<input type="text" name ="name" value="<?= $_SESSION['name']?>" required><br/></p>
        <p>メールアドレス：<input type="email" name ="mail" value="<?= $_SESSION['email']?>" required><br/></p>
        <p>新規パスワード：<input type="password" pattern="^[0-9A-Za-z]{8,16}$" name ="password" value="" placeholder="8桁以上16桁未満"  required><br/></p>
        <p>確認パスワード：<input type="password" pattern="^[0-9A-Za-z]{8,16}$" name ="con_password" value="" placeholder="上記と同じパスワード"  required><br/></p>
        <p>生年月日：<input type="date" name ="birthday" value="<?= $_SESSION['birthday']?>" required><br/></p>
        <p>身長：<input type="number"  step="0.1" name ="height" value="<?= $_SESSION['height']?>">&nbsp;&nbsp;cm<br/></p>  <!-- numberだけど値の型はstring-->
        <p>体重：<input type="number" name ="weight" value="<?= $_SESSION['weight']?>">&nbsp;&nbsp;kg<br/></p>
        <p>目標体重：<input type="number" name ="target_weight" value="<?= $_SESSION['target_weight']?>">&nbsp;&nbsp;kg<br/></p>
        <input id="link_button" type="submit" name ="submit" value="変更する" onclick="return userInf_change()" >
        </form>
        </div>
    </main>

<script>
    document.getElementById('title').innerHTML="登録情報変更";
    $("meta[name='description']").attr('content','登録情報変更');
    $("meta[property='og:title']").attr('content','登録情報変更');
    $("meta[name='twitter:site']").attr('content','登録情報変更');

    function userInf_change(){
        var new_pass = document.getElementsByName('password')[0];
        var con_pass = document.getElementsByName('con_password')[0];
        var form = document.getElementById('change_form');
        if (new_pass.value == '' || con_pass.value == ''){
            alert("パスワードを入力してください");
            return false;
        }
        if (new_pass.value == con_pass.value){
            alert("変更しました");
        }
        else{
            alert("パスワードが間違っています");
            new_pass.value = '';
            con_pass.value = '';
            return false;
        }
    }
</script>

<!-- フッター -->
<?php include_once('footer.php')?>