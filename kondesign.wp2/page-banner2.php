<?php

/*
Template Name third
*/

?>

<?php get_header(3); ?>
    <main>
        <div class="wrapper">
            <div class="outline">
                        <h2 class="border workname">バナートレース</h2>
                        <p class="outline_txt">
                            スクールでのバナートレース課題です。</p>
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
                        <p class="period">1週間</p>
                    </div>
                    <div class="banner_all">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_banner3.jpg" alt="バナー">
                    </div>
                    <div class="return">
                        <a href="/works/" class="returnbtn">戻る</a>
                    </div>
        </div>
       
    </main>
   <?php get_footer(); ?>