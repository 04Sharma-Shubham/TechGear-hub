<?php
$page_title = 'ホーム';
require_once 'includes/header.php';
$featured_products = getFeaturedProducts(12);
?>

<!-- ヒーローセクション with Background Slider -->
<section class="hero">
    <!-- Background Slider -->
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(10, 14, 39, 0.85), rgba(10, 14, 39, 0.85)), url('https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(10, 14, 39, 0.85), rgba(10, 14, 39, 0.85)), url('https://images.unsplash.com/photo-1556656793-08538906a9f8?w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(10, 14, 39, 0.85), rgba(10, 14, 39, 0.85)), url('https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(10, 14, 39, 0.85), rgba(10, 14, 39, 0.85)), url('https://images.unsplash.com/photo-1491933382434-500287f9b54b?w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(rgba(10, 14, 39, 0.85), rgba(10, 14, 39, 0.85)), url('https://images.unsplash.com/photo-1484788984921-03950022c9ef?w=1920&q=80');"></div>
    </div>
    
    <!-- Slider Navigation Dots -->
    <div class="slider-dots">
        <span class="dot active" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <h1>信頼できるテックギアの売買</h1>
            <p>高品質な中古テクノロジー製品を手頃な価格で購入・販売できるプラットフォーム</p>
            <div class="hero-buttons">
                <a href="pages/browse.php" class="btn btn-primary">
                    <i class="fas fa-search"></i> 商品を探す
                </a>
                <a href="pages/sell-gear.php" class="btn btn-outline">
                    <i class="fas fa-plus-circle"></i> 出品する
                </a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <!-- 特集商品セクション -->
    <section class="featured-section">
        <div class="section-title">
            <h2>特集商品</h2>
            <p>厳選された高品質な中古テックギア</p>
        </div>

        <div class="product-grid">
            <?php foreach ($featured_products as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $product['image']; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             onerror="this.src='assets/images/placeholder.jpg'">
                        <?php if ($product['discount'] > 0): ?>
                            <span class="product-badge discount"><?php echo $product['discount']; ?>% OFF</span>
                        <?php else: ?>
                            <span class="product-badge">新着</span>
                        <?php endif; ?>
                        <button class="wishlist-btn" 
                                data-product-id="<?php echo $product['id']; ?>"
                                onclick="toggleWishlist(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '<?php echo $product['image']; ?>')">
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
                                    onclick="addToCart(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name']); ?>', <?php echo $product['price']; ?>, '<?php echo $product['image']; ?>')">
                                <i class="fas fa-shopping-cart"></i> カート
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-40">
            <a href="pages/browse.php" class="btn btn-primary">
                すべての商品を見る <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- カテゴリーセクション -->
    <section class="categories-section mt-40">
        <div class="section-title">
            <h2>カテゴリー別に探す</h2>
            <p>お探しの製品カテゴリーを選択してください</p>
        </div>

        <div class="category-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 40px;">
            <a href="pages/browse.php?category=ノートパソコン" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-laptop" style="font-size: 48px; color: var(--neon-blue); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">ノートパソコン</h3>
                <p style="color: var(--text-muted); font-size: 14px;">MacBook, Dell, HP など</p>
            </a>

            <a href="pages/browse.php?category=スマートフォン" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-mobile-alt" style="font-size: 48px; color: var(--neon-green); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">スマートフォン</h3>
                <p style="color: var(--text-muted); font-size: 14px;">iPhone, Samsung, Google など</p>
            </a>

            <a href="pages/browse.php?category=ヘッドホン" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-headphones" style="font-size: 48px; color: var(--neon-purple); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">ヘッドホン</h3>
                <p style="color: var(--text-muted); font-size: 14px;">Sony, Bose, AirPods など</p>
            </a>

            <a href="pages/browse.php?category=カメラ" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-camera" style="font-size: 48px; color: var(--neon-blue); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">カメラ</h3>
                <p style="color: var(--text-muted); font-size: 14px;">Canon, Nikon, Sony など</p>
            </a>

            <a href="pages/browse.php?category=アクセサリー" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-watch" style="font-size: 48px; color: var(--neon-green); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">アクセサリー</h3>
                <p style="color: var(--text-muted); font-size: 14px;">スマートウォッチ、充電器など</p>
            </a>

            <a href="pages/browse.php" class="category-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; text-align: center; transition: var(--transition); border: 1px solid var(--border-color); display: block;">
                <i class="fas fa-th" style="font-size: 48px; color: var(--neon-purple); margin-bottom: 15px;"></i>
                <h3 style="color: var(--text-primary); margin-bottom: 5px;">すべて</h3>
                <p style="color: var(--text-muted); font-size: 14px;">全カテゴリーを表示</p>
            </a>
        </div>
    </section>

    <!-- 信頼性セクション -->
    <section class="trust-section mt-40" style="background: var(--card-bg); padding: 60px 40px; border-radius: 20px; border: 1px solid var(--border-color); margin-bottom: 40px;">
        <div class="section-title">
            <h2>なぜTechGear Hubを選ぶのか</h2>
            <p>安心・安全な取引をサポートします</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 40px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 10px;">安全な取引</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">すべての取引は暗号化され、買い手保護プログラムで保護されています。</p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-check-double"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 10px;">品質保証</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">すべての商品は出品前に品質チェックを受けています。</p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 10px;">迅速な配送</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">全国どこでも迅速かつ安全に配送いたします。</p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 36px;">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 style="color: var(--text-primary); margin-bottom: 10px;">24/7サポート</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">いつでもお問い合わせいただけるカスタマーサポート。</p>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta-section" style="background: linear-gradient(135deg, var(--secondary-bg), var(--primary-bg)); padding: 60px 40px; border-radius: 20px; text-align: center; border: 1px solid var(--border-color); margin-bottom: 40px;">
        <h2 style="font-size: 36px; margin-bottom: 20px; color: var(--neon-blue);">今すぐ始めましょう</h2>
        <p style="font-size: 18px; color: var(--text-secondary); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
            不要になったテックギアを売却するか、お得な価格で高品質な製品を購入しましょう。
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="pages/sell-gear.php" class="btn btn-primary" style="padding: 15px 40px; font-size: 18px;">
                <i class="fas fa-plus-circle"></i> 商品を出品
            </a>
            <a href="pages/browse.php" class="btn btn-outline" style="padding: 15px 40px; font-size: 18px;">
                <i class="fas fa-search"></i> 商品を探す
            </a>
        </div>
    </section>
</div>

<style>
/* Hero Slider Styles */
.hero {
    position: relative;
    overflow: hidden;
}

.hero-slider {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.hero-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
}

.hero-slide.active {
    opacity: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.slider-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    display: flex;
    gap: 12px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.dot:hover {
    background: rgba(0, 212, 255, 0.5);
    transform: scale(1.2);
}

.dot.active {
    background: var(--neon-blue);
    border-color: rgba(255, 255, 255, 0.5);
    box-shadow: 0 0 10px var(--neon-blue);
}

.category-card:hover {
    transform: translateY(-5px);
    border-color: var(--neon-blue);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.2);
}

.category-card:hover i {
    transform: scale(1.1);
}

.category-card i {
    transition: var(--transition);
}

@media (max-width: 768px) {
    .slider-dots {
        bottom: 20px;
    }
    
    .dot {
        width: 10px;
        height: 10px;
    }
}
</style>

<script>
// Hero Background Slider
let currentSlideIndex = 0;
let slideInterval;

function showSlide(index) {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dots .dot');
    
    // Remove active class from all slides and dots
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    // Wrap around if index is out of bounds
    if (index >= slides.length) {
        currentSlideIndex = 0;
    } else if (index < 0) {
        currentSlideIndex = slides.length - 1;
    } else {
        currentSlideIndex = index;
    }
    
    // Add active class to current slide and dot
    slides[currentSlideIndex].classList.add('active');
    dots[currentSlideIndex].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlideIndex + 1);
}

function currentSlide(index) {
    showSlide(index);
    // Reset the interval when manually changing slides
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
}

// Auto-advance slides every 5 seconds
slideInterval = setInterval(nextSlide, 5000);

// Pause slider on hover
document.querySelector('.hero').addEventListener('mouseenter', function() {
    clearInterval(slideInterval);
});

document.querySelector('.hero').addEventListener('mouseleave', function() {
    slideInterval = setInterval(nextSlide, 5000);
});
</script>

<?php require_once 'includes/footer.php'; ?>
