<!-- 
check_top.php：健康チェック画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.21 
-->
<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>健康チェックTOP</h3>
        <p>今日の健康チェックをしましょう</p>
        <p><a id="link_button" href="check.php">スタート</a></p>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="健康チェックTOP";
</script>