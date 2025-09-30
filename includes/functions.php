<?php
// ヘルパー関数

// 入力データのサニタイズ
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// アクティブページのチェック
function isActivePage($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return $current_page === $page ? 'active' : '';
}

// 価格のフォーマット
function formatPrice($price) {
    return '¥' . number_format($price);
}

// 画像パスの取得（相対パスとURLを適切に処理）
function getImagePath($imagePath, $addPrefix = false) {
    // URLの場合はそのまま返す
    if (strpos($imagePath, 'http://') === 0 || strpos($imagePath, 'https://') === 0) {
        return $imagePath;
    }
    // ローカルパスの場合、必要に応じてプレフィックスを追加
    return $addPrefix ? '../' . $imagePath : $imagePath;
}

// サンプル商品データ
function getSampleProducts() {
    return [
        [
            'id' => 1,
            'name' => 'MacBook Pro 2020',
            'price' => 150000,
            'condition' => '良好',
            'category' => 'ノートパソコン',
            'image' => 'assets/images/products/laptop1.jpg',
            'description' => 'Apple M1チップ搭載、8GB RAM、256GB SSD',
            'discount' => 10
        ],
        [
            'id' => 2,
            'name' => 'iPhone 13 Pro',
            'price' => 95000,
            'condition' => '優良',
            'category' => 'スマートフォン',
            'image' => 'assets/images/products/phone1.jpg',
            'description' => '128GB、シエラブルー、バッテリー健康度95%',
            'discount' => 0
        ],
        [
            'id' => 3,
            'name' => 'Sony WH-1000XM4',
            'price' => 28000,
            'condition' => '良好',
            'category' => 'ヘッドホン',
            'image' => 'assets/images/products/headphone1.jpg',
            'description' => 'ノイズキャンセリング、ワイヤレス',
            'discount' => 15
        ],
        [
            'id' => 4,
            'name' => 'iPad Air 2022',
            'price' => 65000,
            'condition' => '優良',
            'category' => 'タブレット',
            'image' => 'assets/images/products/tablet1.jpg',
            'description' => '64GB、Wi-Fiモデル、スペースグレイ',
            'discount' => 0
        ],
        [
            'id' => 5,
            'name' => 'Canon EOS R6',
            'price' => 280000,
            'condition' => '良好',
            'category' => 'カメラ',
            'image' => 'assets/images/products/camera1.jpg',
            'description' => 'フルフレームミラーレス、レンズキット付き',
            'discount' => 20
        ],
        [
            'id' => 6,
            'name' => 'Apple Watch Series 7',
            'price' => 42000,
            'condition' => '優良',
            'category' => 'アクセサリー',
            'image' => 'assets/images/products/watch1.jpg',
            'description' => '45mm、GPS + Cellular、ミッドナイト',
            'discount' => 0
        ],
        [
            'id' => 7,
            'name' => 'Dell XPS 15',
            'price' => 135000,
            'condition' => '良好',
            'category' => 'ノートパソコン',
            'image' => 'assets/images/products/laptop2.jpg',
            'description' => 'Intel i7、16GB RAM、512GB SSD、4K ディスプレイ',
            'discount' => 0
        ],
        [
            'id' => 8,
            'name' => 'Samsung Galaxy S22',
            'price' => 78000,
            'condition' => '優良',
            'category' => 'スマートフォン',
            'image' => 'assets/images/products/phone2.jpg',
            'description' => '256GB、ファントムブラック、完全動作',
            'discount' => 12
        ],
        [
            'id' => 9,
            'name' => 'ASUS ROG Zephyrus G14',
            'price' => 185000,
            'condition' => '良好',
            'category' => 'ノートパソコン',
            'image' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=800&q=80',
            'description' => 'AMD Ryzen 9、RTX 3060、16GB RAM、1TB SSD',
            'discount' => 8
        ],
        [
            'id' => 10,
            'name' => 'AirPods Pro 第2世代',
            'price' => 32000,
            'condition' => '優良',
            'category' => 'ヘッドホン',
            'image' => 'https://images.unsplash.com/photo-1606841837239-c5a1a4a07af7?w=800&q=80',
            'description' => 'アクティブノイズキャンセリング、MagSafe充電ケース',
            'discount' => 0
        ],
        [
            'id' => 11,
            'name' => 'Microsoft Surface Pro 9',
            'price' => 125000,
            'condition' => '良好',
            'category' => 'タブレット',
            'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&q=80',
            'description' => 'Intel i5、8GB RAM、256GB SSD、タイプカバー付き',
            'discount' => 10
        ],
        [
            'id' => 12,
            'name' => 'Sony Alpha A7 III',
            'price' => 195000,
            'condition' => '優良',
            'category' => 'カメラ',
            'image' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=800&q=80',
            'description' => 'フルフレームミラーレス、24.2MP、4K動画撮影',
            'discount' => 15
        ],
        [
            'id' => 13,
            'name' => 'Garmin Fenix 7',
            'price' => 89000,
            'condition' => '良好',
            'category' => 'アクセサリー',
            'image' => 'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=800&q=80',
            'description' => 'マルチスポーツGPSウォッチ、ソーラー充電対応',
            'discount' => 0
        ],
        [
            'id' => 14,
            'name' => 'Google Pixel 7 Pro',
            'price' => 82000,
            'condition' => '優良',
            'category' => 'スマートフォン',
            'image' => 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=800&q=80',
            'description' => '128GB、オブシディアン、Google Tensor G2チップ',
            'discount' => 5
        ]
    ];
}

// 特集商品を取得
function getFeaturedProducts($limit = 6) {
    $products = getSampleProducts();
    return array_slice($products, 0, $limit);
}

// セール商品を取得
function getDealProducts() {
    $products = getSampleProducts();
    return array_filter($products, function($product) {
        return $product['discount'] > 0;
    });
}

// カテゴリー別商品を取得
function getProductsByCategory($category) {
    $products = getSampleProducts();
    if ($category === 'all') {
        return $products;
    }
    return array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}
?>
