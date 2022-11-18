$(function () {
    $(".post_sp_btn, .post_sp_nav li").on("click", function () {
        $(".post_sp_nav").fadeToggle();
        $(".post_sp_btn").toggleClass("open");
    });
});
