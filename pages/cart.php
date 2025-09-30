<?php
$page_title = 'ショッピングカート';
require_once '../includes/header.php';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-shopping-cart"></i> ショッピングカート
        </h1>
        <p style="color: var(--text-secondary); font-size: 18px;">カート内の商品を確認してください</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 400px; gap: 30px;">
        <!-- カート商品リスト -->
        <div>
            <div id="cartItems" style="background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color); padding: 30px;">
                <!-- JavaScriptで動的に生成 -->
            </div>
        </div>

        <!-- 注文サマリー -->
        <div>
            <div style="background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color); padding: 30px; position: sticky; top: 100px;">
                <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-receipt"></i> 注文サマリー
                </h3>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: var(--text-secondary);">
                        <span>小計:</span>
                        <span id="subtotal">¥0</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: var(--text-secondary);">
                        <span>配送料:</span>
                        <span id="shipping">¥0</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: var(--text-secondary);">
                        <span>手数料:</span>
                        <span id="fee">¥0</span>
                    </div>
                    <hr style="border: none; border-top: 1px solid var(--border-color); margin: 20px 0;">
                    <div style="display: flex; justify-content: space-between; font-size: 20px; font-weight: bold;">
                        <span style="color: var(--text-primary);">合計:</span>
                        <span id="total" style="color: var(--neon-blue);">¥0</span>
                    </div>
                </div>

                <!-- クーポンコード -->
                <div style="margin-bottom: 25px;">
                    <label style="display: block; margin-bottom: 10px; color: var(--text-primary); font-weight: 500;">
                        クーポンコード
                    </label>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" 
                               id="couponCode" 
                               placeholder="コードを入力"
                               style="flex: 1; padding: 12px; background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: 8px; color: var(--text-primary);">
                        <button onclick="applyCoupon()" class="btn btn-secondary" style="padding: 12px 20px;">
                            適用
                        </button>
                    </div>
                </div>

                <button onclick="proceedToCheckout()" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px; margin-bottom: 15px;">
                    <i class="fas fa-lock"></i> レジに進む
                </button>

                <a href="browse.php" style="display: block; text-align: center; color: var(--neon-blue); padding: 10px;">
                    <i class="fas fa-arrow-left"></i> 買い物を続ける
                </a>

                <!-- 安全な支払い -->
                <div style="margin-top: 25px; padding: 20px; background: var(--hover-bg); border-radius: 10px; text-align: center; border: 1px solid var(--border-color);">
                    <div style="display: flex; justify-content: center; gap: 15px; margin-bottom: 10px;">
                        <i class="fas fa-shield-alt" style="font-size: 24px; color: var(--neon-green);"></i>
                        <i class="fas fa-lock" style="font-size: 24px; color: var(--neon-blue);"></i>
                        <i class="fas fa-check-circle" style="font-size: 24px; color: var(--neon-purple);"></i>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 14px; line-height: 1.6;">
                        安全な決済システムで保護されています
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- おすすめ商品 -->
    <section style="margin-top: 60px;">
        <h2 style="font-size: 28px; color: var(--neon-blue); margin-bottom: 30px; text-align: center;">
            <i class="fas fa-star"></i> こちらもおすすめ
        </h2>
        <div class="product-grid" style="grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));">
            <!-- サンプル商品 -->
            <?php
            $recommended = array_slice(getSampleProducts(), 0, 4);
            foreach ($recommended as $product):
            ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="../<?php echo $product['image']; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             onerror="this.src='../assets/images/placeholder.jpg'">
                        <button class="wishlist-btn" 
                                data-product-id="<?php echo $product['id']; ?>"
                                onclick="toggleWishlist(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '../<?php echo $product['image']; ?>')">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category"><?php echo $product['category']; ?></div>
                        <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <div class="product-footer">
                            <div class="product-price"><?php echo formatPrice($product['price']); ?></div>
                            <button class="add-to-cart-btn" 
                                    onclick="addToCart(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '../<?php echo $product['image']; ?>')">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<style>
.cart-item {
    display: flex;
    gap: 20px;
    padding: 20px;
    border-bottom: 1px solid var(--border-color);
    transition: var(--transition);
}

.cart-item:hover {
    background: var(--hover-bg);
}

.cart-item:last-child {
    border-bottom: none;
}

.cart-item-image {
    width: 120px;
    height: 120px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
}

.cart-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.cart-item-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.cart-item-name {
    font-size: 18px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.cart-item-category {
    color: var(--neon-green);
    font-size: 12px;
    margin-bottom: 10px;
}

.cart-item-price {
    font-size: 20px;
    font-weight: bold;
    color: var(--neon-blue);
}

.cart-item-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.quantity-control {
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--secondary-bg);
    padding: 5px 10px;
    border-radius: 8px;
    border: 1px solid var(--border-color);
}

.quantity-control button {
    width: 30px;
    height: 30px;
    background: var(--hover-bg);
    border-radius: 5px;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
}

.quantity-control button:hover {
    background: var(--neon-blue);
    color: var(--primary-bg);
}

.quantity-control span {
    min-width: 30px;
    text-align: center;
    color: var(--text-primary);
    font-weight: 600;
}

.remove-btn {
    color: var(--danger);
    padding: 8px 15px;
    border-radius: 8px;
    transition: var(--transition);
}

.remove-btn:hover {
    background: var(--danger);
    color: white;
}

.empty-cart {
    text-align: center;
    padding: 80px 20px;
}

.empty-cart i {
    font-size: 80px;
    color: var(--text-muted);
    margin-bottom: 20px;
}

@media (max-width: 968px) {
    .container > div:first-of-type {
        grid-template-columns: 1fr !important;
    }
    
    .cart-item {
        flex-direction: column;
    }
    
    .cart-item-image {
        width: 100%;
        height: 200px;
    }
}
</style>

<script>
// カートの表示
function displayCart() {
    const cart = getCart();
    const cartItemsContainer = document.getElementById('cartItems');
    
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = `
            <div class="empty-cart">
                <i class="fas fa-shopping-cart"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 10px;">カートは空です</h3>
                <p style="color: var(--text-secondary); margin-bottom: 25px;">商品を追加して買い物を始めましょう</p>
                <a href="browse.php" class="btn btn-primary">
                    <i class="fas fa-search"></i> 商品を探す
                </a>
            </div>
        `;
        updateOrderSummary(0, 0, 0, 0);
        return;
    }
    
    let html = '';
    cart.forEach(item => {
        html += `
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.name}" onerror="this.src='../assets/images/placeholder.jpg'">
                </div>
                <div class="cart-item-details">
                    <div>
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-price">¥${item.price.toLocaleString()}</div>
                    </div>
                    <div class="cart-item-actions">
                        <div class="quantity-control">
                            <button onclick="updateQuantity(${item.id}, ${item.quantity - 1})">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span>${item.quantity}</span>
                            <button onclick="updateQuantity(${item.id}, ${item.quantity + 1})">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <button class="remove-btn" onclick="removeFromCart(${item.id})">
                            <i class="fas fa-trash"></i> 削除
                        </button>
                    </div>
                </div>
            </div>
        `;
    });
    
    cartItemsContainer.innerHTML = html;
    calculateTotal();
}

// 数量更新
function updateQuantity(productId, newQuantity) {
    if (newQuantity < 1) {
        if (confirm('この商品をカートから削除しますか？')) {
            removeFromCart(productId);
        }
        return;
    }
    
    updateCartQuantity(productId, newQuantity);
    displayCart();
}

// 合計計算
function calculateTotal() {
    const cart = getCart();
    let subtotal = 0;
    
    cart.forEach(item => {
        subtotal += item.price * item.quantity;
    });
    
    const shipping = subtotal > 0 ? (subtotal >= 10000 ? 0 : 500) : 0;
    const fee = Math.floor(subtotal * 0.03); // 3%手数料
    const total = subtotal + shipping + fee;
    
    updateOrderSummary(subtotal, shipping, fee, total);
}

// 注文サマリー更新
function updateOrderSummary(subtotal, shipping, fee, total) {
    document.getElementById('subtotal').textContent = '¥' + subtotal.toLocaleString();
    document.getElementById('shipping').textContent = shipping === 0 && subtotal > 0 ? '無料' : '¥' + shipping.toLocaleString();
    document.getElementById('fee').textContent = '¥' + fee.toLocaleString();
    document.getElementById('total').textContent = '¥' + total.toLocaleString();
}

// クーポン適用
function applyCoupon() {
    const code = document.getElementById('couponCode').value.trim();
    
    if (!code) {
        alert('クーポンコードを入力してください。');
        return;
    }
    
    // デモ用のクーポン
    const validCoupons = {
        'WELCOME10': 10,
        'SAVE20': 20,
        'TECH15': 15
    };
    
    if (validCoupons[code]) {
        alert(`クーポンが適用されました！${validCoupons[code]}%割引`);
        // 実際のアプリケーションでは、ここで割引を適用
    } else {
        alert('無効なクーポンコードです。');
    }
}

// レジに進む
function proceedToCheckout() {
    const cart = getCart();
    
    if (cart.length === 0) {
        alert('カートに商品がありません。');
        return;
    }
    
    <?php if (!isLoggedIn()): ?>
        if (confirm('チェックアウトにはログインが必要です。ログインページに移動しますか？')) {
            window.location.href = '../auth/login.php?redirect=cart';
        }
    <?php else: ?>
        alert('チェックアウト機能は開発中です。\n実際のアプリケーションでは、ここで決済ページに移動します。');
        // window.location.href = 'checkout.php';
    <?php endif; ?>
}

// ページ読み込み時にカートを表示
document.addEventListener('DOMContentLoaded', function() {
    displayCart();
});
</script>

<?php require_once '../includes/footer.php'; ?>
