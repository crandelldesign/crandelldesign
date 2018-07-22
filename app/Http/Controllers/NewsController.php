<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($page = 1)
    {
        $articles = $this->getArticleList($page);

        $view = view('news.article-list');
        $view->title = '';
        $view->description = '';
        $view->articles = $articles;

        $view->active_page = 'news';

        return $view;
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

    public function newsArticle($slug)
    {
        $article;
        try {
            $article = getJson(config('app.news_api_url').'/wp-json/wp/v2/posts?_embed&slug='.$slug);
            $article = json_decode($article, true)[0]; // Shift array to object
        } catch(Exception $e){
            //do something with the exception you caught
        }

        $view = view('news.article');
        $view->title = '';
        $view->description = '';
        $view->content = $article['content']['rendered'];

        $view->active_page = 'home';

        return $view;
    }

    protected function getArticleList($page = 1)
    {
        $articles;
        try {
            $articlesJson = getJson(config('app.news_api_url').'/wp-json/wp/v2/posts?_embed&page='.$page);
            $articles = json_decode($articlesJson, true); // Shift array to object
            foreach($articles as $key => $article) {
                $date = strtotime($article['date']);
                //echo '\/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
                $articles[$key]['url'] = '/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
            }
        } catch(Exception $e){
            //do something with the exception you caught
        }
    }
    
}