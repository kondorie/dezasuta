<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/shousai.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <header id="top">
        <div class="header_wrap">
            <h1>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logosample.svg" alt="KONdesign"></a>
            </h1>
            <nav class="post_pc_nav">
                <ul id="page_link">
                     <li <?php if(is_page('contact')){ echo ' class="current"';} ?>><a href="/contact/">お問い合せ</a></li>
                    <li <?php if( !is_front_page() && get_post_type() === 'post' ) echo ' class="current"'; ?>><a href="/category/blog-all/">日記</a></li>
                    <li <?php if( is_page(array('workswebsite1','website2','website3','banner1','banner2','banner3','banner4','banner5')) ) echo ' class="current"'; ?>><a href="/works/">制作実績</a></li>
                    <li <?php if(is_home()){ echo ' class="current"'; } ?>><a href="<?php echo home_url(); ?>">自己紹介</a></li>
                </ul>
            </nav>
            <div class="post_sp_btn"><span></span></div>
            <nav class="post_sp_nav">
                <ul>
                    <li><a href="/contact/">お問い合せ</a></li>
                    <li><a href="/category/blog-all/">日記</a></li>
                    <li><a href="/works/">制作実績</a></li>
                    <li><a href="<?php echo home_url(); ?>">トップページ</a></li>
                </ul>
            </nav>
        </div>
    </header>