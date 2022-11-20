<?php

/*
Template Name second
*/

?>

<?php get_header(2); ?>
    <main>
        <div class="blog-top-wrap">
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
        </div>
        
        <div class="blog_wrap">
            <?php
                $args = array(
                'posts_per_page' => 10 );
            ?>
                <?php $posts = get_posts($args); ?>
                <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                       <a href="<?php the_permalink(); ?>" class="blogcard">
                            <div class="blog_box">
                                <div class="box_inner pc_box_inner">
                                    <time datetime="2022-00-00">2022年00月00日</time>
                                    <h4 class="title"><?php the_title(); ?></h4>
                                    <?php the_post_thumbnail('large'); ?>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="box_inner_sp">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <time datetime="2022-00-00">2022年00月00日</time>
                                    <h4 class="title"><?php the_title(); ?></h4>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </a> 
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
            
        </div>
    </main>
<?php get_footer(); ?>