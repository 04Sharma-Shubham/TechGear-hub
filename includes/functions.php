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
