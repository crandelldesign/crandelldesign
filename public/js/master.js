/* Predefined variables */
/* global requestURL */
/* global URLtitle */
/* global domainURL */

// init Masonry
var $grid = $('#portfolio-grid').masonry({
  // options...
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});

/* To Top Button */
$(document).ready(function() {
    $('.scroll-top-button').click(function()
    {
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});

//jQuery to shrink the navbar on scroll
if ($(".navbar").offset().top > 250) {
    $(".navbar-fixed-top").addClass("nav-shrink");
}
$(window).scroll(function() {
    if ($(".navbar").offset().top > 250) {
        $(".navbar-fixed-top").addClass("nav-shrink");
        $('.scroll-top-button').addClass('visible');
    } else {
        $(".navbar-fixed-top").removeClass("nav-shrink");
        $('.scroll-top-button').removeClass('invisible');
    }
});

/* Modal Functionality */
$(document).ready(function() {
    $('.modal').on('show.bs.modal', function ()
    {
        $('#topNav-collapse.in').collapse('hide');
        setTimeout( function () {
        $('.modal.in .modal-backdrop').height($('.modal.in .modal-content').height() + 51);
        }, 750 );
    });
});

// Portfolio Functions
var portfolioSlug = '';
$('.portfolio-link').click(function(event)
{
    if($('html').hasClass('history'))
    {
        event.preventDefault();
        var url = $(this).attr("href");
        portfolioSlug = $(this).data('portfolio');
        var stateObject = {};
        var title = $(this).data('portfolio')+" | Crandell Design by Matt Crandell";
        history.pushState(stateObject,title,url);
        $('#'+portfolioSlug+'Modal').modal('show');
        $('#'+portfolioSlug+'-carousel').carousel(0);
    }
});
window.onpopstate = function()
{
    if($('html').hasClass('history'))
    {
        if ((window.location.pathname === requestURL) && (portfolioSlug !== ''))
        {
            $('#'+portfolioSlug+'Modal').modal('hide');
        }
        else if ((window.location.pathname === requestURL) && (portfolioSlug === ''))
        {
            var stateObject = {};
            var title = URLtitle;
            history.pushState(stateObject,title,requestURL);
        }
        else if ((window.location.pathname !== '/') && (portfolioSlug !== ''))
        {
            $('#'+portfolioSlug+'Modal').modal('show');
        }
    }
};
$('.modal').on('hidden.bs.modal', function ()
{
    if($('html').hasClass('history'))
    {
        var stateObject = {};
        var title = URLtitle;
        history.replaceState(stateObject,title,requestURL);
    }
});