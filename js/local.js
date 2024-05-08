//header
$(".menu-btn .btn-box").click(function () {
    $(".header-sec .menu-box").toggleClass("active");
    $(this).toggleClass("active");
    $("body").toggleClass("no-scroll");
});

//testimonials-slider
$(".testimonials-slider-sec .e-con-inner").slick({
    arrows: false,
    dots: true
});

//search-popup
$(".search-icon").click(function () {
    $(".search-popup").addClass("active");
    $("body").addClass("no-scroll");
});

$(".close-box").click(function () {
    $(".search-popup").removeClass("active");
    $("body").removeClass("no-scroll");
});

//single-product

/** Designer item click event handled and called for the sub items fetching. */
jQuery('.mi_tabber').on('click', function (e) {
    e.preventDefault();
    var name = jQuery(this).attr('mi-name');

    jQuery('li.mi_choose').removeClass('mi_tab_active');

    jQuery(this).parent('li.mi_choose').addClass('mi_tab_active');
    jQuery('.mi_tabber_options').addClass('mi_tabber_options_active');

});

jQuery('.mi_tabber_options_header .close-box').on('click', function (e) {
    e.preventDefault();
    var name = jQuery(this).attr('mi-name');

    jQuery('li.mi_choose').removeClass('mi_tab_active');
    jQuery('.mi_tabber_options.mi_tabber_options_active').removeClass('mi_tabber_options_active');

});





