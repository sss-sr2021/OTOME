<!-- 
check_result.php：健康チェック結果表示画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20 
-->

<?php include_once('header.php');?>

<?php 
@session_start();
require_once 'function.php';
setPoint($_SESSION['id'] ,$_POST['point']);
//$points = getPoint(['user_id' => @$_SESSION['id']]);
?>
 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>健康チェック結果</h2>
        <div class="sub_contents">
            <p>今日のポイント&nbsp;&nbsp;<span id ="box"><?=$_POST['point'] ?></span>&nbsp;&nbsp;</p>
            <p>今日歩いた消費カロリー&nbsp;&nbsp;<span id ="box"><?=$_POST['kcal'] ?></span>&nbsp;&nbsp;Kcal</p>
            <!-- <img id="con_img" src="img/moon.png" width="100px"> -->
        </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>
    <script>
    document.getElementById('title').innerHTML="健康チェック結果";
    $("meta[name='description']").attr('content','健康チェック結果ページ');
    $("meta[property='og:title']").attr('content','健康チェック結果');
    $("meta[name='twitter:site']").attr('content','健康チェック結果ページ');
</script>