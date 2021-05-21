<?php include_once('header.php')?>

 
    <!-- メインコンテンツ -->
    <main>
        <h3 id="date">日付</h3>
        <p>今日のポイント</p>
        <p>（ここにポイント数）</p>
        <p>この調子でポイントアップを目指しましょう！</p>
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
    var today = new Date();
    console.log(today);
    var year =today.getFullYear();
    var month = today.getMonth()+1;
    var day = today.getDate();
    var dayOfWeek = today.getDay() ;	// 曜日(数値)
    var dayOfWeekStr = [ "日", "月", "火", "水", "木", "金", "土" ][dayOfWeek] ;	// 曜日(日本語表記) 

    var date = document.getElementById("date");
    date.innerHTML=year+"年"+month+"月"+day+"日"+"("+dayOfWeekStr+")";

    // ここからグラフ作成
    var ctx = document.getElementById("myChart");   // グラフを書くcanvasオブジェクトを指定
    // Chart.jsのChartオブジェクトをcanvas「myChart」に指定
    var myLineChart = new Chart(ctx, {
        type: 'line',   // グラフの種類　line: 折れ線グラフ
        // データ
        data: {         //  データ
            labels: ['1月1日', '1月2日', '1月3日', '1月4日', '1月5日', '1月6日', '1月7日'], // x軸のラベルの値
            datasets: [     // データセット（配列)
                {
                    label: 'ポイント',                  // 線のラベル
                    data: [7,10,8,5,11,5,8],            //　値
                    borderColor: "rgba(0,0,255,1)",     // 線の色
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
    width: 60% !important;      /* グラフの幅   */
    height: 40vh !important;    /* グラフの高さ */
    margin: 1em auto;           /* マージン     */
}
</style>
</html>