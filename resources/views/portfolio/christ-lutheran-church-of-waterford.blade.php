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

                <div class="text-center margin-bottom-20"><img srcset="{{url('/img/samples/christwaterford-responsive-banner@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-responsive-banner.jpg')}}" alt="Responsive Display of the Christ Lutheran Church of Waterford Website" class="img-responsive center-block portfolio-img" /></div>

                <!--<p>For the Christ Lutheran Church of Waterford website, I designed the layout to be welcoming for the congregation and those who are searching for a new church to call home. The site features a full admin interface that give office personal at the church the power to log in and keep church events up to date.</p>-->

                <h2>Mobile Friendly</h2>
                <div class="row margin-bottom-20">
                    <div class="col-sm-3 text-center margin-bottom-20">
                        <img src="http://placehold.it/595x750.jpg&text=Mobile with menu open"  alt="The Christ Lutheran Church of Waterford Website with the mobile menu open" class="img-responsive center-block portfolio-img portfolio-browser">
                    </div>
                    <div class="col-sm-3 margin-bottom-20">
                        <ul>
                            <li>Slide out menu</li>
                            <li>Touch friendly</li>
                            <li>Optimized for speed</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center margin-bottom-20">
                        <img srcset="{{url('/img/samples/christwaterford-mockup-phone@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-mockup-phone.jpg')}}" alt="The Christ Lutheran Church of Waterford Website on a Mobile Device" class="img-responsive center-block portfolio-img" />
                    </div>
                </div>

                <h2>The Homepage</h2>

                <div class="row">
                    <div class="col-sm-8 text-center margin-bottom-20">
                        <img srcset="{{url('/img/samples/christwaterford-browser-homepage@2x.jpg')}} 2x" src="{{url('/img/samples/christwaterford-browser-homepage.jpg')}}" alt="Homepage of the Christ Lutheran Church of Waterford Website" class="img-responsive center-block portfolio-img portfolio-browser" />
                    </div>
                    <div class="col-sm-4">
                        <ul>
                            <li>Upcoming events</li>
                            <li>Touch friendly image slideshow</li>
                            <li>Seach engine optimized address</li>
                        </ul>
                    </div>
                </div>

                <h2>Event Calendar</h2>

                <div class="row">
                    <div class="col-sm-4">
                        <ul>
                            <li>User Editable</li>
                            <li>Touch friendly event popups</li>
                            <li>Easy for members to find information</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 text-center margin-bottom-20">
                        <img src="http://placehold.it/1518x972.jpg&text=Screenshot of Calendar" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford event calendar">
                    </div>
                    <div class="col-sm-4 text-center margin-bottom-20">
                        <img src="http://placehold.it/1518x972.jpg&text=Screenshot of Calendar with Event Popup Open" class="img-responsive center-block  portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford event calendar with event description open">
                    </div>
                </div>

                <h2>Admin Interface</h2>
                <div class="row">
                    <div class="col-sm-4 text-center margin-bottom-20">
                        <img src="http://placehold.it/1518x972.jpg&text=Screenshot of Event List" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford admin event list">
                    </div>
                    <div class="col-sm-4 text-center margin-bottom-20">
                        <img src="http://placehold.it/1518x972.jpg&text=Screenshot of Event Edit Page" class="img-responsive center-block portfolio-img portfolio-browser" alt="Christ Lutheran Church of Waterford admin event editing interface">
                    </div>
                    <div class="col-sm-4">
                        <ul>
                            <li>Secure login</li>
                            <li>Easy to use interface</li>
                            <li>Allows office workers to keep church events up to date</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div><!-- /.modal-content -->
    <!--</div>--><!-- /.modal-dialog -->
</div><!-- /.modal -->