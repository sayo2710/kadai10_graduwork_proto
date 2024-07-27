<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//DB接続
function db_conn()
{
    try {
        $db_host = ''; //DBホスト
        $db_name = ''; //データベース名
        $db_id = ''; //アカウント名（登録しているドメイン）
        $db_pw = ''; //さくらサーバーのパスワード

        $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
        
        $pdo = new PDO($server_info, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}


//SQLエラー関数：sql_error($stmt)
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    $_SESSION["error_msg"] = "ログインしてください";
    header('Location:'.$file_name);
    exit();
}

// ログインチェク処理 loginCheck()
function loginCheck()
{
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
        exit('LOGIN ERROR');
    }
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
}
