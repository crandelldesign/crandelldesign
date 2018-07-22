<?php

use Illuminate\Http\Request;

function getCategories()
{
    /*$categories = session('categories');
    if (!$categories) {*/
        try {
            $categoriesJson = getJson(config('app.news_api_url').'/wp-json/wp/v2/categories');
            //session(['categories'=>$categoriesJson]);
            $categories = json_decode($categoriesJson, true);
            foreach($categories as $key => $category) {
                //echo '\/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
                $categories[$key]['url'] = '/news/category/'.$category['slug'];
            }
            //session(['categories'=>json_encode($categoriesJson)]);
        } catch(Exception $e) {
            //do something with the exception you caught
        }
    //}
    return $categories;
}

function getJson($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    return $result;
}

