<?php
$page_title = 'お問い合わせ';
require_once '../includes/header.php';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px; text-align: center;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-envelope"></i> お問い合わせ
        </h1>
        <p style="color: var(--text-secondary); font-size: 18px;">ご質問やご要望がございましたら、お気軽にお問い合わせください</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 50px;">
        <!-- お問い合わせフォーム -->
        <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            <h2 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-paper-plane"></i> メッセージを送信
            </h2>

            <form id="contactForm" data-validate>
                <div class="form-group">
                    <label for="name">
                        お名前 <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           placeholder="山田 太郎"
                           required>
                </div>

                <div class="form-group">
                    <label for="email">
                        メールアドレス <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           placeholder="example@email.com"
                           required>
                </div>

                <div class="form-group">
                    <label for="phone">
                        電話番号
                    </label>
                    <input type="tel" 
                           id="phone" 
                           name="phone" 
                           placeholder="090-1234-5678">
                </div>

                <div class="form-group">
                    <label for="subject">
                        件名 <span style="color: var(--danger);">*</span>
                    </label>
                    <select id="subject" name="subject" required>
                        <option value="">件名を選択してください</option>
                        <option value="general">一般的なお問い合わせ</option>
                        <option value="product">商品について</option>
                        <option value="order">注文について</option>
                        <option value="technical">技術的な問題</option>
                        <option value="account">アカウントについて</option>
                        <option value="partnership">提携について</option>
                        <option value="other">その他</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">
                        メッセージ <span style="color: var(--danger);">*</span>
                    </label>
                    <textarea id="message" 
                              name="message" 
                              placeholder="お問い合わせ内容を詳しくご記入ください"
                              rows="6"
                              required></textarea>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        <span style="color: var(--text-secondary);">ニュースレターを受け取る</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px;">
                    <i class="fas fa-paper-plane"></i> 送信する
                </button>
            </form>
        </div>

        <!-- お問い合わせ情報 -->
        <div>
            <!-- 連絡先情報 -->
            <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color); margin-bottom: 30px;">
                <h2 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-info-circle"></i> 連絡先情報
                </h2>

                <div style="display: flex; flex-direction: column; gap: 25px;">
                    <div style="display: flex; align-items: flex-start; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-map-marker-alt" style="font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">住所</h4>
                            <p style="color: var(--text-secondary); line-height: 1.6;">
                                〒150-0001<br>
                                東京都渋谷区神宮前1-2-3<br>
                                TechGearビル 5F
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-phone" style="font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">電話番号</h4>
                            <p style="color: var(--text-secondary); line-height: 1.6;">
                                一般: 89-7894-2348<br>
                                サポート: 89-7894-2348<br>
                                (平日 9:00 - 18:00)
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-envelope" style="font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">メールアドレス</h4>
                            <p style="color: var(--text-secondary); line-height: 1.6;">
                                一般: info@techgearhub.jp<br>
                                サポート: support@techgearhub.jp<br>
                                営業: sales@techgearhub.jp
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-clock" style="font-size: 20px;"></i>
                        </div>
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">営業時間</h4>
                            <p style="color: var(--text-secondary); line-height: 1.6;">
                                月曜日 - 金曜日: 9:00 - 18:00<br>
                                土曜日: 10:00 - 17:00<br>
                                日曜日・祝日: 休業
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ソーシャルメディア -->
            <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-share-alt"></i> ソーシャルメディア
                </h2>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.6;">
                    最新情報やお得なキャンペーン情報をチェック！
                </p>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-facebook" style="font-size: 24px; color: #1877f2;"></i>
                        <span style="color: var(--text-primary);">Facebook</span>
                    </a>
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-twitter" style="font-size: 24px; color: #1da1f2;"></i>
                        <span style="color: var(--text-primary);">Twitter</span>
                    </a>
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-instagram" style="font-size: 24px; color: #e4405f;"></i>
                        <span style="color: var(--text-primary);">Instagram</span>
                    </a>
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-youtube" style="font-size: 24px; color: #ff0000;"></i>
                        <span style="color: var(--text-primary);">YouTube</span>
                    </a>
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-linkedin" style="font-size: 24px; color: #0077b5;"></i>
                        <span style="color: var(--text-primary);">LinkedIn</span>
                    </a>
                    <a href="#" style="display: flex; align-items: center; gap: 10px; padding: 15px; background: var(--hover-bg); border-radius: 10px; transition: var(--transition); border: 1px solid var(--border-color);" class="social-link">
                        <i class="fab fa-line" style="font-size: 24px; color: #00b900;"></i>
                        <span style="color: var(--text-primary);">LINE</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- よくある質問 -->
    <section style="background: var(--card-bg); padding: 50px 40px; border-radius: 20px; border: 1px solid var(--border-color); margin-bottom: 50px;">
        <h2 style="font-size: 32px; color: var(--neon-blue); text-align: center; margin-bottom: 40px;">
            <i class="fas fa-question-circle"></i> よくある質問
        </h2>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item" style="margin-bottom: 20px; border: 1px solid var(--border-color); border-radius: 10px; overflow: hidden;">
                <div class="faq-question" style="padding: 20px; background: var(--hover-bg); cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.parentElement.classList.toggle('active')">
                    <h4 style="color: var(--text-primary); margin: 0;">商品の返品は可能ですか？</h4>
                    <i class="fas fa-chevron-down" style="color: var(--neon-blue); transition: var(--transition);"></i>
                </div>
                <div class="faq-answer" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <p style="color: var(--text-secondary); line-height: 1.7; padding: 20px 0;">
                        はい、商品到着後7日以内であれば返品が可能です。ただし、商品が未使用で元の状態を保っている必要があります。詳細は利用規約をご確認ください。
                    </p>
                </div>
            </div>

            <div class="faq-item" style="margin-bottom: 20px; border: 1px solid var(--border-color); border-radius: 10px; overflow: hidden;">
                <div class="faq-question" style="padding: 20px; background: var(--hover-bg); cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.parentElement.classList.toggle('active')">
                    <h4 style="color: var(--text-primary); margin: 0;">配送にはどのくらいかかりますか？</h4>
                    <i class="fas fa-chevron-down" style="color: var(--neon-blue); transition: var(--transition);"></i>
                </div>
                <div class="faq-answer" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <p style="color: var(--text-secondary); line-height: 1.7; padding: 20px 0;">
                        通常配送の場合、3-5営業日でお届けします。速達配送をご選択いただくと、1-2営業日でお届け可能です。
                    </p>
                </div>
            </div>

            <div class="faq-item" style="margin-bottom: 20px; border: 1px solid var(--border-color); border-radius: 10px; overflow: hidden;">
                <div class="faq-question" style="padding: 20px; background: var(--hover-bg); cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.parentElement.classList.toggle('active')">
                    <h4 style="color: var(--text-primary); margin: 0;">支払い方法は何がありますか？</h4>
                    <i class="fas fa-chevron-down" style="color: var(--neon-blue); transition: var(--transition);"></i>
                </div>
                <div class="faq-answer" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <p style="color: var(--text-secondary); line-height: 1.7; padding: 20px 0;">
                        クレジットカード、銀行振込、コンビニ決済、代金引換、PayPay、LINE Payなど、多様な支払い方法に対応しています。
                    </p>
                </div>
            </div>

            <div class="faq-item" style="margin-bottom: 20px; border: 1px solid var(--border-color); border-radius: 10px; overflow: hidden;">
                <div class="faq-question" style="padding: 20px; background: var(--hover-bg); cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.parentElement.classList.toggle('active')">
                    <h4 style="color: var(--text-primary); margin: 0;">商品の品質は保証されていますか？</h4>
                    <i class="fas fa-chevron-down" style="color: var(--neon-blue); transition: var(--transition);"></i>
                </div>
                <div class="faq-answer" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <p style="color: var(--text-secondary); line-height: 1.7; padding: 20px 0;">
                        はい、すべての商品は専門スタッフによる厳格な品質チェックを受けています。また、商品説明と異なる場合は返品・返金が可能です。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 地図セクション（オプション） -->
    <section style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
        <h2 style="font-size: 32px; color: var(--neon-blue); text-align: center; margin-bottom: 30px;">
            <i class="fas fa-map-marked-alt"></i> アクセス
        </h2>
        <div style="background: var(--secondary-bg); height: 400px; border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
            <div style="text-align: center;">
                <i class="fas fa-map-marker-alt" style="font-size: 64px; color: var(--neon-blue); margin-bottom: 20px;"></i>
                <p style="color: var(--text-secondary); font-size: 18px;">
                    東京都渋谷区神宮前1-2-3<br>
                    TechGearビル 5F
                </p>
                <p style="color: var(--text-muted); margin-top: 15px;">
                    最寄り駅: 原宿駅 徒歩5分
                </p>
            </div>
        </div>
    </section>
</div>

<style>
.social-link:hover {
    transform: translateX(5px);
    border-color: var(--neon-blue);
}

.faq-item.active .faq-answer {
    max-height: 500px;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-question:hover {
    background: var(--card-bg);
}

@media (max-width: 968px) {
    .container > div:first-of-type {
        grid-template-columns: 1fr !important;
    }
}
</style>

<script>
// フォーム送信処理
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // バリデーション
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value.trim();
    
    if (!name || !email || !subject || !message) {
        alert('必須項目をすべて入力してください。');
        return;
    }
    
    // メール形式チェック
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('有効なメールアドレスを入力してください。');
        return;
    }
    
    // 成功メッセージ
    alert('お問い合わせを受け付けました。\n担当者より2営業日以内にご連絡いたします。');
    this.reset();
});
</script>

<?php require_once '../includes/footer.php'; ?>
