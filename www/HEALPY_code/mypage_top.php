<!-- 
mypage.php：マイページ
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->

 <?php include_once('header.php')?>
    <!-- メインコンテンツ -->
    <main  class="contents">
    <div class="sub_contents">
        <h3 class="page_title">マイページ</h3>
        <p><a href="userInf.php">ユーザ登録情報</a></p>
        <p><a href="userInf_change.php">ユーザ登録情報変更</a></p>
        
        <p class="sp"><a href="policy.php">プライバシーポリシー</a></p>
        <p class="sp"><a href="service.php">利用規約</a></p>
        <p class="sp"><a href="company.php">運営会社</a></p>
        <p><a href="logout.php">ログアウト</a></p>
    </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="マイページ";
</script>