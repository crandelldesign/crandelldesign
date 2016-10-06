$(document).ready(function() {
    /* Main Menu Logic */
    $("#main-menu").autoHidingNavbar();
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });
    $('#main-menu a').on('click', function(event) {
        if($('.navbar-toggle').hasClass('active')) {
            $('.navbar-toggle').removeClass('active');
        }
    });
    $('.animsition').animsition({
        inDuration: 300,
        outDuration: 300,
        linkElement: '.animsition-link',
    });

    /* jQuery for page scrolling feature - requires jQuery Easing plugin */
    $('a.page-scroll').bind('click', function(event) {
        var link = $(this).attr('href');
        var hash = link.substring(link.indexOf("#")+1);
        $('html, body').stop().animate({
            scrollTop: $('#'+hash).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    /* Cancel Animsition if it's taking too long */
    setTimeout(function() {
        $('.animsition').css({
            'animation-duration': '300ms',
            'opacity': '1'
        });
        $('.animsition-loading').remove()
    }, 2000);
});