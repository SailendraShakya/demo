jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 100) {
        jQuery(".header").addClass("fix-header");
    } else {
        jQuery(".header").removeClass("fix-header");

    }
});


jQuery(document).ready(function() {
    jQuery("a.mobile-menu").click(function() {
        jQuery("#block-d8test-main-menu").slideToggle();
    });
});

jQuery(document).ready(function() {
    jQuery('.menu-icon').click(function() {
        jQuery(this).toggleClass('open');
        jQuery("#block-d8test-main-menu").slideToggle();
    });
});