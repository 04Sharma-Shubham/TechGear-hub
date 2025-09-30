<?php
$page_title = 'お得情報';
require_once '../includes/header.php';
$deal_products = getDealProducts();
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px; text-align: center;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-tags"></i> お得情報
        </h1>
        <p style="color: var(--text-secondary); font-size: 18px;">期間限定の特別価格商品をチェック！</p>
    </div>

    <!-- セール情報バナー -->
    <div style="background: linear-gradient(135deg, #ff4757, #ff6348); padding: 40px; border-radius: 20px; text-align: center; margin-bottom: 50px; position: relative; overflow: hidden;">
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
        <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
        <div style="position: relative; z-index: 1;">
            <h2 style="font-size: 32px; margin-bottom: 15px; color: white;">
                <i class="fas fa-fire"></i> 週末限定セール
            </h2>
            <p style="font-size: 18px; margin-bottom: 20px; color: rgba(255, 255, 255, 0.9);">
                最大20%オフ！お見逃しなく
            </p>
            <div style="display: inline-flex; gap: 20px; background: rgba(0, 0, 0, 0.3); padding: 15px 30px; border-radius: 50px; backdrop-filter: blur(10px);">
                <div>
                    <div style="font-size: 28px; font-weight: bold;">02</div>
                    <div style="font-size: 12px; opacity: 0.8;">日</div>
                </div>
                <div style="font-size: 28px;">:</div>
                <div>
                    <div style="font-size: 28px; font-weight: bold;">14</div>
                    <div style="font-size: 12px; opacity: 0.8;">時間</div>
                </div>
                <div style="font-size: 28px;">:</div>
                <div>
                    <div style="font-size: 28px; font-weight: bold;">32</div>
                    <div style="font-size: 12px; opacity: 0.8;">分</div>
                </div>
                <div style="font-size: 28px;">:</div>
                <div>
                    <div style="font-size: 28px; font-weight: bold;">45</div>
                    <div style="font-size: 12px; opacity: 0.8;">秒</div>
                </div>
            </div>
        </div>
    </div>

    <!-- フィルターボタン -->
    <div style="display: flex; gap: 15px; margin-bottom: 40px; flex-wrap: wrap; justify-content: center;">
        <button class="filter-btn active" style="padding: 12px 25px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); color: var(--primary-bg); border: none; border-radius: 25px; font-weight: 600; cursor: pointer; transition: var(--transition);">
            すべて
        </button>
        <button class="filter-btn" style="padding: 12px 25px; background: var(--card-bg); color: var(--text-secondary); border: 1px solid var(--border-color); border-radius: 25px; font-weight: 600; cursor: pointer; transition: var(--transition);">
            10%以上オフ
        </button>
        <button class="filter-btn" style="padding: 12px 25px; background: var(--card-bg); color: var(--text-secondary); border: 1px solid var(--border-color); border-radius: 25px; font-weight: 600; cursor: pointer; transition: var(--transition);">
            15%以上オフ
        </button>
        <button class="filter-btn" style="padding: 12px 25px; background: var(--card-bg); color: var(--text-secondary); border: 1px solid var(--border-color); border-radius: 25px; font-weight: 600; cursor: pointer; transition: var(--transition);">
            20%以上オフ
        </button>
    </div>

    <!-- セール商品グリッド -->
    <?php if (count($deal_products) > 0): ?>
        <div class="product-grid">
            <?php foreach ($deal_products as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="../<?php echo $product['image']; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             onerror="this.src='../assets/images/placeholder.jpg'">
                        <span class="product-badge discount">
                            <i class="fas fa-bolt"></i> <?php echo $product['discount']; ?>% OFF
                        </span>
                        <button class="wishlist-btn" 
                                data-product-id="<?php echo $product['id']; ?>"
                                onclick="toggleWishlist(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '../<?php echo $product['image']; ?>')">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category"><?php echo $product['category']; ?></div>
                        <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                        <div class="product-meta">
                            <span class="condition-badge">
                                <i class="fas fa-check-circle"></i> <?php echo $product['condition']; ?>
                            </span>
                            <span style="background: linear-gradient(135deg, #ff4757, #ff6348); color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: bold;">
                                <i class="fas fa-clock"></i> 期間限定
                            </span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price has-discount">
                                <span class="original-price"><?php echo formatPrice($product['price']); ?></span>
                                <span style="color: #ff4757;"><?php echo formatPrice($product['price'] * (1 - $product['discount'] / 100)); ?></span>
                            </div>
                            <button class="add-to-cart-btn" 
                                    onclick="addToCart(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '../<?php echo $product['image']; ?>')">
                                <i class="fas fa-shopping-cart"></i> カート
                            </button>
                        </div>
                        <div style="margin-top: 10px; padding: 8px; background: rgba(255, 71, 87, 0.1); border-radius: 8px; text-align: center;">
                            <small style="color: #ff4757; font-weight: 600;">
                                <i class="fas fa-fire"></i> 
                                <?php echo formatPrice($product['price'] * $product['discount'] / 100); ?> お得！
                            </small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div style="text-align: center; padding: 60px 20px; background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color);">
            <i class="fas fa-tags" style="font-size: 64px; color: var(--text-muted); margin-bottom: 20px;"></i>
            <h3 style="color: var(--text-primary); margin-bottom: 10px;">現在セール商品はありません</h3>
            <p style="color: var(--text-secondary); margin-bottom: 20px;">新しいセール情報をお待ちください</p>
            <a href="browse.php" class="btn btn-primary">すべての商品を見る</a>
        </div>
    <?php endif; ?>

    <!-- お得情報の説明 -->
    <div style="margin-top: 60px; background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
        <h3 style="color: var(--neon-blue); margin-bottom: 25px; text-align: center;">
            <i class="fas fa-info-circle"></i> お得に購入するためのヒント
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 24px;">
                    <i class="fas fa-bell"></i>
                </div>
                <h4 style="color: var(--text-primary); margin-bottom: 10px;">通知を有効に</h4>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    新しいセール情報をいち早く受け取れます
                </p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 24px;">
                    <i class="fas fa-heart"></i>
                </div>
                <h4 style="color: var(--text-primary); margin-bottom: 10px;">ウィッシュリスト活用</h4>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    気になる商品をウィッシュリストに追加して価格変動をチェック
                </p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 24px;">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h4 style="color: var(--text-primary); margin-bottom: 10px;">定期的にチェック</h4>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    週末や月末に特別セールを開催することが多いです
                </p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 24px;">
                    <i class="fas fa-users"></i>
                </div>
                <h4 style="color: var(--text-primary); margin-bottom: 10px;">SNSをフォロー</h4>
                <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                    限定クーポンやフラッシュセール情報を配信中
                </p>
            </div>
        </div>
    </div>

    <!-- ニュースレター登録 -->
    <div style="margin-top: 40px; background: linear-gradient(135deg, var(--secondary-bg), var(--primary-bg)); padding: 50px 40px; border-radius: 20px; text-align: center; border: 1px solid var(--border-color);">
        <h3 style="font-size: 28px; margin-bottom: 15px; color: var(--neon-blue);">
            <i class="fas fa-envelope"></i> お得情報を受け取る
        </h3>
        <p style="color: var(--text-secondary); margin-bottom: 25px; max-width: 500px; margin-left: auto; margin-right: auto;">
            メールアドレスを登録して、最新のセール情報や限定クーポンを受け取りましょう
        </p>
        <form style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto; flex-wrap: wrap; justify-content: center;">
            <input type="email" 
                   placeholder="メールアドレスを入力" 
                   style="flex: 1; min-width: 250px; padding: 15px 20px; background: var(--card-bg); border: 1px solid var(--border-color); border-radius: 25px; color: var(--text-primary);">
            <button type="submit" class="btn btn-primary" style="padding: 15px 35px;">
                <i class="fas fa-paper-plane"></i> 登録
            </button>
        </form>
    </div>
</div>

<style>
.filter-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 212, 255, 0.3);
}

.filter-btn.active {
    box-shadow: 0 5px 20px rgba(0, 212, 255, 0.4);
}

.filter-btn:not(.active):hover {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}
</style>

<script>
// フィルターボタンの動作
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('active');
            b.style.background = 'var(--card-bg)';
            b.style.color = 'var(--text-secondary)';
            b.style.border = '1px solid var(--border-color)';
        });
        this.classList.add('active');
        this.style.background = 'linear-gradient(135deg, var(--neon-blue), var(--neon-green))';
        this.style.color = 'var(--primary-bg)';
        this.style.border = 'none';
    });
});

// カウントダウンタイマー（デモ用）
function updateCountdown() {
    // 実際のアプリケーションでは、サーバーから終了時刻を取得
    const now = new Date().getTime();
    const end = now + (2 * 24 * 60 * 60 * 1000) + (14 * 60 * 60 * 1000); // 2日14時間後
    
    setInterval(() => {
        const now = new Date().getTime();
        const distance = end - now;
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // タイマー表示を更新（実装は省略）
    }, 1000);
}
</script>

<?php require_once '../includes/footer.php'; ?>
