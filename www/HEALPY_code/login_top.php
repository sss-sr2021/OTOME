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
        <a id="link_button"  class="sign" href="#">新規登録</a>
        <a id="link_button" href="login.php">ログイン</a>
        </div>
        </div>

        <!-- プライバシーポリシーのダイアログ -->
        <dialog class="policy" height="80%">
                    <form method="dialog">
                        <?php trimHtml('policy.php', true); ?>
                        <!-- <iframe src="policy.php"></iframe> -->
                        <menu>
                        <div id="modal_security">
                            <button class="bt1" id="agree_btn">同意</button>
                        </div>
                        </menu>
                    </form>
                </dialog>

        <!-- 利用規約のダイアログ -->
        <dialog class="service">
            <form method="dialog">
                <?php trimHtml('service.php', true); ?>
                <menu>
                <div id="modal_security">
                    <button class="bt2" id="agree_btn">同意</button>
                    </div>
                </menu>
            </form>
        </dialog>

        <!-- 運営会社のダイアログ -->
        <dialog class="company">
            <form method="dialog">
                <?php trimHtml('company.php', true); ?>
                <menu>
                <div id="modal_security">
                    <button class="bt3" id="agree_btn">同意</button>
                </div>
                </menu>
            </form>
        </dialog>
    </main>
    <!-- フッター -->
    <?php include_once('footer.php')?>
    
<script>
    document.getElementById('title').innerHTML="HEALPYとは";
    var open = document.querySelector('.sign');
    var close1 = document.querySelector('.bt1');
    var close2 = document.querySelector('.bt2');
    var close3 = document.querySelector('.bt3');
    
    var modal1 = document.querySelector('dialog.policy');
    var modal2 = document.querySelector('dialog.service');
    var modal3 = document.querySelector('dialog.company');

    var modal = modal1;

    

    open.addEventListener('click',() => modal1.showModal());
    var sw = 1;
    function threeModal(){
        if(sw == 1){
            modal1.close();
            modal2.showModal();
            modal = modal2;
            sw++;
        }
        else
        if(sw == 2){
            modal2.close();
            modal3.showModal();
            modal = modal3;
            sw++;
        }
        else{
            modal3.close();
            location.replace('sign_up.php');
        }
    }
    close1.addEventListener('click',() => threeModal());
    close2.addEventListener('click',() => threeModal());
    close3.addEventListener('click',() => threeModal());
    

    // 対象外の所を押したらダイアログが消える
    document.addEventListener('click', ({
    target
    }) => target === modal && modal.close());
</script>