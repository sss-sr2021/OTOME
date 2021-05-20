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
    <title id="title"></title>
    <link rel="stylesheet" href="css/style_pc.css" media="screen and (min-width:1024px)"> <!--画面サイズ1024px以上はこのファイルはスタイルが適用される -->
    <script src="../jquery-3.6.0.js"></script> <!---jQueryのJavaScriptファイルをインポート--->
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <h1><a href="index.php">HEALPY</a></h1>
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