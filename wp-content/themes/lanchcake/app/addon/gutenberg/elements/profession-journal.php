<?php
/**
 * VNB Lazy Block & Shortcode
 * @author biendv@ancu.com
 * @since 23/09/2020
 */

$lb_label = 'Block Profession Journal';
$lb_slug = 'block-profession-journal';




if (!function_exists('profession_output_front_end')) {
    function profession_output_front_end($attributes) {
        $info_profession_journal = array();
        $item = array(
            'profession_journal' => isset($attributes['info-profession-journal']) ? $attributes['info-profession-journal'] : ''
        );
        array_push($info_profession_journal, $item);
        $info_profession_journal = urlencode(json_encode($info_profession_journal));

        return '[profession
                    profession_journal="'. $info_profession_journal .'"
                ]';
    }
    add_filter('lazyblock/' . $lb_slug . '/frontend_callback', 'profession_output_front_end', 10);
}

// Create Shortcode 
if( !function_exists('vnb_shortcode_profession')) {
    function vnb_shortcode_profession($attr){
        if (!$attr) {
            return __('Shortcode chưa được truyền tham số.', DEV_TEXTDOMAIN);
        }
        $info_profession_journal = json_decode(urldecode($attr['profession_journal']));
        
        /**
         * Kiểm tra tính tồn tại tham số truyền vào
         */
        ob_start();
        ?>
        <!-- HTML Code here -->
        
        <div class="profession-wrap">
            <div class="wrap">
                <h2 class="title-lg">税務・会計Web情報誌 Profession Journal</h2>
                <ul class="listTax">
                    <?php 
                        foreach ($info_profession_journal as $value) {
                            $a = $value->profession_journal;
                            foreach ($a as $value1) {
                                ?>
                                    <li>
                                        <div class="thumb"><img src="<?php echo $value1->image->url ?>" alt=""></div>
                                        <div class="info">
                                            <h3 class="mtit"><?php echo $value1->title?></h3>


                                            <p class="mb-4"><a class="link-items" href="#">【オンスク】moreタグ 動作確認（）</a></p>
                                            <p class="mb-4"><a class="link-items" href="#">《速報解説》 スイッチＯＴＣ医薬品に係るセルフメディケーション税制、控除対象は平成29年以降の購入から～厚労省公表のＱ＆Ａで留意事項を確認（テスト　テスト）</a></p>
                                            <p class="mb-4"><a class="link-items" href="#">《速報解説》 ★テスト用速報①★ディスクロージャーＷＧ報告を受け、開示府令等の改正案が公表～有価証券報告書の記載内容に「経営方針」を追加～（テスト　テスト）</a></p>
                                            <p class="mb-4"><a class="link-items" href="#">【AWS 環境】テスト用プレミアム会員向け記事（【AWS テスト】和田　章）</a></p>
                                            <div class="pt-3"><a class="viewDetail" href="#">お知らせ一覧はこちら</a></div>

                                        </div>
                                    </li>
                                <?php
                            }
                        }                        
                    ?>
                    
                </ul>
            </div>
        </div>

        <?php
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
    add_shortcode('profession', 'vnb_shortcode_profession');
}

