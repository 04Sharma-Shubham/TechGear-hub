<?php
$page_title = '新規登録';
require_once '../includes/header.php';

// すでにログインしている場合はダッシュボードにリダイレクト
if (isLoggedIn()) {
    header('Location: ../pages/dashboard.php');
    exit;
}
?>

<div class="container">
    <div style="max-width: 600px; margin: 60px auto;">
        <!-- ロゴ -->
        <div style="text-align: center; margin-bottom: 40px;">
            <div style="font-size: 48px; color: var(--neon-blue); margin-bottom: 15px;">
                <i class="fas fa-microchip"></i>
            </div>
            <h1 style="font-size: 32px; color: var(--neon-blue); margin-bottom: 10px;">TechGear Hub</h1>
            <p style="color: var(--text-secondary); font-size: 16px;">新しいアカウントを作成</p>
        </div>

        <!-- 登録フォーム -->
        <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            <form id="registerForm">
                <div class="form-group">
                    <label for="username">
                        ユーザー名 <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="text" 
                           id="username" 
                           name="username" 
                           placeholder="ユーザー名を入力"
                           required
                           autocomplete="username">
                    <small style="color: var(--text-muted); display: block; margin-top: 5px;">
                        3文字以上、英数字とアンダースコアのみ使用可能
                    </small>
                </div>

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
                               autocomplete="new-password">
                        <button type="button" 
                                onclick="togglePassword('password')" 
                                style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; color: var(--text-muted); padding: 5px;">
                            <i class="fas fa-eye" id="toggleIconPassword"></i>
                        </button>
                    </div>
                    <small style="color: var(--text-muted); display: block; margin-top: 5px;">
                        8文字以上、大文字・小文字・数字を含む
                    </small>
                    <!-- パスワード強度インジケーター -->
                    <div style="margin-top: 10px;">
                        <div style="height: 4px; background: var(--border-color); border-radius: 2px; overflow: hidden;">
                            <div id="passwordStrength" style="height: 100%; width: 0%; transition: all 0.3s ease;"></div>
                        </div>
                        <small id="passwordStrengthText" style="color: var(--text-muted); display: block; margin-top: 5px;"></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">
                        パスワード確認 <span style="color: var(--danger);">*</span>
                    </label>
                    <div style="position: relative;">
                        <input type="password" 
                               id="confirmPassword" 
                               name="confirmPassword" 
                               placeholder="パスワードを再入力"
                               required
                               autocomplete="new-password">
                        <button type="button" 
                                onclick="togglePassword('confirmPassword')" 
                                style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; color: var(--text-muted); padding: 5px;">
                            <i class="fas fa-eye" id="toggleIconConfirmPassword"></i>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone">
                        電話番号
                    </label>
                    <input type="tel" 
                           id="phone" 
                           name="phone" 
                           placeholder="090-1234-5678"
                           autocomplete="tel">
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="terms" name="terms" required style="margin-top: 3px;">
                        <span style="color: var(--text-secondary); font-size: 14px;">
                            <a href="../pages/terms.php" style="color: var(--neon-blue);" target="_blank">利用規約</a>と
                            <a href="#" style="color: var(--neon-blue);">プライバシーポリシー</a>に同意します <span style="color: var(--danger);">*</span>
                        </span>
                    </label>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        <span style="color: var(--text-secondary); font-size: 14px;">
                            お得な情報やニュースレターを受け取る
                        </span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px; margin-bottom: 15px;">
                    <i class="fas fa-user-plus"></i> アカウントを作成
                </button>

                <div style="text-align: center; color: var(--text-secondary); margin: 20px 0;">
                    または
                </div>

                <!-- ソーシャル登録 -->
                <div style="display: grid; gap: 10px;">
                    <button type="button" class="btn" style="background: #1877f2; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-facebook"></i> Facebookで登録
                    </button>
                    <button type="button" class="btn" style="background: #ea4335; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-google"></i> Googleで登録
                    </button>
                    <button type="button" class="btn" style="background: #00b900; color: white; padding: 12px; width: 100%;">
                        <i class="fab fa-line"></i> LINEで登録
                    </button>
                </div>
            </form>
        </div>

        <!-- ログインリンク -->
        <div style="text-align: center; margin-top: 25px; padding: 20px; background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color);">
            <p style="color: var(--text-secondary); margin-bottom: 10px;">
                すでにアカウントをお持ちですか？
            </p>
            <a href="login.php" class="btn btn-outline" style="padding: 12px 30px;">
                <i class="fas fa-sign-in-alt"></i> ログイン
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
                    <span>データ保護</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
input[type="checkbox"] {
    accent-color: var(--neon-blue);
    cursor: pointer;
}
</style>

<script>
// パスワード表示切り替え
function togglePassword(fieldId) {
    const passwordInput = document.getElementById(fieldId);
    const toggleIcon = document.getElementById('toggleIcon' + fieldId.charAt(0).toUpperCase() + fieldId.slice(1));
    
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

// パスワード強度チェック
document.getElementById('password').addEventListener('input', function(e) {
    const password = e.target.value;
    const strengthBar = document.getElementById('passwordStrength');
    const strengthText = document.getElementById('passwordStrengthText');
    
    let strength = 0;
    let text = '';
    let color = '';
    
    if (password.length >= 8) strength++;
    if (password.match(/[a-z]/)) strength++;
    if (password.match(/[A-Z]/)) strength++;
    if (password.match(/[0-9]/)) strength++;
    if (password.match(/[^a-zA-Z0-9]/)) strength++;
    
    switch(strength) {
        case 0:
        case 1:
            text = '弱い';
            color = '#ff4757';
            break;
        case 2:
        case 3:
            text = '普通';
            color = '#ffa502';
            break;
        case 4:
            text = '強い';
            color = '#26de81';
            break;
        case 5:
            text = '非常に強い';
            color = '#00d4ff';
            break;
    }
    
    strengthBar.style.width = (strength * 20) + '%';
    strengthBar.style.background = color;
    strengthText.textContent = password.length > 0 ? `パスワード強度: ${text}` : '';
    strengthText.style.color = color;
});

// 登録フォーム送信
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const terms = document.getElementById('terms').checked;
    
    // バリデーション
    if (!username || !email || !password || !confirmPassword) {
        alert('すべての必須項目を入力してください。');
        return;
    }
    
    // ユーザー名チェック
    if (username.length < 3) {
        alert('ユーザー名は3文字以上である必要があります。');
        return;
    }
    
    if (!/^[a-zA-Z0-9_]+$/.test(username)) {
        alert('ユーザー名は英数字とアンダースコアのみ使用できます。');
        return;
    }
    
    // メール形式チェック
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('有効なメールアドレスを入力してください。');
        return;
    }
    
    // パスワードチェック
    if (password.length < 8) {
        alert('パスワードは8文字以上である必要があります。');
        return;
    }
    
    if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/.test(password)) {
        alert('パスワードは大文字、小文字、数字を含む必要があります。');
        return;
    }
    
    // パスワード一致チェック
    if (password !== confirmPassword) {
        alert('パスワードが一致しません。');
        return;
    }
    
    // 利用規約チェック
    if (!terms) {
        alert('利用規約に同意してください。');
        return;
    }
    
    // デモ用：フロントエンドのみの登録処理
    // 実際のアプリケーションでは、サーバーサイドで登録処理を行います
    
    // セッションストレージに登録情報を保存（デモ用）
    sessionStorage.setItem('user_logged_in', 'true');
    sessionStorage.setItem('username', username);
    
    alert('アカウントが正常に作成されました！\nログインしています...');
    
    // ダッシュボードにリダイレクト
    setTimeout(() => {
        window.location.href = '../pages/dashboard.php';
    }, 1000);
});
</script>

<?php require_once '../includes/footer.php'; ?>
