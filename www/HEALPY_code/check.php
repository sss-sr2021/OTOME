<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>健康チェック</h3>

            <div class="question">
                <p>Q1<br />
                    今日歩いた歩数を入力してください。
                </p>
                <input type="text" name ="step" value="">
                <a id href ="">決定</a>
            </div>
            <div class="question">
                <p>Q2<br />
                    栄養素のバランスがとれた食事を、1日3食食べましたか&quest;
                </p>
                <a href ="">当てはまる</a>
                <a href ="">あまり当てはまらない</a>
                <a href ="">当てはまらない</a>
            </div>
            <div class="question">
                <p>Q3<br />
                    間食はどのようなものを食べましたか&quest;
                </p>
                <a href ="">クッキーやスナック菓子などの<br />高エネルギーなもの</a>
                <a href ="">ヨーグルトなどのカルシウムを含むもの</a>
                <a href ="">果物などのビタミンを含むもの</a>
                <a href ="">食べていない</a>
            </div>
            <div class="question">
                <p>Q4<br />
                    今日、就寝２時間前に食事を終えましたか&quest;
                </p>
                <a href ="">当てはまる</a>
                <a href ="">当てはまらない</a>
            </div>
            <div class="question">
                <p>Q5<br />
                    昨夜の睡眠についてお伺いします。<br />
                    全体的な睡眠の質はいかがでしたか&quest;
                </p>
                <a href ="">非常に満足</a>
                <a href ="">満足</a>
                <a href ="">少し不満</a>
                <a href ="">不満</a>
            </div>
            <div class="question">
                <p>Q6<br />
                    日中の気分はどうでしたか？
                </p>
                <a href ="">いつもより気分がよかった</a>
                <a href ="">いつも通りだった</a>
                <a href ="">少し滅入った</a>
                <a href ="">かなり滅入った</a>
            </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="健康チェック";

    var question = document.getElementById('question');
    var count = 0;

</script>