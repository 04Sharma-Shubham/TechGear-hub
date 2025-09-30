<?php
// セッション開始
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// サイト設定
define('SITE_NAME', 'TechGear Hub');
define('SITE_URL', 'http://localhost/TechGear-Hub');

// デフォルトのタイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

// エラー表示（開発環境用）
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ユーザーがログインしているかチェック
function isLoggedIn() {
    return isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
}

// ユーザー名を取得
function getUsername() {
    return isset($_SESSION['username']) ? $_SESSION['username'] : '';
}

// カート内のアイテム数を取得
function getCartCount() {
    return isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
}

// ウィッシュリスト内のアイテム数を取得
function getWishlistCount() {
    return isset($_SESSION['wishlist']) ? count($_SESSION['wishlist']) : 0;
}
?>
