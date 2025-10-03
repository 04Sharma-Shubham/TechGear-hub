<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="信頼できる中古テックギアの売買プラットフォーム">
    <meta name="keywords" content="中古, テック, ガジェット, ノートパソコン, スマートフォン, カメラ">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>TechGear Hub</title>
    
    <!-- Favicon - Multiple formats for better compatibility -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2300d4ff'/%3E%3Cstop offset='100%25' style='stop-color:%2300ff88'/%3E%3C/linearGradient%3E%3C/defs%3E%3Ccircle cx='50' cy='50' r='48' fill='%230a0e27' stroke='url(%23g)' stroke-width='2'/%3E%3Crect x='30' y='30' width='40' height='40' rx='4' fill='none' stroke='url(%23g)' stroke-width='3'/%3E%3Cline x1='25' y1='37' x2='30' y2='37' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='25' y1='45' x2='30' y2='45' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='25' y1='53' x2='30' y2='53' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='25' y1='61' x2='30' y2='61' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='70' y1='37' x2='75' y2='37' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='70' y1='45' x2='75' y2='45' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='70' y1='53' x2='75' y2='53' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='70' y1='61' x2='75' y2='61' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='37' y1='25' x2='37' y2='30' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='45' y1='25' x2='45' y2='30' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='53' y1='25' x2='53' y2='30' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='61' y1='25' x2='61' y2='30' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='37' y1='70' x2='37' y2='75' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='45' y1='70' x2='45' y2='75' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='53' y1='70' x2='53' y2='75' stroke='url(%23g)' stroke-width='2'/%3E%3Cline x1='61' y1='70' x2='61' y2='75' stroke='url(%23g)' stroke-width='2'/%3E%3Ccircle cx='50' cy='50' r='6' fill='url(%23g)'/%3E%3C/svg%3E">
    <!-- <link rel="icon" type="image/png" href="assets/images/favicon.png"> -->
     <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68df7606ac3c3519538e1921/1j6kea2p3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- ナビゲーションバー -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <!-- ロゴ -->
                <div class="logo">
                    <a href="<?php echo SITE_URL; ?>/index.php">
                        <i class="fas fa-microchip"></i>
                        <span>TechGear Hub</span>
                    </a>
                </div>

                <!-- ハンバーガーメニュー（モバイル） -->
                <button class="hamburger" id="hamburger" aria-label="メニュー">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- ナビゲーションリンク -->
                <div class="nav-links" id="navLinks">
                    <a href="<?php echo SITE_URL; ?>/index.php" class="<?php echo isActivePage('index.php'); ?>">
                        ホーム
                    </a>
                    
                    <!-- ブラウズドロップダウン -->
                    <div class="dropdown">
                        <a href="<?php echo SITE_URL; ?>/pages/browse.php" class="<?php echo isActivePage('browse.php'); ?>">
                            商品を探す <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ノートパソコン">
                                <i class="fas fa-laptop"></i> ノートパソコン
                            </a>
                            <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=スマートフォン">
                                <i class="fas fa-mobile-alt"></i> スマートフォン
                            </a>
                            <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ヘッドホン">
                                <i class="fas fa-headphones"></i> ヘッドホン
                            </a>
                            <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=アクセサリー">
                                <i class="fas fa-watch"></i> アクセサリー
                            </a>
                            <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=カメラ">
                                <i class="fas fa-camera"></i> カメラ
                            </a>
                        </div>
                    </div>

                    <a href="<?php echo SITE_URL; ?>/pages/sell-gear.php" class="<?php echo isActivePage('sell-gear.php'); ?>">
                        出品する
                    </a>
                    <a href="<?php echo SITE_URL; ?>/pages/deals.php" class="<?php echo isActivePage('deals.php'); ?>">
                        お得情報
                    </a>
                    <a href="<?php echo SITE_URL; ?>/pages/about.php" class="<?php echo isActivePage('about.php'); ?>">
                        会社概要
                    </a>
                    <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="<?php echo isActivePage('contact.php'); ?>">
                        お問い合わせ
                    </a>
                </div>

                <!-- 検索バー -->
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="商品を検索..." autocomplete="off">
                    <button type="button" id="searchBtn">
                        <i class="fas fa-search"></i>
                    </button>
                    <div class="search-results" id="searchResults"></div>
                </div>

                <!-- 右側のアイコン -->
                <div class="nav-icons">
                    <!-- カートアイコン -->
                    <a href="<?php echo SITE_URL; ?>/pages/cart.php" class="icon-link cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge" id="cartBadge"><?php echo getCartCount(); ?></span>
                    </a>

                    <!-- ウィッシュリストアイコン -->
                    <a href="<?php echo SITE_URL; ?>/pages/wishlist.php" class="icon-link wishlist-icon">
                        <i class="fas fa-heart"></i>
                        <span class="badge" id="wishlistBadge"><?php echo getWishlistCount(); ?></span>
                    </a>

                    <?php if (isLoggedIn()): ?>
                        <!-- ログイン済みユーザー -->
                        <div class="dropdown user-dropdown">
                            <button class="user-btn">
                                <i class="fas fa-user-circle"></i>
                                <span><?php echo getUsername(); ?></span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="<?php echo SITE_URL; ?>/pages/dashboard.php">
                                    <i class="fas fa-tachometer-alt"></i> ダッシュボード
                                </a>
                                <a href="<?php echo SITE_URL; ?>/pages/dashboard.php?tab=listings">
                                    <i class="fas fa-list"></i> 出品商品
                                </a>
                                <a href="<?php echo SITE_URL; ?>/pages/wishlist.php">
                                    <i class="fas fa-heart"></i> ウィッシュリスト
                                </a>
                                <a href="<?php echo SITE_URL; ?>/pages/dashboard.php?tab=orders">
                                    <i class="fas fa-box"></i> 注文履歴
                                </a>
                                <hr>
                                <a href="<?php echo SITE_URL; ?>/auth/logout.php">
                                    <i class="fas fa-sign-out-alt"></i> ログアウト
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- 未ログインユーザー -->
                        <a href="<?php echo SITE_URL; ?>/auth/login.php" class="btn btn-primary">
                            ログイン / 登録
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- モバイルサイドドロワー -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-content">
            <div class="drawer-header">
                <h3>メニュー</h3>
                <button class="close-drawer" id="closeDrawer">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="drawer-links">
                <a href="<?php echo SITE_URL; ?>/index.php">
                    <i class="fas fa-home"></i> ホーム
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php">
                    <i class="fas fa-search"></i> 商品を探す
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ノートパソコン">
                    <i class="fas fa-laptop"></i> ノートパソコン
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=スマートフォン">
                    <i class="fas fa-mobile-alt"></i> スマートフォン
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ヘッドホン">
                    <i class="fas fa-headphones"></i> ヘッドホン
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=アクセサリー">
                    <i class="fas fa-watch"></i> アクセサリー
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/browse.php?category=カメラ">
                    <i class="fas fa-camera"></i> カメラ
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/sell-gear.php">
                    <i class="fas fa-plus-circle"></i> 出品する
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/deals.php">
                    <i class="fas fa-tags"></i> お得情報
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/about.php">
                    <i class="fas fa-info-circle"></i> 会社概要
                </a>
                <a href="<?php echo SITE_URL; ?>/pages/contact.php">
                    <i class="fas fa-envelope"></i> お問い合わせ
                </a>
                <?php if (isLoggedIn()): ?>
                    <hr>
                    <a href="<?php echo SITE_URL; ?>/pages/dashboard.php">
                        <i class="fas fa-tachometer-alt"></i> ダッシュボード
                    </a>
                    <a href="<?php echo SITE_URL; ?>/auth/logout.php">
                        <i class="fas fa-sign-out-alt"></i> ログアウト
                    </a>
                <?php else: ?>
                    <hr>
                    <a href="<?php echo SITE_URL; ?>/auth/login.php">
                        <i class="fas fa-sign-in-alt"></i> ログイン
                    </a>
                    <a href="<?php echo SITE_URL; ?>/auth/register.php">
                        <i class="fas fa-user-plus"></i> 新規登録
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="drawer-overlay" id="drawerOverlay"></div>

    <!-- メインコンテンツ -->
    <main class="main-content">
