<?php include_once('header.php')?>

 
    <!-- メインコンテンツ -->
    <main>
        <h3 id="date">日付</h3>
        <p>今日のポイント</p>
        <p>（ここにポイント数）</p>
        <p>この調子でポイントアップを目指しましょう！</p>
        ↓以下グラフを表示↓
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
</script>
</html>