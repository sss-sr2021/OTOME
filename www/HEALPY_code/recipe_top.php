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
if(!isset($_SESSION['logined'])){?>
    <script>
        alert('ログインしてください');
        location.href="login_top.php";
    </script>
    
    <?php }
    

if (empty($_SESSION['target_weight'])){
    // 目標体重の登録無：recipe_type=1 standard
    $sql = "SELECT recipe_file FROM recipe WHERE recipe_type = '1'";
    $sth = $dbh->prepare($sql);
    $ret = $sth->execute();
    $rows = $sth->fetchAll();  //$rowsの中に配列として「standardレシピ」入ってる
    $recipe = array_rand($rows, 1);
    $a='簡単';
}
else{
    // 目標体重の登録有：recipe_type=2 healthy
    $sql = "SELECT recipe_file FROM recipe WHERE recipe_type = '2'";
    $sth = $dbh->prepare($sql);
    $ret = $sth->execute();
    $rows = $sth->fetchAll();
    $recipe = array_rand($rows, 1);
    $a='ヘルシー';
}
?>

<?php include_once('header.php')?>

<!-- メインコンテンツ -->
<main class="contents">
    <h2>レシピ</h2>
    <div class="form_contents">
    <p>おすすめ<?php echo $a ?>レシピをご紹介します</p>
    </div>
    <img id="recipe_img" src="recipe/<?= $rows[$recipe][0] ?>"/>
</main>

<script>
    document.getElementById('title').innerHTML="レシピ";
    $("meta[name='description']").attr('content','レシピページ');
    $("meta[property='og:title']").attr('content','レシピページ');
    $("meta[name='twitter:site']").attr('content','レシピページ');
</script>

<!-- フッター -->
<?php include_once('footer.php')?>