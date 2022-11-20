<?php

/*
Template Name third
*/

?>

<?php get_header(3); ?>
<?php // ブログ記事を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main>
        <div class="post_wrap">
            <div class="post_flex">
               <time><?php the_time('Y年m月d日'); ?></time>
                <?php // タイトルを表示する start ?>
                <h1 class="blog-detail__title"><?php the_title(); ?></h1>
                <?php // タイトルを表示する end ?>

            </div>
            <div class="post_img">
                <?php // アイキャッチ画像を表示する start ?>
                    <?php if(has_post_thumbnail()): ?>
                    <div class="blog-detail__image">
                        <img src="<?php the_post_thumbnail_url('large'); ?>">
                    </div>
                    <?php endif; ?>
                    <?php // アイキャッチ画像を表示する end ?>
            </div>
                <?php // 本文を表示する start ?>
                    <div class="blog-detail__body">
                        <div class="blog-content post_text"><?php echo the_content(); ?></div>
                    </div>
                    <?php // 本文を表示する end ?>
        </div>
        <div class="return">
            <a href="/category/blog-all/" class="returnbtn">戻る</a>
        </div>

    </main>

    <?php endwhile; endif; ?>
<?php // ブログ記事を表示する end ?>
   <?php get_footer(); ?>