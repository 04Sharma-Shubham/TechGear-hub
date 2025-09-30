<?php
$page_title = '利用規約';
require_once '../includes/header.php';
?>

<div class="container">
    <div class="page-header" style="margin-bottom: 40px; text-align: center;">
        <h1 style="font-size: 36px; color: var(--neon-blue); margin-bottom: 10px;">
            <i class="fas fa-file-contract"></i> 利用規約
        </h1>
        <p style="color: var(--text-secondary); font-size: 16px;">最終更新日: <?php echo date('Y年m月d日'); ?></p>
    </div>

    <div style="max-width: 900px; margin: 0 auto;">
        <div style="background: var(--card-bg); padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            
            <!-- 目次 -->
            <div style="background: var(--hover-bg); padding: 25px; border-radius: 15px; margin-bottom: 40px; border: 1px solid var(--border-color);">
                <h3 style="color: var(--neon-green); margin-bottom: 20px;">目次</h3>
                <ol style="color: var(--text-secondary); line-height: 2; padding-left: 20px;">
                    <li><a href="#section1" style="color: var(--neon-blue);">第1条（適用範囲）</a></li>
                    <li><a href="#section2" style="color: var(--neon-blue);">第2条（利用登録）</a></li>
                    <li><a href="#section3" style="color: var(--neon-blue);">第3条（アカウント管理）</a></li>
                    <li><a href="#section4" style="color: var(--neon-blue);">第4条（商品の出品）</a></li>
                    <li><a href="#section5" style="color: var(--neon-blue);">第5条（商品の購入）</a></li>
                    <li><a href="#section6" style="color: var(--neon-blue);">第6条（支払い方法）</a></li>
                    <li><a href="#section7" style="color: var(--neon-blue);">第7条（配送と返品）</a></li>
                    <li><a href="#section8" style="color: var(--neon-blue);">第8条（禁止事項）</a></li>
                    <li><a href="#section9" style="color: var(--neon-blue);">第9条（知的財産権）</a></li>
                    <li><a href="#section10" style="color: var(--neon-blue);">第10条（免責事項）</a></li>
                    <li><a href="#section11" style="color: var(--neon-blue);">第11条（サービスの変更・終了）</a></li>
                    <li><a href="#section12" style="color: var(--neon-blue);">第12条（準拠法と管轄裁判所）</a></li>
                </ol>
            </div>

            <!-- 前文 -->
            <div style="margin-bottom: 40px;">
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    この利用規約（以下「本規約」といいます）は、TechGear Hub（以下「当社」といいます）が提供するオンラインマーケットプレイスサービス（以下「本サービス」といいます）の利用条件を定めるものです。本サービスをご利用いただく際には、本規約の全文をお読みいただき、これに同意いただく必要があります。
                </p>
            </div>

            <!-- 第1条 -->
            <section id="section1" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第1条（適用範囲）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">本規約は、本サービスの利用に関する当社とユーザーとの間の権利義務関係を定めることを目的とし、ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されます。</li>
                    <li style="margin-bottom: 15px;">当社が本サービス上で掲載する本サービスの利用に関するルール、ガイドライン等は、本規約の一部を構成するものとします。</li>
                    <li style="margin-bottom: 15px;">本規約の内容と、前項のルール等の内容が矛盾する場合は、別段の定めがない限り、本規約の規定が優先して適用されるものとします。</li>
                </ol>
            </section>

            <!-- 第2条 -->
            <section id="section2" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第2条（利用登録）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">本サービスの利用を希望する者（以下「登録希望者」といいます）は、本規約を遵守することに同意し、かつ当社の定める一定の情報（以下「登録情報」といいます）を当社の定める方法で当社に提供することにより、当社に対し、本サービスの利用の登録を申請することができます。</li>
                    <li style="margin-bottom: 15px;">当社は、当社の基準に従って、登録希望者の登録の可否を判断し、当社が登録を認める場合にはその旨を登録希望者に通知します。登録希望者のユーザーとしての登録は、当社が本項の通知を行ったことをもって完了したものとします。</li>
                    <li style="margin-bottom: 15px;">前項に定める登録の完了時に、本サービスの利用契約がユーザーと当社の間に成立し、ユーザーは本サービスを本規約に従い利用することができるようになります。</li>
                    <li style="margin-bottom: 15px;">当社は、登録希望者が、以下の各号のいずれかの事由に該当する場合は、登録及び再登録を拒否することがあり、またその理由について一切開示義務を負いません。
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>当社に提供した登録情報の全部または一部につき虚偽、誤記または記載漏れがあった場合</li>
                            <li>未成年者、成年被後見人、被保佐人または被補助人のいずれかであり、法定代理人、後見人、保佐人または補助人の同意等を得ていなかった場合</li>
                            <li>反社会的勢力等（暴力団、暴力団員、右翼団体、反社会的勢力、その他これに準ずる者を意味します）である、または資金提供その他を通じて反社会的勢力等の維持、運営もしくは経営に協力もしくは関与する等反社会的勢力等との何らかの交流もしくは関与を行っていると当社が判断した場合</li>
                            <li>過去に当社との契約に違反した者またはその関係者であると当社が判断した場合</li>
                            <li>その他、登録を適当でないと当社が判断した場合</li>
                        </ul>
                    </li>
                </ol>
            </section>

            <!-- 第3条 -->
            <section id="section3" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第3条（アカウント管理）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">ユーザーは、自己の責任において、本サービスに関するパスワード及びユーザーIDを適切に管理及び保管するものとし、これを第三者に利用させ、または貸与、譲渡、名義変更、売買等をしてはならないものとします。</li>
                    <li style="margin-bottom: 15px;">パスワードまたはユーザーIDの管理不十分、使用上の過誤、第三者の使用等によって生じた損害に関する責任はユーザーが負うものとします。</li>
                    <li style="margin-bottom: 15px;">ユーザーは、パスワードまたはユーザーIDが盗まれたり、第三者に使用されていることが判明した場合には、直ちにその旨を当社に通知するとともに、当社からの指示に従うものとします。</li>
                </ol>
            </section>

            <!-- 第4条 -->
            <section id="section4" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第4条（商品の出品）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">ユーザーは、本サービスを通じて商品を出品することができます。出品者は、商品の状態、仕様、付属品等について正確かつ詳細に記載する責任を負います。</li>
                    <li style="margin-bottom: 15px;">出品者は、出品する商品について、適法に所有権または販売権を有していることを保証するものとします。</li>
                    <li style="margin-bottom: 15px;">当社は、出品された商品について、品質チェックを行う権利を有しますが、その義務を負うものではありません。</li>
                    <li style="margin-bottom: 15px;">当社は、以下の商品の出品を禁止します。
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>盗品または不正に入手された商品</li>
                            <li>偽造品、模倣品、海賊版</li>
                            <li>法令により販売が禁止または制限されている商品</li>
                            <li>公序良俗に反する商品</li>
                            <li>その他、当社が不適切と判断する商品</li>
                        </ul>
                    </li>
                    <li style="margin-bottom: 15px;">当社は、販売価格の10%を手数料として徴収します。</li>
                </ol>
            </section>

            <!-- 第5条 -->
            <section id="section5" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第5条（商品の購入）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">購入者は、商品の説明、画像、価格等を十分に確認した上で購入手続きを行うものとします。</li>
                    <li style="margin-bottom: 15px;">購入の申し込みは、当社が定める方法により行うものとし、購入者が購入手続きを完了した時点で、購入者と出品者との間で売買契約が成立するものとします。</li>
                    <li style="margin-bottom: 15px;">当社は、売買契約の当事者ではなく、売買契約に関する一切の責任を負いません。ただし、当社は買い手保護プログラムを提供し、一定の条件下で購入者を保護します。</li>
                </ol>
            </section>

            <!-- 第6条 -->
            <section id="section6" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第6条（支払い方法）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">購入者は、以下の支払い方法から選択して代金を支払うものとします。
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>クレジットカード決済</li>
                            <li>銀行振込</li>
                            <li>コンビニ決済</li>
                            <li>代金引換</li>
                            <li>電子マネー決済（PayPay、LINE Pay等）</li>
                        </ul>
                    </li>
                    <li style="margin-bottom: 15px;">当社は、エスクローサービスを提供し、購入者が商品を受け取り確認するまで代金を保管します。</li>
                    <li style="margin-bottom: 15px;">購入者が商品の受け取りを確認した後、当社は出品者に代金を支払います。</li>
                </ol>
            </section>

            <!-- 第7条 -->
            <section id="section7" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第7条（配送と返品）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">出品者は、購入者が支払いを完了した後、速やかに商品を発送する責任を負います。</li>
                    <li style="margin-bottom: 15px;">配送方法及び配送料の負担については、商品ページに記載された条件に従うものとします。</li>
                    <li style="margin-bottom: 15px;">購入者は、商品到着後7日以内に限り、以下の場合に返品を申請することができます。
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>商品が説明と著しく異なる場合</li>
                            <li>商品に重大な欠陥がある場合</li>
                            <li>配送中に商品が破損した場合</li>
                        </ul>
                    </li>
                    <li style="margin-bottom: 15px;">返品が承認された場合、購入者は商品を返送し、当社は代金を返金します。返送料の負担については、返品理由に応じて決定されます。</li>
                </ol>
            </section>

            <!-- 第8条 -->
            <section id="section8" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第8条（禁止事項）
                </h2>
                <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 15px;">
                    ユーザーは、本サービスの利用にあたり、以下の各号のいずれかに該当する行為または該当すると当社が判断する行為をしてはなりません。
                </p>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 10px;">法令または公序良俗に違反する行為</li>
                    <li style="margin-bottom: 10px;">犯罪行為に関連する行為</li>
                    <li style="margin-bottom: 10px;">当社、本サービスの他のユーザー、または第三者の知的財産権、肖像権、プライバシー、名誉その他の権利または利益を侵害する行為</li>
                    <li style="margin-bottom: 10px;">本サービスを通じ、以下に該当し、または該当すると当社が判断する情報を送信する行為
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>過度に暴力的または残虐な表現を含む情報</li>
                            <li>コンピューター・ウィルスその他の有害なコンピューター・プログラムを含む情報</li>
                            <li>当社、本サービスの他のユーザーまたは第三者の名誉または信用を毀損する表現を含む情報</li>
                            <li>過度にわいせつな表現を含む情報</li>
                            <li>差別を助長する表現を含む情報</li>
                            <li>自殺、自傷行為を助長する表現を含む情報</li>
                            <li>薬物の不適切な利用を助長する表現を含む情報</li>
                            <li>反社会的な表現を含む情報</li>
                            <li>チェーンメール等の第三者への情報の拡散を求める情報</li>
                            <li>他人に不快感を与える表現を含む情報</li>
                        </ul>
                    </li>
                    <li style="margin-bottom: 10px;">本サービスのネットワークまたはシステム等に過度な負荷をかける行為</li>
                    <li style="margin-bottom: 10px;">当社が提供するソフトウェアその他のシステムに対するリバースエンジニアリングその他の解析行為</li>
                    <li style="margin-bottom: 10px;">本サービスの運営を妨害するおそれのある行為</li>
                    <li style="margin-bottom: 10px;">当社のネットワークまたはシステム等への不正アクセス</li>
                    <li style="margin-bottom: 10px;">第三者に成りすます行為</li>
                    <li style="margin-bottom: 10px;">本サービスの他のユーザーのIDまたはパスワードを利用する行為</li>
                    <li style="margin-bottom: 10px;">当社が事前に許諾しない本サービス上での宣伝、広告、勧誘、または営業行為</li>
                    <li style="margin-bottom: 10px;">本サービスの他のユーザーの情報の収集</li>
                    <li style="margin-bottom: 10px;">当社、本サービスの他のユーザーまたは第三者に不利益、損害、不快感を与える行為</li>
                    <li style="margin-bottom: 10px;">反社会的勢力等への利益供与</li>
                    <li style="margin-bottom: 10px;">前各号の行為を直接または間接に惹起し、または容易にする行為</li>
                    <li style="margin-bottom: 10px;">その他、当社が不適切と判断する行為</li>
                </ol>
            </section>

            <!-- 第9条 -->
            <section id="section9" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第9条（知的財産権）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">本サービスに関する知的財産権は、すべて当社または当社にライセンスを許諾している者に帰属しており、本規約に基づく本サービスの利用許諾は、本サービスに関する当社または当社にライセンスを許諾している者の知的財産権の使用許諾を意味するものではありません。</li>
                    <li style="margin-bottom: 15px;">ユーザーは、本サービスを通じて投稿または送信するコンテンツ（商品情報、画像、レビュー等）について、当社に対し、世界的、非独占的、無償、サブライセンス可能かつ譲渡可能な使用権を許諾するものとします。</li>
                </ol>
            </section>

            <!-- 第10条 -->
            <section id="section10" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第10条（免責事項）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">当社は、本サービスに事実上または法律上の瑕疵（安全性、信頼性、正確性、完全性、有効性、特定の目的への適合性、セキュリティなどに関する欠陥、エラーやバグ、権利侵害などを含みます）がないことを明示的にも黙示的にも保証しておりません。</li>
                    <li style="margin-bottom: 15px;">当社は、本サービスに起因してユーザーに生じたあらゆる損害について、当社の故意または重過失による場合を除き、一切の責任を負いません。</li>
                    <li style="margin-bottom: 15px;">当社は、ユーザー間の取引に関して一切の責任を負いません。ただし、買い手保護プログラムの範囲内で、一定の保護を提供します。</li>
                    <li style="margin-bottom: 15px;">当社は、本サービスに関して、ユーザーと他のユーザーまたは第三者との間において生じた取引、連絡または紛争等について一切責任を負いません。</li>
                </ol>
            </section>

            <!-- 第11条 -->
            <section id="section11" style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--border-color);">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第11条（サービスの変更・終了）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">当社は、ユーザーへの事前の通知なく、本サービスの内容を変更し、または本サービスの提供を中止、終了することができるものとします。</li>
                    <li style="margin-bottom: 15px;">当社は、本サービスの提供の中止、終了によってユーザーに生じた損害について、一切の責任を負いません。</li>
                </ol>
            </section>

            <!-- 第12条 -->
            <section id="section12" style="margin-bottom: 40px;">
                <h2 style="color: var(--neon-blue); margin-bottom: 20px; font-size: 24px;">
                    第12条（準拠法と管轄裁判所）
                </h2>
                <ol style="color: var(--text-secondary); line-height: 1.8; padding-left: 20px;">
                    <li style="margin-bottom: 15px;">本規約の解釈にあたっては、日本法を準拠法とします。</li>
                    <li style="margin-bottom: 15px;">本サービスに関して紛争が生じた場合には、当社の本店所在地を管轄する裁判所を専属的合意管轄裁判所とします。</li>
                </ol>
            </section>

            <!-- お問い合わせ -->
            <div style="background: var(--hover-bg); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid var(--border-color);">
                <h3 style="color: var(--neon-green); margin-bottom: 15px;">
                    <i class="fas fa-question-circle"></i> ご質問がありますか？
                </h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    利用規約に関するご質問は、お気軽にお問い合わせください。
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-envelope"></i> お問い合わせ
                </a>
            </div>
        </div>
    </div>
</div>

<style>
section {
    scroll-margin-top: 100px;
}

a[href^="#"] {
    transition: var(--transition);
}

a[href^="#"]:hover {
    text-decoration: underline;
}
</style>

<?php require_once '../includes/footer.php'; ?>
