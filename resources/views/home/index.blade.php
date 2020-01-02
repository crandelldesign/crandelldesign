@extends('layouts.default')

@section('head')
<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
</script>
@endsection

@section('content')
<section id="home" class="page">
    <div class="content">
        <h1 class="slogan heading">Anybody can make a website, but only a few can make it look good!</h1>
        <div class="button-holder">
            <a href="#portfolio" class="btn btn-outline-white page-scroll">
                See For Yourself
                <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M30 12 L16 24 2 12"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="portfolio" class="page">
    <div class="content">

        <h2>Portfolio</h2>
        <p class="section-description">Crandell Design and Matt Crandell work with businesses of all sizes. Check out some of the expert work that I have provided. Click on an item below to see more.</p>

        <div class="portfolio-grid">
        @foreach($portfolio as $key=>$client)
            @include('layouts.thumbnail')
        @endforeach
        </div>

        <div class="text-center">
            <a href="{{url('/portfolio')}}" class="btn btn-apple">
                See My Full Portfolio
                <svg id="i-chevron-right" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M12 30 L24 16 12 2" />
                </svg>
            </a>
        </div>

    </div>
</section>

@include('layouts.services-section')

<section id="about" class="page">
    <div class="content">
        <h2>About</h2>
        <div class="about-grid">
            <div>
                <img srcset="{{url('/')}}/img/matt-crandell-2018@2x.jpg 2x" src="{{url('/')}}/img/matt-crandell-2018.jpg" class="img-fluid me-pic" alt="Picture of Matt Crandell">
            </div>
            <div class="about-content">
                <h3>Hi, I'm Matt Crandell</h3>
                <p>I launched my first website in 2001 and have had a great passion for web design ever since. Currently, I am also a full-time employee for a marketing company where I handle various projects to satisfy their web development and design needs. I hold degrees in Graphic Design and Computer Information Systems from Ferris State University.</p>
                <h3>A little about Crandell Design</h3>
                <p>In 2009, I established Crandell Design to give people a personal touch for their web and graphic design needs. I believe that all businesses deserve a website that is unique to their brand, as well as access to all online business needs.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="page">
    <div class="content">
        <h2>Contact</h2>
        <p class="section-description">Interested in getting your next project off to a great start? Contact me using the form below.</p>
        <div class="contact-grid">
            <contact-form inline-template>
                <form id="contact-form" name="contact_form" class="form" action="{{url('/contact')}}" method="post" v-on:submit.prevent="submitForm($event)">
                    
                    <div class="alert alert-error" v-cloak v-if="error_message">@{{ error_message }}</div>
                    <div class="alert alert-success" v-cloak v-if="success_message">@{{ success_message }}</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-error">
                            @foreach ($errors->get('recaptcha_token') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" class="form-control {{($errors->has('name'))?'is-invalid':''}}" id="contact-name" name="name" placeholder="Name" v-validate="'required'" :class="{'is-invalid': errors.has('name') }" value="{{old('name')}}" v-model="contact.name">
                        <div v-cloak class="invalid-feedback">@{{ errors.first('name') }}</div>
                        @foreach ($errors->get('name') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="contact-email" class="sr-only">Email</label>
                        <input type="email" class="form-control {{($errors->has('email'))?'is-invalid':''}}"  id="contact-email" name="email" placeholder="Email" v-validate="'required|email'" :class="{'is-invalid': errors.has('email') }" value="{{old('email')}}" v-model="contact.email">
                        <div v-cloak class="invalid-feedback">@{{ errors.first('email') }}</div>
                        @foreach ($errors->get('email') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="contact-message" class="sr-only">Message</label>
                        <textarea class="form-control {{($errors->has('message_text'))?'is-invalid':''}}" rows="5" id="contact-message" name="message_text" placeholder="Message" v-validate="'required'" :class="{'is-invalid': errors.has('message_text') }" v-model="contact.message_text">{{old('message_text')}}</textarea>
                        <div v-cloak class="invalid-feedback">@{{ errors.first('message_text') }}</div>
                        @foreach ($errors->get('message_text') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>
                        @endforeach
                    </div>
                    {{ csrf_field() }}
                

                    {{-- CAPTCHA --}}
                    <vue-recaptcha
                        ref="recaptcha"
                        @verify="onCaptchaVerified"
                        @expired="resetCaptcha"
                        size="invisible"
                        sitekey="{{ env('INVISIBLE_RECAPTCHA_SITEKEY') }}">
                    </vue-recaptcha>

                    <div class="form-group">
                    <small class="form-text">
                        This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                    </small>
                    
                    </div>

                    {{-- Submit --}}
                    <!--<button type="submit" class="button" :disabled="isSubmitting">Sign Up</button>-->
                    <div class="form-group form-group-submit">
                        <button type="submit" class="btn btn-submit btn-apple" :disabled="isLoading" v-cloak>
                            <transition name="slide-fade" mode="out-in">
                                <span :key="submitText">@{{submitText}}</span>
                            </transition>
                        </button>
                        <noscript>
                        <button type="submit" class="btn btn-submit btn-apple">Send</button>
                        </noscript>
                    </div>
                </form>
            </contact-form>
            <!--<form id="contact-form" name="contact_form" class="form" action="{{url('/')}}/contact" method="post" v-on:submit.prevent="submitForm">
                <div class="alert alert-error" v-cloak v-if="error_message">@{{ error_message }}</div>
                <div class="alert alert-success" v-cloak v-if="success_message">@{{ success_message }}</div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="contact-name">Name</label>
                    <input type="text" class="form-control {{($errors->has('name'))?'is-invalid':''}}" id="contact-name" name="name" placeholder="Name" v-validate="'required'" :class="{'is-invalid': errors.has('name') }" value="{{old('name')}}" v-model="contact.name">
                    <div v-cloak class="invalid-feedback">@{{ errors.first('name') }}</div>
                    @foreach ($errors->get('name') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="contact-email" class="sr-only">Email</label>
                    <input type="email" class="form-control {{($errors->has('email'))?'is-invalid':''}}"  id="contact-email" name="email" placeholder="Email" v-validate="'required|email'" :class="{'is-invalid': errors.has('email') }" value="{{old('email')}}" v-model="contact.email">
                    <div v-cloak class="invalid-feedback">@{{ errors.first('email') }}</div>
                    @foreach ($errors->get('email') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="contact-message" class="sr-only">Message</label>
                    <textarea class="form-control {{($errors->has('message_text'))?'is-invalid':''}}" rows="5" id="contact-message" name="message_text" placeholder="Message" v-validate="'required'" :class="{'is-invalid': errors.has('message_text') }" v-model="contact.message_text">{{old('message_text')}}</textarea>
                    <div v-cloak class="invalid-feedback">@{{ errors.first('message_text') }}</div>
                    @foreach ($errors->get('message_text') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                </div>
                {{ csrf_field() }}
                {!! Honeypot::generate('my_name', 'my_time') !!}
                <div class="form-group form-group-submit">
                    <button type="submit" class="btn btn-submit btn-apple" :disabled="loading" v-cloak>
                        <transition name="slide-fade" mode="out-in">
                            <span :key="submitText">@{{submitText}}</span>
                        </transition>
                    </button>
                    <noscript>
                    <button type="submit" class="btn btn-submit btn-apple">Send</button>
                    </noscript>
                </div>
            </form>-->
            <div class="contact-info">
                <p>Phone <a href="tel:+12483835376">248-383-5376</a></p>
                <p>Email <a href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a></p>
                <h3>Matt Crandell's R&eacute;sum&eacute;</h3>
                <p>
                    <a href="{{url('/')}}/resume.pdf" target="_blank" class="btn btn-apple" title="Download Matt Crandell's R&eacute;sum&eacute; as PDF">Download My R&eacute;sum&eacute;</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ mix('js/contact.js') }}"></script>
@endsection