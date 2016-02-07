/* Predefined variables */
/* global domainURL */

/* Contact Form */
$('.contact-container .form').submit(function(event)
{
    event.preventDefault();
    $('.form .alert').addClass('hidden').empty();
    $('.form .form-group').removeClass('has-error');
    $('.contact-container .form .btn-submit').button('loading');
    $.ajax({
        type: 'POST',
        url: domainURL+'/submit-contact',
        data: $('.contact-container .form').serialize(),
        dataType: 'json',
        async: true,
        error: function(result)
        {
            var errors = result.responseJSON.errors;
            for (var error_key in errors)
            {
                $('#'+error_key).parent().addClass('has-error');
                $('#'+error_key).parent().find('.alert').removeClass('hidden');
                for (var i = 0; i < errors[error_key].length; i++)
                {
                    $('#'+error_key).parent().find('.alert').append(errors[error_key][i]+'<br>');
                }
            }
            $('.contact-container .form .btn-submit').button('reset');
        },
        success: function(result)
        {
            $('.contact-container .form .has-error').removeClass('has-error');
            $('.contact-container .form .btn-submit').button('reset');
            $('#contactModal .thanks-name').html(result.name);
            $('#contactModal').modal('show');
        }
    });
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