<?php 

namespace crandelldesign\Http\Controllers;

use crandelldesign\Http\Controllers\Controller;
use crandelldesign\Client;
use crandelldesign\Asset;
use crandelldesign\Testimonial;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    */

    public function getIndex()
    {
    	$vw = view('home.index');
        $vw->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $vw->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        $vw->clients = $this->clients();
        $vw->special_wallpaper = $this->specialWallpaper();

        return $vw;
    }

    public function getPortfolio($client = null)
    {
        if ($client)
        {
            $client = Client::where('slug','=',$client)->first();
            if(!empty($client))
            {
                $services = explode(', ', $client->services_provided);
                $client->services = $services;

                $assets = Asset::where('client_id',$client->id)->orderBy('display_order')->remember(30*24*60)->get();
                $client->assets = $assets;
                foreach ($assets as $asset)
                {
                    if($asset->is_featured)
                        $client->featured_img = $asset->path;
                    
                    if($asset->display_order == 1)
                    {
                        $client->secondary_img = $asset->path;
                    }
                    if($asset->is_hover)
                    {
                        $client->secondary_img = $asset->path;
                    }
                }

                $testimonials = Testimonial::where('client_id',$client->id)->remember(30*24*60)->get();
                $client->testimonials = $testimonials;

                $vw = view('home.portfolio-item');
                $vw->title = $client->name." | Crandell Design by Matt Crandell";
                $vw->description = $client->name;
                $vw->client = $client;
                $vw->fullPage = true;
                return $vw;
            } else {
                return Redirect::to('/portfolio', 301);
            }
        }
        $vw = view('home.portfolio');
        $vw->title = "My Portfolio | Crandell Design by Matt Crandell";
        $vw->description = "See Matt Crandell's past projects including web design and logo design.";

        $vw->clients = $this->clients('all');
        $vw->special_wallpaper = $this->specialWallpaper();

        return $vw;
    }

    public function postSubmitContact()
    {
        $validator = \Validator::make(
            \Input::all(),
            array(
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            )
        );
        if ($validator->fails())
        {
            return \Response::json(array(
                'success' => false,
                'errors' => $validator->messages()->toArray()
            ), 400); // 400 being the HTTP code for an invalid request.
        }
        if((\Input::get('url') != '') || ($validator->fails()))
        {
            echo 'Sorry, we don\'t like spammers here!';
        } else {
            $data = array(
                'email' => \Input::get('email'),
                'name' => \Input::get('name'),
                'text' => \Input::get('message')
            );
            \Mail::send('emails.contact', $data, function($message)
            {
                $message->from(\Input::get('email'), \Input::get('name'));
                $message->to('matt@crandelldesign.com', 'Matt Crandell');
                $message->replyTo(\Input::get('email'), \Input::get('name'));
                $message->subject('You\'ve Been Contacted from Crandell Design by '.\Input::get('name').'!');
            });
        }
        return $data;
    }

    public function getSubmitContact()
    {
        return \Redirect::to('/#contact', 301);
    }
}