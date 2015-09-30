/* Predefined variables */
/* global domainURL */

/* Contact Form */
$('.contact-container .form').submit(function(event)
{
    event.preventDefault();
    $('.contact-container .form .btn-submit').button('loading');
    if ($('.contact-container .form #name').val() === '')
    {
        $('.contact-container .form #name').parent().addClass('has-error');
        $('.contact-container .form .btn-submit').button('reset');
    }
    if ($('.contact-container .form #email').val() === '')
    {
        $('.contact-container .form #email').parent().addClass('has-error');
        $('.contact-container .form .btn-submit').button('reset');
    }
    if ($('.contact-container .form #message').val() === '')
    {
        $('.contact-container .form #message').parent().addClass('has-error');
        $('.contact-container .form .btn-submit').button('reset');
    }
    if (($('.contact-container .form #name').val() !== '') && ($('.contact-container .form #email').val() !== '') && ($('.contact-container .form #message').val() !== ''))
    {
        $.ajax({
            type: 'POST',
            url: domainURL+'/submit-contact',
            data: $('.contact-container .form').serialize(),
            dataType: 'json',
            async: true,
            success: function(result)
            {
                $('.contact-container .form .has-error').removeClass('has-error');
                $('.contact-container .form .btn-submit').button('reset');
                $('#contactModal .thanks-name').html(result.name);
                $('#contactModal').modal('show');
            }
        });
    }
    //just to be sure its not submiting form
    return false;
});
$('#contactModal .contact-close').click(function()
{
    $('#contactModal .thanks-name').html('');
    $('.contact-container .form #name').val('');
    $('.contact-container .form #email').val('');
    $('.contact-container .form #message').val('');
});
$(document).ready(function() {
    $(".scroll").click(function(event)
    {   
        event.preventDefault();
        $('.modal').modal('hide');
        $('#topNav').removeClass('spy-active');
        $('html,body').animate({scrollTop:$(this.hash).offset().top-50},1200);
        $('.navbar-nav li.active').removeClass('active');
        var hashLink = this.hash;
        $('a[href$="'+hashLink+'"]').parent().addClass('active');
        $('#topNav-collapse.in').collapse('hide');
        $('#topNav').delay(1200).queue(function()
        {
            $('#topNav').addClass('spy-active').clearQueue();
        });
    });
});