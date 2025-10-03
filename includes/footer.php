</main>

    <!-- フッター -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- 会社情報 -->
                <div class="footer-section">
                    <h3>
                        <i class="fas fa-microchip"></i>
                        TechGear Hub
                    </h3>
                    <p>信頼できる中古テックギアの売買プラットフォーム。高品質な製品を手頃な価格で。</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- クイックリンク -->
                <div class="footer-section">
                    <h4>クイックリンク</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/index.php">ホーム</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php">商品を探す</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/sell-gear.php">出品する</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/deals.php">お得情報</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/about.php">会社概要</a></li>
                    </ul>
                </div>

                <!-- カテゴリー -->
                <div class="footer-section">
                    <h4>カテゴリー</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ノートパソコン">ノートパソコン</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php?category=スマートフォン">スマートフォン</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php?category=ヘッドホン">ヘッドホン</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php?category=アクセサリー">アクセサリー</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/browse.php?category=カメラ">カメラ</a></li>
                    </ul>
                </div>

                <!-- サポート -->
                <div class="footer-section">
                    <h4>サポート</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">お問い合わせ</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/terms.php">利用規約</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                        <li><a href="#">返品ポリシー</a></li>
                        <li><a href="#">よくある質問</a></li>
                    </ul>
                </div>
            </div>

            <!-- フッター下部 -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> TechGear Hub. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="<?php echo SITE_URL; ?>/pages/terms.php">利用規約</a>
                        <span>|</span>
                        <a href="#">プライバシーポリシー</a>
                        <span>|</span>
                        <a href="#">Cookie設定</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- トップに戻るボタン -->
    <button class="scroll-to-top" id="scrollToTop" aria-label="トップに戻る">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
