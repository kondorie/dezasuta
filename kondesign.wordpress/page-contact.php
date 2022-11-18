<?php
$page_obj = get_page_by_path( 'contact' ); /* スラッグから投稿オブジェクトを取得 */
$page_id = $page_obj->ID; /* 取得したオブジェクトからIDを取り出す */
echo $page_id;
 ?>

<?php get_header(); ?>
     <main>
        <div class="c_header_img">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact_top_sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact_pc_top.jpg" alt="郵便ポスト">
            </picture>
        </div>
        <div class="contact_head_text">
            <h2 class="c_heading"><span>お問</span>合せ</h2>
            <h3 class="c_heading_sub">Contact</h3>
        </div>
        <p class="c_top_txt">どんなことでもお気軽にご連絡ください。<br>
            お待ちしております。</p>
        <form action="#" method="post">
            <div class="item">
                <label for="name">お名前<span>※必須</span></label>
                <input id="name" type="text" name="name" size="40" class="item_box" required>
            </div>
            <div class="item">
                <label for="tel">電話番号<span>※必須</span></label>
                <input id="tel" type="tel" name="tel" pattern="[\d\-]*" size="40" class="item_box" required>
            </div>
            <div class="item">
                <label for="email">メールアドレス<span>※必須</span></label>
                <input id="email" type="email" name="email" size="40" class="item_box" required>
            </div>
            <div class="item">
                <label for="textbox">お問い合せ内容<span>※必須</span></label>
                <textarea name="shousai" id="shousai" cols="60" rows="20" class="item_box" required></textarea>
            </div>
            <div class="formbtn">
                <input id="btn" type="submit" value="送信" class="c_btn">
            </div>
        </form>
    </main>
   <?php get_footer(); ?>