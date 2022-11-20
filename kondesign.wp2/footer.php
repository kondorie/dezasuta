<footer>
        <ul>
            <li><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.svg" alt="Instagram"></a></li>
            <li><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_icon.svg" alt="facebook"></a></li>
        </ul>
        <p>&copy;2020 KONdesign</p>
    </footer>
    <script>
        $(function () {
            $('#page_link a[href*="#"]').click(function () {
                var elmHash = $(this).attr('href');
                var pos = $(elmHash).offset().top;
                $('body,html').animate({ scrollTop: pos }, 500);
                return false;
            });
            $('.wrap1').fadeIn(4000);
            $('.sp_btn, .sp_nav li').on("click", function () {
                $(".sp_nav").fadeToggle();
                $(".sp_btn").toggleClass("open");
            });
            $(function () {
            $(".post_sp_btn, .post_sp_nav li").on("click", function () {
                $(".post_sp_nav").fadeToggle();
                $(".post_sp_btn").toggleClass("open");
                });
            });
            $('.sp_slider').slick({
                arrows: false,
                dots: true,
                autoPlay: true,
                autoPlaySpeed: 2000,
            });
            $('.works_slider').slick({
                arrows: true,
                autoPlay: true,
                adapttiveHeight: true,
                centerMode: true,
                centerPadding: "15%",
                dots: false,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: true,
                            centerMode: false,
                            dots: false,
                            slidesToShow: 1,
                        }
                    },
                ]
            });

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>