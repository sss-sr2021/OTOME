<!-- 
check_result.php：健康チェック画面
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20 
-->

<?php include_once('header.php')?>
<?php 
    if(isset($_POST['check_point'])){
        //header('Location:check_result.php');
    }
?> 
    <!-- メインコンテンツ -->
    <main  class="contents">
        <h3>健康チェック</h3>
        <div class="sub_contents">
        <div class="check">
            <div class="question">
                <p>Q1<br />
                    今日歩いた歩数を入力してください。
                </p>
                <input type="number" id="step" name ="step" value="">
                <a id="qbtn" href ="javascript:return false;">決定</a>
            </div>
            <div class="question">
                <p>Q2<br />
                    栄養素のバランスがとれた食事を、1日3食食べましたか&quest;
                </p>
                <a id="qbtn" data-value="2" href ="javascript:return false;">当てはまる</a>
                <a id="qbtn" data-value="1" href ="javascript:return false;">あまり当てはまらない</a>
                <a id="qbtn" data-value="0" href ="javascript:return false;">当てはまらない</a>
            </div>
            <div class="question">
                <p>Q3<br />
                    間食はどのようなものを食べましたか&quest;
                </p>
                <a id="qbtn" data-value="-2" href ="javascript:return false;">クッキーやスナック菓子などの高エネルギーなもの</a>
                <a id="qbtn" data-value="-1" href ="javascript:return false;">ヨーグルトなどのカルシウムを含むもの</a>
                <a id="qbtn" data-value="0" href ="javascript:return false;">果物などのビタミンを含むもの</a>
                <a id="qbtn" data-value="1" href ="javascript:return false;">食べていない</a>
            </div>
            <div class="question">
                <p>Q4<br />
                    今日、就寝２時間前に食事を終えましたか&quest;
                </p>
                <a id="qbtn" data-value="1" href ="javascript:return false;">当てはまる</a>
                <a id="qbtn" data-value="0" href ="javascript:return false;">当てはまらない</a>
            </div>
            <div class="question">
                <p>Q5<br />
                    昨夜の睡眠についてお伺いします。<br />
                    全体的な睡眠の質はいかがでしたか&quest;
                </p>
                <a id="qbtn" data-value="2" href ="javascript:return false;">非常に満足</a>
                <a id="qbtn" data-value="1" href ="javascript:return false;">満足</a>
                <a id="qbtn" data-value="0" href ="javascript:return false;">少し不満</a>
                <a id="qbtn" data-value="-1" href ="javascript:return false;">不満</a>
            </div>
            <div class="question">
                <p>Q6<br />
                    日中の気分はどうでしたか？
                </p>
                <a id="qbtn" data-value="2" href ="javascript:return false;">いつもより気分がよかった</a>
                <a id="qbtn" data-value="1" href ="javascript:return false;">いつも通りだった</a>
                <a id="qbtn" data-value="0" href ="javascript:return false;">少し滅入った</a>
                <a id="qbtn" data-value="-1" href ="javascript:return false;">かなり滅入った</a>
            </div>
            <div class="question">
            <form action ="check_result.php" method="POST">
                <input type ="hidden" name ="point" id="point" value="">
                <input type ="hidden" name ="kcal" id="kcal" value="">
                <input id="link_button" type="submit" name="check_point" value="結果">
            </form>
            </div>
        </div>
        </div>
    </main>

<script  type="text/javascript">
    document.getElementById('title').innerHTML="健康チェック";
    // var question = document.getElementsByClassName('question');
    // console.log(question);//配列


    var count = 0;//
    var point = 0;
    var kcal =0;
    var step = document.getElementById('step');
    $('a#qbtn').on('click', function() {
        check =$(this).parent('div.question');
        next = check.next();
        check.hide();
        if(next){
            next.show();
            if(count === 0){
                //console.log(step.value);
                kcal = Number(step.value)*0.03;//カロリー計算
                //console.log(kcal);
                if(Number(step.value)>=10000){
                    point+=6;
                }else if(Number(step.value)>=9000){
                    point+=5;
                }else if(Number(step.value)>=8000){
                    point+=4;
                }else if(Number(step.value)>=7000){
                    point+=3;
                }else if(Number(step.value)>=6000){
                    point+=2;
                }else if(Number(step.value)>=5000){
                    point+=1;
                }else{
                    point+=0;

                }
                
            }
            if(count === 1){
                //console.log($(this).attr('data-value'));
                point+=Number($(this).attr('data-value'));
            }
            if(count === 2){
                //console.log($(this).attr('data-value'));
                point+=Number($(this).attr('data-value'));
            }
            if(count === 3){
               // console.log($(this).attr('data-value'));
                point+=Number($(this).attr('data-value'));
            } 
            if(count === 4){
               // console.log($(this).attr('data-value'));
                point+=Number($(this).attr('data-value'));
            } 
            if(count === 5){
                //console.log($(this).attr('data-value'));
                point+=Number($(this).attr('data-value'));
                document.getElementById('point').value=point;
                document.getElementById('kcal').value=kcal;

            } 
            if(count === 6){
                //console.log($(this).attr('data-value'));
                
            }            
            //console.log(point);
            count ++;
            // console.log(i);
        }
        return false;
    });



</script>

<!-- フッター -->
<?php include_once('footer.php')?>