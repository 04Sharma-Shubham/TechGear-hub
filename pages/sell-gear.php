<?php
$page_title = '商品を出品';
require_once '../includes/header.php';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px; text-align: center;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">商品を出品する</h1>
        <p style="color: var(--text-secondary); font-size: 18px;">不要になったテックギアを簡単に販売できます</p>
    </div>

    <div style="max-width: 800px; margin: 0 auto;">
        <!-- 出品フォーム -->
        <form id="sellForm" data-validate style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            
            <!-- 商品情報セクション -->
            <div class="form-section" style="margin-bottom: 40px;">
                <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-info-circle"></i> 商品情報
                </h3>

                <div class="form-group">
                    <label for="productName">
                        商品名 <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="text" 
                           id="productName" 
                           name="productName" 
                           placeholder="例: MacBook Pro 2020 M1チップ搭載"
                           required>
                </div>

                <div class="form-group">
                    <label for="category">
                        カテゴリー <span style="color: var(--danger);">*</span>
                    </label>
                    <select id="category" name="category" required>
                        <option value="">カテゴリーを選択してください</option>
                        <option value="ノートパソコン">ノートパソコン</option>
                        <option value="スマートフォン">スマートフォン</option>
                        <option value="タブレット">タブレット</option>
                        <option value="ヘッドホン">ヘッドホン</option>
                        <option value="カメラ">カメラ</option>
                        <option value="アクセサリー">アクセサリー</option>
                        <option value="その他">その他</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="brand">
                        ブランド <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="text" 
                           id="brand" 
                           name="brand" 
                           placeholder="例: Apple, Samsung, Sony"
                           required>
                </div>

                <div class="form-group">
                    <label for="condition">
                        商品状態 <span style="color: var(--danger);">*</span>
                    </label>
                    <select id="condition" name="condition" required>
                        <option value="">状態を選択してください</option>
                        <option value="新品同様">新品同様 - 未使用または使用感なし</option>
                        <option value="優良">優良 - わずかな使用感あり</option>
                        <option value="良好">良好 - 通常の使用感あり</option>
                        <option value="可">可 - 目立つ傷や使用感あり</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">
                        商品説明 <span style="color: var(--danger);">*</span>
                    </label>
                    <textarea id="description" 
                              name="description" 
                              placeholder="商品の詳細、仕様、付属品などを記載してください"
                              rows="6"
                              required></textarea>
                    <small style="color: var(--text-muted); display: block; margin-top: 5px;">
                        詳細な説明は購入者の信頼を高めます
                    </small>
                </div>
            </div>

            <!-- 価格設定セクション -->
            <div class="form-section" style="margin-bottom: 40px;">
                <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-yen-sign"></i> 価格設定
                </h3>

                <div class="form-group">
                    <label for="price">
                        販売価格 (¥) <span style="color: var(--danger);">*</span>
                    </label>
                    <input type="number" 
                           id="price" 
                           name="price" 
                           placeholder="例: 150000"
                           min="100"
                           required>
                    <small style="color: var(--text-muted); display: block; margin-top: 5px;">
                        手数料: 販売価格の10%
                    </small>
                </div>

                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                        <input type="checkbox" id="negotiable" name="negotiable">
                        <span>価格交渉可能</span>
                    </label>
                </div>
            </div>

            <!-- 画像アップロードセクション -->
            <div class="form-section" style="margin-bottom: 40px;">
                <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-images"></i> 商品画像
                </h3>

                <div class="form-group">
                    <label for="productImages">
                        画像をアップロード <span style="color: var(--danger);">*</span>
                    </label>
                    <div class="image-upload-area" style="border: 2px dashed var(--border-color); border-radius: 15px; padding: 40px; text-align: center; cursor: pointer; transition: var(--transition);" onclick="document.getElementById('productImages').click()">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 48px; color: var(--neon-blue); margin-bottom: 15px;"></i>
                        <p style="color: var(--text-primary); margin-bottom: 5px;">クリックして画像をアップロード</p>
                        <small style="color: var(--text-muted);">最大5枚まで（JPG, PNG, 各5MB以下）</small>
                        <input type="file" 
                               id="productImages" 
                               name="productImages[]" 
                               accept="image/*" 
                               multiple 
                               style="display: none;"
                               data-preview="imagePreview">
                    </div>
                    <div id="imagePreview" style="margin-top: 20px; display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;"></div>
                </div>
            </div>

            <!-- 配送情報セクション -->
            <div class="form-section" style="margin-bottom: 40px;">
                <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-shipping-fast"></i> 配送情報
                </h3>

                <div class="form-group">
                    <label for="shippingMethod">
                        配送方法 <span style="color: var(--danger);">*</span>
                    </label>
                    <select id="shippingMethod" name="shippingMethod" required>
                        <option value="">配送方法を選択してください</option>
                        <option value="standard">通常配送（3-5営業日）</option>
                        <option value="express">速達配送（1-2営業日）</option>
                        <option value="pickup">直接受け渡し</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="shippingCost">
                        配送料
                    </label>
                    <select id="shippingCost" name="shippingCost">
                        <option value="seller">出品者負担</option>
                        <option value="buyer">購入者負担</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="location">
                        発送元地域 <span style="color: var(--danger);">*</span>
                    </label>
                    <select id="location" name="location" required>
                        <option value="">都道府県を選択してください</option>
                        <option value="東京都">東京都</option>
                        <option value="大阪府">大阪府</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="北海道">北海道</option>
                        <option value="福岡県">福岡県</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
            </div>

            <!-- 利用規約 -->
            <div class="form-group" style="margin-bottom: 30px;">
                <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                    <input type="checkbox" id="terms" name="terms" required style="margin-top: 3px;">
                    <span style="color: var(--text-secondary);">
                        <a href="terms.php" style="color: var(--neon-blue);" target="_blank">利用規約</a>と
                        <a href="#" style="color: var(--neon-blue);">プライバシーポリシー</a>に同意します
                    </span>
                </label>
            </div>

            <!-- 送信ボタン -->
            <div style="display: flex; gap: 15px; justify-content: center;">
                <button type="button" class="btn btn-secondary" onclick="history.back()" style="padding: 15px 40px;">
                    <i class="fas fa-times"></i> キャンセル
                </button>
                <button type="submit" class="btn btn-primary" style="padding: 15px 40px;">
                    <i class="fas fa-check"></i> 出品する
                </button>
            </div>
        </form>

        <!-- 出品のヒント -->
        <div style="margin-top: 40px; background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
            <h3 style="color: var(--neon-blue); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-lightbulb"></i> 出品のヒント
            </h3>
            <ul style="color: var(--text-secondary); line-height: 2;">
                <li><i class="fas fa-check" style="color: var(--neon-green); margin-right: 10px;"></i>明るい場所で複数の角度から写真を撮影しましょう</li>
                <li><i class="fas fa-check" style="color: var(--neon-green); margin-right: 10px;"></i>商品の状態を正直に記載することで信頼を得られます</li>
                <li><i class="fas fa-check" style="color: var(--neon-green); margin-right: 10px;"></i>詳細な仕様や付属品を明記しましょう</li>
                <li><i class="fas fa-check" style="color: var(--neon-green); margin-right: 10px;"></i>適正価格を設定することで早期売却につながります</li>
                <li><i class="fas fa-check" style="color: var(--neon-green); margin-right: 10px;"></i>迅速な対応で良い評価を獲得しましょう</li>
            </ul>
        </div>
    </div>
</div>

<style>
.image-upload-area:hover {
    border-color: var(--neon-blue);
    background: var(--hover-bg);
}

.form-section {
    padding-bottom: 30px;
    border-bottom: 1px solid var(--border-color);
}

.form-section:last-of-type {
    border-bottom: none;
}

input[type="checkbox"] {
    accent-color: var(--neon-blue);
    cursor: pointer;
}
</style>

<script>
// 画像プレビュー機能
document.getElementById('productImages').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    
    const files = Array.from(e.target.files).slice(0, 5); // 最大5枚
    
    files.forEach((file, index) => {
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const div = document.createElement('div');
                div.style.cssText = 'position: relative; border-radius: 10px; overflow: hidden; border: 1px solid var(--border-color);';
                div.innerHTML = `
                    <img src="${e.target.result}" style="width: 100%; height: 150px; object-fit: cover;">
                    <button type="button" onclick="this.parentElement.remove()" style="position: absolute; top: 5px; right: 5px; background: var(--danger); color: white; border: none; border-radius: 50%; width: 25px; height: 25px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                preview.appendChild(div);
            };
            
            reader.readAsDataURL(file);
        }
    });
});

// フォーム送信処理
document.getElementById('sellForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // バリデーション
    const requiredFields = this.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = 'var(--danger)';
        } else {
            field.style.borderColor = 'var(--border-color)';
        }
    });
    
    if (isValid) {
        // 成功メッセージ
        alert('商品が正常に出品されました！\n審査後、公開されます。');
        window.location.href = 'dashboard.php?tab=listings';
    }
});
</script>

<?php require_once '../includes/footer.php'; ?>
