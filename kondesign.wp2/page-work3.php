<?php

/*
Template Name third
*/

?>

<?php get_header(3); ?>
    <main class="shousai_wrap">
        <div class="topview">
            <div class="back_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_LP_1.png" alt="peoplegood">
            </div>
            <div class="outline">
                <h2 class="border workname">peoplegood</h2>
                <p class="outline_txt">
                    スクールの課題でLPデザインをトレースしました。</p>
                <h3 class="longborder outlineitem">使用スキル</h3>
                <div class="item_wrap">
                    <div class="skill_item_1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrator_logo.svg" alt="illustrator">
                        <p>adobe illustrator</p>
                    </div>
                </div>
                <h3 class="longborder outlineitem">制作日数</h3>
                <p class="period">トータル5時間〜7時間</p>
            </div>
        </div>
        <div class="lp_all_2">
            <div class="pc_lp">
                <img src="images/works_website3.jpg" alt="peoplegood pc版LP全体">
            </div>
            <div class="sp_lp">
                <img src="images/works_website3_2.jpg" alt="peoplegood sp版LP全体">
            </div>

        </div>
        <div class="return">
            <a href="works.html" class="returnbtn">戻る</a>
        </div>
    </main>
   <?php get_footer(); ?>