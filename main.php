<?php
//マイページ
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$name = "";
$view = "";
if ($status == false) {
    sql_error($stmt); //execute（SQL実行時にエラーがある場合）

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name .= '<p>';
        $name .= $result['name'];
        $name .= '</p>';

        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $result['id'] . '">';
        $view .= $result['id'] . ' : ' . $result['bank'] . ' : ' . $result['name'] . ' : ' .
            $result['brand'] . ' : ' . h($result['money']) . ' : ' . h($result['category']) . ' : ' . h($result['date']);
        $view .= '</a>';
        $view .= "　";

        if ($_SESSION['kanri'] === 1) {
            $view .= '<a class="btn btn-danger" href="delete.php?id=' . $r['id'] . '">';
            $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
            $view .= '</a>';
        }

        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <header>
        マイページ
    </header>
    <div class="mypage-container">
        <div class="card">
            <h2>ようこそ, <?php $name ?>さん</h2>
            <ul>
                <li><a href="account.php">アカウント編集</a></li>
                <li><a href="document.php">準備アシスタント</a></li>
                <li><a href="mediation.php">調停アシスタント</a></li>
                <li><a href="community.php">コミュニティ</a></li>
                <li><a href="logout.php">ログアウト</a></li>
            </ul>
        </div>
    </div>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>

</html>