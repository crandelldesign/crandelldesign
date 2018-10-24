<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use StdClass;
use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Mail\Contact;
use App\Mail\ContactThankYou;

class HomeController extends Controller
{
    public function index()
    {
        $view = view('home.index');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        $portfolio = $this->portfolioData();
        $view->portfolio = $portfolio->take(8);

        $view->active_page = 'home';

        return $view;
    }

    public function portfolio($client = null)
    {
        if ($client && !View::exists('portfolio.'.$client)) // If the portfolio item doesn't exists but is called, send to 404
            abort(404);
        if ($client) {
            $client = $this->portfolio()->where('slug',$client)->first();

        }
        $view = view('portfolio.index');
        $view->title = "Portfolio | Crandell Design";
        $view->description = "See the portfolio of Matt Crandell, web design in Metro Detroit, MI.";
        $view->portfolio = $this->portfolioData();
        $view->active_page = 'portfolio';

        return $view;
    }

    public function services($service = null)
    {
        if (!$service) {
            $view = view('services.index');
            $view->title = "Services | Crandell Design by Matt Crandell";
            $view->description = "Crandell Design provides web design and development services to small business in Metro Detroit, Michigan.";
            return $view;
        } else {
            if (View::exists('services.'.$service)) {
                $view = view('services.'.$service);
                switch ($service) {
                    case 'web-design':
                        $view->title = "Web Design and Development Services | Crandell Design by Matt Crandell";
                        $view->description = "Crandell Design provides web design and development services to small business in Metro Detroit, Michigan.";
                        break;
                    case 'web-hosting':
                        $view->title = "Web Design and Development Services | Crandell Design by Matt Crandell";
                        $view->description = "Crandell Design can host your new website for you.";
                        break;
                    case 'social-media':
                        $view->title = "Social Media Services | Crandell Design by Matt Crandell";
                        $view->description = "Crandell Design will help you and your small business become social media masters.";
                        break;
                    case 'logo-design':
                        $view->title = "Logo Design Services | Crandell Design by Matt Crandell";
                        $view->description = "Crandell Design can design or restore a logo for your company.";
                        break;
                    case 'seo':
                        $view->title = "Logo Design Services | Crandell Design by Matt Crandell";
                        $view->description = "Crandell Design can design or restore a logo for your company.";
                        break;
                }

                return $view;
            } else {
                return abort(404); // If the service page doesn't exists but is called, send to 404
            }
        }
    }

    public function submitForm(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message_text' => 'required',
                'my_name' => 'honeypot',
                'my_time' => 'required|honeytime:5'
            ],
            [
                'name.required' => 'Please enter your name.',
                'emails.required' => 'Please enter your email address.',
                'emails.email' => 'Please enter a valid email address.',
                'message_text.required' => 'Please enter a message.'
            ]
        );
        //\Log::Debug(print_r($validator->validate()));
        if ($validator->fails()) {
            if ($request->wantsJson()) { // Checks if sent over JS
                \Log::Debug($validator->messages());
                $validator->validate(); // Automatically sends back error data via javascript
            } else {
                return redirect('/#contact')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        Mail::to('matt@crandelldesign.com')->send(new Contact($request));
        Mail::to($request->get('email'))->send(new ContactThankYou($request));

        if ($request->wantsJson()) {
            return response()->json([
                'success_message' => 'Thank you for contacting us, we will get back to you as soon as possible.'
            ]);
        } else {
            return redirect('/#contact')->with('status', 'Thank you for contacting us, we will get back to you as soon as possible.');
        }
        
        
        /*$captcha = $this->verifyCaptcha($request->get('g-recaptcha-response'));
        $request->request->add(['captcha' => $captcha]);
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message_text' => 'required',
                'g-recaptcha-response' => 'required',
                'captcha' => 'required|min:1'
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'message_text.required' => 'What? You Don\'t Want to Say Something?',
                'g-recaptcha-response.required' => 'Captcha is required',
                'captcha.min' => 'Wrong captcha, please try again.'
            ]
        );
        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }
        Mail::to('matt@crandelldesign.com')->send(new Contact($request));
        Mail::to($request->get('email'))->send(new ContactThankYou($request));
        return redirect('/#contact')->with('status', 'Thank you for contacting us, we will get back to you as soon as possible.');*/
    }

    public function style()
    {
        $view = view('home.style');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        //$portfolio = $this->portfolio();
        //$view->portfolio = $portfolio->take(8);

        $view->active_page = 'style';

        return $view;
    }

    private function portfolioData()
    {
        $clients = [];
            $client = new StdClass;
            $client->name = 'Vicksburg Family Dentistry';
            $client->slug = str_slug($client->name);
            $client->city = 'Vicksburg';
            $client->state = 'MI';
            $client->assets = [
                '/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-thumbnail1.jpg',
                '/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-thumbnail2.jpg'
            ];
            $client->display_img = '/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-thumbnail1.jpg';
            $client->hover_img = '/img/portfolio/vicksburg-family-dentistry/vicksburg-family-dentistry-thumbnail2.jpg';
            $client->is_use_url = 1;
            $client->url = 'https://www.vicksburgfamilydentistry.com';
            $client->description = 'This is a website that I designed for Vicksburg Family Dentistry. The site is fully responsive so that it works on all devices, and was built on WordPress so that the client can changes and update everything without any coding knowledge. Borrowing from some of the principles of Google\'s Material Design,  I used flat design and depth together.';
            $client->meta_description = 'This is a website that I designed for Vicksburg Family Dentistry built using WordPress.';
            $client->services = ['Web Design', 'Web Maintenance'];
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Nuview Nutrition';
            $client->slug = str_slug($client->name);
            $client->city = 'Clarkston';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/nuviewnutrition-responsive-banner.jpg',
                '/img/samples/nuviewnutrition-browser-homepage.jpg'
            ];
            $client->display_img = '/img/samples/nuviewnutrition-thumbnail1.jpg';
            $client->hover_img = '/img/samples/nuviewnutrition-thumbnail2.jpg';
            $client->description = '<p>The logo and website created for Nuview Nutrition displays a clean look and bold colors.</p>';
            $client->meta_description = 'The logo and website created for Nuview Nutrition displays a clean look and bold colors.';
            $client->services = ['Logo Design'];
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Four Green Fields Farm';
            $client->slug = str_slug($client->name);
            $client->city = 'Rodney';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/fourgreenfieldsfarm1.jpg',
                '/img/samples/fourgreenfieldsfarm-mockup-ipad-iphone.jpg'
            ];
            $client->display_img = '/img/samples/fourgreenfieldsfarm-thumbnail1.jpg';
            $client->hover_img = '/img/samples/fourgreenfieldsfarm-thumbnail2.jpg';
            $client->meta_description = 'The website for Four Green Fields Farm is kept up to date with improvements and redesigns including a new admin interface to update events.';
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Habitat for Humanity of Oakland County';
            $client->slug = str_slug($client->name);
            $client->city = 'Pontiac';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/habitat-for-humanity1.jpg',
                '/img/samples/habitat-for-humanity-mockup-macbook-ipad.jpg',
            ];
            $client->display_img = '/img/samples/habitat-for-humanity-thumbnail1.jpg';
            $client->hover_img = '/img/samples/habitat-for-humanity-thumbnail2.jpg';
            $client->is_use_url = 1;
            $client->url = 'https://www.habitatoakland.org';
            $client->meta_description = 'The Habitat for Humanity of Oakland County is a custom WordPress backed website for news, events, and other valuable resources also features bright yet clean design.';
            $client->services = ['Web Design', 'Web Hosting', 'Web Maintenance.'];
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Christ Lutheran Church of Waterford';
            $client->slug = str_slug($client->name);
            $client->city = 'Waterford';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/christwaterford1.jpg',
                '/img/samples/christwaterford-responsive2.jpg'
            ];
            $client->display_img = '/img/samples/christwaterford-thumbnail1.jpg';
            $client->hover_img = '/img/samples/christwaterford-thumbnail2.jpg';
            $client->meta_description = 'Since 2009, the Christ Lutheran Church website has seen numerous improvements and redesigns including a new admin interface to keep events up to date.';
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Rifle River Campground';
            $client->slug = str_slug($client->name);
            $client->city = 'Sterling';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/rifle-river-campground-mockup1.jpg',
                '/img/samples/rifle-river-campground-mockup2.jpg',
                '/img/samples/rifle-river-campground1.jpg',
                '/img/samples/rifle-river-campground2.jpg',
                '/img/samples/rifle-river-campground3.jpg',
            ];
            $client->display_img = '/img/samples/rifle-river-campground-thumbnail1.jpg';
            $client->hover_img = '/img/samples/rifle-river-campground-thumbnail2.jpg';
            $client->is_use_url = 1;
            $client->url = 'http://www.riflerivercampground.com';
            $client->description = '<p>This website was created for Rifle River Campground. It was built utilizing WordPress allowing the customer to be able to edit the content on the site without coding knowledge.</p>
                <p>The website is simple and user friendly yet informative. It provides details on everything that the campground has to offer.</p>';
            $client->meta_description = 'This website was created for Rifle River Campground built utilizing WordPress allowing the customer to be able to edit the content on the site without coding knowledge.';
            $client->services = ['Web Design', 'Web Hosting'];
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Clarkston Area Chamber of Commerce';
            $client->slug = str_slug($client->name);
            $client->city = 'Clarkston';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/clarkston-chamber-of-commerce1.jpg',
                '/img/samples/clarkston-chamber-of-commerce-mockup1.jpg'
            ];
            $client->display_img = '/img/samples/clarkston-chamber-of-commerce-thumbnail1.jpg';
            $client->hover_img = '/img/samples/clarkston-chamber-of-commerce-thumbnail2.jpg';
            $client->meta_description = 'Crandell Design redesigned the logo for Clarkston Area Chamber of Commerce and created supplementary logos for the various programs and events that the chamber offers.';
            $client->is_custom = 1;
            $client->has_highres = 1;
            $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Gregg\'s Gourmet Cafe';
            $client->slug = str_slug($client->name);
            $client->city = 'Clarkston';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/greggsgourmetcafe-responsive.jpg',
                '/img/samples/greggsgourmetcafe1.jpg',
                '/img/samples/greggsgourmetcafe2.jpg',
                '/img/samples/greggsgourmetcafe3.jpg'
            ];
            $client->display_img = '/img/samples/greggsgourmetcafe-thumbnail1.jpg';
            $client->hover_img = '/img/samples/greggsgourmetcafe-thumbnail2.jpg';
            $client->is_use_url = 1;
            $client->url = 'http://www.greggsgourmetcafe.com';
            $client->description = '<p>This is a website that I created for Gregg\'s Gourmet Cafe of Clarkston, MI. The design of the site borrows the colors and simplicity of the existing logo.</p>';
            $client->meta_description = 'This is a website that I created for Gregg\'s Gourmet Cafe of Clarkston, MI. The design of the site borrows the colors and simplicity of the existing logo.';
            $client->services = ['Web Design', 'Web Maintenance', 'Web Hosting'];
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Facials By Jude';
            $client->slug = str_slug($client->name);
            $client->city = 'Oxford';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/facialsbyjude.jpg',
                '/img/samples/facialsbyjude-mockup.jpg'
            ];
            $client->display_img = '/img/samples/facialsbyjude-thumbnail1.jpg';
            $client->hover_img = '/img/samples/facialsbyjude-thumbnail2.jpg';
            $client->meta_description = 'With the latest redesign, the website is configured to work on multiple devices and features Jude\'s personal style.';
            $client->is_custom = 1;
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Alchin\'s Disposal';
            $client->slug = str_slug($client->name);
            $client->city = 'Fowlerville';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/alchinsdisposal-mockup1.jpg',
                '/img/samples/alchinsdisposal1.jpg',
                '/img/samples/alchinsdisposal2.jpg',
                '/img/samples/alchinsdisposal-mockup2.jpg'
            ];
            $client->display_img = '/img/samples/alchinsdisposal-thumbnail1.jpg';
            $client->hover_img = '/img/samples/alchinsdisposal-thumbnail2.jpg';
            $client->is_use_url = 1;
            $client->url = 'http://www.alchinsdisposal.com';
            $client->description = '<p>I redesigned the website for Alchin\'s Disposal to take advantage of new technologies and new design trends. The new website uses bolder colors and takes advantage of white space to fill the screen in a fresh and inviting way. The logo renovation helps build the brand of the company while also bringing something more unique to the table. The website, of course, is responsive and works on all devices.</p>
                <p>Starting with a clear and concise style guide, I was able to quickly build out the website and exceed the client\'s expectations. Keeping with the vision of the style guide, change requests by the client could quickly be applied.</p>';
            $client->meta_description = 'I redesigned the website for Alchin\'s Disposal to take advantage of new technologies and new design trends.';
            $client->services = ['Web Design', 'Web Maintenance', 'Logo Renovation'];
            $client->has_highres = 1;
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Brewing 4 Business';
            $client->slug = str_slug($client->name);
            $client->city = 'Waterford';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/brewing-4-business-mockup1.jpg',
                '/img/samples/brewing-4-business1.jpg',
                '/img/samples/brewing-4-business2.jpg',
                '/img/samples/brewing-4-business3.jpg'
            ];
            $client->display_img = $client->assets[1];
            $client->hover_img = $client->assets[0];
            $client->description = '<p>This is a logo and flyer for the Brewing 4 Business networking event between the Clarkston Area Chamber of Commerce and Waterford Chamber of Commerce. The event featured breweries, beer samples, and food.</p>
                <p>Both the logo and flyer utilize the same typefaces and color scheme. The logo was utilized for banners and some event promotions. The flyer would be used for mail flyers and online promotions.<p>';
            $client->meta_description = 'This is a logo and flyer for the Brewing 4 Business networking event between the Clarkston Area Chamber of Commerce and Waterford Chamber of Commerce.';
            $client->services = ['Logo Design', 'Flyer Design'];
        $clients[] = $client;
            $client = new StdClass;
            $client->name = 'Sage Orthodontics';
            $client->slug = str_slug($client->name);
            $client->city = 'Portage';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/sageorthodontics-mockup.jpg',
                '/img/samples/sageorthodontics1.jpg',
                '/img/samples/sageorthodontics2.jpg'
            ];
            $client->display_img = $client->assets[1];
            $client->hover_img = $client->assets[0];
            $client->is_use_url = 1;
            $client->url = 'http://sageorthodontics.com';
            $client->description = '<p>In this website for Sage Orthodontics, located in Portage, MI, I incorporated not only the colors in the logo, but also colors used in the office itself. My goal was to create a very "hygienic" look using clean lines and colors that were pleasing to the eye.</p>';
            $client->meta_description = 'In this website for Sage Orthodontics, located in Portage, MI, I incorporated not only the colors in the logo, but also colors used in the office itself.';
            $client->services = ['Web Design', 'Web Maintenance', 'Web Hosting'];
        $clients[] = $client;

        $portfolio = collect($clients);
        foreach ($portfolio as $key => $client) {
            $client->id = $key+1;
        }

        return $portfolio;
    }
}