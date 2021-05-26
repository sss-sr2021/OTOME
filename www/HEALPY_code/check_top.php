<!-- 
check_top.php：健康チェック画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.21 
-->
<?php 
@session_start();
require_once 'function.php';
$points = getPoint(['user_id' => @$_SESSION['id']]);

include_once('header.php');

if(!isset($_SESSION['logined'])){?>
    <script>
        alert('ログインしてください');
        location.href="login_top.php";
    </script>
    
<?php }
    //var_dump($points[date('Y-m-d')]);
    // if(isset($points[date('Y-m-d')])){
    //     header('Location:check_result.php');
    // }
    ?>
 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h2>健康チェックTOP</h2>
        <div class="sub_contents">
        <p>今日一日の健康チェックをしましょう</p>
        </div>
        <p class="button"><a id="link_button" href="check.php">スタート</a></p>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="健康チェックトップ";
    $("meta[name='description']").attr('content','健康チェックトップページ');
    $("meta[property='og:title']").attr('content','健康チェックトップ');
    $("meta[name='twitter:site']").attr('content','健康チェックトップページ');
</script>