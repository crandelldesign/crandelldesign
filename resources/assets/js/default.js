$(document).ready(function() {
    $("#main-menu").autoHidingNavbar();
    $('.animsition').animsition({
        inDuration: 300,
        outDuration: 300,
        linkElement: '.animsition-link',
    });
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        //var $anchor = $(this);
        var link = $(this).attr('href');
        var hash = link.substring(link.indexOf("#")+1);
        $('html, body').stop().animate({
            //scrollTop: $($anchor.attr('href')).offset().top
            scrollTop: $('#'+hash).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});