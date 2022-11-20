<?php

/*
Template Name third
*/

?>


<?php get_header(3); ?>
    <main class="shousai_wrap">
        <div class="topview">
            <div class="back_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_website_2.png" alt="lifehairdesign">
            </div>
            <div class="outline">
                <h2 class="border workname">LIFE hair design</h2>
                <p class="outline_txt">
                    スクールのデザイン課題で、架空のWEBサイトのデザインを制作しました。ロゴやテキストは事前に配布されていたので、ワイヤーフレーム〜デザインカンプまでを担当しました。</p>
                <h3 class="longborder outlineitem">使用スキル</h3>
                <div class="item_wrap">
                    <div class="item_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrator_logo.svg" alt="illustrator">
                        <p>adobe illustrator</p>
                    </div>
                    <div class="item_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photoshoplogo.svg" alt="photoshop">
                        <p>adobe photoshop</p>
                    </div>
                </div>
                <h3 class="longborder outlineitem">制作日数</h3>
                <p class="period">2~3週間</p>
            </div>
        </div>
        <div class="lp_all">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_website2.jpg" alt="lifehairdesign LP全体">
        </div>
        <div class="return">
            <a href="works.html" class="returnbtn">戻る</a>
        </div>
    </main>
    <?php get_footer(); ?>