<?php

namespace CrandellDesign\Http\Controllers;

use CrandellDesign\Http\Controllers\Controller;
use \StdClass;

class HomeController extends Controller
{
    public function getIndex()
    {
        $view = view('home.index');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        $portfolio = $this->portfolio();

        //print_r($portfolio->where('name','Christ Lutheran Church of Waterford'));

        $view->portfolio = $portfolio->take(8);

        return $view;
    }

    public function getPortfolio($client = null)
    {
        if ($client)
        {
            $client = $this->portfolio()->where('slug',$client)->first();
            if(!empty($client)) {
                $view = view('home.portfolio-item');
                $view->title = $client->name." | Crandell Design by Matt Crandell";
                $view->description = $client->name;
                $view->client = $client;
                return $view;
            } else {
                return redirect('/portfolio', 301);
            }
        }

        $view = view('home.portfolio');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        return $view;
    }

    private function portfolio()
    {
        $clients = [];
            $client = new StdClass;
            $client->name = 'Christ Lutheran Church of Waterford';
            $client->slug = str_slug($client->name);
            $client->city = 'Waterford';
            $client->state = 'MI';
            $client->assets = [
                '/img/samples/christwaterford1.jpg',
                '/img/samples/christwaterford-responsive2.jpg'
            ];
            $client->display_img = $client->assets[0];
            $client->hover_img = $client->assets[1];
            $client->is_custom = 1;
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
            $client->display_img = $client->assets[2];
            $client->hover_img = $client->assets[1];
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
            $client->display_img = $client->assets[0];
            $client->hover_img = $client->assets[1];
        $clients[] = $client;
        $portfolio = collect($clients);

        return $portfolio;
    }
}
