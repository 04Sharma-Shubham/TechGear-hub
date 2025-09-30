# 画像アセット

このディレクトリには、TechGear Hubで使用される画像ファイルが含まれています。

## 必要な画像

### ロゴとファビコン

1. **logo.png** (200x200px)
   - TechGear Hubのメインロゴ
   - マイクロチップアイコンをベースにしたデザイン
   - カラー: ネオンブルー (#00d4ff) からネオングリーン (#00ff88) のグラデーション

2. **favicon.ico** (32x32px, 16x16px)
   - ブラウザタブに表示されるアイコン
   - logo.pngから生成

### 商品画像 (products/)

以下のカテゴリーの商品画像が必要です：

#### ノートパソコン
- `laptop1.jpg` - MacBook Pro 2020
- `laptop2.jpg` - Dell XPS 15

#### スマートフォン
- `phone1.jpg` - iPhone 13 Pro
- `phone2.jpg` - Samsung Galaxy S22

#### ヘッドホン
- `headphone1.jpg` - Sony WH-1000XM4

#### タブレット
- `tablet1.jpg` - iPad Air 2022

#### カメラ
- `camera1.jpg` - Canon EOS R6

#### アクセサリー
- `watch1.jpg` - Apple Watch Series 7

### プレースホルダー画像

**placeholder.jpg** (600x600px)
- 商品画像が読み込めない場合の代替画像
- グレーの背景に「No Image」テキスト

## 画像の作成方法

### オプション1: オンラインツールを使用

1. **Canva** (https://www.canva.com/)
   - テンプレートから作成
   - サイズ調整とエクスポート

2. **Figma** (https://www.figma.com/)
   - プロフェッショナルなデザイン
   - SVGまたはPNGでエクスポート

### オプション2: ストックフォトを使用

1. **Unsplash** (https://unsplash.com/)
   - 無料の高品質画像
   - 商用利用可能

2. **Pexels** (https://www.pexels.com/)
   - 無料のストックフォト
   - テクノロジー製品の画像が豊富

### オプション3: AIツールを使用

1. **DALL-E** / **Midjourney**
   - AI生成画像
   - プロンプト例: "modern tech gadget product photo, clean background, professional lighting"

## ファビコン生成

### オンラインツール

1. **Favicon.io** (https://favicon.io/)
   - PNG/SVGからファビコン生成
   - 複数サイズを一括生成

2. **RealFaviconGenerator** (https://realfavicongenerator.net/)
   - 全デバイス対応のファビコン生成
   - プレビュー機能付き

### 手動生成（ImageMagick）

```bash
# PNGからICOを生成
convert logo.png -resize 32x32 favicon-32.png
convert logo.png -resize 16x16 favicon-16.png
convert favicon-32.png favicon-16.png favicon.ico
```

## 画像最適化

### オンラインツール

1. **TinyPNG** (https://tinypng.com/)
   - PNG/JPEG圧縮
   - 品質を保ちながらファイルサイズ削減

2. **Squoosh** (https://squoosh.app/)
   - Googleの画像最適化ツール
   - 複数フォーマット対応

### コマンドライン（ImageMagick）

```bash
# JPEG最適化
convert input.jpg -quality 85 -strip output.jpg

# PNG最適化
convert input.png -strip output.png
```

## 推奨仕様

### ロゴ
- フォーマット: PNG (透過背景)
- サイズ: 200x200px
- 解像度: 72 DPI
- カラーモード: RGB

### 商品画像
- フォーマット: JPEG
- サイズ: 800x800px (最小)
- 解像度: 72 DPI
- 品質: 85%
- 背景: 白または透明

### ファビコン
- フォーマット: ICO
- サイズ: 32x32px, 16x16px
- カラーモード: RGB

## 簡易ロゴ作成ガイド

### SVGコード（logo.svg）

```svg
<svg width="200" height="200" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#00d4ff;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#00ff88;stop-opacity:1" />
    </linearGradient>
  </defs>
  <circle cx="100" cy="100" r="95" fill="#0a0e27" stroke="url(#grad1)" stroke-width="3"/>
  <rect x="60" y="60" width="80" height="80" rx="8" fill="none" stroke="url(#grad1)" stroke-width="4"/>
  <!-- マイクロチップのピン -->
  <line x1="50" y1="75" x2="60" y2="75" stroke="url(#grad1)" stroke-width="3"/>
  <line x1="50" y1="90" x2="60" y2="90" stroke="url(#grad1)" stroke-width="3"/>
  <line x1="50" y1="105" x2="60" y2="105" stroke="url(#grad1)" stroke-width="3"/>
  <line x1="50" y1="120" x2="60" y2="120" stroke="url(#grad1)" stroke-width="3"/>
  <!-- 他のピンも同様に追加 -->
  <circle cx="100" cy="100" r="8" fill="url(#grad1)"/>
</svg>
```

このSVGをPNGに変換してロゴとして使用できます。

## プレースホルダー画像の作成

### HTMLキャンバスで生成

```html
<!DOCTYPE html>
<html>
<body>
<canvas id="canvas" width="600" height="600"></canvas>
<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

// 背景
ctx.fillStyle = '#1a2142';
ctx.fillRect(0, 0, 600, 600);

// テキスト
ctx.fillStyle = '#6b7a8f';
ctx.font = 'bold 48px Arial';
ctx.textAlign = 'center';
ctx.textBaseline = 'middle';
ctx.fillText('No Image', 300, 300);

// アイコン
ctx.font = '72px Arial';
ctx.fillText('📷', 300, 220);

// ダウンロード
const link = document.createElement('a');
link.download = 'placeholder.jpg';
link.href = canvas.toDataURL('image/jpeg', 0.9);
link.click();
</script>
</body>
</html>
```

## 注意事項

- すべての画像は著作権フリーまたは適切なライセンスを持つものを使用してください
- 商用利用の場合は、ライセンス条件を確認してください
- 画像サイズは適切に最適化してページ読み込み速度を向上させてください
- Alt属性を必ず設定してアクセシビリティを確保してください

## サポート

画像に関する質問や問題がある場合は、開発チームにお問い合わせください。
