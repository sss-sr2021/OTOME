<!-- 
logion_top.php：ログイン前トップ
Autor：豊島
Virsion：0.0.1
Crated：2021.05.19
Update：2021.05.20
 -->

<?php include_once('header.php')?>
 
    <!-- メインコンテンツ -->
    <main class="contents">
    <div class="sub_contents">
        <h2>HEALPYとは</h2>
        <p><font size="5px">健康生活、始めませんか？</font><br />
           HEALPY(Health×Happy)は、１日の健康を振り返るアンケートに回答することで<br />
           簡単に自身の健康度の把握ができるアプリケーションです。<br />
           今日から一緒に頑張りましょう。
        </p>
        <div class="login_button">
        <a id="link_button"  class="sign" href="javascript:return false;">新規登録</a>
        <a id="link_button" href="login.php">ログイン</a>
        </div>
        </div>
        <dialog class="policy">
            <form method="dialog">
                <div id="modal-header">
                プライバシーポリシー
                </div>
                <div id="modal-header">
                内容
                </div>
                <menu>
                    <button class="ok" value="OK">OK</button>
                </menu>
            </form>
        </dialog>
        <dialog class="service">
            <form method="dialog">
                <div id="modal-header">
                利用規約
                </div>
                <div id="modal-header">
                内容
                </div>
                <menu>
                    <button class="ok" value="OK">OK</button>
                </menu>
            </form>
        </dialog>
        <dialog class="company">
            <form method="dialog">
                <div id="modal-header">
                運営会社
                </div>
                <div id="modal-header">
                内容
                </div>
                <menu>
                    <button class="bt" value="OK">OK</button>
                </menu>
            </form>
        </dialog>
    </main>
    <!-- フッター -->
    <?php include_once('footer.php')?>
    
<script>
    document.getElementById('title').innerHTML="HEALPYとは";
    var open = document.querySelector('.sign');
    var close = document.querySelector('.bt');
    var modal1 = document.querySelector('dialog.policy');
    var modal2 = document.querySelector('dialog.service');
    var modal3 = document.querySelector('dialog.company');
    

    open.addEventListener('click',() => modal1.showModal());
    var sw = 1;
    function threeModal(){
        if(sw == 1){
            modal1.close();
            modal2.showModal();
            sw++;
        }
        else
        if(sw == 2){
            modal2.close();
            modal3.showModal();
            sw++;
        }
        else{
            modal3.close();
            location.replace('sign_up.php');
        }
    }
    close.addEventListener('click',() => threeModal());

    // 対象外の所を押したらダイアログが消える
    document.addEventListener('click', ({
    target
    }) => target === modal && modal.close());
</script>
