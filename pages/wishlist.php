<?php
$page_title = 'ウィッシュリスト';
require_once '../includes/header.php';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-heart"></i> ウィッシュリスト
        </h1>
        <p style="color: var(--text-secondary); font-size: 18px;">お気に入りの商品を保存しています</p>
    </div>

    <div id="wishlistItems">
        <!-- JavaScriptで動的に生成 -->
    </div>
</div>

<style>
.wishlist-item {
    background: var(--card-bg);
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    border: 1px solid var(--border-color);
    display: flex;
    gap: 25px;
    transition: var(--transition);
}

.wishlist-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.2);
    border-color: var(--neon-blue);
}

.wishlist-item-image {
    width: 180px;
    height: 180px;
    border-radius: 12px;
    overflow: hidden;
    flex-shrink: 0;
}

.wishlist-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.wishlist-item-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.wishlist-item-header {
    margin-bottom: 15px;
}

.wishlist-item-name {
    font-size: 22px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.wishlist-item-category {
    color: var(--neon-green);
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
}

.wishlist-item-price {
    font-size: 28px;
    font-weight: bold;
    color: var(--neon-blue);
    margin-bottom: 20px;
}

.wishlist-item-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.empty-wishlist {
    text-align: center;
    padding: 100px 20px;
    background: var(--card-bg);
    border-radius: 20px;
    border: 1px solid var(--border-color);
}

.empty-wishlist i {
    font-size: 100px;
    color: var(--text-muted);
    margin-bottom: 25px;
}

@media (max-width: 768px) {
    .wishlist-item {
        flex-direction: column;
    }
    
    .wishlist-item-image {
        width: 100%;
        height: 250px;
    }
    
    .wishlist-item-actions {
        flex-direction: column;
    }
    
    .wishlist-item-actions button {
        width: 100%;
    }
}
</style>

<script>
// ウィッシュリストの表示
function displayWishlist() {
    const wishlist = getWishlist();
    const wishlistContainer = document.getElementById('wishlistItems');
    
    if (wishlist.length === 0) {
        wishlistContainer.innerHTML = `
            <div class="empty-wishlist">
                <i class="fas fa-heart-broken"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 28px;">ウィッシュリストは空です</h3>
                <p style="color: var(--text-secondary); margin-bottom: 30px; font-size: 18px;">
                    お気に入りの商品を追加して、後で簡単にアクセスできます
                </p>
                <a href="browse.php" class="btn btn-primary" style="padding: 15px 40px; font-size: 16px;">
                    <i class="fas fa-search"></i> 商品を探す
                </a>
            </div>
        `;
        return;
    }
    
    let html = '';
    wishlist.forEach(item => {
        html += `
            <div class="wishlist-item">
                <div class="wishlist-item-image">
                    <img src="${item.image}" alt="${item.name}" onerror="this.src='../assets/images/placeholder.jpg'">
                </div>
                <div class="wishlist-item-details">
                    <div>
                        <div class="wishlist-item-header">
                            <h3 class="wishlist-item-name">${item.name}</h3>
                            <div class="wishlist-item-category">
                                <i class="fas fa-tag"></i> テックギア
                            </div>
                        </div>
                        <div class="wishlist-item-price">¥${item.price.toLocaleString()}</div>
                    </div>
                    <div class="wishlist-item-actions">
                        <button onclick="moveToCart(${item.id}, '${item.name}', ${item.price}, '${item.image}')" 
                                class="btn btn-primary" 
                                style="padding: 12px 30px;">
                            <i class="fas fa-shopping-cart"></i> カートに追加
                        </button>
                        <button onclick="removeFromWishlist(${item.id})" 
                                class="btn btn-secondary" 
                                style="padding: 12px 30px;">
                            <i class="fas fa-trash"></i> 削除
                        </button>
                        <button onclick="viewProduct(${item.id})" 
                                class="btn btn-outline" 
                                style="padding: 12px 30px;">
                            <i class="fas fa-eye"></i> 詳細を見る
                        </button>
                    </div>
                </div>
            </div>
        `;
    });
    
    wishlistContainer.innerHTML = html;
}

// カートに移動
function moveToCart(productId, productName, productPrice, productImage) {
    addToCart(productId, productName, productPrice, productImage);
    // ウィッシュリストからは削除しない（オプション）
    // toggleWishlist(productId, productName, productPrice, productImage);
}

// ウィッシュリストから削除
function removeFromWishlist(productId) {
    if (confirm('この商品をウィッシュリストから削除しますか？')) {
        const wishlist = getWishlist();
        const item = wishlist.find(i => i.id === productId);
        if (item) {
            toggleWishlist(productId, item.name, item.price, item.image);
            displayWishlist();
        }
    }
}

// 商品詳細を表示
function viewProduct(productId) {
    window.location.href = `browse.php?id=${productId}`;
}

// ページ読み込み時にウィッシュリストを表示
document.addEventListener('DOMContentLoaded', function() {
    displayWishlist();
});
</script>

<?php require_once '../includes/footer.php'; ?>
