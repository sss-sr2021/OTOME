<!-- 
index.php：トップページ
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->


 <?php include_once('header.php')?>
 <?php 
@session_start();
require_once 'function.php';
$points = getPoint(['user_id' => @$_SESSION['id']]);
//   var_dump($points[date('Y-m-d')]); 今日の点数
//   var_dump(array_values($points));

if(!isset($_SESSION['logined'])){?>
<script>
    alert('ログインしてください');
    location.href="login_top.php";
</script>

<?php }

if(isset($points[date('Y-m-d')])){
    if(@$points[date('Y-m-d')]<=1){
        $comment='お疲れではありませんか？ゆっくりお休みください';
    }elseif(@$points[date('Y-m-d')]<=5){
        $comment='少しお疲れですか？生活リズムを見直しましょう';
    }elseif( @$points[date('Y-m-d')]<=11){
        $comment='順調ですね！この調子でポイントアップを目指しましょう';
    }elseif(@$points[date('Y-m-d')]<=14){
        $comment='絶好調ですね！このままキープしましょう！';
    }
    else{
        $comment='';
    }
}

$time = date('G');
//var_dump($time);
if($time<=11){
    $aisatsu = 'おはようございます';
}elseif($time<=17){
    $aisatsu = 'こんにちは';
}else{
    $aisatsu = 'こんばんは';

}

if(isset($points[date('Y-m-d')])){
    $tensuu = '今日のポイントは'.$points[date('Y-m-d')].'点でした';
}else{
    $tensuu = '今日の健康チェックをしましょう';
}


?>

 
<!-- メインコンテンツ -->
<main  class="contents">
    <h2 id="date">日付</h2>
    <div class="sub_contents">
    <p id="text"><span style="font-weight: bold"><?=$_SESSION['name']?></span>さん<?=$aisatsu?></p>
        <p><?=@$tensuu?></p>
        <p><?=@$_SESSION['getPoint'][0]['point']?></p>
        <p><?=$comment?></p>
    </div>
    <!-- ↓以下グラフを表示↓ -->
    <!-- グラフ作成ライブラリ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <!-- グラフのキャンバス -->
    <canvas id="myChart"></canvas>
</main>

<!-- フッター -->
<?php include_once('footer.php')?>


<script>
document.getElementById('title').innerHTML="HEALPYトップ";
$("meta[name='description']").attr('content','HEALPYトップページ');
$("meta[property='og:title']").attr('content','HEALPYトップ');
$("meta[name='twitter:site']").attr('content','HEALPYトップページ');

var today = new Date();
console.log(today);
var year =today.getFullYear();
var month = today.getMonth()+1;
var day = today.getDate();
var dayOfWeek = today.getDay() ;	// 曜日(数値)
var dayOfWeekStr = [ "日", "月", "火", "水", "木", "金", "土" ][dayOfWeek] ;	// 曜日(日本語表記) 

var date = document.getElementById("date");
$nowtoday = year+"年"+month+"月"+day+"日"+"("+dayOfWeekStr+")";
date.innerHTML=year+"年"+month+"月"+day+"日"+"("+dayOfWeekStr+")";

// ここからグラフ作成
var ctx = document.getElementById("myChart");   // グラフを書くcanvasオブジェクトを指定
// Chart.jsのChartオブジェクトをcanvas「myChart」に指定
var myLineChart = new Chart(ctx, {
    type: 'line',   // グラフの種類　line: 折れ線グラフ
    // データ
    data: {         //  データ
        labels: ['<?=implode("','",array_keys($points))?>'], // x軸のラベルの値
        datasets: [     // データセット（配列)
            {
                label: 'ポイント',                  // 線のラベル
                data: ['<?=implode("','",array_values($points))?>'],            //　値
                borderColor: "rgba(228, 152, 152)",     // 線の色
                backgroundColor: "rgba(0,0,0,0)",   // 線の背景色
                lineTension: 0,                     // なめらかな曲線をoff
            }
        ]
    },
    options: {      // オプション
        responsive: true,   // レスポンシブ対応
        maintainAspectRatio: false, // サイズ変更の際に、元のキャンバスのアスペクト比(width / height)を維持しない
        scales: {           // スケール
            xAxes: [{       // X軸
                display: true,
                ticks: {
                    fontSize: 20
                },
            }],
            yAxes: [{       // Y軸
                display: true,
                ticks: {
                    beginAtZero: true,
                    fontSize: 20
                },
            }]
        },
        legend: {
           display: false,
        }
    }
});
</script>
<style type="text/css">
/* グラフの設定 */
#myChart {
    width: 80% !important;      /* グラフの幅   */
    height: 40vh !important;    /* グラフの高さ */
    margin: 1em auto;           /* マージン     */
    margin-bottom:20%;
}
</style>
</html>