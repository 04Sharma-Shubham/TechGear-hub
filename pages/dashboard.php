<?php
$page_title = 'ダッシュボード';
require_once '../includes/header.php';

// ログインチェック（フロントエンドのみ）
if (!isLoggedIn()) {
    header('Location: ../auth/login.php');
    exit;
}

$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'overview';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-tachometer-alt"></i> ダッシュボード
        </h1>
        <p style="color: var(--text-secondary); font-size: 18px;">ようこそ、<?php echo getUsername(); ?>さん</p>
    </div>

    <div style="display: grid; grid-template-columns: 250px 1fr; gap: 30px;">
        <!-- サイドバーメニュー -->
        <aside style="background: var(--card-bg); padding: 25px; border-radius: 15px; height: fit-content; border: 1px solid var(--border-color); position: sticky; top: 100px;">
            <nav class="dashboard-nav">
                <a href="?tab=overview" class="dashboard-nav-item <?php echo $active_tab === 'overview' ? 'active' : ''; ?>">
                    <i class="fas fa-chart-line"></i>
                    <span>概要</span>
                </a>
                <a href="?tab=listings" class="dashboard-nav-item <?php echo $active_tab === 'listings' ? 'active' : ''; ?>">
                    <i class="fas fa-list"></i>
                    <span>出品商品</span>
                </a>
                <a href="?tab=orders" class="dashboard-nav-item <?php echo $active_tab === 'orders' ? 'active' : ''; ?>">
                    <i class="fas fa-box"></i>
                    <span>注文履歴</span>
                </a>
                <a href="wishlist.php" class="dashboard-nav-item">
                    <i class="fas fa-heart"></i>
                    <span>ウィッシュリスト</span>
                </a>
                <a href="?tab=profile" class="dashboard-nav-item <?php echo $active_tab === 'profile' ? 'active' : ''; ?>">
                    <i class="fas fa-user"></i>
                    <span>プロフィール</span>
                </a>
                <a href="?tab=settings" class="dashboard-nav-item <?php echo $active_tab === 'settings' ? 'active' : ''; ?>">
                    <i class="fas fa-cog"></i>
                    <span>設定</span>
                </a>
                <hr style="border: none; border-top: 1px solid var(--border-color); margin: 15px 0;">
                <a href="../auth/logout.php" class="dashboard-nav-item" style="color: var(--danger);">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>ログアウト</span>
                </a>
            </nav>
        </aside>

        <!-- メインコンテンツ -->
        <main>
            <?php if ($active_tab === 'overview'): ?>
                <!-- 概要タブ -->
                <div class="dashboard-content">
                    <!-- 統計カード -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 40px;">
                        <div style="background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); padding: 25px; border-radius: 15px; color: white;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-shopping-bag" style="font-size: 32px; opacity: 0.8;"></i>
                                <span style="font-size: 28px; font-weight: bold;">12</span>
                            </div>
                            <div style="font-size: 14px; opacity: 0.9;">出品中の商品</div>
                        </div>

                        <div style="background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); padding: 25px; border-radius: 15px; color: white;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-check-circle" style="font-size: 32px; opacity: 0.8;"></i>
                                <span style="font-size: 28px; font-weight: bold;">8</span>
                            </div>
                            <div style="font-size: 14px; opacity: 0.9;">販売済み</div>
                        </div>

                        <div style="background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); padding: 25px; border-radius: 15px; color: white;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-yen-sign" style="font-size: 32px; opacity: 0.8;"></i>
                                <span style="font-size: 28px; font-weight: bold;">¥450K</span>
                            </div>
                            <div style="font-size: 14px; opacity: 0.9;">総売上</div>
                        </div>

                        <div style="background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple)); padding: 25px; border-radius: 15px; color: white;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-star" style="font-size: 32px; opacity: 0.8;"></i>
                                <span style="font-size: 28px; font-weight: bold;">4.8</span>
                            </div>
                            <div style="font-size: 14px; opacity: 0.9;">評価</div>
                        </div>
                    </div>

                    <!-- 最近のアクティビティ -->
                    <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color); margin-bottom: 30px;">
                        <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-clock"></i> 最近のアクティビティ
                        </h3>
                        <div class="activity-list">
                            <div class="activity-item" style="display: flex; gap: 15px; padding: 15px; border-bottom: 1px solid var(--border-color);">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-blue), var(--neon-green)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-shopping-cart" style="font-size: 20px;"></i>
                                </div>
                                <div style="flex: 1;">
                                    <div style="color: var(--text-primary); font-weight: 600; margin-bottom: 5px;">新しい注文</div>
                                    <div style="color: var(--text-secondary); font-size: 14px;">MacBook Pro 2020が購入されました</div>
                                    <div style="color: var(--text-muted); font-size: 12px; margin-top: 5px;">2時間前</div>
                                </div>
                            </div>

                            <div class="activity-item" style="display: flex; gap: 15px; padding: 15px; border-bottom: 1px solid var(--border-color);">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-green), var(--neon-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-star" style="font-size: 20px;"></i>
                                </div>
                                <div style="flex: 1;">
                                    <div style="color: var(--text-primary); font-weight: 600; margin-bottom: 5px;">新しいレビュー</div>
                                    <div style="color: var(--text-secondary); font-size: 14px;">iPhone 13 Proに5つ星の評価をいただきました</div>
                                    <div style="color: var(--text-muted); font-size: 12px; margin-top: 5px;">5時間前</div>
                                </div>
                            </div>

                            <div class="activity-item" style="display: flex; gap: 15px; padding: 15px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-plus-circle" style="font-size: 20px;"></i>
                                </div>
                                <div style="flex: 1;">
                                    <div style="color: var(--text-primary); font-weight: 600; margin-bottom: 5px;">商品を出品</div>
                                    <div style="color: var(--text-secondary); font-size: 14px;">Sony WH-1000XM4を出品しました</div>
                                    <div style="color: var(--text-muted); font-size: 12px; margin-top: 5px;">1日前</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- クイックアクション -->
                    <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                        <h3 style="color: var(--neon-green); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-bolt"></i> クイックアクション
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                            <a href="sell-gear.php" class="btn btn-primary" style="padding: 15px; text-align: center;">
                                <i class="fas fa-plus-circle"></i> 商品を出品
                            </a>
                            <a href="browse.php" class="btn btn-secondary" style="padding: 15px; text-align: center;">
                                <i class="fas fa-search"></i> 商品を探す
                            </a>
                            <a href="?tab=orders" class="btn btn-secondary" style="padding: 15px; text-align: center;">
                                <i class="fas fa-box"></i> 注文を確認
                            </a>
                            <a href="?tab=profile" class="btn btn-secondary" style="padding: 15px; text-align: center;">
                                <i class="fas fa-user"></i> プロフィール編集
                            </a>
                        </div>
                    </div>
                </div>

            <?php elseif ($active_tab === 'listings'): ?>
                <!-- 出品商品タブ -->
                <div class="dashboard-content">
                    <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                            <h3 style="color: var(--neon-green); display: flex; align-items: center; gap: 10px;">
                                <i class="fas fa-list"></i> 出品商品
                            </h3>
                            <a href="sell-gear.php" class="btn btn-primary">
                                <i class="fas fa-plus"></i> 新規出品
                            </a>
                        </div>

                        <div class="listings-table">
                            <table style="width: 100%; border-collapse: collapse;">
                                <thead>
                                    <tr style="border-bottom: 2px solid var(--border-color);">
                                        <th style="padding: 15px; text-align: left; color: var(--text-primary);">商品</th>
                                        <th style="padding: 15px; text-align: left; color: var(--text-primary);">価格</th>
                                        <th style="padding: 15px; text-align: left; color: var(--text-primary);">状態</th>
                                        <th style="padding: 15px; text-align: left; color: var(--text-primary);">閲覧数</th>
                                        <th style="padding: 15px; text-align: left; color: var(--text-primary);">アクション</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom: 1px solid var(--border-color);">
                                        <td style="padding: 15px;">
                                            <div style="display: flex; align-items: center; gap: 15px;">
                                                <div style="width: 60px; height: 60px; background: var(--secondary-bg); border-radius: 8px;"></div>
                                                <div>
                                                    <div style="color: var(--text-primary); font-weight: 600;">MacBook Pro 2020</div>
                                                    <div style="color: var(--text-muted); font-size: 12px;">出品日: 2024/01/15</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="padding: 15px; color: var(--neon-blue); font-weight: 600;">¥150,000</td>
                                        <td style="padding: 15px;">
                                            <span style="background: var(--success); color: white; padding: 5px 12px; border-radius: 12px; font-size: 12px;">出品中</span>
                                        </td>
                                        <td style="padding: 15px; color: var(--text-secondary);">245</td>
                                        <td style="padding: 15px;">
                                            <button class="btn btn-secondary" style="padding: 8px 15px; font-size: 14px; margin-right: 5px;">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-secondary" style="padding: 8px 15px; font-size: 14px;">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- 他の商品も同様に表示 -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <?php elseif ($active_tab === 'orders'): ?>
                <!-- 注文履歴タブ -->
                <div class="dashboard-content">
                    <div style="background: var(--card-bg); padding: 30px; border-radius: 15px; border: 1px solid var(--border-color);">
                        <h3 style="color: var(--neon-green); margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-box"></i> 注文履歴
                        </h3>

                        <div class="orders-list">
                            <div style="border: 1px solid var(--border-color); border-radius: 12px; padding: 20px; margin-bottom: 20px;">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                                    <div>
                                        <div style="color: var(--text-primary); font-weight: 600; margin-bottom: 5px;">注文 #12345</div>
                                        <div style="color: var(--text-muted); font-size: 14px;">2024年1月20日</div>
                                    </div>
                                    <span style="background: var(--success); color: white; padding: 8px 15px; border-radius: 20px; font-size: 13px;">配送完了</span>
                                </div>
                                <div style="display: flex; gap: 15px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                                    <div style="width: 80px; height: 80px; background: var(--secondary-bg); border-radius: 8px;"></div>
                                    <div style="flex: 1;">
                                        <div style="color: var(--text-primary); font-weight: 600; margin-bottom: 5px;">iPhone 13 Pro</div>
                                        <div style="color: var(--text-secondary); font-size: 14px; margin-bottom: 10px;">128GB、シエラブルー</div>
                                        <div style="color: var(--neon-blue); font-weight: 600; font-size: 18px;">¥95,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php elseif ($active_tab === 'profile'): ?>
                <!-- プロフィールタブ -->
                <div class="dashboard-content">
                    <div style="background: var(--card-bg); padding: 40px; border-radius: 15px; border: 1px solid var(--border-color);">
                        <h3 style="color: var(--neon-green); margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-user"></i> プロフィール設定
                        </h3>

                        <form>
                            <div class="form-group">
                                <label>ユーザー名</label>
                                <input type="text" value="<?php echo getUsername(); ?>" placeholder="ユーザー名">
                            </div>

                            <div class="form-group">
                                <label>メールアドレス</label>
                                <input type="email" value="user@example.com" placeholder="メールアドレス">
                            </div>

                            <div class="form-group">
                                <label>電話番号</label>
                                <input type="tel" placeholder="090-1234-5678">
                            </div>

                            <div class="form-group">
                                <label>住所</label>
                                <textarea rows="3" placeholder="配送先住所"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" style="padding: 12px 40px;">
                                <i class="fas fa-save"></i> 保存
                            </button>
                        </form>
                    </div>
                </div>

            <?php else: ?>
                <!-- 設定タブ -->
                <div class="dashboard-content">
                    <div style="background: var(--card-bg); padding: 40px; border-radius: 15px; border: 1px solid var(--border-color);">
                        <h3 style="color: var(--neon-green); margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-cog"></i> アカウント設定
                        </h3>

                        <div style="margin-bottom: 30px;">
                            <h4 style="color: var(--text-primary); margin-bottom: 15px;">通知設定</h4>
                            <label style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; cursor: pointer;">
                                <input type="checkbox" checked>
                                <span style="color: var(--text-secondary);">新しい注文の通知を受け取る</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; cursor: pointer;">
                                <input type="checkbox" checked>
                                <span style="color: var(--text-secondary);">メッセージの通知を受け取る</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox">
                                <span style="color: var(--text-secondary);">プロモーション情報を受け取る</span>
                            </label>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <h4 style="color: var(--text-primary); margin-bottom: 15px;">パスワード変更</h4>
                            <div class="form-group">
                                <label>現在のパスワード</label>
                                <input type="password" placeholder="現在のパスワード">
                            </div>
                            <div class="form-group">
                                <label>新しいパスワード</label>
                                <input type="password" placeholder="新しいパスワード">
                            </div>
                            <div class="form-group">
                                <label>パスワード確認</label>
                                <input type="password" placeholder="パスワードを再入力">
                            </div>
                            <button class="btn btn-primary">
                                <i class="fas fa-key"></i> パスワードを変更
                            </button>
                        </div>

                        <div style="padding-top: 30px; border-top: 1px solid var(--border-color);">
                            <h4 style="color: var(--danger); margin-bottom: 15px;">アカウント削除</h4>
                            <p style="color: var(--text-secondary); margin-bottom: 15px;">
                                アカウントを削除すると、すべてのデータが完全に削除されます。この操作は取り消せません。
                            </p>
                            <button class="btn" style="background: var(--danger); color: white; padding: 12px 30px;">
                                <i class="fas fa-exclamation-triangle"></i> アカウントを削除
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </main>
    </div>
</div>

<style>
.dashboard-nav-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 15px;
    color: var(--text-secondary);
    border-radius: 8px;
    transition: var(--transition);
    margin-bottom: 5px;
}

.dashboard-nav-item:hover {
    background: var(--hover-bg);
    color: var(--neon-blue);
    padding-left: 20px;
}

.dashboard-nav-item.active {
    background: linear-gradient(135deg, var(--neon-blue), var(--neon-green));
    color: var(--primary-bg);
}

.dashboard-nav-item i {
    width: 20px;
}

@media (max-width: 968px) {
    .container > div {
        grid-template-columns: 1fr !important;
    }
    
    aside {
        position: static !important;
    }
}
</style>

<?php require_once '../includes/footer.php'; ?>
