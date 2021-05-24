<?php
/*** 
*function.php : 共通関数群
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.12
*Update : 2021.05.17
*
*/

/*
* データベースの情報
*/

define('DB', 'pgsql');
define('DB_HOST', 'localhost');
define('DB_PORT', 5432 );
define('DB_NAME', 'otome');
define('DB_USER', 'postgres');
define('DB_PASS', '');
global $dbh;

    /***
    * 関数 : データベースへの接続
    */
    function dbInit(){
        $dbh = new PDO(
            DB . ':host=' . DB_HOST  . ' port=' . DB_PORT . ' dbname=' . DB_NAME,
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return $dbh;
    }

    /***
    * 関数 : ログインユーザー情報の取得(usersテーブル)
    * $where array : 検索条件の配列
    * return array : ログインユーザー情報 or null
    */
    function getLoginUser($where=[]){
        //global $dbh;  //DBハンドル
        if (empty($where)){
            return null;
        }
        if (!isset($_SESSION['logined'])){
            foreach ($where as $key => $val){  
            $sql = "SELECT * FROM users WHERE {$key} = :{$key}";
            $rows = do_exec($sql,[$key=>$val]);
            }
            $_SESSION['logined'] = $rows[0];
            // SettingUser($_SESSION['logined']['id']);
            return $_SESSION['logined'];
        }
    }

    /***
    * 関数 : SQL
    * $sql : SQL文
    * $where array : 条件 
    * return : SQLの結果
    */
    function do_exec($sql,$where=[]){
        global $dbh;   // DBハンドル
        $sth = $dbh->prepare($sql);   // SQL定義
        $sth->execute($where);   // SQL実行
        $rows = $sth->fetchAll();   // 結果取得
        return $rows;
    }

    /***
    * 関数 : ログアウト
    */
    function logOut(){
        unset($_SESSION['logined']);
    }


    /***
    * 関数 : ポイントの登録(pointテーブル)
    * $userid : $_SESSION['id']
    * $point : $_POST['point']
    */
    function setPoint($userid,$point){
        $dbh = dbInit();
        $sth = $dbh->prepare(
            "INSERT INTO point(user_id,point,rg_date) VALUES (:user_id,:point,:rg_date)"
        );
        $ret = $sth->execute([
            'user_id' =>  $userid ,
            'point' => $point,
            'rg_date' => date('Y-m-d')
        ]);
    }

     /***
    * 関数 : ポイントの取得(pointテーブル) index.phpで使用
    * $_SESSION['id']で検索
    * $where array : 検索条件の配列
    */
    function getPoint($where=[]){
        $dbh = dbInit();
        // if(!isset($_SESSION['point'])){
            foreach($where as $key => $value){
                $sth = $dbh->prepare(
                    "SELECT * FROM point WHERE $key  =  :$key" //データベースを検索
                );
                $exc = $sth -> execute([
                    $key => $value
                ]);
            
                $rows = $sth -> fetchAll(); //$sthの要素を取得
            }
            $res = [];
            // 一週間分の空を作る
            for($i=6;$i>=0;$i--){
                $aDate = mktime(0,0,0,date('m'),date('j')-$i,date('Y'));
                $aStrDate = date('Y-m-d',$aDate);
                $res[$aStrDate] = '';
            }
            
            foreach($rows as $key => $value){
                $date = $value['rg_date'];
                $point = $value['point'];
                $res[$date]=$point;
            }
            // var_dump($rows);
            
            return $res;
        // }
    }
