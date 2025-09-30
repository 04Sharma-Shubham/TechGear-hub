<?php
$page_title = 'ログイン';
require_once '../includes/header.php';

// すでにログインしている場合はダッシュボードにリダイレクト
if (isLoggedIn()) {
    header('Location: ../pages/dashboard.php');
    exit;
}
?>

<div class="container">
    <div style="max-width: 500px; margin: 60px auto;">
        <!-- ロゴ -->
        <div style="text-align: center; margin-bottom: 40px;">
            <div style="font-size: 48px; color: var(--neon-blue); margin-bottom: 15px;">
                <i class="fas fa-microchip"></i>
            </div>
            <h1 style="font-size: 32px; color: var(--neon-blue); margin-bottom: 10px;">TechGear Hub</h1>
            <p style="color: var(--text-secondary); font-size: 16px;">アカウントにログイン</p>
        </div>

        <!-- ログインフォーム -->
        <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">
                        メールアドレス <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           placeholder="example@email.com"
                           required
                           autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="password">
                        パスワード <span style="color: var(--danger);">*</span>
                    </label>
                    <div style="position: relative;">
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="パスワードを入力"
                               required
                               autocomplete="current-password">
                        <button type="button" 
                                onclick="togglePassword()" 
                                style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; color: var(--text-muted); padding: 5px;">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" id="remember" name="remember">
                        <span style="color: var(--text-secondary); font-size: 14px;">ログイン状態を保持</span>
                    </label>
                    <a href="#" style="color: var(--neon-blue); font-size: 14px;">パスワードを忘れた？</a>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px; margin-bottom: 15px;">
                    <i class="fas fa-sign-in-alt"></i> ログイン
                </button>

                <div style="text-align: center; color: var(--text-secondary); margin: 20px 0;">
                    または
                </div>

                <!-- ソーシャルログイン -->
                <div style="display: grid; gap: 10px;">
                    <button type="button" class="btn" style="background: #1877f2; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-facebook"></i> Facebookでログイン
                    </button>
                    <button type="button" class="btn" style="background: #ea4335; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-google"></i> Googleでログイン
                    </button>
                    <button type="button" class="btn" style="background: #00b900; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-line"></i> LINEでログイン
                    </button>
                </div>
            </form>
        </div>

        <!-- 新規登録リンク -->
        <div style="text-align: center; margin-top: 25px; padding: 20px; background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color);">
            <p style="color: var(--text-secondary); margin-bottom: 10px;">
                アカウントをお持ちでないですか？
            </p>
            <a href="register.php" class="btn btn-outline" style="padding: 12px 30px;">
                <i class="fas fa-user-plus"></i> 新規登録
            </a>
        </div>

        <!-- セキュリティ情報 -->
        <div style="margin-top: 30px; text-align: center;">
            <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 15px;">
                <div style="display: flex; align-items: center; gap: 8px; color: var(--text-muted); font-size: 14px;">
                    <i class="fas fa-shield-alt" style="color: var(--neon-green);"></i>
                    <span>安全な接続</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px; color: var(--text-muted); font-size: 14px;">
                    <i class="fas fa-lock" style="color: var(--neon-blue);"></i>
                    <span>暗号化通信</span>
                </div>
            </div>
            <p style="color: var(--text-muted); font-size: 12px;">
                ログインすることで、<a href="../pages/terms.php" style="color: var(--neon-blue);">利用規約</a>と<a href="#" style="color: var(--neon-blue);">プライバシーポリシー</a>に同意したものとみなされます。
            </p>
        </div>
    </div>
</div>

<style>
input[type="checkbox"] {
    accent-color: var(--neon-blue);
    cursor: pointer;
}

.btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}
</style>

<script>
// パスワード表示切り替え
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// ログインフォーム送信
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;
    
    // バリデーション
    if (!email || !password) {
        alert('すべての必須項目を入力してください。');
        return;
    }
    
    // メール形式チェック
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('有効なメールアドレスを入力してください。');
        return;
    }
    
    // デモ用：フロントエンドのみのログイン処理
    // 実際のアプリケーションでは、サーバーサイドで認証を行います
    
    // デモアカウント
    const demoAccounts = [
        { email: 'demo@techgearhub.jp', password: 'demo123', username: 'デモユーザー' },
        { email: 'test@example.com', password: 'test123', username: 'テストユーザー' }
    ];
    
    const account = demoAccounts.find(acc => acc.email === email && acc.password === password);
    
    if (account) {
        // セッションストレージにログイン情報を保存（デモ用）
        sessionStorage.setItem('user_logged_in', 'true');
        sessionStorage.setItem('username', account.username);
        
        // ローカルストレージにも保存（remember meの場合）
        if (remember) {
            localStorage.setItem('user_logged_in', 'true');
            localStorage.setItem('username', account.username);
        }
        
        alert('ログインに成功しました！');
        
        // リダイレクト先を確認
        const urlParams = new URLSearchParams(window.location.search);
        const redirect = urlParams.get('redirect');
        
        if (redirect) {
            window.location.href = `../pages/${redirect}.php`;
        } else {
            window.location.href = '../pages/dashboard.php';
        }
    } else {
        alert('メールアドレスまたはパスワードが正しくありません。\n\nデモアカウント:\nメール: demo@techgearhub.jp\nパスワード: demo123');
    }
});

// Enterキーでログイン
document.getElementById('password').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('loginForm').dispatchEvent(new Event('submit'));
    }
});
</script>

<?php require_once '../includes/footer.php'; ?>
