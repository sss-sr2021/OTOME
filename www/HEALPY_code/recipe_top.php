
<?php
/*** 
*recipe_top.php : ログイン
*
*Author : 豊島、畑本
*Version : 0.0.1
*Created : 2021.05.19
*Update : 2021.05.20 24(畑本)
*
*/

require_once 'function.php';
$dbh = dbInit();

/*
* idをランダムに発生させる
*/
$id = mt_rand(1,20);

/*
* 画像ファイルを取得
*/
$sql = "SELECT recipe_file FROM recipe WHERE id = :id";
$sth = $dbh->prepare($sql);
$ret = $sth->execute([
    'id' => $id
]);
$rows = $sth->fetchAll();

?>
<?php include_once('header.php')?>

<!-- メインコンテンツ -->
<main>
    <h3>レシピ</h3>
    おすすめレシピをご紹介
    <img src="recipe/<?= $rows[0]['recipe_file'] ?>" width="90%" />
</main>

<!-- フッター -->
<?php include_once('footer.php')?>

<script>
document.getElementById('title').innerHTML="レシピ";
</script>