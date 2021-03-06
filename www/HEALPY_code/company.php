<!-- 
company.php：運営会社
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.21
 -->
 <?php include_once('header.php')?>

 <main  class="contents">
 <h2>運営会社</h2>
    <div class="sub_contents">
            <dl class="overview">
                <dt class="	corporate-name">
                    団体名
                </dt>
                <dd class="	corporate-name">
                    株式会社システムリサーチ チーム乙女
                </dd>
                <dt class="representative">
                    代表者
                </dt>
                <dd class="representative">
                    <span class="position">代表取締役</span>　<span class="president">○○</span>
                </dd>
                <dt class="established">
                    設立日
                </dt>
                <dd class="established">
                    2021年 5月 31日
                </dd>
                <dt class="	capital">
                    資本金
                </dt>
                <dd class="	capital">
                    1,000万円
                </dd>
                <dt class="base">
                    本社所在地
                </dt>
                <dd class="base">
                    〒669-0000 兵庫県豊岡市
                </dd>
                <dt class="phone">
                    電話番号
                </dt>
                <dd class="phone">
                    0000-00-0000　(代表)
                </dd>
            </dl>
        </div>
    </main>

<script>
    document.getElementById('title').innerHTML="運営会社";
    $("meta[name='description']").attr('content','運営団体');
    $("meta[property='og:title']").attr('content','運営団体');
    $("meta[name='twitter:site']").attr('content','運営団体');
</script>

<!-- フッター -->
<?php include_once('footer.php')?>