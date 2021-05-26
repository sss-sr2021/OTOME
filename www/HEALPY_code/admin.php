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
    "SELECT id, name, email FROM users WHERE NOT name='管理者'" //itemテーブルから
    .' ORDER BY id' //idで昇順に並び替え
);

//-----連想配列に入れる　$sthを$rowsに--------------------------------------------------
$rows =$sth->fetchAll(PDO::FETCH_ASSOC);
?>

 <?php include_once('header.php')?>

<!-- メインコンテンツ -->
<main  class="contents">
    <h2 class="page_title">管理者ページ</h2>
    <?php if(!$rows):?>
    <div>アイテムが見つかりませんでした。</div>
    <?php else: ?>
        <table id="admin_table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">メールアドレス</th>
                <!-- <th scope="col">パスワード</th> -->
                <th scope="col">削除</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach($rows as $r): 
         //print_r($r);
        ?> <!--$rowを$rに-->
        <tr>
            <td><?php echo htmlspecialchars(@$r['id']); ?></td>
            <td><?php echo htmlspecialchars(@$r['name']); ?></td>
            <td><?php echo htmlspecialchars(@$r['email']);?></td>
            <!-- <td><?php echo htmlspecialchars(@$r['password']);?></td> -->
            <td>
                <form action="delete.php" method="post" onsubmit="return confirm('本当に削除しますか？');">
                    <!-- <input type="hidden" name="mode" value="del"> -->
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($r['id'],ENT_QUOTES);?>">
                    <input id="delete_button" type="submit" name="submit" value="削除">
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif; ?>
</main>

<script>
document.getElementById('title').innerHTML="管理者ページ";
$("meta[name='robots']").attr('content','index, nofollow');
$("meta[property='og:title']").attr('content','管理者ページ');
$("meta[name='twitter:site']").attr('content','管理者ページ');
</script>
<!-- フッター -->
<?php include_once('footer.php')?>

