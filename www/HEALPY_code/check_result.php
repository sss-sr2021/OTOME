<!-- 
check_result.php：健康チェック結果表示画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20 
-->

<?php include_once('header.php')?>

<?php 
session_start();
require_once 'function.php';
setPoint($_SESSION['id'] ,$_POST['point']);
?>
 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h3>健康チェック結果</h3>
        <div class="sub_contents">
            <p>今日のポイント<span id ="box"><?=$_POST['point'] ?></span></p>
            <p>今日の消費カロリー<span id ="box"><?=$_POST['kcal'] ?></span>Kcal</p>
        </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>
    <script>
    document.getElementById('title').innerHTML="健康チェック結果";
</script>