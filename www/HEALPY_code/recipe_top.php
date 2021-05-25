<?php
/*** 
*recipe_top.php : レシピ表示
*
*Author : 豊島、畑本
*Version : 0.0.1
*Created : 2021.05.19
*Update : 2021.05.20 25(畑本)
*
*/

session_start();
require_once 'function.php';
$dbh = dbInit();

if (empty($_SESSION['target_weight'])){
    // 目標体重の登録無：recipe_type=1 standard
    $sql = "SELECT recipe_file FROM recipe WHERE recipe_type = '1'";
    $sth = $dbh->prepare($sql);
    $ret = $sth->execute();
    $rows = $sth->fetchAll();  //$rowsの中に配列として「standardレシピ」入ってる
    $recipe = array_rand($rows, 1);
}
else{
    // 目標体重の登録有：recipe_type=2 healthy
    $sql = "SELECT recipe_file FROM recipe WHERE recipe_type = '2'";
    $sth = $dbh->prepare($sql);
    $ret = $sth->execute();
    $rows = $sth->fetchAll();
    $recipe = array_rand($rows, 1);
}

?>

<?php include_once('header.php')?>

<!-- メインコンテンツ -->
<main>
    <h3>レシピ</h3>
    おすすめレシピをご紹介
    <img src="recipe/<?= $rows[$recipe][0] ?>" width="60%" />
</main>

<script>
document.getElementById('title').innerHTML="レシピ";
</script>

<!-- フッター -->
<?php include_once('footer.php')?>