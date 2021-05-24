<!-- 
header.php：ヘッダー
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->
 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
        <meta name="robots" content="index, follow">
    <title id="title"></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_pc.css" media="screen and (min-width:1024px)"> <!--画面サイズ1024px以上はこのファイルはスタイルが適用される -->
    <link rel="stylesheet" href="css/style_sp.css" media="screen and (max-width:1024px)"> <!--画面サイズ1024px以下はこのファイルはスタイルが適用される -->
    <script src="/jquery-3.6.0.js"></script> <!---jQueryのJavaScriptファイルをインポート--->
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="index, follow">
    <meta name="description" content="プライバシーポリシー">
    <meta name="keywords" content="キーワード">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE対策-->
    <!-- ▼OGPの設定 -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="プライバシーポリシー">
    <meta property="og:description" content="プライバシーポリシー">
    <meta property="og:locale" content="ja_JP">
    <!-- ▼Twitter Cardsの設定-->
    <meta name="twitter:card" content="summary"><!--大きい画像があればsummary_large_image-->
    <meta name="twitter:site" content="プライバシーポリシー">
</head>
<body>
    <!-- ヘッダー -->
    <header class="pc">
        <h1><a href="index.php">HEALPY</a></h1>
        <nav class="nav">
            <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="check_top.php">健康チェック</a></li>
            <li><a href="recipe_top.php">レシピ</a></li>
            <li><a href="mypage_top.php">マイページ</a></li>
            <li><a href="logout.php"><img src="img/logout.png" width="45px" title="ログアウト"></a></li>
        </ul>
        </nav>
    </header>

    <header class="sp">
        <!-- <h1><a href="index.php">HEALPY</a></h1> -->
        <nav class="nav">
            <ul>
            <li><a href="index.php"><img src="img/top.png" width="35px"><br />TOP</a></li>
            <li><a href="check_top.php"><img src="img/check.png" width="35px"><br />健康チェック</a></li>
            <li><a href="recipe_top.php"><img src="img/recipe.png" width="35px"><br />レシピ</a></li>
            <li><a href="mypage_top.php"><img src="img/mypage.png" width="35px"><br />マイページ</a></li>
        </ul>
        </nav>
    </header>