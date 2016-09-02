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
            </div>
            <div class="modal-body">

                <div class="text-center margin-bottom-20"><img srcset="{{url('/')}}/img/samples/facialsbyjude-banner@2x.jpg 2x" src="{{url('/')}}/img/samples/facialsbyjude-banner.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img" /></div>

                <div class="row">
                    <div class="col-lg-8">
                        <p class="lead">Crandell Design redsigned the website for Facials by Jude, located in Oxford, MI. It now worked on multiple devces and features Jude's personal style.</p>
                    </div>
                </div>

                <div class="row margin-bottom-20">
                    <div class="col-sm-7 col-lg-8">
                        <p class="testimonial"><strong>&ldquo;</strong> Matt originally developed my website and I was very happy with everything he did. Working with Matt this time around, on updating my website to be mobile friendly, was another great experience. He was very professional and efficient. He always took time to address my concerns and was very patient when It took me a little time for decision making. I would highly recommend him. <strong>&rdquo;</strong></p>
                        <p class="testimonial-author text-right">&mdash; J. Cunningham, Owner</p>

                        <p>See the full site at <a href="http://www.facialsbyjude.com" rel="external" target="_blank">http://www.facialsbyjude.com</a>.</p>
                        <!--<p>For the Clarkston Area Chamber of Commerce, I created not only a new logo, but also a full brand package for them. I featured the clock from the old logo: a landmark located downtown, updated the design with cleaner lines and an overall more modern look. I chose a new typeface to be used across the board. I used blue because it conveys reliability, while the orange is inviting and energetic. After discovering a multicolored wall in the chamber office, I used the tones from the wall to create all colors used in the logos.</p>
                        <p>All the logos keep a similar motif with varying levels in the words with the image of the logo on the left. This consistent look makes the logos instantly recognizable as a chamber event or activity.</p>
                        <p class="hidden-xs">Check out the additional logos below.</p>-->
                    </div>
                    <div class="col-sm-5 col-lg-4">
                        <p class="text-center"><img srcset="{{url('/')}}/img/samples/facialsbyjude-mockup@2x.jpg 2x" src="{{url('/')}}/img/samples/facialsbyjude-mockup.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img" /></p>
                    </div>
                </div>

                <div class="row margin-bottom-20">
                    <div class="col-sm-6">
                        <p class="text-center"><img src="{{url('/')}}/img/samples/facialsbyjude1.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img portfolio-browser" /></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-center"><img src="{{url('/')}}/img/samples/facialsbyjude2.jpg" alt="Website for Facials By Jude" class="img-responsive center-block portfolio-img portfolio-browser" /></p>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    <!--</div>--><!-- /.modal-dialog -->
</div><!-- /.modal -->