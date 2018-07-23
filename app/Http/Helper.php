<?php

use Illuminate\Http\Request;

function getCategories()
{
    /*$categories = session('categories');
    if (!$categories) {*/
    $categories;
    try {
        $categories = getJson(config('app.news_api_url').'/wp-json/wp/v2/categories');
        //session(['categories'=>$categoriesJson]);
        foreach($categories['results'] as $key => $category) {
            //echo '\/news/'.date('Y',$date).'/'.date('m',$date).'/'.$article['slug'];
            $categories['results'][$key]['url'] = '/news/category/'.$category['slug'];
        }
        //session(['categories'=>json_encode($categoriesJson)]);
    } catch(Exception $e) {
        //do something with the exception you caught
    }
    //}
    return $categories['results'];
}

function getRecentArticles() {
    $articles;
    try {
        $articles = getJson(config('app.news_api_url').'/wp-json/wp/v2/posts?_embed');
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
    return $articles['results'];
}

function getJson($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //enable headers
    curl_setopt($ch, CURLOPT_HEADER, 1);
    $curlResult = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    list($headers, $response) = explode("\r\n\r\n", $curlResult, 2);
    // $headers now has a string of the HTTP headers
    // $response is the body of the HTTP response
    $response = json_decode($response, true);

    $result['results'] = $response;

    $headers = explode("\n", $headers);
    foreach ($headers as $header) {
        //echo $header.'<br>';
        if (strpos($header, 'X-WP-TotalPages: ') !== false) {
            //echo $header;
            $totalPages = str_replace('X-WP-TotalPages: ','',$header);
            $result['totalPages'] = $totalPages;
        }
    }
    return $result;
}

