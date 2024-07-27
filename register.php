<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント登録</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>
<body>
    <header>
        アカウント登録
    </header>
    <div class="register-container">
        <div class="card">
            <h2>アカウント登録</h2>
            <form>
                <label for="username">ユーザー名:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm-password">パスワード確認:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <button type="submit">登録</button>
            </form>
            <p>すでにアカウントをお持ちですか？ <a href="index.php">ログイン</a></p>
        </div>
    </div>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>
</html>
