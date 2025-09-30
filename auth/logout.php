<?php
session_start();

// セッションを破棄
$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト - TechGear Hub</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: var(--primary-bg);">
        <div style="text-align: center; max-width: 500px; padding: 40px;">
            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; font-size: 48px;">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <h1 style="font-size: 32px; color: var(--neon-blue); margin-bottom: 15px;">
                ログアウトしました
            </h1>
            <p style="color: var(--text-secondary); margin-bottom: 30px; font-size: 18px;">
                ご利用ありがとうございました。またのご利用をお待ちしております。
            </p>
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="../index.php" class="btn btn-primary" style="padding: 15px 30px;">
                    <i class="fas fa-home"></i> ホームに戻る
                </a>
                <a href="login.php" class="btn btn-outline" style="padding: 15px 30px;">
                    <i class="fas fa-sign-in-alt"></i> 再ログイン
                </a>
            </div>
        </div>
    </div>

    <script>
        // フロントエンドのログアウト処理（デモ用）
        sessionStorage.removeItem('user_logged_in');
        sessionStorage.removeItem('username');
        localStorage.removeItem('user_logged_in');
        localStorage.removeItem('username');
        
        // 3秒後にホームページにリダイレクト
        setTimeout(() => {
            window.location.href = '../index.php';
        }, 3000);
    </script>
</body>
</html>
