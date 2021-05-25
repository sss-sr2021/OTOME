<!-- 
logion_top.php：ログイン前トップ
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->

<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main class="contents">
        <h2>HEALPYとは</h2>
        <p><font size="5px">健康生活、始めませんか？</font><br />
           HEALPY(Health×Happy)は、１日の健康を振り返るアンケートに回答することで<br />
           簡単に自身の健康度の把握ができるアプリケーションです。<br />
           今日から一緒に頑張りましょう。
        </p>
        <div class="button">
        <a id="link_button" href="sign_up.php">新規登録</a>
        <a id="link_button" href="login.php">ログイン</a>
        </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>
    
<script>
    document.getElementById('title').innerHTML="HEALPYとは";
</script>
