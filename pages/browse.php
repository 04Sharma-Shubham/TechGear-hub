<?php
$page_title = '商品を探す';
require_once '../includes/header.php';

// カテゴリーフィルター
$selected_category = isset($_GET['category']) ? $_GET['category'] : 'all';
$products = $selected_category === 'all' ? getSampleProducts() : getProductsByCategory($selected_category);
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">商品を探す</h1>
        <p style="color: var(--text-secondary); font-size: 18px;">高品質な中古テックギアを見つけましょう</p>
    </div>

    <div class="browse-layout" style="display: grid; grid-template-columns: 280px 1fr; gap: 30px;">
        <!-- サイドバーフィルター -->
        <aside class="filters-sidebar" style="background: var(--card-bg); padding: 25px; border-radius: 15px; height: fit-content; border: 1px solid var(--border-color); position: sticky; top: 100px;">
            <h3 style="color: var(--neon-green); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-filter"></i> フィルター
            </h3>

            <!-- カテゴリーフィルター -->
            <div class="filter-group" style="margin-bottom: 30px;">
                <h4 style="color: var(--text-primary); margin-bottom: 15px; font-size: 16px;">カテゴリー</h4>
                <div class="filter-options">
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="all" <?php echo $selected_category === 'all' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=all'">
                        <span style="color: var(--text-secondary);">すべて</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="ノートパソコン" <?php echo $selected_category === 'ノートパソコン' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=ノートパソコン'">
                        <span style="color: var(--text-secondary);">ノートパソコン</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="スマートフォン" <?php echo $selected_category === 'スマートフォン' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=スマートフォン'">
                        <span style="color: var(--text-secondary);">スマートフォン</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="ヘッドホン" <?php echo $selected_category === 'ヘッドホン' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=ヘッドホン'">
                        <span style="color: var(--text-secondary);">ヘッドホン</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="カメラ" <?php echo $selected_category === 'カメラ' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=カメラ'">
                        <span style="color: var(--text-secondary);">カメラ</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="radio" name="category" value="アクセサリー" <?php echo $selected_category === 'アクセサリー' ? 'checked' : ''; ?> onchange="window.location.href='browse.php?category=アクセサリー'">
                        <span style="color: var(--text-secondary);">アクセサリー</span>
                    </label>
                </div>
            </div>

            <!-- 価格フィルター -->
            <div class="filter-group" style="margin-bottom: 30px;">
                <h4 style="color: var(--text-primary); margin-bottom: 15px; font-size: 16px;">価格範囲</h4>
                <div style="padding: 10px 0;">
                    <input type="range" id="priceRange" min="0" max="500000" value="500000" step="10000" style="width: 100%; accent-color: var(--neon-blue);">
                    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                        <span style="color: var(--text-muted); font-size: 14px;">¥0</span>
                        <span id="priceValue" style="color: var(--neon-blue); font-weight: 600;">¥500,000</span>
                    </div>
                </div>
            </div>

            <!-- 状態フィルター -->
            <div class="filter-group" style="margin-bottom: 30px;">
                <h4 style="color: var(--text-primary); margin-bottom: 15px; font-size: 16px;">商品状態</h4>
                <div class="filter-options">
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox" checked>
                        <span style="color: var(--text-secondary);">優良</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox" checked>
                        <span style="color: var(--text-secondary);">良好</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">可</span>
                    </label>
                </div>
            </div>

            <!-- ブランドフィルター -->
            <div class="filter-group">
                <h4 style="color: var(--text-primary); margin-bottom: 15px; font-size: 16px;">ブランド</h4>
                <div class="filter-options">
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">Apple</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">Samsung</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">Sony</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">Dell</span>
                    </label>
                    <label class="filter-option" style="display: flex; align-items: center; gap: 10px; padding: 10px; cursor: pointer; border-radius: 8px; transition: var(--transition); margin-bottom: 8px;">
                        <input type="checkbox">
                        <span style="color: var(--text-secondary);">Canon</span>
                    </label>
                </div>
            </div>

            <button class="btn btn-secondary" style="width: 100%; margin-top: 20px;" onclick="location.reload()">
                <i class="fas fa-redo"></i> リセット
            </button>
        </aside>

        <!-- 商品グリッド -->
        <div class="products-content">
            <!-- ツールバー -->
            <div class="products-toolbar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; padding: 20px; background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color); flex-wrap: wrap; gap: 15px;">
                <div style="color: var(--text-secondary);">
                    <strong style="color: var(--neon-blue);"><?php echo count($products); ?></strong> 件の商品が見つかりました
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <label style="color: var(--text-secondary);">並び替え:</label>
                    <select id="sortSelect" style="padding: 8px 15px; background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: 8px; color: var(--text-primary); cursor: pointer;">
                        <option value="newest">新着順</option>
                        <option value="price-low">価格が安い順</option>
                        <option value="price-high">価格が高い順</option>
                        <option value="popular">人気順</option>
                    </select>
                </div>
            </div>

            <!-- 商品グリッド -->
            <?php if (count($products) > 0): ?>
                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../<?php echo $product['image']; ?>" 
                                     alt="<?php echo htmlspecialchars($product['name']); ?>"
                                     onerror="this.src='../assets/images/placeholder.jpg'">
                                <?php if ($product['discount'] > 0): ?>
                                    <span class="product-badge discount"><?php echo $product['discount']; ?>% OFF</span>
                                <?php else: ?>
                                    <span class="product-badge">新着</span>
                                <?php endif; ?>
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
                                </div>
                                <div class="product-footer">
                                    <?php if ($product['discount'] > 0): ?>
                                        <div class="product-price has-discount">
                                            <span class="original-price"><?php echo formatPrice($product['price']); ?></span>
                                            <span><?php echo formatPrice($product['price'] * (1 - $product['discount'] / 100)); ?></span>
                                        </div>
                                    <?php else: ?>
                                        <div class="product-price"><?php echo formatPrice($product['price']); ?></div>
                                    <?php endif; ?>
                                    <button class="add-to-cart-btn" 
                                            onclick="addToCart(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '../<?php echo $product['image']; ?>')">
                                        <i class="fas fa-shopping-cart"></i> カート
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div style="text-align: center; padding: 60px 20px; background: var(--card-bg); border-radius: 15px; border: 1px solid var(--border-color);">
                    <i class="fas fa-search" style="font-size: 64px; color: var(--text-muted); margin-bottom: 20px;"></i>
                    <h3 style="color: var(--text-primary); margin-bottom: 10px;">商品が見つかりませんでした</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">別のカテゴリーまたはフィルターをお試しください</p>
                    <a href="browse.php" class="btn btn-primary">すべての商品を表示</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
.filter-option:hover {
    background: var(--hover-bg);
}

.filter-option input[type="checkbox"],
.filter-option input[type="radio"] {
    accent-color: var(--neon-blue);
    cursor: pointer;
}

@media (max-width: 968px) {
    .browse-layout {
        grid-template-columns: 1fr !important;
    }
    
    .filters-sidebar {
        position: static !important;
    }
}
</style>

<?php require_once '../includes/footer.php'; ?>
