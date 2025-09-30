<?php
$page_title = '会社概要';
require_once '../includes/header.php';
?>

<div class="container">
    <!-- ヒーローセクション -->
    <div style="text-align: center; padding: 60px 0 40px;">
        <h1 style="font-size: 48px; color: var(--neon-blue); margin-bottom: 20px;">
            TechGear Hubについて
        </h1>
        <p style="font-size: 20px; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
            信頼できる中古テックギアの売買プラットフォーム
        </p>
    </div>

    <!-- ミッションセクション -->
    <section style="background: var(--card-bg); padding: 60px 40px; border-radius: 20px; margin-bottom: 50px; border: 1px solid var(--border-color);">
        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; font-size: 48px;">
                <i class="fas fa-rocket"></i>
            </div>
            <h2 style="font-size: 32px; color: var(--neon-green); margin-bottom: 20px;">私たちのミッション</h2>
            <p style="font-size: 18px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                TechGear Hubは、高品質な中古テクノロジー製品を手頃な価格で提供し、持続可能な消費を促進することを使命としています。
                私たちは、テクノロジーへのアクセスを民主化し、環境に配慮した選択肢を提供することで、より良い未来を創造します。
            </p>
            <p style="font-size: 18px; color: var(--text-secondary); line-height: 1.8;">
                すべての取引において、買い手と売り手の双方に安心と信頼を提供し、
                テクノロジーの循環型経済を実現することを目指しています。
            </p>
        </div>
    </section>

    <!-- 価値観セクション -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 36px; color: var(--neon-blue); text-align: center; margin-bottom: 50px;">
            私たちの価値観
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: var(--card-bg); padding: 35px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="value-card">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 22px;">信頼性</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    すべての商品は厳格な品質チェックを経て、安心してご購入いただけます。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 35px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="value-card">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 22px;">持続可能性</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    中古品の再利用を促進し、電子廃棄物を削減して環境保護に貢献します。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 35px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="value-card">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 22px;">コミュニティ</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    テクノロジー愛好家のコミュニティを育成し、知識と経験を共有します。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 35px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="value-card">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 22px;">手頃な価格</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    高品質なテクノロジーを誰もが手に入れられる価格で提供します。
                </p>
            </div>
        </div>
    </section>

    <!-- 統計セクション -->
    <section style="background: linear-gradient(135deg, var(--secondary-bg), var(--primary-bg)); padding: 60px 40px; border-radius: 20px; margin-bottom: 50px; border: 1px solid var(--border-color);">
        <h2 style="font-size: 36px; color: var(--neon-blue); text-align: center; margin-bottom: 50px;">
            数字で見るTechGear Hub
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; text-align: center;">
            <div>
                <div style="font-size: 48px; font-weight: bold; color: var(--neon-blue); margin-bottom: 10px;">50,000+</div>
                <div style="color: var(--text-secondary); font-size: 18px;">登録ユーザー</div>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: bold; color: var(--neon-green); margin-bottom: 10px;">100,000+</div>
                <div style="color: var(--text-secondary); font-size: 18px;">取引完了</div>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: bold; color: var(--neon-purple); margin-bottom: 10px;">98%</div>
                <div style="color: var(--text-secondary); font-size: 18px;">顧客満足度</div>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: bold; color: var(--neon-blue); margin-bottom: 10px;">24/7</div>
                <div style="color: var(--text-secondary); font-size: 18px;">サポート対応</div>
            </div>
        </div>
    </section>

    <!-- なぜ選ばれるのか -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 36px; color: var(--neon-blue); text-align: center; margin-bottom: 50px;">
            なぜTechGear Hubが選ばれるのか
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-check-circle" style="font-size: 32px; color: var(--neon-green);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">厳格な品質管理</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    すべての商品は専門スタッフによる詳細な検査を受け、動作確認と品質保証を行っています。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-lock" style="font-size: 32px; color: var(--neon-blue);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">安全な取引</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    エスクローシステムと買い手保護プログラムにより、すべての取引を安全に保護します。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-shipping-fast" style="font-size: 32px; color: var(--neon-purple);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">迅速な配送</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    全国どこでも迅速かつ安全に配送。追跡可能な配送方法で安心です。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-undo" style="font-size: 32px; color: var(--neon-green);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">返品保証</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    商品到着後7日以内であれば、条件を満たす場合に返品・返金が可能です。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-headset" style="font-size: 32px; color: var(--neon-blue);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">専門サポート</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    経験豊富なサポートチームが、購入から使用まで丁寧にサポートします。
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-certificate" style="font-size: 32px; color: var(--neon-purple);"></i>
                    <h3 style="color: var(--text-primary); font-size: 20px;">認証済み販売者</h3>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    すべての販売者は本人確認済みで、評価システムにより信頼性を確保しています。
                </p>
            </div>
        </div>
    </section>

    <!-- チームセクション（オプション） -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 36px; color: var(--neon-blue); text-align: center; margin-bottom: 20px;">
            私たちのチーム
        </h2>
        <p style="text-align: center; color: var(--text-secondary); margin-bottom: 50px; font-size: 18px;">
            テクノロジーとビジネスの専門家が集結
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="team-card">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 48px;">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 5px; font-size: 20px;">田中 太郎</h3>
                <p style="color: var(--neon-blue); margin-bottom: 15px; font-size: 14px;">CEO & 創業者</p>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    15年以上のテクノロジー業界経験を持つビジョナリー
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="team-card">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 48px;">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 5px; font-size: 20px;">佐藤 花子</h3>
                <p style="color: var(--neon-green); margin-bottom: 15px; font-size: 14px;">CTO</p>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    プラットフォームの技術革新をリードするエンジニア
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="team-card">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 48px;">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 5px; font-size: 20px;">鈴木 一郎</h3>
                <p style="color: var(--neon-purple); margin-bottom: 15px; font-size: 14px;">品質管理責任者</p>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    すべての商品の品質を保証する専門家
                </p>
            </div>

            <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color); transition: var(--transition);" class="team-card">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 48px;">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 5px; font-size: 20px;">山田 美咲</h3>
                <p style="color: var(--neon-blue); margin-bottom: 15px; font-size: 14px;">カスタマーサポート責任者</p>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    お客様の満足を最優先するサポートリーダー
                </p>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section style="background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); padding: 60px 40px; border-radius: 20px; text-align: center; color: var(--primary-bg);">
        <h2 style="font-size: 36px; margin-bottom: 20px;">一緒に始めましょう</h2>
        <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">
            信頼できるテックギアの売買プラットフォームで、あなたのテクノロジーライフを豊かに
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="../auth/register.php" class="btn" style="background: white; color: var(--primary-bg); padding: 15px 40px; font-size: 18px; font-weight: 600; border-radius: 25px;">
                <i class="fas fa-user-plus"></i> 今すぐ登録
            </a>
            <a href="contact.php" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 15px 40px; font-size: 18px; font-weight: 600; border-radius: 25px;">
                <i class="fas fa-envelope"></i> お問い合わせ
            </a>
        </div>
    </section>
</div>

<style>
.value-card:hover,
.team-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.2);
    border-color: var(--neon-blue);
}
</style>

<?php require_once '../includes/footer.php'; ?>
