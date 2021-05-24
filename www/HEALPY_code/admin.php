<!-- 
admin.php：管理者ページ
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->

 <?php 
 session_start();
 require_once 'function.php';
 $dbh = dbInit();

//-----クエリ実行　$dbhの内容を$sthに--------------------------------------------------
$sth = $dbh->query(
    'SELECT id, name, email,password' //id name priceを
    .' FROM users' //itemテーブルから
    .' ORDER BY id' //idで昇順に並び替え
);

//-----連想配列に入れる　$sthを$rowsに--------------------------------------------------
$rows =$sth->fetchAll(PDO::FETCH_ASSOC);
?>

 <?php include_once('header.php')?>

<!-- メインコンテンツ -->
<main  class="contents">
    <h3>管理者ページ</h3>
    <?php if(!$rows):?>
<div>アイテムが見つかりませんでした。</div>
<?php else: ?>
    <table style =border:double 2px rules="all">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">名前</th>
            <th scope="col">メールアドレス</th>
            <th scope="col">パスワード</th>
            <th scope="col">削除</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($rows as $r): ?> <!--$rowを$rに-->
    <tr>
        <td><?php echo htmlspecialchars($r['id']); ?></td>
        <td><?php echo htmlspecialchars($r['name']); ?></td>
        <td><?php echo htmlspecialchars($r['email']);?></td>
        <td><?php echo htmlspecialchars($r['password']);?></td>
        <td>
            <form action="delete.php" method="post" onsubmit="return confirm('本当に削除しますか？');">
                <!-- <input type="hidden" name="mode" value="del"> -->
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($r['id'],ENT_QUOTES);?>">
                <input type="submit" name="submit" value="削除">
            </form>
        </td>
    </tr>
    </tbody>
<?php endforeach;?>
</table>
<?php endif;