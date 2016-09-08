<?php

namespace CrandellDesign\Http\Controllers;

use CrandellDesign\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        $view = view('home.index');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        return $view;
    }

    public function getPortfolio()
    {
        $view = view('home.portfolio');
        $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
        $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

        return $view;
    }
}