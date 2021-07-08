<?php

namespace app\views;

class ParseHome
{

    public static function renderComponentBanner($params = [])
    {
        ob_start();
?>

        <div class="bannerLanding" style="background-image: url(<?php echo $params['mytheme']['big_image_header']['url']; ?>)">
            <div class="wrap">
                <div class="banner-content">
                    <div class="professional">
                        <h1 class="professional-tlt">会員限定Webサイトを通じて プロの事務を幅広くサポート！</h1>
                        <p class="professional-txt">株式会社プロフェッションネットワークは株式会社とTAC株式会社の合弁会社です。</p>
                        <ul class="partner">
                            <li><a href="<?php echo esc_url($params['mytheme']['website_skattsei']); ?>"><img src="<?php echo ASSETS_URI ?>/images/header_logo-seibun.png" alt=""></a></li>
                            <li><a href="<?php echo esc_url($params['mytheme']['website_tac']); ?>"><img src="<?php echo ASSETS_URI ?>/images/logo_tac.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="information">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url($params['mytheme']['website_rs05']); ?>">会員特典<br>会員制度のご案内</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url($params['mytheme']['website_companies_online_training']); ?>">法人社様<br>会計事務所様<br>オンライン研修</a>
                            </li>

                        </ul>
                    </div>
                    <?php if (!is_user_logged_in()) : ?>

                        <div class="information">
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url($params['mytheme']['registration_page']); ?>">会員ご登録<br>無料会員<br>プレミアム会員</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="modal-login">会員様ログイン</a>
                                </li>
                            </ul>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php
        wp_reset_postdata();
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}
