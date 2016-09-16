$(document).ready(function() {
    $("#main-menu").autoHidingNavbar();
    $('.animsition').animsition({
        inDuration: 300,
        outDuration: 300,
    });
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});