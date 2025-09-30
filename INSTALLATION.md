# TechGear Hub - インストールガイド

このガイドでは、TechGear Hubをローカル環境にセットアップする手順を説明します。

## 📋 目次

1. [必要要件](#必要要件)
2. [インストール手順](#インストール手順)
3. [画像の準備](#画像の準備)
4. [設定](#設定)
5. [動作確認](#動作確認)
6. [トラブルシューティング](#トラブルシューティング)

## 🔧 必要要件

### ソフトウェア要件

- **PHP**: 7.4以上（推奨: 8.0以上）
- **Webサーバー**: Apache 2.4以上 または Nginx 1.18以上
- **ブラウザ**: Chrome, Firefox, Safari, Edge（最新版）

### 推奨環境

- **XAMPP** 8.0以上（Windows/Mac/Linux）
- **MAMP** 6.0以上（Mac）
- **WAMP** 3.2以上（Windows）

## 🚀 インストール手順

### オプション1: XAMPPを使用（推奨）

#### 1. XAMPPのインストール

**Windows:**
```
1. https://www.apachefriends.org/ からXAMPPをダウンロード
2. インストーラーを実行
3. Apache と PHP を選択してインストール
4. インストール完了後、XAMPP Control Panelを起動
```

**Mac:**
```
1. https://www.apachefriends.org/ からXAMPP for macOSをダウンロード
2. DMGファイルをマウントしてインストール
3. アプリケーションフォルダに移動
4. XAMPP Control Panelを起動
```

**Linux:**
```bash
# ダウンロード
wget https://www.apachefriends.org/xampp-files/8.2.4/xampp-linux-x64-8.2.4-0-installer.run

# 実行権限を付与
chmod +x xampp-linux-x64-8.2.4-0-installer.run

# インストール
sudo ./xampp-linux-x64-8.2.4-0-installer.run
```

#### 2. プロジェクトの配置

**Windows:**
```bash
# プロジェクトをhtdocsにコピー
xcopy /E /I TechGear-Hub C:\xampp\htdocs\TechGear-Hub
```

**Mac/Linux:**
```bash
# プロジェクトをhtdocsにコピー
cp -r TechGear-Hub /Applications/XAMPP/htdocs/TechGear-Hub
# または
sudo cp -r TechGear-Hub /opt/lampp/htdocs/TechGear-Hub
```

#### 3. Apacheの起動

1. XAMPP Control Panelを開く
2. Apache の「Start」ボタンをクリック
3. 緑色になれば起動成功

### オプション2: 組み込みPHPサーバーを使用

```bash
# プロジェクトディレクトリに移動
cd TechGear-Hub

# PHPサーバーを起動
php -S localhost:8000

# ブラウザで開く
# http://localhost:8000
```

### オプション3: Docker を使用

```bash
# Dockerfileを作成（プロジェクトルートに）
cat > Dockerfile << 'EOF'
FROM php:8.1-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80
EOF

# イメージをビルド
docker build -t techgearhub .

# コンテナを起動
docker run -d -p 8080:80 --name techgearhub techgearhub

# ブラウザで開く
# http://localhost:8080
```

## 🖼️ 画像の準備

### 自動生成ツールを使用

1. ブラウザで以下のURLを開く：
   ```
   http://localhost/TechGear-Hub/assets/images/generate-images.html
   ```

2. 「すべて生成してダウンロード」ボタンをクリック

3. ダウンロードした画像を `assets/images/` に配置：
   - `logo.png`
   - `favicon.png`
   - `placeholder.jpg`

### 商品画像の準備

#### 無料ストックフォトサイトから取得

**Unsplash:**
```
1. https://unsplash.com/ にアクセス
2. 検索: "macbook", "iphone", "headphones" など
3. 高解像度画像をダウンロード
4. assets/images/products/ に配置
```

**Pexels:**
```
1. https://www.pexels.com/ にアクセス
2. 検索: "laptop", "smartphone", "camera" など
3. 無料ダウンロード
4. assets/images/products/ に配置
```

#### 必要な商品画像リスト

`assets/images/products/` ディレクトリに以下の画像を配置：

```
products/
├── laptop1.jpg      (MacBook Pro)
├── laptop2.jpg      (Dell XPS)
├── phone1.jpg       (iPhone)
├── phone2.jpg       (Samsung Galaxy)
├── headphone1.jpg   (Sony WH-1000XM4)
├── tablet1.jpg      (iPad Air)
├── camera1.jpg      (Canon EOS)
└── watch1.jpg       (Apple Watch)
```

**推奨サイズ:** 800x800px 以上

### ファビコンの設定

#### オプション1: PNGをICOに変換

オンラインツールを使用：
```
1. https://favicon.io/favicon-converter/ にアクセス
2. favicon.png をアップロード
3. 生成されたfavicon.icoをダウンロード
4. assets/images/ に配置
```

#### オプション2: 複数サイズのファビコン生成

```
1. https://realfavicongenerator.net/ にアクセス
2. logo.png をアップロード
3. 設定を調整
4. 生成されたファイルをダウンロード
5. assets/images/ に配置
```

## ⚙️ 設定

### 1. ベースURLの設定

`includes/config.php` を開いて、サイトURLを環境に合わせて変更：

```php
// ローカル環境（XAMPP）
define('SITE_URL', 'http://localhost/TechGear-Hub');

// ローカル環境（組み込みサーバー）
define('SITE_URL', 'http://localhost:8000');

// 本番環境
define('SITE_URL', 'https://yourdomain.com');
```

### 2. タイムゾーンの設定

`includes/config.php` でタイムゾーンを確認：

```php
date_default_timezone_set('Asia/Tokyo');
```

### 3. エラー表示の設定

開発環境では有効、本番環境では無効にする：

```php
// 開発環境
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 本番環境
error_reporting(0);
ini_set('display_errors', 0);
```

## ✅ 動作確認

### 1. ホームページにアクセス

```
http://localhost/TechGear-Hub/
```

以下が表示されることを確認：
- ✅ ナビゲーションバー
- ✅ ヒーローセクション
- ✅ 特集商品
- ✅ カテゴリーセクション
- ✅ フッター

### 2. ページ遷移の確認

各ページにアクセスして正常に表示されることを確認：

- ✅ 商品を探す: `/pages/browse.php`
- ✅ 商品を出品: `/pages/sell-gear.php`
- ✅ お得情報: `/pages/deals.php`
- ✅ 会社概要: `/pages/about.php`
- ✅ お問い合わせ: `/pages/contact.php`
- ✅ 利用規約: `/pages/terms.php`

### 3. 認証機能の確認

#### ログインテスト

```
URL: /auth/login.php

デモアカウント:
メール: demo@techgearhub.jp
パスワード: demo123
```

ログイン後、以下を確認：
- ✅ ダッシュボードにリダイレクト
- ✅ ユーザー名が表示される
- ✅ プロフィールドロップダウンが機能する

#### 新規登録テスト

```
URL: /auth/register.php

テストデータ:
ユーザー名: testuser
メール: test@example.com
パスワード: Test123!
```

### 4. 機能テスト

#### カート機能
1. 商品を探すページで商品を選択
2. 「カートに追加」をクリック
3. カートアイコンのバッジが更新されることを確認
4. カートページで商品が表示されることを確認

#### ウィッシュリスト機能
1. 商品カードのハートアイコンをクリック
2. ウィッシュリストバッジが更新されることを確認
3. ウィッシュリストページで商品が表示されることを確認

#### 検索機能
1. ナビゲーションバーの検索ボックスに入力
2. リアルタイムで検索結果が表示されることを確認

### 5. レスポンシブデザインの確認

ブラウザの開発者ツールを開いて、以下のデバイスサイズで確認：

- ✅ デスクトップ (1920x1080)
- ✅ ラップトップ (1366x768)
- ✅ タブレット (768x1024)
- ✅ モバイル (375x667)

## 🔧 トラブルシューティング

### 問題1: ページが表示されない

**症状:** 404 Not Found エラー

**解決方法:**
```bash
# URLが正しいか確認
http://localhost/TechGear-Hub/

# Apacheが起動しているか確認
# XAMPP Control Panelで確認

# .htaccessファイルがある場合は削除
rm .htaccess
```

### 問題2: 画像が表示されない

**症状:** 画像の代わりに壊れたアイコンが表示される

**解決方法:**
```bash
# 画像ファイルが存在するか確認
ls assets/images/
ls assets/images/products/

# パーミッションを確認（Linux/Mac）
chmod -R 755 assets/images/

# プレースホルダー画像を生成
# generate-images.html を開いて画像を生成
```

### 問題3: CSSが適用されない

**症状:** スタイルが崩れている

**解決方法:**
```bash
# CSSファイルが存在するか確認
ls assets/css/style.css

# ブラウザのキャッシュをクリア
Ctrl + Shift + R (Windows/Linux)
Cmd + Shift + R (Mac)

# config.phpのSITE_URLを確認
```

### 問題4: JavaScriptが動作しない

**症状:** カート追加、検索などが動作しない

**解決方法:**
```bash
# JSファイルが存在するか確認
ls assets/js/main.js

# ブラウザのコンソールでエラーを確認
F12 → Console タブ

# JavaScriptが有効か確認
ブラウザの設定を確認
```

### 問題5: ログインできない

**症状:** ログインボタンを押しても反応しない

**解決方法:**
```javascript
// ブラウザのコンソールで確認
console.log(sessionStorage.getItem('user_logged_in'));

// セッションをクリア
sessionStorage.clear();
localStorage.clear();

// デモアカウントを使用
メール: demo@techgearhub.jp
パスワード: demo123
```

### 問題6: PHPエラーが表示される

**症状:** Parse error, Fatal error など

**解決方法:**
```bash
# PHPバージョンを確認
php -v

# 7.4以上であることを確認
# 古い場合はアップデート

# エラーメッセージを確認して該当ファイルを修正
```

## 📞 サポート

問題が解決しない場合は、以下の情報を含めてお問い合わせください：

1. 使用しているOS
2. PHPバージョン
3. Webサーバー（XAMPP/MAMP/その他）
4. エラーメッセージ（スクリーンショット）
5. ブラウザのコンソールログ

## 🎉 インストール完了

すべての確認が完了したら、TechGear Hubの使用を開始できます！

次のステップ：
1. デモアカウントでログイン
2. 商品を閲覧
3. カートに追加
4. ダッシュボードを確認

楽しんでください！ 🚀
