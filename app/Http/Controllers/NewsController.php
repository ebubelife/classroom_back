<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   
public function get_news(){

    $news = News::all();
    return response()->json(["data"=>$news, "success"=>true, "status"=>"success"],200);
}
}
