<!-- 
check_result.php：健康チェック画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20 
-->

<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main>
        <h3>健康チェック</h3>
        <div class="check">
            <div class="question">
                <p>Q1<br />
                    今日歩いた歩数を入力してください。
                </p>
                <input type="text" name ="step" value="">
                <a id="qbtn" href ="">決定</a>
            </div>
            <div class="question question2">
                <p>Q2<br />
                    栄養素のバランスがとれた食事を、1日3食食べましたか&quest;
                </p>
                <a id="qbtn" data-value="2" href ="">当てはまる</a>
                <a id="qbtn" data-value="1" href ="">あまり当てはまらない</a>
                <a id="qbtn" data-value="0" href ="">当てはまらない</a>
            </div>
            <div class="question question2">
                <p>Q3<br />
                    間食はどのようなものを食べましたか&quest;
                </p>
                <a id="qbtn" data-value="-2" href ="">クッキーやスナック菓子などの<br />高エネルギーなもの</a>
                <a id="qbtn" data-value="-1" href ="">ヨーグルトなどのカルシウムを含むもの</a>
                <a id="qbtn" data-value="0" href ="">果物などのビタミンを含むもの</a>
                <a id="qbtn" data-value="1" href ="">食べていない</a>
            </div>
            <div class="question question2">
                <p>Q4<br />
                    今日、就寝２時間前に食事を終えましたか&quest;
                </p>
                <a id="qbtn" data-value="1" href ="">当てはまる</a>
                <a id="qbtn" data-value="0" href ="">当てはまらない</a>
            </div>
            <div class="question question2">
                <p>Q5<br />
                    昨夜の睡眠についてお伺いします。<br />
                    全体的な睡眠の質はいかがでしたか&quest;
                </p>
                <a id="qbtn" data-value="2" href ="">非常に満足</a>
                <a id="qbtn" data-value="1" href ="">満足</a>
                <a id="qbtn" data-value="0" href ="">少し不満</a>
                <a id="qbtn" data-value="-1" href ="">不満</a>
            </div>
            <div class="question question2">
                <p>Q6<br />
                    日中の気分はどうでしたか？
                </p>
                <a id="qbtn" data-value="2" href ="">いつもより気分がよかった</a>
                <a id="qbtn" data-value="1" href ="">いつも通りだった</a>
                <a id="qbtn" data-value="0" href ="">少し滅入った</a>
                <a id="qbtn" data-value="-1" href ="">かなり滅入った</a>
            </div>
        </div>
    </main>
 
    <!-- フッター -->
    <?php include_once('footer.php')?>

<script>
    document.getElementById('title').innerHTML="健康チェック";
    var question = document.getElementsByClassName('question');
    console.log(question);//配列

    // var question = $('.question:eq(1)').text();
    // console.log(question);
    // $('.question:eq(1)').toggle();
    // $('#qbtn').onclick(function(){
    //     $('.question:eq(1)').text;
    // })
    var i = 0;
    $(function(){
    $("#qbtn").on("click", function() {
        $('.question').eq(i).hide();
        i ++;
        $('.question').eq(i).show();
        i ++;
        return false;
    });
    });


</script>