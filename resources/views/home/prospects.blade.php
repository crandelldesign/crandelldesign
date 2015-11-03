@extends('master.templates.simple', array('var1'=>'', 'var2'=>''))
@section('body')
<div class="wallpaper-slideshow">
	<div style="{{isset($special_wallpaper1)?'background-image:url('.$special_wallpaper1.')':''}}"></div>
	<div style="{{isset($special_wallpaper2)?'background-image:url('.$special_wallpaper2.')':''}}"></div>
	<div style="{{isset($special_wallpaper3)?'background-image:url('.$special_wallpaper3.')':''}}"></div>
</div>
<div id="contact" class="contact-container">
	<div class="page">
		<h1>Sign Up!</h1>
		<div class="row">
			<div class="col-sm-8">
				<form class="form" role="form" action="{{url('/')}}/submit-contact" method="post" autocomplete="off">
				  	<div class="form-group">
				    	<label for="name" class="sr-only">Name</label>
					    <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Name">
					    <label class="control-label error-label" for="name">Please Enter Your Name</label>
				  	</div>
				  	<div class="form-group">
				    	<label for="name" class="sr-only">Business Name</label>
					    <input type="text" class="form-control input-lg" id="business_name" name="business_name" placeholder="Business Name">
					    <label class="control-label error-label" for="business_name">Please Enter Your Business Name</label>
				  	</div>
					<div class="form-group">
					    <label for="email" class="sr-only">Email</label>
					    <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email">
					    <label class="control-label error-label" for="email">Please Enter A Valid Email Address</label>
					</div>
					<div class="form-group">
					    <label for="phone" class="sr-only">Phone</label>
					    <input type="text" class="form-control input-lg" id="phone" name="phone" placeholder="Phone">
					    <label class="control-label error-label" for="phone">Please Enter A Valid Phone Number</label>
					</div>
					<div class="form-group white-bg">
						<label for="interests">What Services Are You Interested In?</label><br>
						<label class="checkbox-inline">
							<input type="checkbox" id="is_web_design" name="is_web_design" value="1"> Web Design
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="is_web_hosting" name="is_web_hosting" value="1"> Web Hosting
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="is_social_media" name="is_social_media" value="1"> Social Media Advising Services
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="is_logo_design" name="is_logo_design" value="1"> Logo Design
						</label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="is_seo" name="is_seo" value="1"> Search Engine Optimization
						</label>
					</div>
					<div class="form-group">
						<label for="message" class="sr-only">Message</label>
						<textarea class="form-control input-lg" rows="5" id="message" name="message" placeholder="Message"></textarea>
					    <label class="control-label error-label" for="message">What? You Don't Want to Say Something?</label>
					</div>
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<input class="url" type="text" id="url" name="url" value="" />
				  	<div class="form-group">
				      	<button type="submit" class="btn btn-submit btn-lg pull-right btn-blue" data-loading-text="Sending...">Send</button>
						<div class="clearfix"></div>
				  	</div>
				</form>
			</div>
			<div class="col-sm-4 hidden-xs">
				<div class="white-bg">
					<p>Phone: <a class="phone" href="tel:+12483835376">248-383-5376</a><br>
	  				Email: <a href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a></p>
	  			</div>
	  				<!--<h2>Matt Crandell's R&eacute;sum&eacute;</h2>
	  				<p><a href="{{url('/')}}/img/resume.pdf" target="_blank" class="btn btn-blue" title="Download Matt Crandell's R&eacute;sum&eacute; as PDF"><span class="glyphicon glyphicon-file"></span> Download My R&eacute;sum&eacute;</a></p>-->
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
 	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close contact-close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<div class="h3 modal-title">Thank Your For Your Interest in Crandell Design</div>
      		</div>
      		<div class="modal-body">
      			<p>Thank you, <span class="thanks-name"></span>, for your interest in Crandell Design. I will be in contact with you.</p>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop
@section('footercode')
<script>
	$('.contact-container .form').submit(function(event)
	{
	    event.preventDefault();
	    $('.form .alert').addClass('hidden').empty();
	    $('.form .form-group').removeClass('has-error');
	    $('.contact-container .form .btn-submit').button('loading');
	    $.ajax({
	        type: 'POST',
	        url: domainURL+'/submit-prospect',
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
	$('#contactModal').on('hide.bs.modal', function (e)
	{
	    $('#contactModal .thanks-name').html('');
	    $('.form').trigger('reset');
	});
</script>
@stop