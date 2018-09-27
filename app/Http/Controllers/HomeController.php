<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $view = view('home.index');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        //$portfolio = $this->portfolio();
        //$view->portfolio = $portfolio->take(8);

        $view->active_page = 'home';

        return $view;
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
}