<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        echo 'news';
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function category($name = null)
    {
        if ($name) {
            return $this->categoryName($name);
        }
        // Else Category Landing Page
        echo 'Category Landing';
    }

    public function categoryName($name)
    {
        echo 'category = '.$name;
    }

    public function news($year, $month = null, $name = null)
    {
        if ($name) {
            return $this->newsArticle($name);
        }
        if ($month) {
            return $this->newsMonth($month);
        }
        // Else Year Landing Page
    }

    public function newsMonth($month)
    {
        echo 'month = '.$month;
    }

    public function newsArticle($name)
    {
        echo 'article = '.$name;
    }
}