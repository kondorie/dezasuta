<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/shousai.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/works.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_head(); ?>
</head>


<body>
    <header id="top">
        <div class="header_wrap">
            <h1>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kondesignebebeb.png" alt="KONdesign"></a>
            </h1>
            <nav class="pc_nav">
                <ul id="page_link">
                    <li><a href="/contact/">お問い合せ</a></li>
                    <li><a href="/category/blog-all/">日記</a></li>
                    <li><a href="/works/">制作実績</a></li>
                    <li><a href="<?php echo home_url(); ?>">自己紹介</a></li>
                </ul>
            </nav>
            <div class="sp_btn"><span></span></div>
            <nav class="sp_nav">
                <ul>
                    <li><a href="/contact/">お問い合せ</a></li>
                    <li><a href="/category/blog-all/">日記</a></li>
                    <li><a href="/works/">制作実績</a></li>
                    <li><a href="<?php echo home_url(); ?>">自己紹介</a></li>
                </ul>
            </nav>
        </div>

    </header>