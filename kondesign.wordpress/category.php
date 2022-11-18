<?php get_header(); ?>
    <main>
        <div class="blog_header_img">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/blog_sp_top@2x.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_pc_top.jpg" alt="カレンダー">
            </picture>
        </div>
         <div class="blog_head_text">
            <h2 class="blog_heading">日記</h2>
            <h3 class="blog_heading_sub">Blog</h3>
        </div>
        <div class="blog_wrap">
            <a href="blogpost.html" class="blogcard">
                <div class="blog_box">
                    <div class="box_inner">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <?php the_content(); ?>
                    </div>
                    <div class="box_inner_sp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
            </a>
            <a href="blogpost.html" class="blogcard">
                <div class="blog_box">
                    <div class="box_inner">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <?php the_content(); ?>
                    </div>
                    <div class="box_inner_sp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
            </a>
            <a href="blogpost.html" class="blogcard">
                <div class="blog_box">
                    <div class="box_inner">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <?php the_content(); ?>
                    </div>
                    <div class="box_inner_sp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogpage_img.jpg" alt="ダミー">
                        <time datetime="2022-00-00">2022年00月00日</time>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
            </a>
        </div>
    </main>
<?php get_footer(); ?>