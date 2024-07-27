<!-- ログインフォーム -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <header>
        ログイン
    </header>
    <div class="login-container">
        <div class="card">
            <h2>ログイン</h2>
            <form name="form1" action="login_act.php" method="post">
                <label for="username">ユーザー名:</label>
                <input type="text" id="username" name="lid" required>
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="lpw" required>
                <button type="submit" href="main.php">ログイン</button>
            </form>
            <p>アカウントをお持ちでないですか？ <a href="register.php">登録</a></p>
        </div>
    </div>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>

</html>