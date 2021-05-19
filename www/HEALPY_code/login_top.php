<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインTOP</title>
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
        <h2>HEALPYとは</h2>
        <p><font size="5px">健康生活、始めませんか？</font><br />
           HEALPY(Health×Happy)は、１日の健康を振り返るアンケートに回答することで<br />
           簡単に自身の健康度の把握ができるアプリケーションです。<br />
           今日から一緒に頑張りましょう。
        </p>
        <p><a class="link_button" href="sign_up.php">新規登録</a></p>
        <p><a class="link_button" href="login.php">ログイン</a></p>
        
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
</html>