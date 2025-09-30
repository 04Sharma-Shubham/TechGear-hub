// ==========================================
// TechGear Hub - メインJavaScript
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // ハンバーガーメニュー & モバイルドロワー
    // ==========================================
    const hamburger = document.getElementById('hamburger');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');
    const closeDrawer = document.getElementById('closeDrawer');

    if (hamburger) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            mobileDrawer.classList.toggle('active');
            drawerOverlay.classList.toggle('active');
            document.body.style.overflow = mobileDrawer.classList.contains('active') ? 'hidden' : '';
        });
    }

    if (closeDrawer) {
        closeDrawer.addEventListener('click', closeDrawerMenu);
    }

    if (drawerOverlay) {
        drawerOverlay.addEventListener('click', closeDrawerMenu);
    }

    function closeDrawerMenu() {
        hamburger.classList.remove('active');
        mobileDrawer.classList.remove('active');
        drawerOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // ==========================================
    // ライブ検索機能
    // ==========================================
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const searchBtn = document.getElementById('searchBtn');

    // サンプル商品データ（検索用）
    const products = [
        { id: 1, name: 'MacBook Pro 2020', price: 150000, category: 'ノートパソコン', image: 'assets/images/products/laptop1.jpg' },
        { id: 2, name: 'iPhone 13 Pro', price: 95000, category: 'スマートフォン', image: 'assets/images/products/phone1.jpg' },
        { id: 3, name: 'Sony WH-1000XM4', price: 28000, category: 'ヘッドホン', image: 'assets/images/products/headphone1.jpg' },
        { id: 4, name: 'iPad Air 2022', price: 65000, category: 'タブレット', image: 'assets/images/products/tablet1.jpg' },
        { id: 5, name: 'Canon EOS R6', price: 280000, category: 'カメラ', image: 'assets/images/products/camera1.jpg' },
        { id: 6, name: 'Apple Watch Series 7', price: 42000, category: 'アクセサリー', image: 'assets/images/products/watch1.jpg' },
        { id: 7, name: 'Dell XPS 15', price: 135000, category: 'ノートパソコン', image: 'assets/images/products/laptop2.jpg' },
        { id: 8, name: 'Samsung Galaxy S22', price: 78000, category: 'スマートフォン', image: 'assets/images/products/phone2.jpg' }
    ];

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            
            if (query.length < 2) {
                searchResults.classList.remove('active');
                searchResults.innerHTML = '';
                return;
            }

            const filtered = products.filter(product => 
                product.name.toLowerCase().includes(query) || 
                product.category.toLowerCase().includes(query)
            );

            if (filtered.length > 0) {
                displaySearchResults(filtered);
            } else {
                searchResults.innerHTML = '<div style="padding: 20px; text-align: center; color: var(--text-muted);">検索結果が見つかりません</div>';
                searchResults.classList.add('active');
            }
        });

        // 検索結果外をクリックしたら閉じる
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.remove('active');
            }
        });
    }

    function displaySearchResults(results) {
        searchResults.innerHTML = results.map(product => `
            <div class="search-result-item" onclick="window.location.href='pages/browse.php?id=${product.id}'">
                <img src="${product.image}" alt="${product.name}" onerror="this.src='assets/images/placeholder.jpg'">
                <div class="search-result-info">
                    <h4>${product.name}</h4>
                    <p>${product.category} - ¥${product.price.toLocaleString()}</p>
                </div>
            </div>
        `).join('');
        searchResults.classList.add('active');
    }

    // ==========================================
    // カート機能
    // ==========================================
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    updateCartBadge();

    // カートに追加
    window.addToCart = function(productId, productName, productPrice, productImage) {
        const existingItem = cart.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += 1;
            showNotification('カートを更新しました', 'success');
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                quantity: 1
            });
            showNotification('カートに追加しました', 'success');
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartBadge();
    };

    // カートから削除
    window.removeFromCart = function(productId) {
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartBadge();
        showNotification('カートから削除しました', 'info');
        
        // カートページの場合は再読み込み
        if (window.location.pathname.includes('cart.php')) {
            location.reload();
        }
    };

    // カート数量更新
    window.updateCartQuantity = function(productId, quantity) {
        const item = cart.find(item => item.id === productId);
        if (item) {
            item.quantity = parseInt(quantity);
            if (item.quantity <= 0) {
                removeFromCart(productId);
            } else {
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartBadge();
            }
        }
    };

    function updateCartBadge() {
        const cartBadge = document.getElementById('cartBadge');
        if (cartBadge) {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartBadge.textContent = totalItems;
        }
    }

    // カートデータを取得
    window.getCart = function() {
        return cart;
    };

    // ==========================================
    // ウィッシュリスト機能
    // ==========================================
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    updateWishlistBadge();
    updateWishlistButtons();

    // ウィッシュリストに追加/削除
    window.toggleWishlist = function(productId, productName, productPrice, productImage) {
        const index = wishlist.findIndex(item => item.id === productId);
        
        if (index > -1) {
            wishlist.splice(index, 1);
            showNotification('ウィッシュリストから削除しました', 'info');
        } else {
            wishlist.push({
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage
            });
            showNotification('ウィッシュリストに追加しました', 'success');
        }
        
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        updateWishlistBadge();
        updateWishlistButtons();
        
        // ウィッシュリストページの場合は再読み込み
        if (window.location.pathname.includes('wishlist.php')) {
            location.reload();
        }
    };

    function updateWishlistBadge() {
        const wishlistBadge = document.getElementById('wishlistBadge');
        if (wishlistBadge) {
            wishlistBadge.textContent = wishlist.length;
        }
    }

    function updateWishlistButtons() {
        const wishlistBtns = document.querySelectorAll('.wishlist-btn');
        wishlistBtns.forEach(btn => {
            const productId = parseInt(btn.dataset.productId);
            if (wishlist.some(item => item.id === productId)) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // ウィッシュリストデータを取得
    window.getWishlist = function() {
        return wishlist;
    };

    // ==========================================
    // 商品フィルター機能
    // ==========================================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const sortSelect = document.getElementById('sortSelect');
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterProducts();
            });
        });
    }

    if (sortSelect) {
        sortSelect.addEventListener('change', filterProducts);
    }

    if (priceRange) {
        priceRange.addEventListener('input', function() {
            priceValue.textContent = '¥' + parseInt(this.value).toLocaleString();
            filterProducts();
        });
    }

    function filterProducts() {
        // フィルター処理のロジック（実際のページで実装）
        console.log('商品をフィルタリング中...');
    }

    // ==========================================
    // トップに戻るボタン
    // ==========================================
    const scrollToTopBtn = document.getElementById('scrollToTop');

    if (scrollToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ==========================================
    // フォームバリデーション
    // ==========================================
    const forms = document.querySelectorAll('form[data-validate]');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = 'var(--danger)';
                    showNotification(`${input.placeholder || input.name}を入力してください`, 'error');
                } else {
                    input.style.borderColor = 'var(--border-color)';
                }
            });

            // メールバリデーション
            const emailInputs = form.querySelectorAll('input[type="email"]');
            emailInputs.forEach(input => {
                if (input.value && !isValidEmail(input.value)) {
                    isValid = false;
                    input.style.borderColor = 'var(--danger)';
                    showNotification('有効なメールアドレスを入力してください', 'error');
                }
            });

            if (isValid) {
                // フォーム送信処理
                showNotification('送信しました', 'success');
                // form.submit(); // 実際の送信
            }
        });
    });

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // ==========================================
    // 通知システム
    // ==========================================
    function showNotification(message, type = 'info') {
        // 既存の通知を削除
        const existingNotification = document.querySelector('.notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <i class="fas fa-${getNotificationIcon(type)}"></i>
            <span>${message}</span>
        `;
        
        // スタイルを追加
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: var(--card-bg);
            color: var(--text-primary);
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 4px solid ${getNotificationColor(type)};
            animation: slideIn 0.3s ease;
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    function getNotificationIcon(type) {
        const icons = {
            success: 'check-circle',
            error: 'exclamation-circle',
            warning: 'exclamation-triangle',
            info: 'info-circle'
        };
        return icons[type] || icons.info;
    }

    function getNotificationColor(type) {
        const colors = {
            success: 'var(--success)',
            error: 'var(--danger)',
            warning: 'var(--warning)',
            info: 'var(--neon-blue)'
        };
        return colors[type] || colors.info;
    }

    // アニメーション用CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // ==========================================
    // 画像遅延読み込み
    // ==========================================
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // フォールバック
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });
    }

    // ==========================================
    // スムーズスクロール
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ==========================================
    // 画像プレビュー（ファイルアップロード用）
    // ==========================================
    const fileInputs = document.querySelectorAll('input[type="file"][data-preview]');
    
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const previewId = this.dataset.preview;
            const preview = document.getElementById(previewId);
            
            if (preview && this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="プレビュー" style="max-width: 100%; border-radius: 10px;">`;
                };
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    });

    // ==========================================
    // ページ読み込み完了
    // ==========================================
    console.log('TechGear Hub initialized successfully! 🚀');
});
