<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
      'gallery',
      'caption',
    ));
  }
  add_action('after_setup_theme', 'my_setup');
?>
   <?php
   function my_excerpt_length($length) {
    return 40;
   }
   add_filter('excerpt_length','my_excerpt_length');

