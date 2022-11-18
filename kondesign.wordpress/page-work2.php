<?php get_header(); ?>
    <main class="shousai_wrap">
        <div class="topview">
            <div class="back_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_img.png" alt="designcafe">
            </div>
            <div class="outline">
                <h2 class="border workname">DESIGN CAFE</h2>
                <p class="outline_txt">
                    スクールの課題でコーディングを担当しました。j Queryを使用して動的なWEBサイトになっています。</p>
                <h3 class="longborder outlineitem">使用スキル</h3>
                <div class="item_wrap_3">
                    <div class="item_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/htmllogo.svg" alt="html">
                        <p>HTML5</p>
                    </div>
                    <div class="item_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/csslogo.svg" alt="css">
                        <p>CSS3</p>
                    </div>
                    <div class="item_inner_jq">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jquerylogo.svg" alt="jquery">
                        <p>jQuery</p>
                    </div>
                </div>
                <div class="plugin_flex">
                    <dl class="plugin">
                        <dt>スライダー</dt>
                        <dd>slick</dd>
                        <p class="pconly">/</p>
                        <dt>モーダルウィンドウ</dt>
                        <dd>lightbox</dd>
                    </dl>
                </div>
                <h3 class="longborder outlineitem">制作日数</h3>
                <p class="period">3週間</p>
            </div>
        </div>
        <div class="lp_all_2">
            <div class="pc_lp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designcafe_pc.png" alt="designcafe pc版LP全体">
            </div>
            <div class="sp_lp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designcafe_sp.png" alt="designcafe sp版LP全体">
            </div>
        </div>
        <div class="return">
            <a href="works.html" class="returnbtn">戻る</a>
        </div>
    </main>
   <?php get_footer(); ?>