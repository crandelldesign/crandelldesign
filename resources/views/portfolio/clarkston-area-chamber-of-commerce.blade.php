<div class="modal fade {{isset($fullPage)?'in':''}}" id="{{$client->slug}}Modal" tabindex="-1" role="dialog" aria-hidden="true" style="{{isset($fullPage)?'display:block':''}}">
 	<!--<div class="modal-dialog modal-lg">-->
    	<div class="modal-content">
      		<div class="modal-header">
                @if(isset($fullPage))
                <a href="{{url('/')}}/portfolio" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a>
                @else
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                @endif
        		@if(isset($fullPage))
                    <h1 class="modal-title">
                @else
                    <h3 class="modal-title">
                @endif
                    {{$client->name}}
                @if(isset($fullPage))
                    </h1>
                @else
                    </h3>
                @endif
                Clarkston, MI
      		</div>
      		<div class="modal-body">

                <div class="text-center margin-bottom-20"><img srcset="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-banner1@2x.jpg 2x" src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-banner1.jpg" alt="Logo for Clarkston Area Chamber of Commerce" class="img-responsive center-block portfolio-img" /></div>

                <div class="row">
                    <div class="col-lg-8">
                        <p class="lead">In 2015, Crandell Design redesigned the logo for Clarkston Area Chamber of Commerce and additionally created supplementary logos for the various programs and events that the chamber offers.</p>
                    </div>
                </div>

                <div class="row margin-bottom-20">
                    <div class="col-sm-7 col-lg-8">
                        <p class="testimonial"><strong>&ldquo;</strong> The Chamber worked with Crandell Design to do a complete logo redesign. We were looking for a more up-to-date look and were able to achieve just that by working with Matt. Matt also worked to update and create an umbrella look for several of the Chamber event logos. He was so easy to work with and was extremely responsive and receptive during the entire development process. Due to Matt’s attentiveness and persistence we were able to complete the entire project in just a few short months. He also went above and beyond to make sure that we had all of the standard logo sizing for social media. The service provided by Crandell Design was exceptional, and it was a pleasure working with Matt throughout the process. <strong>&rdquo;</strong></p>
                        <p class="testimonial-author text-right">&mdash; Janelle Best, Director</p>
                        <!--<p>For the Clarkston Area Chamber of Commerce, I created not only a new logo, but also a full brand package for them. I featured the clock from the old logo: a landmark located downtown, updated the design with cleaner lines and an overall more modern look. I chose a new typeface to be used across the board. I used blue because it conveys reliability, while the orange is inviting and energetic. After discovering a multicolored wall in the chamber office, I used the tones from the wall to create all colors used in the logos.</p>
                        <p>All the logos keep a similar motif with varying levels in the words with the image of the logo on the left. This consistent look makes the logos instantly recognizable as a chamber event or activity.</p>
                        <p class="hidden-xs">Check out the additional logos below.</p>-->
                    </div>
                    <div class="col-sm-5 col-lg-4">
                        <p class="text-center"><img srcset="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-mockup1@2x.jpg 2x" src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-mockup1.jpg" alt="Logo for Clarkston Area Chamber of Commerce" class="img-responsive center-block portfolio-img" /></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 margin-bottom-20">
                        <h2>Color Scheme</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="color-swatch swatch1">
                                    Blue<br>
                                    #
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch2">
                                    Orange<br>
                                    #
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch3">
                                    Black<br>
                                    #
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 margin-bottom-20">
                        <h2>Typography</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Business Over Breakfast</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>WeBiz</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Annual Golf Classic</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Best of the Best Expo</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Concerts in the Park</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Body Mind Green Expo</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-sm-offset-2 margin-bottom-20">
                        <h2>Luncheon Mixer</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                    <div class="col-sm-4 margin-bottom-20">
                        <h2>Annual Meeting</h2>
                        <img src="http://placehold.it/2000x1281" class="img-responsive center-block portfolio-img">
                    </div>
                </div>

                <!--<div class="row margin-bottom-20">
                    <div class="col-sm-6">
                        <p class="text-center"><img src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-additional1.jpg" alt="Additional Logos for the Clarkston Area Chamber of Commerce" class="img-responsive center-block" /></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-center"><img src="{{url('/')}}/img/samples/clarkston-chamber-of-commerce-additional2.jpg" alt="Additional Logos for the Clarkston Area Chamber of Commerce" class="img-responsive center-block" /></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 col-lg-8 col-lg-offset-2">
                        <p class="testimonial"><strong>&ldquo;</strong> The Chamber worked with Crandell Design to do a complete logo redesign. We were looking for a more up-to-date look and were able to achieve just that by working with Matt. Matt also worked to update and create an umbrella look for several of the Chamber event logos. He was so easy to work with and was extremely responsive and receptive during the entire development process. Due to Matt’s attentiveness and persistence we were able to complete the entire project in just a few short months. He also went above and beyond to make sure that we had all of the standard logo sizing for social media. The service provided by Crandell Design was exceptional, and it was a pleasure working with Matt throughout the process. <strong>&rdquo;</strong></p>
                        <p class="testimonial-author text-right">&mdash; Janelle Best, Director</p>
                    </div>
                </div>-->
            </div>
        </div><!-- /.modal-content -->
    <!--</div>--><!-- /.modal-dialog -->
</div><!-- /.modal -->