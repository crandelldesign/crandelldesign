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
        $view->articles = $articles['results'];
        $view->totalPages = $articles['totalPages'];
        $view->currentPage = $page;
        $view->activeNav = 'news';

        return $view;
    }

    public function category($name = null, $subcategoryOrPage = null, $pageOrPageNum = null, $subcategoryPageNum = null)
    {
        if ($name) {
            return $this->categoryName($name, $subcategoryOrPage, $pageOrPageNum, $subcategoryPageNum);
        }
        // Else Category Landing Page
        echo 'Category Landing';
    }

    public function categoryName($mainCategory, $subcategoryOrPage = null, $pageOrPageNum = null, $subcategoryPageNum = null)
    {
        $page = 1;
        if ($subcategoryOrPage == 'page') {
            $page = $pageOrPageNum;
        } elseif ($subcategoryOrPage) {
            $mainCategory = $subcategoryOrPage;
            if ($pageOrPageNum == 'page') {
                $page = $subcategoryPageNum;
            }
        }

        $categoryId = $this->getCategoryId($mainCategory);

        $articles = $this->getArticleList($page, $categoryId['id']);

        $view = view('news.article-list');
        $view->title = '';
        $view->description = '';
        $view->articles = $articles['results'];
        $view->totalPages = $articles['totalPages'];
        $view->currentPage = $page;
        $view->activeNav = 'news';

        return $view;
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
            $article = $article['results'][0]; // Shift array to object
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

    protected function getArticleList($page = 1, $categoryId = null)
    {
        $articles;
        try {
            $articles = getJson(config('app.news_api_url').'/wp-json/wp/v2/posts?_embed&page='.$page.(($categoryId)?'&categories='.$categoryId:''));
            if (is_array($articles)) { // If this is not an array, that means there way an error
                foreach($articles['results'] as $key => $article) {
                    $date = strtotime($article['date']);
                    //echo '\/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
                    $articles['results'][$key]['url'] = '/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
                }
            } else {
                // Some kind of error
            }
        } catch(Exception $e){
            //do something with the exception you caught
        }
        return $articles;
    }

    protected function getCategoryId($slug) {
        $categoryId;
        try {
            $categoryJson = getJson(config('app.news_api_url').'/wp-json/wp/v2/categories?slug='.$slug);
            $categoryId = $categoryJson['results'][0];
        } catch(Exception $e){
            //do something with the exception you caught
        }
        return $categoryId;
    }
    
}