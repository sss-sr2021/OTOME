<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TOP</title>
    <link rel="stylesheet" href="css/style.css" media="screen and (min-width:1024px)"> <!--画面サイズ1024px以上はこのファイルはスタイルが適用される -->
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <h1>HEALPY</h1>
        <nav class="nav">
            <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="check_top.php">健康チェック</a></li>
            <li><a href="recipe_top.php">レシピ</a></li>
            <li><a href="mypage_top.php">マイページ</a></li>
            <li><img src="img/logout.png" width="45px" title="ログアウト"></li>
        </ul>
        </nav>
    </header>
 
    <!-- メインコンテンツ -->
    <main>
        <h3 id="date">日付</h3>
        中身
    </main>
 
    <!-- フッター -->
    <footer>
    <nav class="nav">
            <ul id=footer_nav>
            <li><a href="policy.php">プライバシーポリシー</a></li>
            <li><a href="service.php">利用規約表示画面</a></li>
            <li><a href="company.php">運営会社</a></li>
        </ul>
        </nav>
    </footer>
</body>
<script>
    //window.onload = function () {
    var today = new Date();
    console.log(today);
    var year =today.getFullYear();
    var month = today.getMonth()+1;
    var day = today.getDate();
    var date = document.getElementById("date");
    date.innerHTML=year+"年"+month+"月"+day+"日";
    //}
</script>
</html>